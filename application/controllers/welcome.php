<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//PC 端首页
	public function index()
	{
		$this->load->view('index');
	}

    //weibo 登陆
    public function weibologin(){
        include_once('./Weibo.php');
        $o = new SaeTOAuthV2('2025482371', 'a99686a67eec2e39a540eb0c03d402c1');
        $code_url = $o->getAuthorizeURL('http://skyteam.tianxun.cn/welcome/weibocheck');
        $this->load->helper('url');
        redirect($code_url);
    }

    //weibo 登陆回调验证
    public function weibocheck(){

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

                $this->output->set_content_type('application/html;charset=utf-8') -> set_output('新浪微博登录功能正在等待微博方面审核，请稍后再试试');
                exit;

            }else if(isset($uid_get['error']) && $uid_get['error_code'] != 21321){

                $this->output->set_content_type('application/html;charset=utf-8') -> set_output($uid_get['error']);
                exit;

            }else{

                $uid = $uid_get['uid'];
            }
        }else{
            $this->output->set_content_type('application/html;charset=utf-8') -> set_output('授权验证失败！');
            exit;
        }




        var_dump($_GET);
        var_dump($uid);
    }

    //创建天团
    public function start(){

    }

    //PC 端 天团排行版
    public function rank(){
        $this->load->view('rank');
    }

    //PC 端 天巡星导游 - 美食团
    public function wizard_food(){
        $this->load->view('wizard_food');
    }

    //PC 端 天巡星导游 - 购物团
    public function wizard_buy(){
        $this->load->view('wizard_buy');
    }

    //PC 端 天巡星导游 - 休闲团
    public function wizard_show(){
        $this->load->view('wizard_show');
    }

    public function tests(){
        $this->load->view('test');

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */