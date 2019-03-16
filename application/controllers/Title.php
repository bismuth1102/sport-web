<?php
include 'Utility.php';
class Title extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('mine_model');
        $this->load->model('title_model');
        $this->load->helper('url_helper');
    }

	public function index()
    {
        $id = Utility::get_sessionID();
		$data = $this->mine_model->get_mineInfo($id);
        $data['titles'] = $this->title_model->get_title($id);

		$this->load->view('templates/header', $data);
        $this->load->view('title/titleHead');
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('title/title');
        $this->load->view('templates/footer');
	}

    public function modify()
    {
        $id = Utility::get_sessionID();

        $data=$_POST['str'];  
        $data=trim($data,"[]");
        $datas=explode(',',$data);
        $titles = array();
        foreach ($datas as $key => $value) {
            $value = trim($value,"\""); //去掉字符串左右两端的双引号
            array_push($titles, $value);
        }
        $this->title_model->modify($id, $titles);
        
    }

}