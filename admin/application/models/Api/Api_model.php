<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model { 
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	public function getListData($id='',$table)
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
	
	/* Get All Record */
	public function getData($table, $id='', $limit='10')
	{  
		if($id != ''){
			$this->db->where('id',$id);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		//$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		$result = $query->result();
	    if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	/* Get All Record */
	public function getOrderData($table, $id='', $limit='10')
	{  
		if($id != ''){
			$this->db->where('id',$id);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		$this->db->where('status',1);
		$this->db->order_by('priority','ASC');
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query(); die;
	    if($result){
			return $result;
		}else{
			return false;
		}
	}

	public function getAboutData($table, $slug='')
	{  
		if($slug != ''){
			$this->db->where('page_slug',$slug);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query(); die;
	    if($result){
			return $result;
		}else{
			return false;
		}
	}

	public function getContactData($table, $slug='')
	{  
		if($slug != ''){
			$this->db->where('page_slug',$slug);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query(); die;
	    if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	/* Get All Record */
	public function getActiveData($table, $id='', $limit='10')
	{  
		if($id != ''){
			$this->db->where('id',$id);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		$result = $query->result();
	    if($result){
			return $result;
		}else{
			return false;
		}
	}

	
	
	

	public function updateData($table, $data, $id)
	{
		$this->db->where('id',$id);
		$result = $this->db->update($table, $data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	/* Add Records */
	public function addData($data1,$table)
	{  
		$result = $this->db->insert($table,$data1); 
		//echo $this->db->last_query();die;
		if($result){
			return true;
			}else{
			return false;
		}
	}
	

	/* Get page Data */
	public function getPageData($table, $slug)
	{
		$this->db->where('page_slug',$slug);
		$this->db->where('status',1);
		$this->db->select('*'); 
		$this->db->from($table);
		$query = $this->db->get();
		$result = $query->result();
	    if($result){
			return $result;
		}else{
			return false;
		}
	}

	public function getArtistListData($id='',$table,$limit,$Home)
		{  
			if($id != ''){
				$this->db->where('category',$id);
			}
			if($Home != ''){
				$this->db->where('show_on_home','1');
			}
			$this->db->select('ag.*,a.name'); 
			$this->db->from($table ." as ag");
			$this->db->join('tbl_artist as a','a.id=ag.artist','inner');
			$this->db->order_by('order','ASC');
			$this->db->limit($limit);
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();//die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}

	public function getArtDetail($id='',$table)
	{  
		if($id != ''){
			$this->db->where('tbl_art_gallery.id',$id);
		}
		$this->db->select('*,tbl_subcategories.subcat_name'); 
		$this->db->from($table);
		$this->db->join('tbl_artist', 'tbl_art_gallery.artist = tbl_artist.id');
		$this->db->join('tbl_subcategories', 'tbl_art_gallery.subcategory = tbl_subcategories.id');
		$this->db->order_by('order','ASC');
		
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query();//die;
		if($result){
			return $result;
			}else{
			return false;
		}
	}
	
	public function getNewsDetail($table, $id='')
	{  
		if($id != ''){
			$this->db->where('id',$id);
		}
		$this->db->select('*'); 
		$this->db->from($table);
		//$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		$result = $query->result();
	    if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	public function getList1Data($id='',$table)
		{  
			$this->db->where("name LIKE 'A%' OR name LIKE 'B%' OR name LIKE 'C%' OR name LIKE 'D%' OR name LIKE 'E%' OR name LIKE 'F%' OR name LIKE 'G%' OR name LIKE 'H%'");
			$this->db->select('id,name'); 
			$this->db->from($table);
			$this->db->order_by('name','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function getList2Data($id='',$table)
		{  
			$this->db->where("name LIKE 'I%' OR name LIKE 'J%' OR name LIKE 'K%' OR name LIKE 'L%' OR name LIKE 'E%' OR name LIKE 'M%' OR name LIKE 'N%' OR name LIKE 'O%'OR name LIKE 'P%'");
			$this->db->select('id,name'); 
			$this->db->from($table);
			$this->db->order_by('name','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//	echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		
		public function getList3Data($id='',$table)
		{  
			$this->db->where("name LIKE 'Q%' OR name LIKE 'R%' OR name LIKE 'S%'");
			$this->db->select('id,name'); 
			$this->db->from($table);
			$this->db->order_by('name','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//	echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function getList4Data($id='',$table)
		{  
			$this->db->where(" name LIKE 'T%' OR name LIKE 'U%' OR name LIKE 'V%' OR name LIKE 'W%'OR name LIKE 'X%'OR name LIKE 'Y%' OR name LIKE 'Z%'");
			$this->db->select('id,name'); 
			$this->db->from($table);
			$this->db->order_by('name','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}

		public function getArtistDetail($id='',$table)
		{
			if($id != ''){
				$this->db->where('id',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table);
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
			}else{
				return false;
			}	
		}
		
		public function getExhibitionData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('category',$id);
			}
			$this->db->select('*'); 
			$this->db->from($table);
			$this->db->order_by('priority','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}
		public function getArtFairData($id='',$table)
		{  
			if($id != ''){
				$this->db->where('category',$id);
			}
			$this->db->select("*,DATE_FORMAT(start_date, '%d-%b-%Y') as st_date,DATE_FORMAT(end_date, '%d-%b-%Y') as ed_date"); 
			$this->db->from($table);
			$this->db->order_by('priority','ASC');
			$query = $this->db->get();
			$result = $query->result();
			//echo $this->db->last_query();die;
			if($result){
				return $result;
				}else{
				return false;
			}
		}

		public function getArtistArtData($id='',$table)
	{  
		if($id != ''){
			$this->db->where('artist',$id);
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
	
}	