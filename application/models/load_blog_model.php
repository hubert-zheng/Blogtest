<?php
	class Load_blog_model extends CI_Model{
        //根据页面传来的页数，每次加载更多5条文章
		public function get_artclelist($start){
			$sql="select * from blogcasual,userimf where blogcasual.authorid=userimf.userid limit $start,5";
			$res=$this->db->query($sql);
			return $res->result();
		}

		}