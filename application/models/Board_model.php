<?php
class Board_model extends CI_Model{

	public function get_messages($toID){	//能看到这个人的完整留言板
		$query = $this->db->query("select messageID,des,toID,fromID,content,time,avatar from (board join mine on board.fromID=mine.id) where board.toID = '$toID'");
		return $query->result_array();
	}

	public function leave_message($fromID, $toID){
		$data = array(
		    'des' => $this->input->post('des'),
		    'toID' => $toID,
		    'fromID' => $fromID,
		    'content' => $this->input->post('content'),
		    'time' => $this->input->post('time')
		);
		return $this->db->insert('board', $data);
	}

}