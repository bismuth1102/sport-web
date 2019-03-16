<?php
include 'Utility.php';
class Sport extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('sport_model');
        $this->load->model('dayData_model');
        $this->load->model('date_model');
        $this->load->model('mine_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $id = Utility::get_sessionID();
    	$data['sport'] = $this->sport_model->get_sport($id);
    	$data['id'] = $id;
        $data['avatar'] = $this->mine_model->get_avatar($id)['avatar'];
        $weekData = $this->dayData_model->get_weekData($id);
        $monthData = $this->dayData_model->get_monthData($id);
        $month = $this->date_model->get_month();
        
        $weekArray = array();
        $weekDataArray = array();
        $monthArray = array();
        $monthDataArray = array();

        foreach($weekData as $item){
            $item['date'] = substr($item['date'],5);    //去掉前面的年份
        	array_unshift($weekArray, $item['date']);
        	array_unshift($weekDataArray, $item['km']);
        }

        foreach($month as $item){
            $item['date'] = substr($item['date'],5);    //去掉前面的年份
            array_unshift($monthArray, $item['date']);
        }

        foreach($monthData as $item){
            array_unshift($monthDataArray, $item['km']);
        }

        for ($i=count($monthData); $i<15; $i++) { 
            array_unshift($monthDataArray, 0);
        }

        $data['week'] = $weekArray;
        $data['weekData'] = $weekDataArray;
        $data['month'] = $monthArray;
        $data['monthData'] = $monthDataArray;


        $this->load->view('templates/header', $data);
        $this->load->view('sport/sportHead');
        $this->load->view('templates/nav');
        $this->load->view('sport/sport');
        $this->load->view('templates/footer');
    }
}