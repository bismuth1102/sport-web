<?php
class Sport_model extends CI_Model{
	public function get_sport($id){
		$query = $this->db->get_where('sport', array('id' => $id));
		return $query->row_array();
	}

}