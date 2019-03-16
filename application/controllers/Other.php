<?php
include 'Utility.php';
class Other extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('mine_model');
        $this->load->model('other_model');
        $this->load->model('attention_model');
        $this->load->helper('url_helper');
    }

    public function view($toID) //route.php中路径已改
    {
        $id = Utility::get_sessionID();

        if ($id==$toID) {
            redirect(site_url('mine'));
        }
        else{
            $data['id'] = $id;
            $data['other'] = $this->other_model->get_other($id, $toID);
            $data['avatar'] = $this->mine_model->get_avatar($id)['avatar'];
            $data['check'] = $this->attention_model->check($id, $toID); //检查是否关注了

            $this->load->view('templates/header', $data);
            $this->load->view('other/otherHead');
            $this->load->view('templates/nav');
            $this->load->view('other/other');
            $this->load->view('templates/footer'); 
        }
    }

    public function follow($starID)
    {
        $id = Utility::get_sessionID();
        $this->attention_model->follow($id, $starID);

        redirect(site_url('other/'.$starID));
    }

    public function notFollow($starID)
    {
        $id = Utility::get_sessionID();
        $this->attention_model->notFollow($id, $starID);

        redirect(site_url('other/'.$starID));
    }


}