<?php
include 'Utility.php';
class Attention extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('attention_model');
        $this->load->model('mine_model');
        $this->load->helper('url_helper');
    }

	public function fan()
    {
        $id = Utility::get_sessionID();
		$data = $this->mine_model->get_mineInfo($id);
		$data['people'] = $this->attention_model->fan($id);
        $data['fan'] = $this->attention_model->fan_id($id);
            //检查每个人在不在粉丝列表里，以显示每个人的按钮是关注还是取消关注

		$this->load->view('templates/header', $data);
        $this->load->view('attention/attentionHead');
        $this->load->view('attention/fanHead'); //这里不同
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('attention/attention');
        $this->load->view('templates/footer');
	}

	public function star()
    {
        $id = Utility::get_sessionID();
		$data = $this->mine_model->get_mineInfo($id);
		$data['people'] = $this->attention_model->star($id);

		$this->load->view('templates/header', $data);
        $this->load->view('attention/attentionHead');
        $this->load->view('attention/starHead'); //这里不同
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('attention/attention');
        $this->load->view('templates/footer');
	}

    public function follow($starID)
    {
        $id = Utility::get_sessionID();
        $this->attention_model->follow($id, $starID);

        redirect(site_url('attention/fan'));
    }

	public function notFollow($starID, $page)
    {
        $id = Utility::get_sessionID();
		$this->attention_model->notFollow($id, $starID);

		redirect(site_url('attention/'.$page));
	}

}





