<?php
class DayData_model extends CI_Model{
	public function get_weekData($id){
		$query = $this->db->query("select * from dayData where id='$id' order by date DESC limit 7");
		return $query->result_array();
	}

	public function get_monthData($id){
		$query = $this->db->query("select * from dayData where id='$id' order by date DESC limit 30");
		return $query->result_array();
	}

}