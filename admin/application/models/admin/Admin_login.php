<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model { 

	public function __construct() 
	{
		parent::__construct(); 
		$this->load->database();
	}
	
	/* insert user login */
	public function loginAdmin($email,$pass)
	{  
		//echo $email;
		$password = md5($pass);
		$this->db->select('*'); 
		$this->db->from('tbl_admin');
		$this->db->where('Email',$email);
		$this->db->where('Psw',$password);
		$query = $this->db->get();
		$result = $query->result();
	    if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	
	
}