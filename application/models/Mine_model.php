<?php
class Mine_model extends CI_Model{

	public function get_mineAll($id){
		$query = $this->db->query("select * from (mine join exp on mine.level=exp.level) join title on mine.id=title.id and exp.level=title.level where mine.id = '$id' ");
	    return $query->row_array();
	}

	public function get_mineInfo($id){
		$query = $this->db->query("select mine.id,avatar,mine.level,icon,title from (mine join exp on mine.level=exp.level) join title on mine.id=title.id and exp.level=title.level where mine.id = '$id' ");
	    return $query->row_array();
	}

	public function get_avatar($id){
		$this->db->select('avatar');
		$query = $this->db->get_where('mine', array('id' => $id));
		return $query->row_array();
	}

	public function modify_mine($id){
		$this->load->helper('url');

		$data = array(
		    'signature' => $this->input->post('signature') 
		);
		$where = "id = $id";
	    return $this->db->update('mine', $data, $where);
	}

	public function change_avatar($id, $avatar){
		$this->load->helper('url');

		$data = array(
		    'avatar' => $avatar 
		);
		$where = "id = $id";
	    return $this->db->update('mine', $data, $where);
	}

}