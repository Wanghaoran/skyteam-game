<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//PC 端首页
	public function index()
	{

        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){

            $this->load->view('index');

        }else{
            $this -> load -> view('index_mobile');
        }
	}


    //加入天团
    public function jointeam(){
        $tid = $this->input->get('tid');

        include_once('./Weibo.php');
        $o = new SaeTOAuthV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1');

        $code_url = $o->getAuthorizeURL('http://skyteam.tianxun.cn/welcome/weibocheck_join/' . $tid);

        $this->load->helper('url');
        redirect($code_url);
    }

    //加入微博回调验证
    public function weibocheck_join($tid){
        include_once('./Weibo.php');

        $o = new SaeTOAuthV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1');

        if (isset($_REQUEST['code'])) {
            $keys = array();
            $keys['code'] = $_REQUEST['code'];
            $keys['redirect_uri'] = 'http://skyteam.tianxun.cn/welcome/weibocheck';
            try {
                $token = $o->getAccessToken('code', $keys ) ;
            } catch (OAuthException $e) {
            }
        }

        if (isset($token)) {

            $this -> session -> set_userdata('token', $token);

            setcookie('weibojs_'.$o->client_id, http_build_query($token));

            $c = new SaeTClientV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1', $this->session->userdata('token')['access_token']);

            $uid_get = $c->get_uid();

            if(isset($uid_get['error']) && $uid_get['error_code'] == 21321){

                header("Content-type:text/html;charset=utf-8");
                echo '新浪微博登录功能正在等待微博方面审核，请稍后再试试';
                return;

            }else if(isset($uid_get['error']) && $uid_get['error_code'] != 21321){

                header("Content-type:text/html;charset=utf-8");
                echo $uid_get['error'];
                return;

            }else{

                $uid = $uid_get['uid'];
            }
        }else{
            header("Content-type:text/html;charset=utf-8");
            echo '授权验证失败！';
            return;
        }


        //如果这个UID已经存在，则不能加入其他天团
        $this -> load -> model('user_model');
        if($this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            header("Content-type:text/html;charset=utf-8");
            echo '<script>alert("您已加入了其他天团，不能再加入别人的团啦！");location.href="http://skyteam.tianxun.cn/rank"</script>';
        }else{

            //查询天团人数
            $num_arr = $this -> user_model -> teamnum($tid);
            if($num_arr['count'] >= 4){
                header("Content-type:text/html;charset=utf-8");
                echo '<script>alert("此天团人数已满，试着创建自己的天团吧！");location.href="http://skyteam.tianxun.cn/"</script>';
            }

            //都没有的话则加入当前天团

            $user_result = $this -> _usershow($this->session->userdata('token')['access_token'], $this->session->userdata('token')['uid']);
            $user_name = $user_result['screen_name'];
            $profile_url = $user_result['profile_url'];
            $avatar_large = $user_result['avatar_large'];

            $weiboid = $this->session->userdata('token')['uid'];

            $num = 0;


            if($this -> user_model -> insertUser($weiboid, $user_name, $profile_url, $avatar_large, 2, $num, $tid)){
                $this->load->helper('url');
                redirect(base_url("rank"));
            }else{
                header("Content-type:text/html;charset=utf-8");
                echo '<script>alert("加入天团失败，请稍后再试！");location.href="http://skyteam.tianxun.cn/"</script>';
            }

        }



    }

    //weibo 登陆
    public function weibologin(){
        include_once('./Weibo.php');
        $o = new SaeTOAuthV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1');

        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $code_url = $o->getAuthorizeURL('http://skyteam.tianxun.cn/welcome/weibocheck/pc');

        }else{
            $code_url = $o->getAuthorizeURL('http://skyteam.tianxun.cn/welcome/weibocheck/mobile');
        }

        $this->load->helper('url');
        redirect($code_url);
    }

    //weibo 登陆回调验证
    public function weibocheck($client){

        include_once('./Weibo.php');

        $o = new SaeTOAuthV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1');

        if (isset($_REQUEST['code'])) {
            $keys = array();
            $keys['code'] = $_REQUEST['code'];
            $keys['redirect_uri'] = 'http://skyteam.tianxun.cn/welcome/weibocheck';
            try {
                $token = $o->getAccessToken('code', $keys ) ;
            } catch (OAuthException $e) {
            }
        }

        if (isset($token)) {

            $this -> session -> set_userdata('token', $token);

            setcookie('weibojs_'.$o->client_id, http_build_query($token));

            $c = new SaeTClientV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1', $this->session->userdata('token')['access_token']);

            $uid_get = $c->get_uid();

            if(isset($uid_get['error']) && $uid_get['error_code'] == 21321){

                header("Content-type:text/html;charset=utf-8");
                echo '新浪微博登录功能正在等待微博方面审核，请稍后再试试';
                return;

            }else if(isset($uid_get['error']) && $uid_get['error_code'] != 21321){

                header("Content-type:text/html;charset=utf-8");
                echo $uid_get['error'];
                return;

            }else{

                $uid = $uid_get['uid'];
            }
        }else{
            header("Content-type:text/html;charset=utf-8");
            echo '授权验证失败！';
            return;
        }


        $this->load->helper('url');

        $this -> load -> model('user_model');

        if($this -> user_model -> getUser($uid)){
            //根据微博UID判断是否已经开团，如果开团了酒直接跳转到天团排行榜页面，没开则进入创建天团页面；
            if($client == 'pc'){
                redirect(base_url("rank"));
            }else{
                redirect(base_url("member_mobile"));
            }
        }else{
            //开始游戏
            redirect(base_url("game_start"));
        }
    }

    //创建天团
    public function start(){

        $this -> load -> model('user_model');
        //如果微博ID存在，并且这个ID没有纪录过，才可以开始创建,否则跳转到个人中心页
        if(!$this->session->userdata('token')['uid'] || $this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            $this->load->helper('url');
            redirect(base_url('rank'));
        }


        if(isset($_COOKIE['start_num'])){
            $start_num = $_COOKIE['start_num'];
        }else{
            $start_num = 0;
        }

        //分值写入session
        $this -> session -> set_userdata('start_arr', array('start_num' => $start_num));

        $data = array();


        //读取微博好友
        $friend_result = $this -> _bilateral($this->session->userdata('token')['access_token'], $this->session->userdata('token')['uid']);
        $data['friend_result'] = $friend_result;


        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $this->load->view('start', $data);
        }else{
            $this->load->view('start_mobile', $data);
        }
    }

    //天团排行版
    public function rank(){

        $this -> load -> model('user_model');
        //如果微博ID存在，并且这个ID有纪录，才能访问排行榜页面
        if(!$this->session->userdata('token')['uid'] || !$this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            $this->load->helper('url');
            redirect(base_url('rank_loginout'));
        }

        $data = array();

        //读取个人和所属团的信息
        $user_result = $this -> user_model -> getinfo($this->session->userdata('token')['uid']);
        $data['user_result'] = $user_result;

        $this -> load -> model('team_model');


        //读取此类别团下的第一名
        $frist_result = $this -> team_model -> getfirst($user_result['ttype']);
        //计算和第一名相差的里程
        $data['cha_km'] = $frist_result['num'] - $user_result['tnum'];


        //读取右侧排行榜
        if($this->input->get('type')){
            $data['type'] = $this->input->get('type');
        }else{
            $data['type'] = 1;
        }

        //读取团排行榜
        $result_type = $this -> team_model -> teamorder($data['type']);



        //循环结果数组，
        foreach($result_type as $key => $value){
            //读取团长信息
            $result_type[$key]['leader'] = $this -> user_model -> getUser($value['weiboid']);
            //读取团人数
            $result_type[$key]['nums'] = $this -> user_model -> teamnum($value['id'])['count'];
            //读取团员
            $result_type[$key]['number'] = $this -> user_model -> getmember($value['id']);
        }

        $data['rank'] = $result_type;

        $this->load->view('rank', $data);
    }


    //Mobile端个人中心
    public function member_mobile(){
        $this -> load -> model('user_model');

        //未登陆跳转至登陆页
        if(!$this->session->userdata('token')['uid'] || !$this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            $this->load->helper('url');
            redirect(base_url('welcome/weibologin'));
        }
        echo 'test';
    }

    //未登陆时的天团排行榜
    public function rank_loginout(){

        $this -> load -> model('user_model');

        $this -> load -> model('team_model');

        $data = array();

        //读取右侧排行榜
        if($this->input->get('type')){
            $data['type'] = $this->input->get('type');
        }else{
            $data['type'] = 1;
        }

        //读取团排行榜
        $result_type = $this -> team_model -> teamorder($data['type']);


        //循环结果数组，
        foreach($result_type as $key => $value){
            //读取团长信息
            $result_type[$key]['leader'] = $this -> user_model -> getUser($value['weiboid']);
            //读取团人数
            $result_type[$key]['nums'] = $this -> user_model -> teamnum($value['id'])['count'];
            //读取团员
            $result_type[$key]['number'] = $this -> user_model -> getmember($value['id']);
        }

        $data['rank'] = $result_type;


        $this->load->view('rank_loginout', $data);
    }

    //天巡星导游 - 美食团
    public function wizard_food(){

        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $this->load->view('wizard_food');
        }else{
            $this->load->view('wizard_food_mobile');
        }
    }

    //天巡星导游 - 购物团
    public function wizard_buy(){
        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $this->load->view('wizard_buy');
        }else{
            $this->load->view('wizard_buy_mobile');
        }
    }

    //天巡星导游 - 休闲团
    public function wizard_show(){
        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $this->load->view('wizard_show');
        }else{
            $this->load->view('wizard_show_mobile');
        }
    }

    //活动规则
    public function rules(){
        $this -> load -> library('user_agent');

        if(!$this -> agent -> is_mobile()){
            $this->load->view('rules');
        }else{
            $this->load->view('rules_mobile');
        }
    }

    //天团排行榜_mobile
    public function rank_mobile(){

    }


    //创建开始游戏
    public function game_start(){
        $data = array();
        $data['state'] = 'start';
        $this->load->view('game_start', $data);
    }

    //积攒里程开始游戏－自己玩
    public function game_goon(){
        $this -> load -> model('user_model');
        //如果微博ID存在，并且这个ID有纪录，才能访问排行榜页面
        if(!$this->session->userdata('token')['uid'] || !$this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            $this->load->helper('url');
            redirect(base_url());
        }
        $this->load->view('game_goon');
    }


    //自己玩加里程
    public function game_goon_myself(){
        $num = $this->input->post('num');
        //更新个人成绩
        $this -> load -> model('user_model');
        $this -> user_model -> updatenum($this->session->userdata('token')['uid'], $num);

        //获取个人信息和tid
        $user_info = $this -> user_model -> getinfo($this->session->userdata('token')['uid']);

        //更新总里程
        $this -> load -> model('team_model');
        $this -> team_model -> updatenum($user_info['tid'], $num);
    }

    //积攒里程开始游戏－别人玩
    public function game_other(){
        $tid = $this->input->get('tid');
        $data = array();
        $data['tid'] = $tid;


        $this -> load -> model('user_model');
        //判断是否是天团用户，天团用户不能再开团
        if(!$this->session->userdata('token')['uid'] || !$this -> user_model -> getUser($this->session->userdata('token')['uid'])){
            $data['tuan'] = 1;
        }else{
            $data['tuan'] = 2;
        }

        $this->load->view('game_other', $data);
    }

    //别人玩加里程
    public function game_goon_other(){
        $num = $this->input->post('num');
        $tid = $this->input->post('tid');

        //更新总里程
        $this -> load -> model('team_model');
        $this -> team_model -> updatenum($tid, $num);
    }


        //建团
    public function bindteam(){

        //地区名称对应数组
        $map_arr = array(
            1 => array(
                1 => '巴塞罗那',
                2 => '布鲁塞尔',
                3 => '东京',
                4 => '佛罗伦萨',
                5 => '胡志明市',
                6 => '曼谷',
                7 => '慕尼黑',
                8 => '台北',
                9 => '悉尼',
                10 => '新加坡',
            ),
            2 => array(
                1 => '阿姆斯特丹',
                2 => '巴黎',
                3 => '大阪',
                4 => '迪拜',
                5 => '法兰克福',
                6 => '伦敦',
                7 => '纽约',
                8 => '首尔',
                9 => '香港',
                10 => '伊斯坦布尔',
            ),
            3 => array(
                1 => '爱丁堡',
                2 => '布拉格',
                3 => '皇后镇',
                4 => '开罗',
                5 => '坎昆',
                6 => '科伦坡',
                7 => '马尔代夫',
                8 => '莫斯科',
                9 => '日内瓦',
                10 => '威尼斯',
            ),
        );

        //团名
        $name = $this->input->post('name');
        //目的地ID
        $place_id = $this->input->post('place_id');
        //团类型
        $type = $this->input->post('type');

        //匹配出地名
        $place = $map_arr[$type][$place_id];


        //用户ID
        $weiboid = $this->session->userdata('token')['uid'];

        //用户已有分数
        $num = $this->session->userdata('start_arr')['start_num'];


        //读取个人信息
        $user_result = $this -> _usershow($this->session->userdata('token')['access_token'], $this->session->userdata('token')['uid']);
        $user_name = $user_result['screen_name'];
        $profile_url = $user_result['profile_url'];
        $avatar_large = $user_result['avatar_large'];


        $this -> load -> model('team_model');

        $result = array();

        if($tid = $this -> team_model -> insertTeam($weiboid, $name, $place, $num, $type)){

            //纪录此用户为团长
            $this -> load -> model('user_model');
            $this -> user_model -> insertUser($weiboid, $user_name, $profile_url, $avatar_large, 1, $num, $tid);


            $result['state'] = 'success';
        }else{
            $result['state'] = 'error';
            $result['info'] = '添加数据错误，此用户已创建过天团！';
        }

        echo json_encode($result);
    }

    //退出登陆
    public function logout(){
        $this->session->sess_destroy();
        header("Content-type:text/html;charset=utf-8");
        echo '<script>alert("退出成功！");location.href="http://skyteam.tianxun.cn/"</script>';
    }

    //团名检测是否重复
    public function teamnamedetection(){
        $name = $this->input->post('name');
        $this -> load -> model('team_model');
        $result = array();
        if($this -> team_model -> getinfofromname($name)){
            $result['result'] = 'have';
        }else{
            $result['result'] = 'no';
        }

        echo json_encode($result);
    }

    //删除本团
    public function deleteteam(){
        //读取UID
        $weiboid = $this->session->userdata('token')['uid'];

        $this -> load -> model('team_model');
        if($this -> team_model -> deletefromweiboid($weiboid)){
            header("Content-type:text/html;charset=utf-8");
            echo '<script>alert("删除成功！现在跳转至活动首页");location.href="http://skyteam.tianxun.cn/"</script>';
        }else{
            header("Content-type:text/html;charset=utf-8");
            echo '<script>alert("删除失败！");location.href="http://skyteam.tianxun.cn/"</script>';
        }


    }

    //获取团队分享的图片
    public function getteampic(){
        $tid = $this -> input -> post('tid');
        $result = array();
        //如果当前的用户已经登录
        if($this->session->userdata('token')['uid']){
            //查询UID是否为本团
            $uid = $this->session->userdata('token')['uid'];

            $this -> load -> model('user_model');

            $user_result = $this -> user_model -> getUser($uid);

            var_dump($user_result);




            $result['pic'] = urlencode('http://cnhtk.qiniudn.com/base_posters.jpg');

        }else{
            //没登录的直接是大众版海报
            $result['pic'] = urlencode('http://cnhtk.qiniudn.com/base_posters.jpg');
        }

        echo json_encode($result);
    }

    //微博API － 互粉列表
    public function _bilateral($asstoken, $uid){
        $url = 'https://api.weibo.com/2/friendships/friends/bilateral.json?access_token=' . $asstoken . '&uid=' . $uid;
        $json_result = file_get_contents($url);
        $result = json_decode($json_result, true);
        return $result;
    }

    public function _usershow($asstoken, $uid){
        $url = 'https://api.weibo.com/2/users/show.json?access_token=' . $asstoken . '&uid=' . $uid;
        $json_result = file_get_contents($url);
        $result = json_decode($json_result, true);
        return $result;
    }

    //生成个性化海报
    public function creatleaders($type, $place){
        //地区名称对应数组
        $map_arr = array(
            1 => array(
                1 => '巴塞罗那',
                2 => '布鲁塞尔',
                3 => '东京',
                4 => '佛罗伦萨',
                5 => '胡志明市',
                6 => '曼谷',
                7 => '慕尼黑',
                8 => '台北',
                9 => '悉尼',
                10 => '新加坡',
            ),
            2 => array(
                1 => '阿姆斯特丹',
                2 => '巴黎',
                3 => '大阪',
                4 => '迪拜',
                5 => '法兰克福',
                6 => '伦敦',
                7 => '纽约',
                8 => '首尔',
                9 => '香港',
                10 => '伊斯坦布尔',
            ),
            3 => array(
                1 => '爱丁堡',
                2 => '布拉格',
                3 => '皇后镇',
                4 => '开罗',
                5 => '坎昆',
                6 => '科伦坡',
                7 => '马尔代夫',
                8 => '莫斯科',
                9 => '日内瓦',
                10 => '威尼斯',
            ),
        );

        $pic_path = './static/posters/' . $type . '/' . array_search($place, $map_arr[$type]) . '.jpg';
        return $pic_path;
    }

    //qiqiu - 上传图片到服务器
    public function qiniu_upload(){
        require_once("qiniu/http.php");
        require_once("qiniu/io.php");
        require_once("qiniu/rs.php");



        $bucket = "skyteam";
        $key1 = "file_name1";
        $accessKey = 'GooHyqNrIQuYES1f3aziOUlHMq5pb6IEY8DFKpHY';
        $secretKey = 'cybdpT7ucr0ZPLFMovltzi4XEXTRCEyyC2MIj9AJ';

        Qiniu_SetKeys($accessKey, $secretKey);
        $putPolicy = new Qiniu_RS_PutPolicy($bucket);
        $upToken = $putPolicy->Token(null);
        $putExtra = new Qiniu_PutExtra();
        $putExtra->Crc32 = 1;
        list($ret, $err) = Qiniu_PutFile($upToken, $key1, __file__, $putExtra);
        echo "====> Qiniu_PutFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */