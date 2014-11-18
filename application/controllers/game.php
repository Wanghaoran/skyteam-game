<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

    //游戏端试玩地址
    public function qyer()
    {
        $this->load->helper('url');
        redirect('http://skyteam.tianxun.cn/?associateid=SOC_WBO_00349_00001&utm_source=weibo&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share');
//        $data = array();
//        $data['state'] = 'start';
//        $this->load->view('game_qyer', $data);
    }

    public function waiting(){
        $this->load->view('game_waiting');

    }



}

/* End of file game.php */
/* Location: ./application/controllers/game.php */