<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//PC 端首页
	public function index()
	{
		$this->load->view('index');
	}

    //weibo 登陆
    public function weibologin(){
        echo 'Waitting Weibo Login';
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