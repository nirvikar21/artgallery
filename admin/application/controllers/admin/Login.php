<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/admin_login');
	}
	
	public function index()
	{
		if($this->session->userdata('adminDetails') != ''){
			//$this->load->view('whz_admin/dashboard');
			redirect('admin/dashboard','refresh');
		}else{
			$this->load->view('admin/login');
		}
	}
	
	/* For validate form fields */
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	/* For check admin login */
	public function loginValidate()
	{
		//print_r($_POST);
		$adminEmail = $this->test_input($this->input->post('email'));
		$adminPass = $this->test_input($this->input->post('password'));
		
		if($adminEmail != '' && $adminPass != ''){
			$result = $this->admin_login->loginAdmin($adminEmail, $adminPass);
			if($result){
				$adminData = array(
					'logEmail' => $result[0]->Email,
					'logName' => $result[0]->Name,										'admin_type'=> $result[0]->id
				);
				$this->session->set_userdata('adminDetails', $adminData);  
				
				redirect('admin/banners','refresh');
			}else{
				$this->session->set_flashdata('loginMsg',"Wrong Email/Password.");
				redirect('admin','refresh');
			}
		}else{
			echo "Something went wrong, Please try again";
		}
		
	}
	
	public function adminLogout()
	{
		if($this->session->userdata('adminDetails') != ''){
			$adminData = array(
				'logEmail' => '',
				'logName' => '',
			);
			$this->session->unset_userdata($adminData);
			$this->session->set_userdata('adminDetails','');
			redirect('admin');
		}

	}
	
	
}