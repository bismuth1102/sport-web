<?php
class Init extends CI_Controller{   //每天都要更新sport&mine/best

	public function __construct()
    {
        parent::__construct();
        $this->load->model('init_model');
        $this->load->helper('url_helper');
    }

    public function newUser($id)
    {
        $this->initData($id);
        $this->day($id);
        $this->week($id);
        $this->total($id);
        $this->bestDay($id);
        redirect(site_url('sport'));
    }

    public function update(){
        $this->init_model->update();
    }



    private function initData($id)
    {
        $this->init_model->initData($id);
    }

    private function day($id)
    {
        $this->init_model->day($id);
    }

    private function week($id)
    {
        $this->init_model->week($id);
    }

    private function total($id)
    {
        $this->init_model->total($id);
    }

    private function bestDay($id)
    {
        $this->init_model->bestDay($id);
    }

}