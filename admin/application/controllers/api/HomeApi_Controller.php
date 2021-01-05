<?php  
class HomeApi_Controller extends CI_Controller{
    public function __construct(){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		header("Content-Type: application/json");
		$rest_json = file_get_contents("php://input");
		$_POST = json_decode($rest_json, true);
        parent::__construct();
		$this->load->helper('url');
        //$this->load->helper('Crypto_helper');
		$this->load->model('Api/api_model');
		
    }
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	public function getBanner() 
	{
		/* Get all banners */
		$data = $this->api_model->getOrderData('tbl_banners');
		if($data){
			foreach($bannerData as $banner){ 
				//echo"<pre>";print_r($banner);die;
				$bannerArr[] = array(
					'url' => base_url().'assets/images/banner_images/'.$banner->image,  
					'id' => $banner->id,
					'alt' => $banner->title,
					'title' => $banner->title,
					'description' => $banner->description,
				);
			}
		}
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getPainting() 
	{
		/* Get all banners */
		$data = $this->api_model->getArtistListData('1','tbl_art_gallery','4','Home');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getSculptures() 
	{
		/* Get all banners */
		$data = $this->api_model->getArtistListData('2','tbl_art_gallery','4','Home');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getLithographs() 
	{
		/* Get all banners */
		$data = $this->api_model->getArtistListData('3','tbl_art_gallery','4','Home');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getWorks() 
	{
		/* Get all banners */
		$data = $this->api_model->getArtistListData('4','tbl_art_gallery','4','Home');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getArtDetail($id='')
	{
		$data=array();
		$data['artDetailsData'] = $this->api_model->getArtDetail($id,'tbl_art_gallery');
		//echo"<pre>";print_r($data);die;
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
		
	}
	
	public function getNewDetail($id='')
	{
		$data=array();
		$data['newDetailsData'] = $this->api_model->getNewsDetail('tbl_blog', $id);
		//echo"<pre>";print_r($data);die;
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
		
	}
	
	public function getContact() 
	{
		/* Get all banners */
		$contactData = $this->api_model->getContactData('tbl_pages','contact');
		if($contactData){
			foreach($contactData as $contact){
				$contactArr[] = array(
					'title' => $contact->page_title,
					'description' => $contact->page_content,
				);
			}
		}
		if($contactArr){
			$this->apiResponse('success', 200,$contactArr);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getAbout() 
	{
		/* Get all banners */
		$aboutData = $this->api_model->getAboutData('tbl_pages','about');
		if($aboutData){
			foreach($aboutData as $about){
				$aboutArr[] = array(
					'url' => base_url().$about->featured_image,  
					'id' => $about->id,
					'alt' => $about->page_name,
					'title' => $about->page_title,
					'description' => $about->page_content,
				);
			}
		}
		if($aboutArr){
			$this->apiResponse('success', 200,$aboutArr);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getPress() 
	{
		$pressData = $this->api_model->getListData('','tbl_gallery');
		if($pressData){
			$this->apiResponse('success', 200,$pressData);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getArtNews() 
	{
		$artNewsData = $this->api_model->getListData('','tbl_blog');
		if($artNewsData){
			$this->apiResponse('success', 200,$artNewsData);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getArtist() 
	{
		$data['artists1Data'] = $this->api_model->getList1Data('','tbl_artist');
		$data['artists2Data'] = $this->api_model->getList2Data('','tbl_artist');
		$data['artists3Data'] = $this->api_model->getList3Data('','tbl_artist');
		$data['artists4Data'] = $this->api_model->getList4Data('','tbl_artist');
		if($data['artists1Data']){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}
	
	public function getArtistDetail($id='')
	{
		$data['artistDetail'] = $this->api_model->getArtistDetail($id,'tbl_artist');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}
	
	public function testimonialsData() 
	{
		$testimonialData = $this->api_model->getData('tbl_testimonial');
		if($testimonialData){ 
			foreach($testimonialData as $testimonial){ 
				if($testimonial->testimonial_image != ''){
					$url = base_url().'assets/uploads/testimonial/'.$testimonial->testimonial_image;
				}else{
					$url = base_url().'assets/images/image_not_available.png';
				}
				
				$testimonialArr[] = array(
					'tid' => $testimonial->id, 
					'name' => $testimonial->name, 
					'title' => $testimonial->title, 
					'url' => $testimonial->url, 
					'city' => $testimonial->city, 
					'description' => $testimonial->description, 
					'image' => $url, 
				);
			}
			$this->apiResponse('success', 200,$testimonialArr);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}
	
	public function submitContact(){
		//print_r($_POST);
		$name   =$this->test_input($this->input->post('name'));
		$email  = $this->test_input($this->input->post('email'));
		$mobile  = $this->test_input($this->input->post('mobile'));
		$message= $this->test_input($this->input->post('message'));
		$data = array(
			'name'    => $name,
			'email'   => $email,
			'mobile'  => $mobile,
			'message' => $message,	
			'added_date'=> date('Y-m-d h:s:i')
		);
		//print_r($data);//die;
		$data['result']=$this->api_model->addData($data,'tbl_enquery');
		if($data){
			$this->apiResponse('success', 200,$data);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getSettings() 
	{
		$settingData = $this->api_model->getData('tbl_logo');
		if($settingData){
			foreach($settingData as $setting){ 
				$settingArr = array(
					'logo' => base_url().'assets/uploads/logo/'.$setting->logo,
					'small_logo' => base_url().'assets/uploads/logo/'.$setting->small_logo,
					'mobile' => $setting->mobile,
					'email' => $setting->email,
					'address' => $setting->address,
					'facebook' => $setting->facebook,
					'twitter' => $setting->twitter,
					'youtube' => $setting->youtube,
					'google_plus' => $setting->google_plus,
					'pinterest' => $setting->pinterest,
					'delivery_charge' => $setting->delivery_charge,
				);
			}
			$this->apiResponse('success', 200,$settingArr);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}
	
	public function getArtFairData() 
	{
		$ArtFairData = $this->api_model->getArtFairData('artfairs','tbl_exhibition');
		//echo"<pre>";print_r($ArtFairData);die;
		if($ArtFairData){
			$this->apiResponse('success', 200,$ArtFairData);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getExhibitionData() 
	{
		$ExhibitionData = $this->api_model->getExhibitionData('exhibtion','tbl_exhibition');
		if($ExhibitionData){
			$this->apiResponse('success', 200,$ExhibitionData);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}

	public function getArtistArtData($id) 
	{
		$ArtData = $this->api_model->getArtistArtData($id,'tbl_art_gallery');
		if($ArtData){
			$this->apiResponse('success', 200,$ArtData);
		}else{
			$this->apiResponse('No records found.', 404);
		}
	}
	private function apiResponse($message, $state, $data=null){
		$response['state'] = $state;
		$response['msg'] = $message;
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		if($data){
			$response['data'] = $data;
		}
		echo json_encode($response);
		die;
	}
}