<?php
class User_model extends CI_Model{

	public function verify($id, $password){
		$this->load->helper('url');

		$check = 'false';

		$query = $this->db->get_where('user', array('id' => $id));
		$data = $query->row_array();
		if ($data!=null) {
			if ($password==$data['password']) {
				$check = 'true';
			}
		}

		$returnArray = array(
			'id' => $id,
			'check' => $check
		);

		return $returnArray;
	}

	public function register($id, $password){
		$this->load->helper('url');

		$query = $this->db->get_where('user', array('id' => $id));
		$data = $query->row_array();
		if ($data==null) {
			$data = array(
				'id' => $id,
				'password' => $password
			);
			$this->db->insert('user', $data);

			return $id;
		}
		
		return null;

	}


	public function getUserNum(){
		$query = $this->db->query("SELECT count(*) as num FROM user");
		$data = $query->row_array();
		return $data["num"];
	}

	public function getRankIcon(){
		$query = $this->db->query("SELECT ranking FROM ranking order by ranking ASC");
		$data = $query->result_array();
		return $data;
	}

	public function getDstepList(){
		$query = $this->db->query("select id,dstep from sport order by dstep DESC");
		$data = $query->result_array();
		return $data;
	}
	

}



