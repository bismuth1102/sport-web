<?php
class Title_model extends CI_Model{

	public function get_title($id){
		$query = $this->db->query("select title,exp.level,icon,maxExp from (title join exp on title.level=exp.level) where id='$id' order by exp.level asc");
		return $query->result_array();
 	}

	public function modify($id, $data){
		// echo json_encode($data);	//有dataType: "json"的话，就能显示中文的数组，否则是乱码

		for ($i=0; $i<15; $i++) { 
			$where = array(
				'id' => $id,
			    'level' => $i+1
			);
			$set = array('title' => $data[$i]);
			$this->db->update('title', $set, $where);
		}

	}
}