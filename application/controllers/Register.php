<?php
class Register extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    // public function show($unique){
    //     $data['unique'] = $unique;

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('register/registerHead');
    //     $this->load->view('register/register');
    // }

    public function show(){
        $this->load->view('templates/signHeader');
        $this->load->view('register/registerHead');
        $this->load->view('register/register');
    }

    public function index(){
        // $this->load->helper('form');
        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('id', 'Id', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('passwordAgain', 'passwordAgain', "required|matches[password]");

        // if ($this->form_validation->run() === FALSE)
        // {
            $this->show();
        // }
        // else
        // {
        //     $check = $this->user_model->register(); 
        //     if ($check==null) {
        //         $this->show('false');
        //     }
        //     else{
        //         $_SESSION['id'] = $check;
        //         redirect(site_url('init/newUser/'.$check));  
        //     }
        // }
    }

    public function verify($id, $password){
        $check = $this->user_model->register($id, $password); 

        if ($check==null) {
            echo "false";
        }
        else{
            $_SESSION['id'] = $check;
            echo "true";
        }
    }

}
