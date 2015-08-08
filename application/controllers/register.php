<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/22
 * Time: 13:27
 */
class Register extends CI_Controller
{
    //构造方法
    public function __construct()
    {
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    public function showreg(){
        $this->load->view('register');
    }

    //根据表单传递来的数据进行注册
    public function reg()
    {
        $this->load->model('User_reg_model');
        $username = $this->input->post('username_md5');
       // echo $username;
        $is_user = $this->User_reg_model->get_user($username);
        //echo $is_user;
        //帐号验证，帐号不可跟已有帐号重复
        if ($is_user) {
            echo "<script language=\"JavaScript\">\r\n";
            header("Content-type: text/html; charset=utf-8");
            echo " alert(\"帐号已被使用，请输入新的帐号！\");\r\n";
            echo "</script>";
            $this->load->view('register');
        } else {
            $password = $this->input->post('password');
            $re_password = $this->input->post('re_password');
            $nickname = $this->input->post('nickname');
            $user_email = $this->input->post('email');
            //密码正确，帐号非空(不可跟已有的重复)，昵称非空的情况
            if ($password == $re_password && !empty($username) && !empty($nickname)) {
                $user[0] = $username;
                $user[1] = $this->input->post('password_md5');
                $bool = $this->User_reg_model->register($user, $nickname, $user_email);
                if ($bool) {
                    echo "<script language=\"JavaScript\">\r\n";
                    header("Content-type: text/html; charset=utf-8");
                    echo " alert(\"注册成功！\");\r\n";
                    echo "</script>";
                    $this->load->view('login');
                } else {
                    echo "<script language=\"JavaScript\">\r\n";
                    header("Content-type: text/html; charset=utf-8");
                    echo " alert(\"注册失败，请重新操作！\");\r\n";
                    echo "</script>";
                    $this->load->view('register');
                }

            } else if ($password != $re_password) {
                echo "<script language=\"JavaScript\">\r\n";
                header("Content-type: text/html; charset=utf-8");
                echo " alert(\"密码不一致！\");\r\n";
                echo "</script>";
                $this->load->view('register');
            }
        }
    }
}