<?php
	class Load_artcle_model extends CI_Model{
		//根据用户点击的文章获取id，查询该文章的详细信息
		public function get_artcle($artid){
			$sql='select * from blogcasual,userimf where blogcasual.authorid=userimf.userid and artid=?';
			$res=$this->db->query($sql,$artid);
			return $res->result();
		}
	}