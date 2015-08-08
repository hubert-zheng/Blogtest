<?php
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/21
 * Time: 22:34
 */
class User_login_model extends CI_Model{
    public function user_login($username,$password){
        $sql = 'select name,id from user,userimf where username=? and password=? and user.id=userimf.userid';
        $user[0]=$username;
        $user[1]=$password;
        $res=$this->db->query($sql,$user);
        return $res->result();
        /*var_dump($res);
        if(!empty($res)){return true;}
        else return false;*/
    }
}