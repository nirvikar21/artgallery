<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = 'home/logout'; 
$route['about'] = 'home/aboutus';
$route['contactus'] = 'home/contactus';
$route['artist'] = 'home/Artist'; 
$route['artist-details/(:num)'] = 'home/ArtistDetail/$1';
$route['art-details/(:num)'] = 'home/ArtDetail/$1';
$route['exhibition'] = 'home/exhibition';
$route['exhibition-detail/(:num)'] = 'home/exhibitionDetails/$1';
$route['artfairs'] = 'home/ArtFairs';
$route['artfair-detail/(:num)'] = 'home/artFairDetails/$1';

$route['press'] = 'home/Press';
$route['blog'] = 'home/Blog';
$route['blog-details/(:num)'] = 'home/BlogDetail/$1';
$route['submit_query'] = 'home/SubmitQuery';
$route['privacy'] = 'home/pages/privacy-policy';
$route['terms'] = 'home/pages/terms-conditions';
$route['career'] = 'home/pages/career-with-us';

 





/******************************* Admin Routing Start ****************************************/
$route['admin'] = 'admin/login'; 
$route['admin/banners'] = 'admin/admincontroller';
$route['admin/logout'] = 'admin/login/adminLogout';

$route['admin/pages'] = 'admin/cms_controller/allPage';
$route['admin/add-page'] = 'admin/cms_controller/addPage';
$route['admin/add-page/(:num)'] = 'admin/cms_controller/addPage/$1'; 

$route['admin/banners'] = 'admin/cms_controller/AllBanners';
$route['admin/add-banners'] = 'admin/cms_controller/AddBanners';
$route['admin/add-banners/(:num)'] = 'admin/cms_controller/AddBanners/$1';

$route['admin/artist'] = 'admin/cms_controller/AllArtist';
$route['admin/add-artist'] = 'admin/cms_controller/AddArtist';
$route['admin/add-artist/(:num)'] = 'admin/cms_controller/AddArtist/$1';

$route['admin/category'] = 'admin/cms_controller/allCategory';
$route['admin/add-category'] = 'admin/cms_controller/addCategory';
$route['admin/add-category/(:num)'] = 'admin/cms_controller/addCategory/$1';

$route['admin/subcategory'] = 'admin/cms_controller/allSubCategory';
$route['admin/add-subcategory'] = 'admin/cms_controller/addSubCategory';
$route['admin/add-subcategory/(:num)'] = 'admin/cms_controller/addSubCategory/$1';

$route['admin/art'] = 'admin/cms_controller/allArt';
$route['admin/add-art'] = 'admin/cms_controller/addArt';
$route['admin/add-art/(:num)'] = 'admin/cms_controller/addArt/$1';

$route['admin/exhibition'] = 'admin/cms_controller/allExhibition';
$route['admin/add-exhibition'] = 'admin/cms_controller/addExhibition';
$route['admin/add-exhibition/(:num)'] = 'admin/cms_controller/addExhibition/$1';

$route['admin/add-imageadd-image'] = 'admin/cms_controller/AddImages';
$route['admin/add-image'] = 'admin/cms_controller/AddImages';
$route['admin/add-image/(:num)'] = 'admin/cms_controller/AddImages/$1';

$route['admin/save-image'] = 'admin/cms_controller/saveImages';
$route['admin/save-image/(:num)'] = 'admin/cms_controller/saveImages/$1';


$route['admin/gallery'] = 'admin/cms_controller/allGallery';
$route['admin/add-gallery'] = 'admin/cms_controller/addGallery';
$route['admin/add-gallery/(:num)'] = 'admin/cms_controller/addGallery/$1';

$route['admin/blog'] = 'admin/cms_controller/allBlog';
$route['admin/add-blog'] = 'admin/cms_controller/addBlog';
$route['admin/add-blog/(:num)'] = 'admin/cms_controller/addBlog/$1';

$route['admin/newsletter'] = 'admin/cms_controller/allNewsletter';

$route['admin/manage-user-access'] = 'admin/admincontroller/manageUserAccess';
$route['admin/add-user-access'] = 'admin/admincontroller/addUserAccess';
$route['admin/add-user-access/(:num)'] = 'admin/admincontroller/addUserAccess/$1';

$route['admin/home'] = 'admin/cms_controller/home'; 
$route['admin/home/(:num)'] = 'admin/cms_controller/home/$1'; 

$route['admin/setting'] = 'admin/cms_controller/allSetting';
$route['admin/add-setting'] = 'admin/cms_controller/addSetting';
$route['admin/add-setting/(:num)'] = 'admin/cms_controller/addSetting/$1';
/******************************* Admin Routing End ****************************************/

$route['api/'] = 'api/HomeApi_Controller/index/';

