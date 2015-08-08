<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/12
 * Time: 17:06
 * What:文章详情类
 */
class Detail_artcle extends CI_Controller{
    //构造方法
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    //根据用户点击的文章id，获取该文章信息，给返回页面
    public function index($artid=''){
        //$artcle_id=$this->uri->segment(4); //获取文章id
        //echo $artid;
        //$userdata=$this->session->userdata('userimf');
        //var_dump($userdata);
        if(!empty($this->session->userdata('userimf'))) {
            $this->load->helper('url');
            $this->load->model('Detailed_article_model');

            $result['article_detailed'] = $this->Detailed_article_model->get_artcle_detailed($artid);
            //echo $this->Detailed_article_model;
            $result['article_comment'] = $this->Detailed_article_model->get_artcle_comment($artid);
            //var_dump($result);
            $this->load->vars("artid",$artid);
            $this->load->view('content_comment', $result);

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