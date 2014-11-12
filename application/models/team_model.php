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

    //获取该类别下前三名
    public function teamorder($type){
        $this->db->select('*');
        $this->db->from('skyteam_team');
        $this->db->limit(3);
        $this->db->order_by("num", "DESC");
        $this->db->where(array('type' => $type));
        $query = $this->db->get();
        return $query -> result_array();
    }

    //读取第一名
    public function getfirst($type){
        $this->db->select('*');
        $this->db->from('skyteam_team');
        $this->db->limit(1);
        $this->db->order_by("num", "DESC");
        $this->db->where(array('type' => $type));
        $query = $this->db->get();
        return $query -> result_array()[0];
    }

    //通过团名读取团信息
    public function getinfofromname($name){
        $query = $this -> db -> get_where('team', array('name' => $name), 1);
        return $query -> result_array();
    }

    //通过weiboID删除团和用户
    public function deletefromweiboid($weiboid){
        //删除团
        $this->db->where('weiboid', $weiboid);
        $this->db->delete('team');

        //删除用户
        $this->db->where('weiboid', $weiboid);
        $this->db->delete('user');

        return $this->db->affected_rows();

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
