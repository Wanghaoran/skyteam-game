<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }


    public function  insertDetail($tid, $num, $ip, $agent){

        $data = array(
            'tid' => $tid,
            'time' => date('Y-m-d H:i:s'),
            'num' => $num,
            'ip' => $ip,
            'user_agent' => $agent,
        );

        $this -> db -> insert('detail', $data);
        return $this->db->insert_id();
    }


}