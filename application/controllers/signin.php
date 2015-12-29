<?php

class Signin extends CI_Controller{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('login');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$data['incorrect'] = FALSE;
		$this->load->view('login', $data);
	}	

	public function login()
	{	
		$ID = $this->input->post('inputUserID');
		$pass = $this->input->post('inputPassword');
		if($ID === 'admin' AND $pass === 'admin'){
			$data['professors'] = $this->login->getProfessors();
			$data['groups'] = $this->login->getGroups();
			$data['account_exist'] = FALSE;
			$data['email_exist'] = FALSE;
			$data['contact_exist'] = FALSE;
			$this->load->view('admin', $data);
		} 
		else{
			$validate = $this->login->validateAccount($ID, $pass);
			if($validate == NULL){
				$data['incorrect'] = TRUE;
				$data['school_id'] = $ID;
				echo '<script type="text/javascript">alert("Invalid School ID or Password!");</script>';
				redirect();
			}
			else{
				$this->session->set_userdata('account_id', $ID);
				$data['home_contents'] = $this->login->showPost($ID);
				$search_groups = $this->login->searchGroups($ID);
				$data['group'] = $search_groups;
				$data['account_info'] = $validate;
				foreach($data['account_info'] as $acc_type){
					$this->session->set_userdata('account_type', $acc_type->user_type);
					if($acc_type->user_type === '2'){
						$this->load->view('home-prof', $data);
					}
					else{
						$this->load->view('home', $data);
					}
				}
			}
		}
	}
}
?>