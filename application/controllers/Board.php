<?php
include 'Utility.php';
class Board extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('board_model');
        $this->load->model('mine_model');
        $this->load->helper('url_helper');
    }

    public function show($toID) //route.php中路径已改
    {
        $id = Utility::get_sessionID();

    	$data = $this->mine_model->get_mineInfo($id);
    	$data['messages'] = $this->board_model->get_messages($toID);
    	$data['toID'] = $toID;

		$this->load->view('templates/header', $data);
        $this->load->view('board/boardHead');
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('board/board');
        $this->load->view('templates/footer');
    }

    public function write($toID){
        $id = Utility::get_sessionID();

    	$this->board_model->leave_message($id, $toID);

		redirect(site_url("board/".$toID));
    }

}
