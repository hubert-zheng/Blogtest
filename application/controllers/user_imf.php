<?php
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/22
 * Time: 15:29
 */
class User_imf extends CI_Controller
{
    //构造方法
    public function __construct()
    {
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }

    public function showimf(){
        $this->load->view('user_information');
    }
}