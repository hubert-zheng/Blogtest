<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/21
 * Time: 17:22
 */
class Logout extends CI_Controller {
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    public function logout(){
        exit();
        $this->load->view('login');
    }
}