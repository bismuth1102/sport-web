<?php
class Other_model extends CI_Model{
	public function get_other($id, $toID){
		$query = $this->db->query("select mine.id, mine.avatar, mine.signature, mine.level, mine.bestday, mine.bdkm, mine.bdcal, mine.bdstep, mine.compTotal, mine.compWin, exp.icon, title.title from (mine join exp on mine.level=exp.level) join title on  exp.level=title.level where mine.id = '$toID' and title.id = '$id' ");
	    return $query->row_array();
	}
	
}