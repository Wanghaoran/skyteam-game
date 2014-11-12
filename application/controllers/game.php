<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

    //游戏端试玩地址
    public function qyer()
    {
        $data = array();
        $data['state'] = 'start';
        $this->load->view('game_qyer', $data);
    }

    public function waiting(){
        $this->load->view('game_waiting');

    }



}

/* End of file game.php */
/* Location: ./application/controllers/game.php */