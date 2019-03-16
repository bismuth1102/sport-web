<?php
include 'Utility.php';
class Mine extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('mine_model');
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }


    public function index()
    {
        $id = Utility::get_sessionID();
        $data = $this->mine_model->get_mineAll($id);
        $data['new'] = "false";
        
        $data['userNum'] = $this->user_model->getUserNum();
        $data['listIcons'] = $this->user_model->getRankIcon();
        $data['DstepList'] = $this->user_model->getDstepList();

        $this->show($data);
    }


    public function newSignature()
    {
        $id = Utility::get_sessionID();    
        $data = $this->mine_model->get_mineAll($id);
        $data['new'] = "true";

        $this->show($data);
    }


    private function show($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('mine/mineHead');
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('mine/mine');
        $this->load->view('templates/footer');
    }


    public function modify($avatarPath=null)
    {
        $id = Utility::get_sessionID();

        $config['upload_path']      = './application/views/images/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 0;
        $config['max_width']        = 0;
        $config['max_height']       = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile'))
        {
            // $error = array('error' => $this->upload->display_errors());
            // foreach ($error as $a => $b) {
            //     echo $b;
            // }
            // redirect(site_url('mine'));
            $data = array('upload_data' => $this->upload->data());
            $this->mine_model->change_avatar($id, $avatarPath);
        }
        $this->mine_model->modify_mine($id);
        redirect(site_url('mine/newSignature'));
    }

}