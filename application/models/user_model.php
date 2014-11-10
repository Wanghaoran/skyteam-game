<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }


    public function insertUser($weiboid, $name, $profile_url, $avatar_large, $type, $num, $tid){

        $data = array(
            'weiboid' => $weiboid,
            'type' => $type,
            'name' => $name,
            'profile_url' => $profile_url,
            'avatar_large' => $avatar_large,
            'num' => $num,
            'tid' => $tid,

        );

        return $this -> db -> insert('user', $data);
    }


    public function getUser($weiboid){
        $query = $this -> db -> get_where('user', array('weiboid' => $weiboid), 1);
        return $query -> result_array();
    }

    public function getinfo($weiboid){
        $this->db->select('*');
        $this->db->from('skyteam_user as u');
        $this->db->join('skyteam_team as t ', 'u.tid = t.id');
        $this->db->where(array('u.weiboid' => $weiboid));
        $query = $this->db->get();
        var_dump($query -> result_array());

    }



    /*
    public function addnum($group, $step = 1){

        $query = $this -> db -> get_where('groupnum', array('group' => $group), 1);
        $result = $query -> row_array();
        $data = array(
            'num' => $result['num'] + $step,
        );
        $this -> db -> where(array('group' => $group));
        return $this -> db -> update('groupnum', $data);
    }

    public function getnum(){
        $this -> db -> order_by("group", "ASC");
        $query = $this -> db -> get('groupnum');
        return $query -> result_array();
    }

    */


    /*



    public function getUser($uid){
        $query = $this -> db -> get_where('user', array('weiboId' => $uid, 'status' => 2), 1);
        return $query -> result_array();
    }

    //获取人数
    public function getsum(){
        $now = $this->db->count_all_results('user');
        $old = 10732;
        $total = $now + $old;
        return $total;
    }

    */


}
