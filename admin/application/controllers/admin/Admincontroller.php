<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admincontroller extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/admin_model');		
		$this->load->model('admin/cms_model');
	}
	
	/* For Show Dashboard */
	public function index()
	{
		
		$data['header'] = $this->load->view('admin/common/admin_header'); 
		$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');        
		//$data['totalUser']=$this->admin_model->totalUser();
		//$data['totalJob']=$this->admin_model->totalJob();
		//$data['totalEmployer']=$this->admin_model->totalEmployer();
		
		$this->load->view('admin/dashboard', $data);
		$data['footer'] = $this->load->view('admin/common/admin_footer'); 
	}
	public function manageUserAccess(){
		$data['header'] = $this->load->view('admin/common/admin_header'); 
		$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
        $data['accessUserData'] = $this->cms_model->getListData('','tbl_admin');
		//echo"<pre>";print_r($data['accessUserData']);die;
		$this->load->view('admin/user_access',$data); 
		$data['footer'] = $this->load->view('admin/common/table-footer');
		
	}
	public function addUserAccess($id=''){
		
		
		if(isset($_POST['Submit']))
		{
			//echo"<pre>";print_r($_POST);die;
			$Name=$this->input->post('Name');
			$Email=$this->input->post('Email');
			$Psw=md5($this->input->post('Psw'));
			$permissions = serialize($this->input->post('rpermissions'));
			$roleid=$this->input->post('admin_type');

			if($id != ''){
				$data = array(
					'Name'=>$Name,
					'Email'=>$Email,
					'permissions'  => $permissions,
				);
				//echo"<pre>";print_r($data);die;
				$result = $this->cms_model->updateData($data,$id,'tbl_admin');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Admin updated successfully.');
					redirect('admin/manage-user-access','refresh');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
				}
			}else{
				$data = array(
					'Name'=>$Name,
					'Email'=>$Email,
					'Psw'=>$Psw, 
					'permissions'  => $permissions,
				);
				//echo"<pre>";print_r($data);die("ddddd");
				$result = $this->cms_model->addData($data,'tbl_admin');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Admin added successfully.');
					redirect('admin/manage-user-access','refresh');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
				}
				
			}
		}
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			$this->load->view('admin/add-access-users', $data);
			$data['footer'] = $this->load->view('admin/common/editor-footer'); 
		
	}	
}