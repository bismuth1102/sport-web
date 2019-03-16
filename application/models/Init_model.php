	<?php
class Init_model extends CI_Model{


	public function initData($id)
	{
		$this->mineData($id);
		$this->weekData($id);
		$this->mailData($id);
		$this->titleData($id);
		$this->attentionData($id);
	}

	private function mineData($id){
		$mineData = array(
			'id' => $id
		);
		$this->db->insert('mine', $mineData);
		$this->db->insert('sport', $mineData);
	}

	private function weekData($id){
		for ($i=0; $i<=6; $i++) { 
			$km = rand(0,100)/10;
			$weekData = array(
				'id' => $id,
				'date' => date("Y-m-d",strtotime("-$i day")),
				'km' => $km,
				'cal' => round($km*150),
				'step' => round($km*1600)
			);
			$this->db->insert('daydata', $weekData);
		}
	}

	private function titleData($id){
		$titles = array('C-','C','C+','B-','B','B+','A-','A','A+','S-','S','S+','SS-','SS','SS+');
		for ($i=0; $i<15; $i++) { 
			$titleData = array(
				'id' => $id,
			    'level' => $i+1,
			    'title' => $titles[$i]
			);
			$this->db->insert('title', $titleData);
		}
	}

	private function mailData($id){
		$mailData = array(
			'userID' => $id,
			'isNew' => "true",
			'title' => '尊敬的'.$id.'，您好！',
			'comeFrom' => '筋斗云团队',
			'content' => '欢迎使用筋斗云运动！'
		);
		$this->db->insert('mail', $mailData);
	}

	private function attentionData($id){
		$attentionData = array(
			'starID' => $id, 
			'followerID' => 'admin'
		);
		$this->db->insert('attention', $attentionData);
	}





	public function update(){
		$this->date();

		$query = $this->db->query("select id from user");
		$ids = $query->result_array();

		for ($i=0; $i<count($ids); $i++) { 
			$id = $ids[$i]['id'];
			$this->dayData($id);
			$this->day($id);
			$this->week($id);
			$this->total($id);
			$this->bestDay($id);
		}
	}




	public function date(){
		$date = array(
			'date' => date("Y-m-d",time()),
		);
		$this->db->insert('date', $date);
	}
	

	public function dayData($id){
		$km = rand(0,100)/10;
		$dayData = array(
			'id' => $id,
			'date' => date("Y-m-d",time()),
			'km' => $km,
			'cal' => round($km*150),
			'step' => round($km*1600)
		);
		$this->db->insert('daydata', $dayData);
	}


	public function day($id)
	{
		$query = $this->db->query("select km,cal,step from dayData where id='$id' order by date DESC");
		$result = $query->row_array();

		$data = array(
			'dkm' => $result['km'],
			'dcal' => $result['cal'],
			'dstep' => $result['step']
		);
		$where = "id = $id";
	    $this->db->update('sport', $data, $where);
	}


	public function week($id)
	{
		$query = $this->db->query("select km,cal,step from dayData where id='$id' order by date DESC limit 7");
		$result = $query->result_array();
		$week_km = 0;
		$week_cal = 0;
		$week_step = 0;

		foreach ($result as $key => $value){
			$week_km += $value['km'];
			$week_cal += $value['cal'];
			$week_step += $value['step'];
		}

		$data = array(
			'wkm' => $week_km,
			'wcal' => $week_cal,
			'wstep' => $week_step
		);
		$where = "id = $id";
	    $this->db->update('sport', $data, $where);
	}


	public function total($id)
	{
		$query = $this->db->query("select km,cal,step from dayData where id='$id' order by date DESC");
		$dayData = $query->row_array();

		$query = $this->db->query("select tkm,tcal,tstep from sport where id='$id' ");
		$totalData = $query->row_array();

		$total_km = $totalData['tkm']+$dayData['km'];
		$total_cal = $totalData['tcal']*10000+$dayData['cal'];
		$total_step = $totalData['tstep']*10000+$dayData['step'];

		$data = array(
			'tkm' => $total_km,
			'tcal' => round($total_cal/10000, 2),
			'tstep' => round($total_step/10000, 2)
		);
		$where = "id = $id";
	    $this->db->update('sport', $data, $where);
	}


	public function bestDay($id)
	{
		$query = $this->db->query("select date,max(km) as km,cal,step from dayData where id='$id'");
		$result = $query->row_array();

		$data = array(
			'bdkm' => $result['km'],
			'bdcal' => $result['cal'],
			'bdstep' => $result['step'],
			'bestday' => $result['date']
		);
		$where = "id = $id";
		$this->db->update('mine', $data, $where);
	}



}