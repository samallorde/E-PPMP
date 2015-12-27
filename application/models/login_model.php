<?php

class Login_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function validateAccount($id, $password)
	{
		$query = $this->db->query('SELECT user.id, user.name, user.position, office.office_name, office.budget_id FROM user JOIN office ON user.office_id = office.id WHERE user.id = "'. $id .'" AND user.password = "'. $password .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}