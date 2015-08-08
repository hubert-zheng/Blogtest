<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/16
 * Time: 23:50
 * What:根据用户的登录id，进入该用户的后台管理入口
 */
class User_control extends CI_Controller{
    //构造方法
        public function __construct(){
            parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
            $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
        }
        public function get_usermain(){
            $this->load->helper('url');
            $userdata = $this->session->userdata('userimf');
            //var_dump($userdata);
            if(!empty($userdata)){
                foreach($userdata as $k) {
                    $userid = $k->id;
                    $user_name = $k->name;
                }
                $this->load->vars("username",$user_name);
                $this->load->view('user_control');

            }
            else{
                echo "<script language=\"JavaScript\">\r\n";
                header("Content-type: text/html; charset=utf-8");
                echo " alert(\"您未登录，请先登录再进行操作！\");\r\n";
                echo "</script>";
                $this->load->view('login');
            }

        }
}