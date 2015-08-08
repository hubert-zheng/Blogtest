<?php
/**
 * Created by PhpStorm.
 * User: zxb
 * Date: 2015/6/12
 * Time: 17:05
 */
    class Detailed_article_model extends CI_Model{
        //联合查询，根据文章的id查询该文章的详细信息（包括文章信息，作者信息）
        public function get_artcle_detailed($artcle_id){
            $sql = "select * from blogcasual,userimf where blogcasual.authorid=userimf.userid and blogcasual.artid=?";
            $res=$this->db->query($sql,$artcle_id);
            return $res->result();
        }
        //根据传入的文章id查询该文章所属评论详情，包括评论人的基本信息。
        public function get_artcle_comment($artcle_id){
            $sql = "select * from comment,userimf where comment.userid=userimf.userid and artid=?";
            $res=$this->db->query($sql,$artcle_id);
            return $res->result();
        }
        //添加评论（评论人id，评论内容，所评论文章id）+ 当前时间
        public function insert_comment($comment){
            $sql = "insert into comment (userid,artid,com_contents,comment_time) values (?,?,?,?)";

            $bool = $this->db->query($sql,$comment);
            //echo $bool;
            return $bool;
        }
    }