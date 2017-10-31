<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 							= "base/index";

// if (strpos($_SERVER['REQUEST_URI'], 'main') !== FALSE)
// 	$route['404_override'] 								= 'admin_missingpage';
// else
// 	$route['404_override'] 								= 'missingpage';

/* Route settings for Jobseeker and Jobprovider */
// $route['login/seeker'] 									= 'job_seeker';
// $route['login/provider'] 								= 'job_provider';
// $route['login/featured_job'] 							= 'home/featured_job';
$route['index'] 							= "base/index";
$route['login_ajax'] 						= "base/login_ajax";
$route['register_mailcheck'] 				= "base/register_mailcheck";
$route['search'] 							= "base/search";
$route['contact'] 							= "base/contact";
$route['gallery'] 							= "base/gallery";
$route['payment'] 							= "base/payment";
$route['post_success'] 						= "base/post_success";
$route['registration'] 						= "base/registration";
$route['registration/(:any)']				= "base/registration/$1";
$route['search'] 							= "base/search";
$route['search_result'] 					= "base/search_result";
$route['search_result/(:any)'] 				= "base/search_result/$1";
$route['success_stories'] 					= "base/success_stories";
$route['success_stories/(:any)'] 			= "base/success_stories/$1";
$route['vanniyar'] 							= "base/vanniyar";
$route['viewdetail/(:any)'] 				= "base/viewdetail/$1";
$route['myprofile'] 						= "base/myprofile";
$route['mymatches'] 						= "base/mymatches";
$route['upload_file'] 						= "base/upload_file";
$route['logout'] 							= "base/logout";
$route['myedit'] 							= "base/myedit";
$route['newreg'] 							= "base/newreg";
$route['countprofile_viewed'] 				= "base/countprofile_viewed";
$route['viewfeatureprofile/(:any)'] 		= "base/viewfeatureprofile/$1";
$route['myview'] 							= "base/myview";
$route['testemail'] 						= "base/testemail";
$route['404page'] 						= "base/error404_page";
$route['500page'] 						= "base/error500_page";


// $route['admin'] 							= "admin/base/index";
$route['admin'] 							= "admin/base/index";
$route['admin/dashboard'] 							= "admin/base/dashboard";
$route['admin/logout'] 							= "admin/base/admin_logout";

$route['admin/zodiac_sign'] 							= "admin/master_data/zodiac_sign";
$route['admin/add_zodiac_sign'] 							= "admin/master_data/add_zodiac_sign";
$route['admin/edit_zodiac_sign/(:any)'] 							= "admin/master_data/edit_zodiac_sign/$1";
$route['admin/administration'] 							= "admin/master_data/administration";
$route['admin/add_administration'] 							= "admin/master_data/add_administration";
$route['admin/edit_administration/(:any)'] 							= "admin/master_data/edit_administration/$1";
$route['admin/selling_admin'] 							= "admin/base/selling_admin";
$route['admin/edit_selling_admin'] 							= "admin/base/edit_selling_admin";
$route['admin/add_selling_admin'] 							= "admin/base/add_selling_admin";
$route['admin/report'] 							= "admin/report_data/report";
$route['admin/successful_story'] 							= "admin/master_data/successful_story";
$route['admin/add_successful_story'] 							= "admin/master_data/add_successful_story";
$route['admin/edit_successful_story/(:any)'] 							= "admin/master_data/edit_successful_story/$1";
$route['admin/nakshathra'] 							= "admin/master_data/nakshathra";
$route['admin/add_nakshathra'] 							= "admin/master_data/add_nakshathra";
$route['admin/edit_nakshathra/(:any)'] 							= "admin/master_data/edit_nakshathra/$1";
$route['admin/mother_tongue'] 							= "admin/master_data/mother_tongue";
$route['admin/add_mother_tongue'] 							= "admin/master_data/add_mother_tongue";
$route['admin/edit_mother_tongue/(:any)'] 							= "admin/master_data/edit_mother_tongue/$1";
$route['admin/luknam'] 							= "admin/master_data/luknam";
$route['admin/add_luknam'] 							= "admin/master_data/add_luknam";
$route['admin/edit_luknam/(:any)'] 							= "admin/master_data/edit_luknam/$1";
$route['admin/country'] 							= "admin/master_data/country";
$route['admin/add_country'] 							= "admin/master_data/add_country";
$route['admin/edit_country/(:any)'] 							= "admin/master_data/edit_country/$1";
$route['admin/education'] 							= "admin/base/education";
$route['admin/edit_education'] 							= "admin/base/edit_education";
$route['admin/add_education'] 							= "admin/base/add_education";
$route['admin/occupation'] 							= "admin/base/occupation";
$route['admin/add_occupation'] 							= "admin/base/add_occupation";
$route['admin/edit_occupation'] 							= "admin/base/edit_occupation";
$route['admin/customer_user'] 							= "admin/customeruser_data/customer_user";
$route['admin/edit_customer_user/(:any)'] 							= "admin/customeruser_data/edit_customer_user/$1";
$route['admin/add_customer_user'] 							= "admin/customeruser_data/add_customer_user";
$route['admin/view_customer_user/(:any)'] 							= "admin/customeruser_data/view_customer_user/$1";
$route['admin/add_customer_user'] 							= "admin/customeruser_data/add_customer_user";
$route['admin/login'] 							= "admin/base/login";
$route['admin/gallery_upload'] 							= "admin/base/gallery_upload";
$route['admin/add_gallery'] 							= "admin/base/add_gallery";
$route['admin/edit_gallery_upload'] 					= "admin/base/edit_gallery_upload";
$route['admin/gallery_category'] 							= "admin/base/gallery_category";
$route['admin/add_gallery_category'] 				 = "admin/base/add_gallery_category";
$route['admin/edit_gallery_category'] 				= "admin/base/edit_gallery_category";
$route['admin/contact_gallery_upload'] 				= "admin/base/contact_gallery_upload";
$route['admin/add_contact_gallery'] 					= "admin/base/add_contact_gallery";
$route['admin/edit_contact_gallery'] 					= "admin/base/edit_contact_gallery";
$route['admin/cd_list'] 					= "admin/customeruser_data/cd_list";
$route['admin/customer_user_new'] 							= "admin/customeruser_data/customer_user_new";
$route['admin/customer_user_new/(:any)'] 							= "admin/customeruser_data/customer_user_new/$1";
//Codeigniter Ajax pagination
$route['admin/cipagination'] 							= "admin/cipagination/example";
$route['admin/cipagination/(:any)'] 							= "admin/cipagination/example/$1";
$route['admin/delete_customer_user'] 							= "admin/customeruser_data/delete_customer_user";
$route['test_watermark'] 							= "base/test_watermark";
$route['test_watermark_multiple'] 							= "admin/customeruser_data/test_watermark_multiple";


// $route['main'] = 'admin/admin_login/teac_admin_login';



/* ===================          Route settings for Admin End     ====================== */


/* End of file routes.php */
/* Location: ./application/config/routes.php */