<?php
include 'Utility.php';
class Mail extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('mine_model');
        $this->load->model('mail_model');
        $this->load->helper('url_helper');
    }

    public function show($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('mail/mailHead');
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('mail/mail');
        $this->load->view('templates/footer');
    }

	public function unread()
    {
        $id = Utility::get_sessionID();
		$data = $this->mine_model->get_mineInfo($id);
        $data['mails'] = $this->mail_model->new_mail($id);
        $data['active'] = 'unread';

		$this->show($data);
	}

    public function history()
    {
        $id = Utility::get_sessionID();
        $data = $this->mine_model->get_mineInfo($id);
        $data['mails'] = $this->mail_model->history_mail($id);
        $data['active'] = 'history';

        $this->show($data);  
    }

    public function piece($mailID, $page)
    {
        $id = Utility::get_sessionID();
        $data = $this->mine_model->get_mineInfo($id);
        $data['mail'] = $this->mail_model->piece($mailID);
        $data['page'] = $page;
        $_SESSION['mail']=$data;         //避免id，page信息显示在url中

        $this->modify($mailID);
        redirect(site_url('mail/detail'));
    }

    public function detail(){
        $data = $_SESSION['mail'];
        unset($_SESSION['mail']);

        $this->load->view('templates/header', $data);
        $this->load->view('mailContent/mailContentHead');
        $this->load->view('templates/nav');
        $this->load->view('templates/sideBar');
        $this->load->view('mailContent/mailContent');
        $this->load->view('templates/footer');
    }

    public function modify($mailID){
        $this->mail_model->modify($mailID);
    }

}