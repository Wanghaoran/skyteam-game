<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//PC 端首页
	public function index()
	{
		$this->load->view('index');
	}

    //PC 端 天团排行版
    public function rank(){
        $this->load->view('rank');
    }

    //PC 端 天巡星导游
    public function wizard(){
        $this->load->view('wizard');

    }

    public function tests(){
        $this->load->view('test');

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */