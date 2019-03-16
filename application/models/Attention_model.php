<?php
class Attention_model extends CI_Model{

	public function fan_id($id){
		$query = $this->db->query("select starID from attention where followerID='$id'");
		return $query->result_array();
	}

	public function fan($id){
		$query = $this->db->query("select mine.id,mine.level,avatar,icon,title from ((mine join attention on mine.id=attention.followerID) join exp on mine.level=exp.level) join title on attention.starID=title.id and mine.level=title.level where attention.starID='$id'");
	    return $query->result_array();
	}

	public function star($id){
		$query = $this->db->query("select mine.id,mine.level,avatar,icon,title from ((mine join attention on mine.id=attention.starID) join exp on mine.level=exp.level) join title on attention.followerID=title.id and mine.level=title.level where attention.followerID='$id'");
	    return $query->result_array();
	}

	public function follow($id, $starID){
		$data = array(
		    'followerID' => $id,
		    'starID' => $starID
		);
		return $this->db->insert('attention', $data);
	}

	public function notFollow($id, $starID){
		$where = array(
			'followerID' => $id,
		    'starID' => $starID
		);
		$this->db->delete('attention', $where);
	}

	public function check($id, $starID){	//检查两个人是不是关注关系
		$check = 'false';

		$where = array(
			'followerID' => $id,
			'starID' => $starID
		);
		$query = $this->db->get_where('attention', $where);
		$data = $query->row_array();

		if ($data!=null) {
			$check = 'true';
		}

		return $check;
	}

}