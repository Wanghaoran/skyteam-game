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

            $_SESSION['token'] = $token;

            setcookie('weibojs_'.$o->client_id, http_build_query($token));

            $c = new SaeTClientV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1', $_SESSION['token']['access_token']);

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


        //TODO:根据微博UID判断是否已经开团，如果开团了酒直接跳转到天团排行榜页面，没开则进入创建天团页面；

        var_dump($client);


        var_dump($uid);
        var_dump($_SESSION);

//        $this->load->helper('url');
//        redirect(base_url("start"));

    }

    //创建天团
    public function start(){
        $this->load->view('start');
    }

    //天团排行版
    public function rank(){
        $this->load->view('rank');
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

    public function tests(){
        $this->load->view('rules_mobile');

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */