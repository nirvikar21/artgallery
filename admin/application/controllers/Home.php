<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('text');
			$this->load->library('session');
			$this->load->helper('captcha');
            $this->load->helper('user');			
			$this->load->model('home_model');
		}
		
		public function index()
		{	
			$data=array();
			$data['page']="home";
			$data['header'] = $this->load->view('common/front_header',$data);
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['categoryData'] = $this->home_model->getListData('','tbl_categories');
			$data['artPantingData'] = $this->home_model->getArtistListData('1','tbl_art_gallery','4','Home');
			$data['artSculpturesData'] = $this->home_model->getArtistListData('2','tbl_art_gallery','4','Home');
			$data['artLithographData'] = $this->home_model->getArtistListData('3','tbl_art_gallery','4','Home');
			$data['artWorksPaperData'] = $this->home_model->getArtistListData('4','tbl_art_gallery','4','Home');
			$data['artWorksPriceData'] = $this->home_model->getArtistListData('5','tbl_art_gallery','4','Home');
			//echo"<pre>";print_r($data['artWorksPriceData']); die;
			$data['aboutData'] = $this->home_model->getSlugData('about','tbl_pages');
			$data['bannerData'] = $this->home_model->getBanner('','tbl_banners');
			$this->load->view('index',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data); 
		}
		
		public function aboutus()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="about";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['pageData'] = $this->home_model->getSlugData('about','tbl_pages');
			$this->load->view('about',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function contactus()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="contact";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['pageData'] = $this->home_model->getSlugData('contact','tbl_pages');
			//echo"<pre>";print_r($data['pageData']);
			$this->load->view('contactus',$data); 
		
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function artist()
		{
			$data=array();
			$data['page']="artist";
			if(isset($_POST['searchData'])){
				//print_r($_POST); die;
				$artist = $_POST['artist'];
				$artist_id = $_POST['artist_id'];
				$category = $_POST['category'];
				$subcategory = $_POST['subcategory'];
				$data['artistData'] = $this->home_model->filterArtistsData($artist,$category,$subcategory,$artist_id);
				//print_r($data['artistData']); die;
			}else{
				$artist = $category = $subcategory = $artist_id = '';
				$data['artistData'] = $this->home_model->filterArtistsData($artist,$category,$subcategory,$artist_id);
			}
			
			$data['categoryData'] = $this->home_model->getListData('','tbl_categories');
			$data['artists1Data'] = $this->home_model->getList1Data('','tbl_artist');
			$data['artistsData2'] = $this->home_model->getList2Data('','tbl_artist');
			$data['artistsData3'] = $this->home_model->getList3Data('','tbl_artist');
			$data['artistsData4'] = $this->home_model->getList4Data('','tbl_artist');
			//echo"<pre>";print_r($data['artists1Data2']);die;
			$data['header'] = $this->load->view('common/front_header',$data);
			
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$this->load->view('artist',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function ArtistDetail($id)
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="artist";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['artistDetailsData'] = $this->home_model->getListData($id,'tbl_artist');
			$data['YouMayLike']=$this->home_model->artistart($id,'tbl_art_gallery','');
			//echo"<pre>";print_r($data['YouMayLike']);
			$this->load->view('artist-detail',$data); 
		
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function ArtDetail($id)
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['artDetailsData'] = $this->home_model->getListData($id,'tbl_art_gallery');
			$data['YouMayLike']=$this->home_model->YouMayLike($id,'tbl_art_gallery','4');
			//echo"<pre>";print_r($data['pageData']);
			$this->load->view('art-detail',$data); 
		
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function Press()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="press";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['pressData'] = $this->home_model->getPress('','tbl_gallery');
			$this->load->view('press',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function exhibition()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="exhibition";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['exhibitionData'] = $this->home_model->getExhibitionData('exhibtion','tbl_exhibition');
			//echo"<pre>";print_r($data['exhibitionData']);die;
			$this->load->view('exhibition',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function exhibitionDetails($id)
		{
			
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="exhibition-details";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['exhibitionData'] = $this->home_model->getExhibitionImageData($id,'tbl_exhibition_image');
			$data['exhibition'] = $this->home_model->getListData($id,'tbl_exhibition');
			//echo"<pre>";print_r($data['exhibition']);die;
			$this->load->view('exhibition-details',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function ArtFairs()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="art-fair";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['exhibitionData'] = $this->home_model->getExhibitionData('artfairs','tbl_exhibition');
			$this->load->view('artfairs',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function artFairDetails($id)
		{
			
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['exhibitionData'] = $this->home_model->getartFairImageData($id,'tbl_exhibition_image');
			//echo"<pre>";print_r($data['exhibitionData']);die;
			$this->load->view('exhibition-details',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		public function Blog()
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="blog";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['blogData'] = $this->home_model->getListData('','tbl_blog');
			$this->load->view('blog',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function BlogDetail($id)
		{
			$data=array();
			$data['header'] = $this->load->view('common/front_header',$data);
			$data['page']="blog";
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 5);
			$values = array(
				'word' => $captcha,
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '290',
                'font_path' => base_url() .'captcha/font/VerdanaBold.ttf',
				'font_size'   => 40,
                'img_height' => 65,
                'expiration' => 7200
            );
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['image'] = $datas['word'];
			
			$data['blogDetailsData'] = $this->home_model->getListData($id,'tbl_blog');
			$this->load->view('blog-detail',$data); 
			$data['footer'] = $this->load->view('common/front_footer',$data);
		}
		
		public function SubmitQuery(){
			
			$this->session->set_flashdata('adminSuccess','<strong>Well done!</strong> Message Send Successfully.');
			redirect('contactus','refresh');
		}
		
		public function NewsLetter()
		{
			$email = $this->input->post('email'); 
			$data['newsletterData'] = $this->home_model->isEmailExist($email,'tbl_newsletter');
			if($data['newsletterData'][0]->emailcnt ==0){
				$data = array(
					'email'    => $email, 
					'status'  => '1',
					'added_date'=> date('Y-m-d h:s:i')
				);
				$this->home_model->addData($data,'tbl_newsletter');
				echo"1";
			}else{
				echo"0";
			}
			die;
		}
		
		public function getArtist()
		{
			//echo"<pre>";print_r($_POST);die;
			$artist=$_POST['id'];
			$data['ArtistData'] = $this->home_model->getAutoAtrist($artist);
			if($data['ArtistData']!=""){
				foreach($data['ArtistData'] as $val){ ;
					$Id = $val->id;
					$name = strip_tags($val->name);
					$response[] = array("label"=>$name,"id"=>$Id);
				}
				echo json_encode($response);
			}	
		}
		
		public function pageContent($slug='')
		{
			
			if($slug !=''){
				$data=array();
				$data['ContData'] = $this->home_model->getPageData($slug,'tbl_pages');
				
				$data['header'] = $this->load->view('common/front_header',$data);
				if(empty($data['ContData'])){
					redirect(base_url());
				}else{
					$this->load->view('page-content',$data);
				}
				$data['SettingData'] = $this->home_model->getSettingData();
				$data['footer'] = $this->load->view('common/front_footer',$data); 
			}else{
				redirect(base_url());
			}
			
		}
	
		public function searchArtist()
		{
			//echo"<pre>";print_r($_POST);die;
			$artist = $_POST['keyword'];
			$artistData = $this->home_model->getAutoAtrist($artist);
			if($artistData){
				foreach($artistData as $val){ ;
					$Id = $val->id;
					$link = base_url('artist-details/'.$val->id);
					$name = strip_tags($val->name);
					$response[] = array("label"=>$name,"id"=>$Id,"link"=>$link);
				}
				echo json_encode($response);
			}	
		}
		
		public function searchResult()
		{
			$msg='';	
			
			$artistid=@$_POST['Artist'];
			$category=@$_POST['category'];
			$artist = $this->home_model->getSerchAtrist($artistid,$category);
			//echo"<pre>";print_r($artist);
			if(isset($artist) && $artist!=""){
				foreach($artist as $val){
				$url=base_url('artist-details/'.$val->id);
				$name=$val->name;
				$imageCount= getArtistImgCount($val->id);
				 $msg.='<div class="col-md-3 col-xs-6 art-list-pad-right"><div class="job-featured"><div class="content"><h3><a href="'.$url.'">'.$name.'</a><span>('.$imageCount.')</span></h3></div></div></div>';
				}
			}
			echo $msg;die;
		}
			
		public function makeEnquery(){
			if ($_POST['captchavalid'] == $_POST['captcha']) {
				if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){
					// Submitted form data
					$name   = $_POST['name'];
					$email  = $_POST['email'];
					$mobile  = $_POST['mobile'];
					$city  = $_POST['city'];
					$message= $_POST['message'];
					$data = array(
						'name'    => $name,
						'email'   => $email,
						'mobile'  => $mobile,
						'city'    => $city,
						'message' => $message,	
						'added_date'=> date('Y-m-d h:s:i')
					);
					//$this->home_model->addData($data,'tbl_enquery');
					/*
					 * Send email to admin
					 */
					$to     = 'yogesh@radiantwebtech.com';
					$subject= 'Contact Request Submitted';
			
					$htmlContent = '
					<h4>Contact request has submitted at Chawla Art Gallery, details are given below.</h4>
					<table cellspacing="0" style="width: 300px; height: 200px;">
						<tr style="background-color: #e0e0e0;">
							<th>Name:</th><td>'.$name.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Email:</th><td>'.$email.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Mobile:</th><td>'.$mobile.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>City:</th><td>'.$city.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Message:</th><td>'.$message.'</td>
						</tr>
					</table>';
				
					// Set content-type header for sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers .= 'From: Chawla Art Gallery <sender@example.com>' . "\r\n";
					if(mail($to,$subject,$htmlContent,$headers)){
						$status = 'ok';
					}else{
						$status = 'err';
					}
					echo $status;die;
				}
			}else{
				echo"invalid";die;
			}
		}
		
		public function sellEnquery(){
			//echo"<pre>";print_r($_POST);print_r($_FILES);die;
			if ($_POST['captchavalid'] == $_POST['captcha']) {
				if(isset($_FILES['file']))
				{
					$config['upload_path'] = 'assets/uploads/enquery/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('file'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$attched_file= FCPATH.'assets/uploads/enquery/'.$imageArray['file_name'];
					} 
				}
				
				if(isset($_FILES['sell_profile']))
				{
					$config['upload_path'] = 'assets/uploads/enquery/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('sell_profile'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$attched_file1= FCPATH.'assets/uploads/enquery/'.$imageArray['file_name'];
					} 
				}
			
				if(!empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)){
    
					// Submitted form data
					$name   = $_POST['name'];
					$email  = $_POST['email'];
					$mobile = $_POST['mobile'];
					$city	= $_POST['city'];
					$seller	= $_POST['seller'];
					$artist	= $_POST['artist'];
					$medium	= $_POST['medium'];
					$price	= $_POST['price'];
					$size	= $_POST['size'];
					
			
					$htmlContent = '
					<h4>Contact request has submitted at Chawla Art gallery, details are given below.</h4>
					<table cellspacing="0" style="width: 300px; height: 200px;">
						<tr style="background-color: #e0e0e0;">
							<th>Name:</th><td>'.$name.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Email:</th><td>'.$email.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Mobile:</th><td>'.$mobile.'</td>
						</tr>
						
						<tr style="background-color: #e0e0e0;">
							<th>City:</th><td>'.$city.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Medium:</th><td>'.$medium.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Size:</th><td>'.$size.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Expected Price:</th><td>'.$price.'</td>
						</tr>
					</table>';
					$to="nirvikar@radiantwebtech.com";
					$subject="Contact Request Submitted";
					$message=$htmlContent;
					//echo $attched_file;die;
					// Set content-type header for sending HTML email
					$mail=sendMail($to,$subject,$message,$attched_file,$attched_file1);
					
					if(!$mail){
						$status = 'ok';
					}else{
						$status = 'err';
					}
					echo $status;die;
				}
			}else{
				echo"invalid";die;
			}
			
		}
		
		public function CollectionEnquery(){
			//echo"<pre>";print_r($_POST);print_r($_FILES);die;
			if ($_POST['captchavalid'] == $_POST['captcha']) {
				if(isset($_FILES['collfile']))
				{
					$config['upload_path'] = 'assets/uploads/enquery/';  
					$config['allowed_types'] = 'jpg|jpeg|png|gif';  
					$this->load->library('upload', $config);  
					if(!$this->upload->do_upload('collfile'))  {  
						//$this->session->set_flashdata('adminError',$this->upload->display_errors());
					}else {  
						$imageArray = $this->upload->data(); 
						$attched_file= FCPATH.'assets/uploads/enquery/'.$imageArray['file_name'];
					} 
				}
				
				if(!empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)){
    
					// Submitted form data
					$name   = $_POST['name'];
					$email  = $_POST['email'];
					$mobile = $_POST['mobile'];
					$city	= $_POST['city'];
					$seller	= $_POST['seller'];
					$artist	= $_POST['artist'];
					$medium	= $_POST['medium'];
					$price	= $_POST['price'];
					$size	= $_POST['size'];
					
			
					$htmlContent = '
					<h4>Contact request has submitted at Chawla Art gallery, details are given below.</h4>
					<table cellspacing="0" style="width: 300px; height: 200px;">
						<tr style="background-color: #e0e0e0;">
							<th>Name:</th><td>'.$name.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Email:</th><td>'.$email.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Mobile:</th><td>'.$mobile.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>City:</th><td>'.$city.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Artist Name:</th><td>'.$artist.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>City:</th><td>'.$city.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Medium:</th><td>'.$medium.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Size:</th><td>'.$size.'</td>
						</tr>
						<tr style="background-color: #e0e0e0;">
							<th>Expected Price:</th><td>'.$price.'</td>
						</tr>
					</table>';
					$to="nirvikar@radiantwebtech.com";
					$subject="Contact Request Submitted";
					$message=$htmlContent;
					//echo $attched_file;die;
					// Set content-type header for sending HTML email
					$mail=sendMail($to,$subject,$message,$attched_file,$attched_file1);
					
					if(!$mail){
						$status = 'ok';
					}else{
						$status = 'err';
					}
					echo $status;die;
				}
			}else{
				echo"invalid";die;
			}
			
		}
		
		
		
		public function captcha_refresh()
		{
			$original_string = array_merge(range(1,9), range('A', 'Z'));
			$original_string = implode("", $original_string);
			$captcha = substr(str_shuffle($original_string), 0, 6);
			$values = array( 
				'word' => $captcha,
				'img_path' => 'captcha/',
				'img_url' => base_url() .'captcha/',
				'font_path' => base_url() . 'captcha/fonts/VerdanaBold.ttf',
				'img_width' => '290',
				'font_size'  => 40,
				'img_height' => 65,
				'expiration' => 7200
			);
			$datas = create_captcha($values); 
			$data['captchaD'] = $datas['word'];
			$data['img'] 	  = $datas['word'];
			echo json_encode($data); die;

		}
	}
	
	
