<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }


    public function insertTeam($weiboid, $name, $place, $num, $type){

        if($this -> getUser($weiboid)){
            return false;
        }

        $data = array(
            'weiboid' => $weiboid,
            'type' => $type,
            'name' => $name,
            'place' => $place,
            'num' => $num,
            'addtime' => time(),

        );

        $this -> db -> insert('team', $data);
        return $this->db->insert_id();
    }

    public function getUser($weiboid){
        $query = $this -> db -> get_where('team', array('weiboid' => $weiboid), 1);
        return $query -> result_array();
    }


    public function updatenum($id, $num){
        $query = $this -> db -> get_where('team', array('id' => $id), 1);
        $result = $query -> row_array();
        $data = array(
            'num' => $result['num'] + $num,
        );
        $this -> db -> where('id', $id);
        return $this -> db -> update('team', $data);
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
