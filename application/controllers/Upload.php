<?php
include 'Mine.php';
class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $mine = new Mine();

        $config['upload_path']      = './application/views/images/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 100;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            
            $mine->show();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $mine->show();
        }
    }
}
?>