<?php 
if(!function_exists('is_logged_in'))
{
    function is_logged_in()
    {
		$CI =& get_instance();
		$is_logged_in = $CI->session->userdata('userSessionDetails');
		//print_r($is_logged_in);
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('login');die();
		}
	}
}
function getArtistName($id){
	$CI = &get_instance();
	$CI->db->select('name');
	$CI->db->from('tbl_artist');
	$CI->db->where('id',$id);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	$artistname=$result[0]->name;
	if ($result > 0) {
		return $artistname;
	}else{
		return false;
	}
}

	function ImageExist($image,$exhibitionId){
		$CI = &get_instance();
		$CI->db->select('count(*) as Cnt'); 
		$CI->db->from('tbl_exhibition_image');
		$CI->db->where('image',$image);
		$CI->db->where('exhibition_id',$exhibitionId);
		$query = $CI->db->get();
		$result = $query->result();
		//print_r($CI->db->last_query());  die;
		return $result;
	}

function getCategory($catId){
	$CI = &get_instance();
	$CI->db->select('id,category_name');
	$CI->db->from('tbl_categories');
	$CI->db->where('id',$catId);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	if ($result > 0) {
		return $result;
	}else{
		return false;
	}
}
function getCategoryName($id){
	$CI = &get_instance();
	$CI->db->select('category');
	$CI->db->from('tbl_category');
	$CI->db->where('id',$id);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	if ($result > 0) {
		return $result;
	}else{
		return false;
	}
}
function getArtistImgCount($Id){
	$CI = &get_instance();
	$CI->db->select('count(*) as ImageCount');
	$CI->db->from('tbl_art_gallery');
	$CI->db->where('artist',$Id);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	$arrCount=$result[0]->ImageCount;
	if ($result > 0) {
		return $arrCount;
	}else{
		return false;
	}
}
function excerpt($content, $limit) {
  $excerpt = explode(' ', $content, $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


function sendMail($to,$subject,$message,$attachment,$attachment1){
	$CI =& get_instance();
	$from = "sc@chawla-artgallery.com";
	$to = $to;
	$CI->load->library('email');
	$config['charset'] = 'iso-8859-1';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';
	$CI->email->initialize($config);
	$CI->email->from($from, 'Chawla Art Gallery');
	$CI->email->to($to);
	$CI->email->subject($subject);
	$CI->email->message($message);
	if (!empty($_FILES['file'])) {                
      $CI->email->attach($attachment);
	  $CI->email->attach($attachment1);	  
    }
	
    $CI->email->send();
	$CI->email->clear(TRUE);
}

function getSetting(){
	$CI = &get_instance();
	$CI->db->select('*');
	$CI->db->from('tbl_orders');
	$query =  $CI->db->get();
	$result =$query->num_rows();
	if ($result > 0) {
		return $result;
	}else{
		return false;
	}
}	
	


function getMetaData(){
	$CI = &get_instance();
	
	$slug=($CI->uri->segment('1')!="")?$CI->uri->segment('1'):'home';
	$CI->db->select('meta_title,meta_keyword,meta_description');
	$CI->db->from('tbl_pages');
	$CI->db->where('page_slug',$slug);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	if ($result > 0) {
		return $result;
	}else{
		return false;
	}
}	

function getOthers($artist_id, $id){
	$CI = &get_instance();
	$CI->db->select('*');
	$CI->db->from('tbl_art_gallery');
	$CI->db->where('artist',$artist_id);
	$CI->db->where('id !=',$id);
	$query =  $CI->db->get();
	$result = $query->result();
	//print_r($CI->db->last_query());  die;
	if ($result > 0) {
		return $result;
	}else{
		return false;
	}
}	
?>