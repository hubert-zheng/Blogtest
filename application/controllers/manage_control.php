<?php
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/22
 * Time: 16:34
 */
class Manage_control extends CI_Controller{
    //构造方法
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    public function into_manage_control(){
        $this->load->view('manage_control');
    }
    public function get_all_userimf(){
        $this->load->view('manage_all_userimf');
    }
    public function get_all_article(){
        $this->load->view('manage_all_article');
    }
}