<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/22
 * Time: 2:11
 */
class Insert_comment extends CI_Controller {
    //构造方法
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }
    //添加评论
    public function insert_com(){
        $comment_contents = $this->input->post('comment_text');
        $artid = $this->input->post('comment_artid');
        $userdata = $this->session->userdata('userimf');
        //var_dump($userdata);
        $this->load->model('Detailed_article_model');
        foreach($userdata as $key){$comment[0]=$key->id;}

        $comment[1]=$artid;
        $comment[2]=$comment_contents;
        $comment[3]=date('y-m-d h:i:s',time());
        //var_dump($comment);
        $bool = $this->Detailed_article_model->insert_comment($comment);
        echo "<script language=\"JavaScript\">\r\n";
        header("Content-type: text/html; charset=utf-8");
        echo " alert(\"评论添加成功！\");\r\n";
        echo "</script>";
        //echo $_SERVER['HTTP_REFERER']; //获取前一页的URL地址
        $url = $_SERVER['HTTP_REFERER'];
        echo "<a href='".$url."'>返回</a>";
    }
}