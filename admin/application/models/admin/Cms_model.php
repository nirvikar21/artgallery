<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Cms_model extends CI_Model { 
		
		function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		/* Get All Pages Record */
		public function getAllPageData($id='')
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from('tbl_pages');
			$query = $this->db->get();
			$result = $query->result();
			
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		/* Check Page Slug Exists Or Not */
		public function isExistsPage($page_slug)
		{  
			$this->db->select('page_slug'); 
			$this->db->from('tbl_pages');
			$this->db->where('page_slug',$page_slug);
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return true;
				}else{
				return false;
			}
		}
		
		/* Add Page Data */
		public function addPageData($data)
		{  
			$result = $this->db->insert('tbl_pages',$data); 
			//echo $this->db->last_query();die;
			if($result){
				return true;
				}else{
				return false;
			}
		}
		
		/* Update Page Data */
		public function updatePageData($data,$id)
		{  
			$this->db->where('id',$id);
			$result = $this->db->update('tbl_pages',$data); 
			if($result){
				return true;
				}else{
				return false;
			}
		}
		
		/* Delete Page */
		public function deletePage($id)
		{
			$this->db->where('id',$id);
			$result = $this->db->delete('tbl_pages');
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		/*  Add Banner Data */
		public function addData($data,$table)
		{  
			$result = $this->db->insert($table,$data); 
			//echo $this->db->last_query();die;
			if($result){
				return true;
				}else{
				return false;
			}
		}
		
		/* Update Banner Data */
		public function updateData($data,$id,$table)
		{  
			$this->db->where('id',$id);
			if($table!=""){
				$result = $this->db->update($table,$data); 		  
			}
			//echo $this->db->last_query();die;
			if($result){
				return true;
				}else{
				return false;
			}
		}
		
		/* Delete Banner */
		public function deleteData($id,$table)
		{
			$this->db->where('id',$id);
			$result = $this->db->delete($table);
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function deleteExhibitionImageData($image,$exhibitionId,$table)
		{
			//echo $image; echo $exhibitionId; echo $table;die;
			$this->db->where('exhibition_id',$exhibitionId);
			$this->db->where('image',$image);
			$result = $this->db->delete($table);
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getListData($id='',$table,$orderby,$orderType)
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table); 
			$this->db->order_by($orderby,$orderType);
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function getExhibitionImage($id='',$table)
		{  
			if($id != ''){
				$this->db->where('exhibition_id',$id);
			}
			$this->db->select('image'); 
			$this->db->from($table); 
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
				//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getExhibitionSelectImage($id='',$table)
		{  
			if($id != ''){
				$this->db->where('exhibition_id',$id);
			}
			$this->db->select('image'); 
			$this->db->from($table); 
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getSubListData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('cat_id ',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table); 
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		
		public function getContactListData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table); 
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getIndustryData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table); 
			$this->db->order_by('id','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getFunctionalAreaData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table); 
			$this->db->order_by('id','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getOrderData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table);
			$this->db->where('status !=', 'close');
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getCloseData($id='',$table)
		{  
			
			$this->db->select('*'); 
			$this->db->from($table);
			$this->db->where('status', 'close');
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function updatePriorityData($val,$id='',$table)
		{  
			$data = array(
			'priority'  => $val,
			);
			$this->db->where('id',$id);
			$result = $this->db->update($table,$data);
			
			//echo $this->db->last_query();die;		
			if($result){
				return true;
				}else{
				return false;
			}
		}
		public function getProductDetails($id='',$table)
		{  
			if($id != ''){
				$this->db->where('order_id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table);		
			$this->db->order_by('id','DESC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		
		public function getOrderListData($rider,$order_date)
		{  
			$this->db->select('o.*,ar.rider_id,r.rider_name'); 
			$this->db->from('tbl_orders as o');
			$this->db->join('tbl_assign_riders as ar','ar.order_id=o.id','inner');
			$this->db->join('tbl_riders as r','r.id=ar.rider_id','inner');		
			$this->db->order_by('o.id','DESC');
			if($rider != ''){
				$this->db->where('r.id',$rider);
			}
			if($order_date != ''){
				$this->db->where('o.added_date',$order_date);
			}
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getPaymentData()
		{  
			$this->db->select('p.*,u.*,p.id as pytm_id,p.status as pstatus'); 
			$this->db->from('tbl_payment_info as p');
			$this->db->join('tbl_users as u','u.id=p.users_id','inner'); 
			$this->db->order_by('p.id','DESC'); 
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function addMetaData($metaDetails,$slug)
		{
			$data = $this->getMetaDetails($slug);
			if($data){
				$this->db->where('slug',$slug);
				$result = $this->db->update('ichi_meta_data',$metaDetails);
				}else{
				$result = $this->db->insert('ichi_meta_data',$metaDetails);
			}
			
			if($result)
			return true;
			else
			return false;
		}
		
		/* Get Meta Data */
		public function getMetaDetails($slug)
		{  
			$this->db->where('slug',$slug);
			$this->db->select('*'); 
			$this->db->from('ichi_meta_data'); 
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function getHomeSettingData($id=null)
		{  
			if($id!=''){
				$this->db->where('id',$id);
				
			}
			$this->db->select('*'); 
			$this->db->from('tbl_career_network'); 
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function addHomeSettingData($homeData,$id)
		{
			if($id!=''){
				$this->db->where('id',$id);
				$result = $this->db->update('tbl_career_network',$homeData);
			}
			if($result)
			return true;
			else
			return false;
		}
		
		public function getSettingfooterData($id=null)
		{
			if($id!=''){
				$this->db->where('id',$id);
				
			}
			$this->db->select('*'); 
			$this->db->from('tbl_setting'); 
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
			}else{
			return false;
		}
	}
	
	public function check_password($oldPassword='',$table)
	{  
		if($oldPassword != ''){
			$this->db->where('Psw',md5($oldPassword));
			$this->db->where('Email',$_SESSION['adminDetails']['logEmail']);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		$query = $this->db->get();
		return ($query->num_rows());
	}
	public function getAutoAtrist($id='')
	{  
		if($id != ''){
			$this->db->like('name',$id);
		}
		$this->db->select('*'); 
		$this->db->from('tbl_artist');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query();die;
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	public function getSerchAtrist($id)
	{	
		if($id != ''){
			$this->db->where('artist',$id);
			$this->db->select('*');
			$this->db->from('tbl_art_gallery');
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
			}else{
				return false;
			}
		}
	}
	
	public function getSerchCategory($id)
	{	
		if($id != ''){
			$this->db->where('category',$id);
			$this->db->select('*');
			$this->db->from('tbl_art_gallery');
			$query = $this->db->get();
			$result = $query->result();
			if($result){
				return $result;
			}else{
				return false;
			}
		}
	}
}				