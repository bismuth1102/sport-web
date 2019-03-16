<?php
class Competition_model extends CI_Model{

	public function verify_TextID($id){
		$query = $this->db->query("select textID from comp");
		$data = $query->result_array();
		$check = "false";
		foreach ($data as $key => $value) {
			if ($value['textID']==$id) {
				$check = "true";
				break;
			}
		}
		return $check;
	}

	public function get_comps($affi, $allow, $creatorID){
		$data = $this->get_affi($affi, $creatorID);
		return $this->get_allow($allow, $data);
	}



	public function get_comp($textID){
		$query = $this->db->get_where('comp', array('textID' => $textID));
		return $query->row_array();
	}

	public function get_users($textID){
		$query = $this->db->query("select userID from compuser where textID = '$textID' ");
		// $data = $query->result_array();
		// foreach ($data as $a) {
		// 	echo $a['userID'];
		// }
		return $query->result_array();
	}







	public function get_affi($affi, $creatorID){
		$data;
		switch ($affi) {
			case 'allAffi':
				$data = $this->get_all_affi($creatorID);
				break;
			case 'create':
				$data = $this->get_create($creatorID);
				break;
			case 'attend':
				$data = $this->get_attend($creatorID);
				break;
			default:
				break;
		}
		return $data;
	}

	public function get_allow($allow, $data){
		$standard_data = $this->standard_textID($data);
		$str = "select * from comp where textID in $standard_data";
		switch ($allow) {
			case 'allAllow':
				break;
			case 'two':
				$str = $str." and allowNo=2";
				break;
			case 'three':
				$str = $str." and allowNo>=3 and allowNo<=10";
				break;
			case 'ten':
				$str = $str." and allowNo>10";
				break;
			default:
				break;
		}
		// echo $str;
		$query = $this->db->query($str);
		return $query->result_array();
	}








	private function get_all_affi($creatorID){	//显示我创建的，我参与的，和所有公开的
		$data0 = $this->get_public();
		$data1 = $this->get_create($creatorID);
		$data2 = $this->get_attend($creatorID);
		$data3 = array_merge($data0, $data1, $data2);
		$data3 = array_unique($data3);
		sort($data3);
		return $data3;
	}

	private function get_public(){
		$query = $this->db->query("select textID from comp where public = 'true'");
		$data = $query->result_array();
		return $this->get_textID($data);
	}

	private function get_create($creatorID){
		$query = $this->db->query("select textID from comp where creatorID = '$creatorID'");
		$data = $query->result_array();
		return $this->get_textID($data);
	}

	private function get_attend($userID){
		$query = $this->db->query("select textID from compuser where userID = '$userID'");
		$data = $query->result_array();
		return $this->get_textID($data);
	}










	public function get_textID($data){	//第一次过滤得到的textID数组
		$result = array();
		foreach ($data as $key => $value) {
			array_push($result, $value['textID']);
		}
		return $result;
	}

	public function standard_textID($data){	//将数组左右两端的'['和']'分别替换成'('和')'，这样就可以用这个字符串直接查询mysql
		$str = json_encode($data);
		$str[0] = '(';
		$str[strlen($str)-1] = ')';
		return $str;
	}










	public function create_comp($creatorID){	//intID的作用是创建comp，textID是显示
		$this->load->helper('url');
		$intID = $this->getMaxIntID()+1;
		$textID=str_pad($intID,5,"0",STR_PAD_LEFT);

		$data = array(
			'intID' => $intID,
			'textID' => $textID,
		    'creatorID' => $creatorID,
		    'name' => $this->input->post('name'),
		    'allowNo' => $this->input->post('allowNo'),
		    'attendNo' => 0,
		    'note' => $this->input->post('note'),
		    'startYear' => $this->input->post('startYear'),
		    'startMonth' => $this->input->post('startMonth'),
		    'startDay' => $this->input->post('startDay'),
		    'startHour' => $this->input->post('startHour'),
		    'startMinute' => $this->input->post('startMinute'),
		    'endYear' => $this->input->post('endYear'),
		    'endMonth' => $this->input->post('endMonth'),
		    'endDay' => $this->input->post('endDay'),
		    'endHour' => $this->input->post('endHour'),
		    'endMinute' => $this->input->post('endMinute')
		);

		$primarypublic = $this->input->post('public');
	    if ($primarypublic=='on') {
			$data['public'] = 'true';
		}
		else {
			$data['public'] = 'false';
		}

		$this->db->insert('comp', $data);

		$this->attend_comp($creatorID, $textID);

		return $textID;
	}







	public function getMaxIntID(){
		$this->db->select_max('intID');
		$query = $this->db->get('comp');
		$row = $query->row_array();
		return $row['intID'];
	}

	public function check($id, $textID){	//检查是否参加
		$query = $this->db->query("select userID from compuser where textID='$textID'");
		$ids = $query->result_array();
		$checkMark = 'false';
		foreach ($ids as $id_item) {
            if($id==$id_item['userID']){
            	$checkMark = 'true';
            	break;
            }
        }
        return $checkMark;
	}








	public function attend_comp($id, $textID){
		$data1 = array(
			'userID' => $id,
			'textID' => $textID
		);
		$this->db->insert('compuser', $data1);

		$query = $this->db->get_where('comp', array('textID' => $textID));
		$attendNo = $query->row_array()['attendNo'];

		$data2 = array('attendNo' => $attendNo+1);
	    $where = array('textID' => $textID);
	    $this->db->update('comp', $data2, $where);
	}

	public function quit_comp($id, $textID){
		$this->db->delete('compuser', array('userID' => $id, 'textID' => $textID)); 

		$query = $this->db->get_where('comp', array('textID' => $textID));
		$attendNo = $query->row_array()['attendNo'];

		if ($attendNo==1) {
			$this->remove_comp($textID);
		}
		else{
			$data = array('attendNo' => $attendNo-1);
	    	$where = array('textID' => $textID);
	    	$this->db->update('comp', $data, $where);
		}
	}

	public function remove_comp($textID){
		$this->db->delete('comp', array('textID' => $textID)); 
	}

	

}


