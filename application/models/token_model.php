<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Token_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }


    public function  insertToken($token){

        $data = array(
            'token' => $token,
            'addtime' => time(),
        );

        $this -> db -> insert('token', $data);
        return $this->db->insert_id();

    }
}
