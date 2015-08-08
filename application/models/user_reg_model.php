<?php
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/22
 * Time: 13:57
 */
class User_reg_model extends CI_Model{
    //取得所有用户帐号，新注册人不可与已有帐号重复
    public function get_user($username){
        $sql = "select username from user";
        $res=$this->db->query($sql);
        $user=$res->result();
        foreach($user as $k=>$value){;
            //echo $value->username;
            //echo "k///////<br>";
            //var_dump($username);
            if($value->username==$username){return true;}
        }
        return false;
    }
    public function register($user,$nickname,$email){
        $sql = "insert into user (username,password) values (?,?)";
        $bool1 = $this->db->query($sql,$user);
        if($bool1){
            $sql = "select id from user where username=? and password=?";
            $res = $this->db->query($sql,$user);
            foreach($res->result() as $k){
                $userid = $k->id;
            }
            $sql = "insert into userimf (userid,name,contact) values (?,?,?)";
            $userimf[0]=$userid;
            $userimf[1]=$nickname;
            $userimf[2]=$email;
            $bool2 = $this->db->query($sql,$userimf);
            if($bool2){return true;}
            else{return false;}
        }
        else {
            return false;
        }

    }
}