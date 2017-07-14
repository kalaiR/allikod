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
$route['basic_search'] 							= "base/basic_search";
$route['search'] 							= "base/search";
$route['contact'] 							= "base/contact";
$route['gallery'] 							= "base/gallery";
$route['payment'] 							= "base/payment";
$route['post_success'] 							= "base/post_success";
$route['registration'] 							= "base/registration";
$route['search'] 							= "base/search";
$route['search_result'] 							= "base/search_result";
$route['success_stories'] 							= "base/success_stories";
$route['vanniyar'] 							= "base/vanniyar";
$route['full_view'] 							= "base/full_view";
$route['myprofile'] 							= "base/myprofile";
$route['mymatches'] 							= "base/mymatches";




$route['admin'] 							= "admin/base/index";

$route['admin/zodiac_sign'] 							= "admin/base/zodiac_sign";
$route['admin/add_zodiac_sign'] 							= "admin/base/add_zodiac_sign";
$route['admin/edit_zodiac_sign'] 							= "admin/base/edit_zodiac_sign";
$route['admin/administration'] 							= "admin/base/administration";
$route['admin/add_administration'] 							= "admin/base/add_administration";
$route['admin/edit_administration'] 							= "admin/base/edit_administration";
$route['admin/selling_admin'] 							= "admin/base/selling_admin";
$route['admin/edit_selling_admin'] 							= "admin/base/edit_selling_admin";
$route['admin/add_selling_admin'] 							= "admin/base/add_selling_admin";
$route['admin/report'] 							= "admin/base/report";
$route['admin/successful_story'] 							= "admin/base/successful_story";
$route['admin/add_successful_story'] 							= "admin/base/add_successful_story";
$route['admin/edit_successful_story'] 							= "admin/base/edit_successful_story";
$route['admin/nakshathra'] 							= "admin/base/nakshathra";
$route['admin/add_nakshathra'] 							= "admin/base/add_nakshathra";
$route['admin/edit_nakshathra'] 							= "admin/base/edit_nakshathra";
$route['admin/mother_tongue'] 							= "admin/base/mother_tongue";
$route['admin/add_mother_tongue'] 							= "admin/base/add_mother_tongue";
$route['admin/edit_mother_tongue'] 							= "admin/base/edit_mother_tongue";
$route['admin/luknam'] 							= "admin/base/luknam";
$route['admin/add_luknam'] 							= "admin/base/add_luknam";
$route['admin/edit_luknam'] 							= "admin/base/edit_luknam";
$route['admin/country'] 							= "admin/base/country";
$route['admin/add_country'] 							= "admin/base/add_country";
$route['admin/edit_country'] 							= "admin/base/edit_country";
$route['admin/education'] 							= "admin/base/education";
$route['admin/edit_education'] 							= "admin/base/edit_education";
$route['admin/add_education'] 							= "admin/base/add_education";
$route['admin/occupation'] 							= "admin/base/occupation";
$route['admin/add_occupation'] 							= "admin/base/add_occupation";
$route['admin/edit_occupation'] 							= "admin/base/edit_occupation";
$route['admin/customer_user'] 							= "admin/base/customer_user";
$route['admin/edit_customer_user'] 							= "admin/base/edit_customer_user";
$route['admin/add_customer_user'] 							= "admin/base/add_customer_user";






// $route['main'] = 'admin/admin_login/teac_admin_login';



/* ===================          Route settings for Admin End     ====================== */


/* End of file routes.php */
/* Location: ./application/config/routes.php */