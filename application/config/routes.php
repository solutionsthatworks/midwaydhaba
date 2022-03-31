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
$route['default_controller'] = 'ControllerHome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//$route['Home'] = 'front/ControllerHome';
$route['Menu-list'] = 'ControllerHome/Hotel-Lists';
$route['Hotel-Lists'] = 'ControllerHome/hotel_list';
$route['Users-Register'] = 'ControllerHome/user_register';
$route['Contact-Us'] = 'ControllerHome/contact_us';
$route['Feedback'] = 'ControllerHome/user_feedback';
$route['Users-Login'] = 'ControllerLogin/user_login';
$route['bordentown'] = 'ControllerHome/bordentown';
$route['mirage_motor'] = 'ControllerHome/mirage_motor';
$route['country_house'] = 'ControllerHome/country_house';
$route['prince_hotel'] = 'ControllerHome/prince_hotel';
//$route['la_mirage_motor_inn'] = 'ControllerHome/la_mirage_motor_inn';
$route['plaza_motels'] = 'ControllerHome/plaza_motels';
$route['Green_Acres_Motel'] = 'ControllerHome/Green_Acres_Motel';
//$route['Update-Profile'] = 'ControllerLogin/update_user_profile';
//$route['Update-Profile/(:num)'] = 'ControllerLogin/update_user_profile/$1';
$route['Users-Profile'] = 'ControllerLogin/user_profile';
$route['Users-Profile/(:num)'] = 'ControllerLogin/user_profile/$1';
$route['ForgotPassword'] = 'ControllerLogin/forgot_password';
$route['Our-Brands'] = 'ControllerHome/ousr_brand';
$route['Hotel-Lists'] = 'ControllerHome/hotel_list';
$route['Change-Password'] = 'ControllerLogin/change_password';

$route['logout'] = 'ControllerLogin/logout';

/*Routes Admin*/
$route['LgAdmin'] = 'Admin/ControllerAdmin';
$route['Dashboard'] = 'Admin/ControllerAdmin/dashboard';
$route['AddUser'] = 'Admin/ControllerAdmin/register_user';
$route['ViewUser'] = 'Admin/ControllerAdmin/view_user';
$route['UpdateUser'] = 'Admin/ControllerAdmin/update_user';
$route['UpdateUser/(:num)/(:any)'] = 'Admin/ControllerAdmin/update_user/$1/$2';
$route['adminlogout'] = 'Admin/ControllerAdmin/logout';
$route['Contact-User'] = 'Admin/ControllerAdmin/view_contact_user';
$route['Feedback-User'] = 'Admin/ControllerAdmin/view_feedback_user';
$route['CheckFeedback/(:num)/(:any)'] = 'Admin/ControllerAdmin/check_feedback_user/$1/$2';

//$route['UpdateUser/(:num)/(:any)'] = 'Admin/ControllerAdmin/update_user/$1/$2';
$route['User-Track'] = 'Admin/ControllerAdmin/view_user_track';

$route['tunkhannock'] = 'ControllerHome/tunkhannock';