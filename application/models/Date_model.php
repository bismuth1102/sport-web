<?php
class Date_model extends CI_Model{
	public function get_month(){
		$query = $this->db->query("select * from date order by date DESC limit 30");
		return $query->result_array();
	}

}