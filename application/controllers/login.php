<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/17
 * Time: 23:40
 */

class Login extends CI_Controller {
    //构造方法
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    public function login()
    {

        $this->load->helper('url');
        $username = $this->input->post('username_md5');
        $password = $this->input->post('password_md5');
        //$username = $_POST['username_md5'];
        //$password = $_POST['password_md5'];
        $this->load->model('User_login_model');
        $user_data = $this->User_login_model->user_login($username,$password);
        //var_dump($user_data);
        if (!empty($user_data)) {
        $this->session->set_userdata('userimf', $user_data);  //将用户信息存储在session里
        $this->load->helper('url');
        //加载数据
        $this->load->model('Load_blog_model');
        $result['articlelist'] = $this->Load_blog_model->get_artclelist(0);
        $this->load->view('contentlist', $result);
        }
        else {
            echo "<script language=\"JavaScript\">\r\n";
            header("Content-type: text/html; charset=utf-8");
            echo " alert(\"帐号或密码错误！\");\r\n";
            echo "</script>";
            $this->load->view('login');
        }
    }
}