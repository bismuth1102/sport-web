<?php
include 'Utility.php';
class Sign extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function show(){
        $this->load->view('templates/signHeader');
        $this->load->view('sign/signHead');
        $this->load->view('sign/sign');
    }

    public function index(){
        // if (isset($_SESSION["id"])){
        //     $id = $_SESSION["id"];
        //     redirect("sport");
        // }
        // else{
        //     $this->show();
        // }
        $_SESSION["id"] = 'liang';
        redirect("sport");
    }

    public function verify($id, $password){
        $check = $this->user_model->verify($id, $password);
        
        $_SESSION['id'] = $check['id'];
        echo $check['check'];
    }

    public function logout(){
        unset($_SESSION['id']);
        redirect(site_url('sign'));
    }

}