<?php

class Main_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getCategory(){
		$query = $this->db->query('SELECT * FROM category');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function getSubCategory($category_id){
		$query = $this->db->query('SELECT * FROM subcategory WHERE category_id = "'. $category_id .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function getSupply($sub_id){
		$query = $this->db->query('SELECT * FROM supply WHERE sub_id = "'. $sub_id .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function getOffice($office_id){
		$query = $this->db->query('SELECT * FROM office WHERE sub_id = "'. $sub_id .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}