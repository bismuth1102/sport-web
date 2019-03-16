<?php
include 'Utility.php';
class Competition extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('competition_model');
        $this->load->model('mine_model');
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $id = Utility::get_sessionID();
        $data['comps'] = $this->competition_model->get_comps("allAffi","allAllow",$id);
        $data['id'] = $id;
        $data['avatar'] = $this->mine_model->get_avatar($id)['avatar'];
        $data['level'] = $this->mine_model->get_mineInfo($id)['level'];

        $data['userNum'] = $this->user_model->getUserNum();
        $data['listIcons'] = $this->user_model->getRankIcon();
        $data['DstepList'] = $this->user_model->getDstepList();

        $this->load->view('templates/header', $data);
        $this->load->view('competition/competitionHead');
        $this->load->view('templates/nav');
        $this->load->view('competition/competition');
        $this->load->view('templates/footer');
    }

    public function filter($affi, $allow)
    {       
    	$id = Utility::get_sessionID();
        $data= $this->competition_model->get_comps($affi,$allow,$id);
        echo json_encode($data);   
    }

    public function piece($textID)
    {
        $id = Utility::get_sessionID();
        $data['check'] = $this->competition_model->check($id, $textID);
        $data['comp'] = $this->competition_model->get_comp($textID);
        $data['users'] = $this->competition_model->get_users($textID);
        
        $userInfos = array();
        foreach ($data['users'] as $user) {
            $userInfo = $this->mine_model->get_mineInfo($user['userID']);
            array_push($userInfos, $userInfo);
        }
        $data['userInfos'] = $userInfos;

        $data['id'] = $id;
        $data['avatar'] = $this->mine_model->get_avatar($id)['avatar'];

        $this->load->view('templates/header', $data);
        $this->load->view('compPiece/compPieceHead');
        $this->load->view('templates/nav');
        $this->load->view('compPiece/compPiece');
        $this->load->view('templates/footer');
    }

    public function verifyTextID($textID){  //查询的时候先验证
        echo $this->competition_model->verify_TextID($textID);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $id = Utility::get_sessionID();
        $data['id'] = $id;
        $data['avatar'] = $this->mine_model->get_avatar($id)['avatar'];

        $this->form_validation->set_rules('name', 'Name', 'required');
       
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('compFound/compFoundHead');
            $this->load->view('templates/nav');
            $this->load->view('compFound/part1');
            if (Utility::is_mobile()) {
                $this->load->view('compFound/foundXs');
            }
            else{
                $this->load->view('compFound/foundSm');
            }
            $this->load->view('compFound/part2');
            $this->load->view('templates/footer');

        }
        else
        {
            $textID = $this->competition_model->create_comp($id); 
            redirect(site_url('competition/piece/').$textID);
        }
    }

    public function attend($textID)
    {
        $id = Utility::get_sessionID();
        $this->competition_model->attend_comp($id, $textID); 
        redirect(site_url('competition/piece/').$textID);
    }

    public function quit($textID)
    {
        $id = Utility::get_sessionID();
        $this->competition_model->quit_comp($id, $textID); 
        redirect(site_url('competition'));
    }
    
}