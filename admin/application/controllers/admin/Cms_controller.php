<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Cms_controller extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('admin/cms_model');
		}
		
		/* For validate form fields */
		public function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		/* For Show All Pagest */
		public function AllBanners()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['banners'] = $this->cms_model->getListData('','tbl_banners',$orderby='',$orderType='');	
			$this->load->view('admin/banner', $data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}

		public function AddBanners($id='')
		{
			if(isset($_POST['addBanner']))
			{  
				$title = $this->test_input($this->input->post('title')); 
				$description = $this->test_input($this->input->post('description'));
				$url_link 	 =  $this->input->post('url_link');
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update'));
				$m_image_update = $this->test_input($this->input->post('m_image_update'));
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/images/banner_images/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/images/banner_images/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
					}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
					}else{
					$testimonial_image = '';
				}
				
				if(isset($_FILES['m_image']))
				{
					$config['upload_path'] = 'assets/images/banner_images/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('m_image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$m_image = 'assets/images/banner_images/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($m_image) && $m_image != ''){
					$image = $image;
					}else if(isset($m_image_update) && $m_image_update != ''){
					$m_image = $m_image_update;
					}else{
					$m_image = '';
				}
				$data = array(
					
					'title'  => $title, 
					'description'  => $description,
					'url_link'  => $url_link,
					'status'	=> $status,
					'image'=> $image,
					'm_image'=> $m_image
				);
				if($id != ''){
					
					$result = $this->cms_model->updateData($data,$id,'tbl_banners');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> New Banner updated successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
					$result = $this->cms_model->addData($data,'tbl_banners');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> New Banner added successfully.');
					}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
					
				}
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['newBannerData'] = $this->cms_model->getListData($id,'tbl_banners',$orderby='',$orderType=''); 
			}
			$this->load->view('admin/add-banner', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteBanner($id)
		{
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_banners');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Banner deleted successfully.');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Banner not deleted, please try again.');
				}
			}
			redirect('admin/banners','refresh');
		}
		
		public function AllArtist()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['artists'] = $this->cms_model->getListData('','tbl_artist',$orderby='name',$orderType='ASC');	
			$this->load->view('admin/artist', $data); 
			$data['footer'] = $this->load->view('admin/common/table-footer'); 
		}
		
		public function AddArtist($id='')
		{
			if(isset($_POST['addArtist']))
			{  
				//echo"<pre>";print_r($_POST);die;
				$name = $this->test_input($this->input->post('name')); 
				$mobile = $this->test_input($this->input->post('mobile')); 
				$city = $this->test_input($this->input->post('city'));
				$born = $this->test_input($this->input->post('born'));
				$description = $this->input->post('description');				
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update'));
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/images/artist_images/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/images/artist_images/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
					}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
					}else{
					$image = '';
				}
				$data = array(
					
					'name'    => $name, 
					'mobile'  => $mobile,
					'city'    => $city,
					'born'    => $born,
					'description'  => $description,
					'status'  => $status,
					'image'   => $image,
					'added_date'=> date('Y-m-d h:s:i')
					);
				if($id != ''){
					
					$result = $this->cms_model->updateData($data,$id,'tbl_artist');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Artist updated successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
					$result = $this->cms_model->addData($data,'tbl_artist');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Artist added successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
					
				}
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['artistData'] = $this->cms_model->getListData($id,'tbl_artist',$orderby='',$orderType='',$orderType); 
			}
			$this->load->view('admin/add-artist', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteArtist($id)
		{
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_artist');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Artist deleted successfully.');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Artist not deleted, please try again.');
				}
			}
			redirect('admin/artist','refresh');
		}
		
		public function allCategory()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['categoryData'] = $this->cms_model->getListData('','tbl_categories',$orderby='',$orderType='');
			$this->load->view('admin/category',$data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function addCategory($id='')
		{
			if(isset($_POST['addCategory']))
			{
				$category_name = $this->test_input($this->input->post('category_name'));
				$size = $this->test_input($this->input->post('size'));
				$priority = $this->get_length('tbl_categories');
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update'));
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/images/category_images/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$image = $imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
					}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
					}else{
					$image = '';
				}
				
				if($id != ''){
					$data = array(
					'image'   => $image,
					'category_name'  => $category_name,
					'size'  => $size,
					'status'	=> $status,
					'added_date'=> date('Y-m-d h:s:i')
					
					);
					$result = $this->cms_model->updateData($data,$id,'tbl_categories');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Category updated successfully.');
						redirect('admin/category','refresh');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
					$data = array(
					'category_name'  => $category_name,
					'size'  => $size,
					'image'   => @$image,
					'status'	=> $status,
					'added_date'=> date('Y-m-d h:s:i')
					
					);	
					$result = $this->cms_model->addData($data,'tbl_categories');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Category added successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
					
				}
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['categoryData'] = $this->cms_model->getListData($id,'tbl_categories',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-category', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteCategory($id)
		{
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_categories');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Category deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Category not deleted, please try again.');
				}
			}
			redirect('admin/category','refresh');
		}
		
		public function allSubCategory()
		{
		
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['subcategoryData'] = $this->cms_model->getListData('','tbl_subcategories',$orderby='',$orderType='');
			$this->load->view('admin/subcategory',$data); 
			$data['footer'] = $this->load->view('admin/common/table-footer'); 
		}
		
		public function addSubCategory($id='')
		{
			if(isset($_POST['addSubCategory']))
			{
				
				$cat_id = $this->test_input($this->input->post('cat'));
				$subcat_name = $this->test_input($this->input->post('subcat_name'));
				$status = $this->test_input($this->input->post('status'));
				
				if($id != ''){
					$data = array(
					'cat_id'  => $cat_id,
					'subcat_name'  => $subcat_name,
					'status'	=> $status,
					'added_date'=> date('Y-m-d h:s:i')
					
					);
					//print_r($data);die;
					$result = $this->cms_model->updateData($data,$id,'tbl_subcategories');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> SubCategory updated successfully.');
						redirect('admin/category','refresh');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
						}
					}else{
					$data = array(
						'cat_id'  => $cat_id,
						'subcat_name'  => $subcat_name,
						'status'	=> $status,
						'added_date'=> date('Y-m-d h:s:i')
					);
                     //print_r($data);die;   					
					$result = $this->cms_model->addData($data,'tbl_subcategories');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> SubCategory added successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
					
				}
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			$data['categoryData'] = $this->cms_model->getListData($id,'tbl_categories',$orderby='',$orderType='');
			if($id != ''){
				$data['subcategoryData'] = $this->cms_model->getListData($id,'tbl_subcategories',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-subcategory', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteSubCategory($id)
		{
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_subcategories');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Category deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Category not deleted, please try again.');
				}
			}
			redirect('admin/subcategory','refresh');
		}
		
		public function allArt()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['ArtData'] = $this->cms_model->getListData('','tbl_art_gallery',$orderby='',$orderType='');
			$this->load->view('admin/art',$data); 
			$data['footer'] = $this->load->view('admin/common/table-footer'); 
		}
		
		public function addArt($id='')
		{
			if(isset($_POST['addArtist']))
			{
				//echo"<pre>";print_r($_POST);die; //print_r($_FILES);
				$artist = $this->test_input($this->input->post('artist'));
				$category = $this->test_input($this->input->post('category'));
				$subcategory = $this->test_input($this->input->post('subcategory'));
				$size = $this->test_input($this->input->post('size'));
				$art_id = $this->test_input($this->input->post('art_id'));
				$year = $this->test_input($this->input->post('year'));
				$price = $this->test_input($this->input->post('price'));
				$usd_price = $this->test_input($this->input->post('usd_price'));
				$description = $this->input->post('description');
				$status = $this->test_input($this->input->post('status'));
				$show_on_home=$this->input->post('show_on_home');
				$order=$this->input->post('order');
				$image_update = $this->test_input($this->input->post('image_update'));
				
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/images/art_images/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/images/art_images/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
				}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
				}else{
					$image = '';
				}
				
				if($id != ''){
					$data = array(
						'artist'  => $artist,
						'category'  => $category,
						'subcategory'  => $subcategory,
						'size'  => $size,
						'art_id'  => $art_id,
						'year'  => $year,
						'price'  => $price,
						'usd_price'  => $usd_price,
						'description'  => $description,
						'profile_image'  => $image,
						'status'	=> $status,
						'order'	=> $order,
						'show_on_home'	=> $show_on_home,
						'added_date'=> date('Y-m-d h:s:i')
					);
					//print_r($data);die;
					    $result = $this->cms_model->updateData($data,$id,'tbl_art_gallery');
						if($result){
							$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Art updated successfully.');
							redirect('admin/art','refresh');
						}else{
							$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
						}
					}else{
					$data = array(
						'artist'  => $artist,
						'category'  => $category,
						'subcategory'  => $subcategory,
						'size'  => $size,
						'art_id'  => $art_id,
						'year'  => $year,
						'price'  => $price,
						'usd_price'  => $usd_price,
						'description'  => $description,
						'profile_image'  => $image,
						'status'	=> $status,
						'order'	=> $order,
						'added_date'=> date('Y-m-d h:s:i')
					);
                     //print_r($data);die;   					
					$result = $this->cms_model->addData($data,'tbl_art_gallery');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Art added successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
					
				}
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			$data['categoryData'] = $this->cms_model->getListData('','tbl_categories',$orderby='',$orderType='');
			$data['artistData'] = $this->cms_model->getListData('','tbl_artist',$orderby='',$orderType='');
			if($id != ''){
				$data['ArtData'] = $this->cms_model->getListData($id,'tbl_art_gallery',$orderby='',$orderType='');
				$data['subcatData'] = $this->cms_model->getSubListData(@$data['subcatData'][0]->subcategory,'tbl_subcategories');
				
			}
			$this->load->view('admin/add-art', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function ajax_subcat()
		{
			$data['subcatData'] = $this->cms_model->getSubListData($_POST['id'],'tbl_subcategories');
			//echo"<pre>";print_r($data['subcatData']);die;
			$option='<option value="">Select SubCategory</option>';
			if($data['subcatData']!=""){
				foreach($data['subcatData'] as $subcat){
					$option.='<option value="'.$subcat->id.'">'.$subcat->subcat_name.'</option>';
				}
			}
			echo $option;die;	
		}
		/* For Add New Page */
		public function allPage()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['pageData'] = $this->cms_model->getAllPageData('');
			$this->load->view('admin/pages', $data); 
			$data['footer'] = $this->load->view('admin/common/table-footer'); 
		}
		
		public function addPage($id='')
		{
			if(isset($_POST['add_page']))
			{
				$page_name = $this->test_input($this->input->post('page_name'));
				$page_title = $this->test_input($this->input->post('page_title'));
				$page_content = $this->input->post('page_content');
				$meta_title = $this->test_input($this->input->post('meta_title'));
				$meta_keyword = $this->test_input($this->input->post('meta_keyword'));
				$meta_description = $this->test_input($this->input->post('meta_description'));
				$status = $this->test_input($this->input->post('status'));
				$page_slug = strtolower(str_replace(' ','-',$page_name));
				$update_featured_image = $this->input->post('update_featured_image');
				$update_banner_image = $this->input->post('update_banner_image');
				
				if(isset($_FILES['banner_image']))
				{
					$config['upload_path'] = 'assets/uploads/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('banner_image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$banner_image = 'assets/uploads/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($banner_image) && $banner_image != ''){
					$banner_image = $banner_image;
					}else if(isset($update_featured_image) && $update_featured_image != ''){
					$banner_image = $update_banner_image;
					}else{
					$banner_image = '';
				}
				
				if(isset($_FILES['featured_image']))
				{
					$config['upload_path'] = 'assets/uploads/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('featured_image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$featured_image = 'assets/uploads/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($featured_image) && $featured_image != ''){
					$featured_image = $featured_image;
				}else if(isset($update_featured_image) && $update_featured_image != ''){
					$featured_image = $update_featured_image;
				}else{
					$featured_image = '';
				}
				
				
				if($id != ''){
					$data = array(
						'page_name'		 	=> $page_name,
						'page_title'		=> $page_title,
						'page_content'	 	=> $page_content,
						'featured_image' 	=> $featured_image,
						'banner_image' 	    => $banner_image,
						'status'		 	=> $status,
						'meta_title'	 	=> $meta_title,
						'meta_keyword'	 	=> $meta_keyword,
						'meta_description' 	=> $meta_description,
					);
					//echo"<pre>";print_r($data);die;
					if($this->cms_model->updatePageData($data,$id)){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Page updated successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
				}else{
					$data = array(
						'page_name'		 	=> $page_name,
						'page_title'		=> $page_title,
						'page_content'	 	=> $page_content,
						'featured_image' 	=> $featured_image,
						'banner_image' 	    => $banner_image,
						'status'		 	=> $status,
						'meta_title'	 	=> $meta_title,
						'meta_keyword'	 	=> $meta_keyword,
						'meta_description' 	=> $meta_description,
					);
					if($this->cms_model->addPageData($data)){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Page added successfully.');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
				}	
			}
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['pageData'] = $this->cms_model->getAllPageData($id);
			}
			$this->load->view('admin/add-page', $data);
			$data['footer'] = $this->load->view('admin/common/editor-footer'); 
		}
		
		/* For delete User */
		public function deletePage($id)
		{
			if($id != ''){
				$result = $this->cms_model->deletePage($id);
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Page deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Page not deleted, please try again.');
				}
			}
			redirect('admin/pages','refresh');
		}
		
		
		public function allGallery()
		{
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['pressData'] = $this->cms_model->getListData('','tbl_gallery',$orderby='',$orderType=''); 
			$this->load->view('admin/gallery',$data); 
			$data['footer'] = $this->load->view('admin/common/table-footer'); 
		}
		
		public function addGallery($id='')
		{
			if(isset($_POST['addPress']))
			{   
				$date = $this->test_input($this->input->post('datepicker'));
				$title = $this->test_input($this->input->post('title'));
				$newspaper = $this->test_input($this->input->post('newspaper'));
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update')); 
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/uploads/gallery/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/uploads/gallery/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
				}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
				}else{
					$image = '';
				}
				 
				if($id != ''){
						$data = array( 
						'title'	 => $title,
						'newspaper' => $newspaper,
						'status' => $status,
						'image'  => $image,
						'press_date'  => $date,						
						'added_date'=> date('Y-m-d h:s:i')
						);
					//echo"<pre>";print_r($data);die;
					$result = $this->cms_model->updateData($data,$id,'tbl_gallery');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Done!</strong>  gallery updated successfully.');
						redirect('admin/gallery','refresh');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
						$data = array( 
						'title'	=> $title,
						'status'	=> $status,
						'image'=> $image, 
						'press_date'  => $date,
						'added_date'=> date('Y-m-d h:s:i')
						);
					
						$result = $this->cms_model->addData($data,'tbl_gallery');
						if($result){
							$this->session->set_flashdata('adminSuccess','<strong>Done!</strong> gallery added successfully.');
							redirect('admin/gallery','refresh');
							}else{
							$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
						}
					}
				}
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['pressData'] = $this->cms_model->getListData($id,'tbl_gallery',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-gallery', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deletegallery($id){
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_gallery');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> not deleted, please try again.');
				}
			}
			redirect('admin/gallery','refresh');
		}
		
		public function allExhibition()
		{
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['pressData'] = $this->cms_model->getListData('','tbl_exhibition',$orderby='',$orderType=''); 
			$this->load->view('admin/exhibition',$data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function addExhibition($id='')
		{
			if(isset($_POST['addPress']))
			{   
				$start_date = $this->test_input($this->input->post('start_date'));
				$end_date = $this->test_input($this->input->post('end_date'));
				$category = $this->test_input($this->input->post('category'));
				$title = $this->test_input($this->input->post('title'));
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update')); 
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/uploads/exhibition/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/uploads/exhibition/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
				}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
				}else{
					$image = '';
				}
				 
				if($id != ''){
						$data = array( 
						'category'	 => $category,
						'title'	 => $title,
						'status' => $status,
						'image'  => $image,
						'start_date'  => $start_date,
						'end_date' =>$end_date,
						'added_date'=> date('Y-m-d h:s:i')
						);
					//echo"<pre>";print_r($data);die;
					$result = $this->cms_model->updateData($data,$id,'tbl_exhibition');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Done!</strong>  Exhibition updated successfully.');
						redirect('admin/exhibition','refresh');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
						$data = array( 
						'category'	 => $category,
						'title'	=> $title,
						'status'	=> $status,
						'image'=> $image, 
						'start_date'  => $start_date,
						'end_date' =>$end_date,
						'added_date'=> date('Y-m-d h:s:i')
						);
					
						$result = $this->cms_model->addData($data,'tbl_exhibition');
						if($result){
							$this->session->set_flashdata('adminSuccess','<strong>Done!</strong> Exhibition added successfully.');
							redirect('admin/exhibition','refresh');
							}else{
							$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
						}
					}
				}
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['pressData'] = $this->cms_model->getListData($id,'tbl_exhibition',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-exhibition', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteExhibition($id){
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_exhibition');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> not deleted, please try again.');
				}
			}
			redirect('admin/exhibition','refresh');
		}
		
		public function allBlog()
		{
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			$data['BlogData'] = $this->cms_model->getListData('','tbl_blog',$orderby='',$orderType='');
			//echo"<pre>";print_r($data['testimonialData']);die("dfdsfdsf");
			$this->load->view('admin/blog',$data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
	
	
		public function addBlog($id='')
		{
			if(isset($_POST['addBlog']))
			{
				//echo"<pre>";print_r($_FILES);print_r($_POST);die;
				$category = $this->test_input($this->input->post('category'));
				$title = $this->test_input($this->input->post('title'));
				$description = $this->input->post('description');
				$status = $this->test_input($this->input->post('status'));
				$image_update = $this->test_input($this->input->post('image_update'));
				if(isset($_FILES['image']))
				{
					$config['upload_path'] = 'assets/uploads/blog/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$image = 'assets/uploads/blog/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($image) && $image != ''){
					$image = $image;
				}else if(isset($image_update) && $image_update != ''){
					$image = $image_update;
				}else{
					$image = '';
				}
						
				if($id != ''){
					$data = array(
						'category'  => $category,
						'title'  => $title,
						'description'  => $description,
						'status'	=> $status,
						'image'=> $image,
						'added_date'=> date('Y-m-d h:s:i')
					);
					
					$result = $this->cms_model->updateData($data,$id,'tbl_blog');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Blog updated successfully.');
						redirect('admin/blog','refresh');
					}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
				}else{
						$data = array(
						'category'  => $category,
						'title'  => $title,
						'description'  => $description,
						'status'	=> $status,
						'image'=> $image,
						'added_date'=> date('Y-m-d h:s:i')
					);
					
					$result = $this->cms_model->addData($data,'tbl_blog');
					/*$data['NewsletterData'] = $this->cms_model->getNewsLetterListData('','tbl_newsletter');
					$data['userData'] = $this->cms_model->getNewsLetterListData('','tbl_users');
					$data['user']=array_merge($data['NewsletterData'],$data['userData']);
					foreach($data['user'] as $val){
						$arrVal[]=$val->email;
					}
					$ArrFinal=array_unique($arrVal,SORT_STRING);
					foreach($ArrFinal as $user){
						
					$message='<table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #fff;margin: 50px auto; font-family: Helvetica, Arial, sans-serif;    box-shadow: 0 2px 5px 0 rgba(0,0,0,.1);border: 1px solid #ddd;"><tbody><tr><td width="20" style="width: 20px; height: 20px;"></td><td style="height: 20px;"></td><td width="20" style="width: 20px; height: 20px;"></td></tr><tr><td width="20" style="width: 20px; margin: 0;padding: 0;"></td><td style="margin: 0;padding: 0; background:#f1f1f1;"><img src="'.base_url('assets/uploads/blog/'.$image).'" alt="FitMirchi Blog" style="width: 100%; margin: 0;padding: 0;"></td><td width="20" style="width: 20px; margin: 0;padding: 0;"></td></tr><tr><td style="width: 20px;margin: 0;padding: 0;"></td><td style="margin: 0;padding: 0;margin-bottom: 0;background: #a8c50e; display: block;text-align: center;color: #fff; padding: 10px 30px; text-transform: uppercase; font-size: 16px; font-weight: 600;">'.$category.'</td><td style="width: 20px;margin: 0;padding: 0;"></td></tr><tr><td style="width: 20px;"></td><td style="font-size: 26px; font-weight: 700; line-height: 32px; color: #3c3c3c; padding:20px 0;margin-bottom: 10px;">'.$title.'</td><td style="width: 20px;"></td></tr><tr><td style="width: 20px;"></td><td style="font-size: 15px; color: #777;line-height: 24px;">'.substr($description,"0","150").'</td><td style="width: 20px;"></td></tr><tr><td width="20" style="width: 20px; height: 40px;"></td><td style="text-align: left;"><a href="'.base_url('app/blog/'.strtolower(str_replace(' ','-',$title))).'" style="border: 1px solid #a8c50e; color: #a8c50e; text-transform: uppercase; text-decoration: none;padding: 10px 20px; display: inline-block; border-radius: 2px; font-size: 14px; font-weight: 600;margin-top: 20px;">Read Blog Details</a></td><td width="20" style="width: 20px; height: 40px;"></td></tr><tr><td width="20" style="width: 20px; height: 40px;"></td><td style="height: 40px;"></td><td width="20" style="width: 20px; height: 40px;"></td></tr></tbody></table>';
						///$to=$user->email
						sendMail($to=$user,$subject="New Blog Added by FitMirchi",$message);
					}*/
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Blog added successfully.');
					}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
					}
				}
			}
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['blogData'] = $this->cms_model->getListData($id,'tbl_blog',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-blog', $data);
			$data['footer'] = $this->load->view('admin/common/editor-footer'); 
		}
	
	
	
		public function deleteBlog($id)
		{
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_blog');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Blog deleted successfully.');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Page not deleted, please try again.');
				}
			}
			redirect('admin/blog','refresh');
		}
		public function allNewsletter()
		{
		
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['newsletterData'] = $this->cms_model->getListData('','tbl_newsletter',$orderby='',$orderType='');
			$this->load->view('admin/newsletter',$data); 
			$data['footer'] = $this->load->view('admin/common/table-footer');
		}
		function get_length($table)
		{
			$this->db->select('*');
			$this->db->from($table);
			$query = $this->db->get();
			return count($query->result_array())+1;
		}
		
		public function priority($val,$id,$table)
		{
			if($id != ''){
				$result = $this->cms_model->updatePriorityData($val,$id,$table);
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Priority updated successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Page not deleted, please try again.');
				}
			}
			redirect('admin/pages','refresh');
		}
		
		public function allTestimonial()
		{
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['testimonialData'] = $this->cms_model->getListData('','tbl_testimonial',$orderby='',$orderType='');
			//echo"<pre>";print_r($data['testimonialData']);die("dfdsfdsf");
			$this->load->view('admin/testimonial',$data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function addTestimonial($id='')
		{
			if(isset($_POST['addTestimonial']))
			{
				$name = $this->test_input($this->input->post('name'));
				$designation = $this->test_input($this->input->post('designation'));
				$city = $this->test_input($this->input->post('city'));
				$rating = $this->test_input($this->input->post('rating'));
				$description = $this->test_input($this->input->post('description'));
				$status = $this->test_input($this->input->post('status'));
				$testimonial_image_update = $this->test_input($this->input->post('testimonial_image_update'));
				$testimonial_logo_update = $this->test_input($this->input->post('testimonial_logo_update'));
				$showonpage = $this->test_input($this->input->post('showonpage'));
				if(isset($_FILES['testimonial_image']))
				{
					$config['upload_path'] = 'assets/uploads/testimonial/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('testimonial_image'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$testimonial_image = $imageArray['file_name'];
					} 
				}
				
				if(isset($testimonial_image) && $testimonial_image != ''){
					$testimonial_image = $testimonial_image;
				}else if(isset($testimonial_image_update) && $testimonial_image_update != ''){
					$testimonial_image = $testimonial_image_update;
				}else{
					$testimonial_image = '';
				}
				
				if(isset($_FILES['testimonial_logo']))
				{
					$config['upload_path'] = 'assets/uploads/testimonial/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('testimonial_logo'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
						}else {  
						$imageArray = $this->upload->data(); 
						$testimonial_logo = $imageArray['file_name'];
					} 
				}
				
				if(isset($testimonial_logo) && $testimonial_logo != ''){
					$testimonial_logo = $testimonial_logo;
				}else if(isset($testimonial_logo_update) && $testimonial_logo_update != ''){
					$testimonial_logo = $testimonial_logo_update;
				}else{
					$testimonial_logo = '';
				}
				
				if($id != ''){
						$data = array(
						'name'  => $name,
						'designation'  => $designation,
						'city'  => $city,
						'rating'  		=> $rating,
						'description'  => $description,
						'status'	=> $status,
						'testimonial_image'=> $testimonial_image,
						'testimonial_logo'=> $testimonial_logo,
						'showonpage' => $showonpage,
						'added_date'=> date('Y-m-d h:s:i')
						);
					//echo"<pre>";print_r($data);die;
					$result = $this->cms_model->updateData($data,$id,'tbl_testimonial');
					if($result){
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Testimonial updated successfully.');
						redirect('admin/testimonial','refresh');
						}else{
						$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Not updated. There may be some problem please try again.');
					}
					}else{
						$data = array(
						'name'  => $name,
						'designation'  	=> $designation,
						'city'  		=> $city,
						'rating'  		=> $rating,
						'description'  	=> $description,
						'status'		=> $status,
						'showonpage' => $showonpage,
						'testimonial_image'=> $testimonial_image,
						'added_date'=> date('Y-m-d h:s:i')
						
						);
					
						$result = $this->cms_model->addData($data,'tbl_testimonial');
						if($result){
							$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Testimonial added successfully.');
							redirect('admin/testimonial','refresh');
							}else{
							$this->session->set_flashdata('adminError','<strong>Sorry!</strong> There may be some problem please try again.');
						}
					}
				}
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar');
			if($id != ''){
				$data['testimonialData'] = $this->cms_model->getListData($id,'tbl_testimonial',$orderby='',$orderType='');
			}
			$this->load->view('admin/add-testimonial', $data);
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function deleteTestimonial($id){
			if($id != ''){
				$result = $this->cms_model->deleteData($id,'tbl_testimonial');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Testimonial deleted successfully.');
					}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Category not deleted, please try again.');
				}
			}
			redirect('admin/testimonial','refresh');
		}
		
		public function AddImages($id)
		{
			
			$data['header'] = $this->load->view('admin/common/admin_header'); 
			$data['sidebar'] = $this->load->view('admin/common/admin_sidebar'); 
			$data['pressData'] = $this->cms_model->getListData('','tbl_art_gallery',$orderby='',$orderType=''); 
			$data['exhibitionImageData'] = $this->cms_model->getExhibitionImage($id,'tbl_exhibition_image');
			//echo"<pre>";print_r($data['exhibitionImageData']);die;
			$data['id']=$id;
			$this->load->view('admin/add-image',$data); 
			$data['footer'] = $this->load->view('admin/common/admin_footer'); 
		}
		
		public function saveImages()
		{
			if(@$id != ''){
				
			}else{
				
				//echo"<pre>";print_r($_POST);die;
				if(isset($_POST['Images']) && $_POST['Images']!="")
				{	
					
					foreach($_POST['Images'] as $val){
						$count=ImageExist($val,$_POST['id']);
						if($count[0]->Cnt==0){
							$data = array(
								'exhibition_id'  => $_POST['id'],
								'image'=>$val,
								'added_date'=> date('Y-m-d h:s:i')
							);
							$result = $this->cms_model->addData($data,'tbl_exhibition_image');
						}
					}
					
						$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Recruiter added successfully.');
						redirect('admin/exhibition','refresh');
					
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry!</strong> Please select Images.');
					redirect('admin/add-image/'.$_POST['id'],'refresh');
				}
				
				
				
			}
		}
			
		public function getArtist()
		{
			//echo"<pre>";print_r($_POST);die;
			$artist=$_POST['id'];
			$data['ArtistData'] = $this->cms_model->getAutoAtrist($artist);
			if($data['ArtistData']!=""){
				foreach($data['ArtistData'] as $val){ ;
					$Id = $val->id;
					$name = strip_tags($val->name);
					$response[] = array("label"=>$name,"id"=>$Id);
				}
				echo json_encode($response);
			}	
		}
		
		public function searchResult()
		{
			$msg='';
			//echo"<pre>";print_r($_POST);die;			
			$artistid=@$_POST['Artist'];
			$exhibitionId=$_POST['exhibitionId'];
		   $data['exhibitionSelImageData'] = $this->cms_model->getExhibitionSelectImage($exhibitionId,'tbl_exhibition_image');
			if(isset($data['exhibitionSelImageData']) && $data['exhibitionSelImageData']!=""){		
				foreach(@$data['exhibitionSelImageData'] as $v){ 	
					$arrImage[]=$v->image;
				}
			}
			
			$artist = $this->cms_model->getSerchAtrist($artistid);
			//echo"<pre>";print_r($artist);
			if(isset($artist) && $artist!=""){
				$i=1;
				foreach($artist as $val){
					$artist=getArtistName($val->artist);
					if(in_array($val->id,@$arrImage)){
							$imgchecked="checked";
					}else{
						    $imgchecked="";
					}
				 $msg.='<tr>
						<td><input name="Images[]" type="checkbox" id="show_on_home'.$i.'" class="filled-in check showcheckbox" value="'.$val->id.'" '.$imgchecked.'/></td>
						<td><img src="'.base_url($val->profile_image ).'" class="img-thumbnail" style="height:60px" /></td>
						<td>'.@$artist.'</td>
						<td>';
						if (is_array(@$arrImage)) {	
							if(in_array(@$val->id,@$arrImage)){
				$msg.='<a href="'.base_url('admin/Cms_controller/deleteImage/'.$val->id.'/'.$exhibitionId).'" onclick="return confirm("Are you sure to delete this record?");">Delete</a>';
						}}
						$msg.='</td></tr>';
				$i++;
				}
			}
			echo $msg;die;
		}
		public function getSearch_by_category()
		{
			//echo"<pre>";print_r($_POST);die;
			$msg='';	
			$id=@$_POST['id'];
			$exhibitionId=$_POST['exhibitionId'];
			$artist = $this->cms_model->getSerchCategory($id);
			//echo"<pre>";print_r($artist);
			$data['exhibitionSelImageData'] = $this->cms_model->getExhibitionSelectImage($exhibitionId,'tbl_exhibition_image');
			
			if(isset($data['exhibitionSelImageData']) && $data['exhibitionSelImageData']!=""){		
				foreach(@$data['exhibitionSelImageData'] as $v){ 	
					$arrImage[]=$v->image;
				}
			}
			
			if(isset($artist) && $artist!=""){
				$i=1;
				foreach($artist as $val){
					$artist=getArtistName($val->artist);
					if(isset($arrImage) && $arrImage!=""){
						if(in_array($val->id,@$arrImage)){
							$imgchecked="checked";
						}else{
							$imgchecked="";
						}
					}
							
				$msg.='<tr>
						<td><input name="Images[]" type="checkbox" id="show_on_home'.$i.'" class="filled-in check showcheckbox" value="'.$val->id.'" '.$imgchecked.' /></td>
						<td><img src="'.base_url($val->profile_image ).'" class="img-thumbnail" style="height:60px" /></td><td>'.@$artist.'</td>
						<td>';
						if (is_array(@$arrImage)){	
							if(in_array(@$val->id,@$arrImage)){
						 $msg.='<a href="'.base_url('admin/Cms_controller/deleteImage/'.$val->id.'/'.$exhibitionId).'" onclick="return confirm("Are you sure to delete this record?");">Delete</a>';
						}}
				$msg.='</td></tr>';
				 $i++;
				}
			}
			
			echo $msg;die;
		}
		
		public function deleteImage($image,$exhibitionId){
			if($image != '' && $exhibitionId!=""){
				$result = $this->cms_model->deleteExhibitionImageData($image,$exhibitionId,'tbl_exhibition_image');
				if($result){
					$this->session->set_flashdata('adminSuccess','<strong><i class="fa fa-thumbs"></i></strong> Image deleted successfully.');
				}else{
					$this->session->set_flashdata('adminError','<strong>Sorry <i class="fa fa-exclamation"></i> </strong> Category not deleted, please try again.');
				}
			}
			redirect('admin/add-image/'.$exhibitionId,'refresh');
		}
	

}							