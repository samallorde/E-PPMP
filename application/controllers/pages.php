<?php

class Pages extends CI_Controller{

	public function index(){
		$this->load->model('main_model');
		$data['category'] = $this->main_model->getCategory();
		$this->load->view('pages/login', $data);
	}

	public function getCategory(){
		$data['category'] = $this->main_model->getCategory();
		$this->load->view('pages/table', $data);
	}
	
	public function getSubCategory(){
		$data['sub_category'] = $this->main_model->getSubCategory($category_id);
	}

	public function getSupply(){
		$data['supply'] = $this->main_model->getSupply($sub_id);
	}
}
?>