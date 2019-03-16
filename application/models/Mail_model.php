<?php
class Mail_model extends CI_Model{

	public function new_mail($userID){
		$query = $this->db->query("select mailID,title,comeFrom,content from mail where userID='$userID' and isNew='true' ");
		return $query->result_array();
	}

	public function history_mail($userID){
		$query = $this->db->query("select mailID,title,comeFrom,content from mail where userID='$userID' and isNew='false' ");
		return $query->result_array();
	}

	public function piece($mailID){
		$query = $this->db->query("select title,comeFrom,content from mail where mailID='$mailID' ");
		return $query->row_array();
	}

	public function modify($mailID){
		$set = array('isNew' => 'false' );
		$where = array('mailID' => $mailID );
		$query = $this->db->update('mail', $set, $where);
	}

}