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

$route['Users-Register'] = 'ControllerHome/owner_dashboard';

$route['Users-Register'] = 'ControllerHome/user_register';


$route['Contact-Us'] = 'ControllerHome/contact_us';
$route['Feedback'] = 'ControllerHome/user_feedback';
$route['Users-Login'] = 'ControllerLogin/user_login';
$route['bordentown'] = 'ControllerHome/bordentown';
$route['mirage_motor'] = 'ControllerHome/mirage_motor';
$route['prince_hotel'] = 'ControllerHome/prince_hotel';
$route['About-Us'] = 'ControllerHome/about_us';
$route['Executive-Team'] = 'ControllerHome/executive_team';
$route['Management-Team'] = 'ControllerHome/management_team';
$route['MHO-Friends'] = 'ControllerHome/mho_friends';
$route['Industry-Leaders'] = 'ControllerHome/industry_leaders';
$route['Franchisee-Advisory-Board'] = 'ControllerHome/franchisee_advisory_board';

$route['HOOur-Brands'] = 'ControllerHome/our_brands';

$route['Fees'] = 'ControllerHome/fees';

$route['Independent-Hotels'] = 'ControllerHome/independent_hotels';

$route['Testimonials'] = 'ControllerHome/testimonials';

$route['News'] = 'ControllerHome/news';

$route['Enquire'] = 'ControllerHome/enquire';

$route['Current-Sponsors'] = 'ControllerHome/current_sponsors';

$route['Join-Sponsors-Program'] = 'ControllerHome/join_sponsors_program';

$route['Events'] = 'ControllerHome/events';

//Executive team
$route['Chandu-Patel-Cha'] = 'ControllerHome/chandu_patel_cha';
$route['Mahendra-M-Z-Patel-Cha'] = 'ControllerHome/mahendra_m_z_patel_cha';
$route['Keshin-Patel-CHO'] = 'ControllerHome/keshin_patel_CHO';
$route['Priya-Patel'] = 'ControllerHome/priya_patel';
$route['Karishma-Patel'] = 'ControllerHome/karishma_patel';
$route['Panna-Patel'] = 'ControllerHome/panna_patel';
$route['Hirna-Patel'] = 'ControllerHome/hirna_patel';
$route['Piyush-Patel-CHO'] = 'ControllerHome/piyush_patel_cho';
$route['Elliot-Ginsburg'] = 'ControllerHome/elliot_ginsburg';
$route['Jay-Patel'] = 'ControllerHome/jay_patel';

//Management Team
$route['Brandi-Connor'] = 'ControllerHome/brandi_connor';
$route['Tushar-Patel'] = 'ControllerHome/tushar_patel';
$route['Hetal-Patel'] = 'ControllerHome/hetal_patel';
$route['Manish-Desai'] = 'ControllerHome/manish_desai';
$route['Sanjay-Patel'] = 'ControllerHome/sanjay_patel';
$route['Katen-Patel'] = 'ControllerHome/katen_patel';
$route['Mike-Riverside-Patel'] = 'ControllerHome/mike_riverside_patel';
$route['Amrish-Patel'] = 'ControllerHome/amrish_patel';
$route['Dharmendra-Desai'] = 'ControllerHome/dharmendra_desai';
$route['Gary-Sheth'] = 'ControllerHome/gary_sheth';
$route['Kamlesh-Patel'] = 'ControllerHome/kamlesh_patel';
$route['Natubhai-Patel'] = 'ControllerHome/natubhai_patel';
$route['Raj-Patel'] = 'ControllerHome/raj_patel';
$route['John-Bereznak'] = 'ControllerHome/john_bereznak';
$route['Dipal-Patel'] = 'ControllerHome/dipal_patel';
$route['Ajay-Patel'] = 'ControllerHome/ajay_patel';
$route['Bharat-Patel'] = 'ControllerHome/bharat_patel';
$route['Jayeshbhai-Patel'] = 'ControllerHome/jayeshbhai_patel';
$route['Purnima-Patel'] = 'ControllerHome/purnima_patel';
$route['Kenish-Patel'] = 'ControllerHome/kenish_patel';
$route['Kushalpal-Kaur'] = 'ControllerHome/kushalpal_kaur';

//Freinds
$route['Shailesh-Patel'] = 'ControllerHome/shailesh_patel';
$route['PK-Patel'] = 'ControllerHome/pk_patel';
$route['Raj-Bhagia'] = 'ControllerHome/raj_bhagia';
$route['DD-Patel'] = 'ControllerHome/dd_patel';


//Industry Leaders
$route['Padama-Shri-HR-Shah'] = 'ControllerHome/padama_shri_hr_shah';
$route['Bhaveshbhai-Patel'] = 'ControllerHome/bhaveshbhai_patel';
$route['Anilbhai-Patel'] = 'ControllerHome/anilbhai_patel';
$route['Albert-Jasani'] = 'ControllerHome/albert_jasani';
$route['C-K-Patel'] = 'ControllerHome/c_k_patel';


//footer links
$route['Partners'] = 'ControllerHome/partners';
$route['Blogs'] = 'ControllerHome/blogs';
$route['Careers'] = 'ControllerHome/careers';
$route['CSR'] = 'ControllerHome/csr';
$route['Privacy'] = 'ControllerHome/privacy';



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
$route['Change-Password/(:num)'] = 'ControllerLogin/change_password/$1';
$route['Owner-Dashboard/(:num)'] = 'ControllerOwner_dashboard/view_ownerDashboard/$1';
$route['Update-Discount'] = 'ControllerOwner_dashboard/update_discount';


$route['logout'] = 'ControllerLogin/logout';

/*Routes Admin*/
$route['LgAdmin'] = 'Admin/ControllerAdmin';
$route['Dashboard'] = 'Admin/ControllerAdmin/dashboard';
$route['AddUser'] = 'Admin/ControllerAdmin/register_user';

$route['Add-User'] = 'Admin/ControllerAdmin/add_user';
$route['In-User'] = 'Admin/ControllerAdmin/insert_user';
$route['ViewUser'] = 'Admin/ControllerAdmin/view_user';
$route['UpdateUser'] = 'Admin/ControllerAdmin/update_user';

$route['Edit-User/(:num)'] = 'Admin/ControllerAdmin/edit_users/$1';

$route['In-Profile'] = 'Admin/ControllerAdmin/in_profile';

$route['Update-Profile/(:num)'] = 'Admin/ControllerAdmin/edit_profile/$1';


$route['UpdateUser/(:num)/(:any)'] = 'Admin/ControllerAdmin/update_user/$1/$2';

$route['adminlogout'] = 'Admin/ControllerAdmin/logout';
$route['Contact-User'] = 'Admin/ControllerAdmin/view_contact_user';
$route['Feedback-User'] = 'Admin/ControllerAdmin/view_feedback_user';
$route['CheckFeedback/(:num)/(:any)'] = 'Admin/ControllerAdmin/check_feedback_user/$1/$2';

//$route['UpdateUser/(:num)/(:any)'] = 'Admin/ControllerAdmin/update_user/$1/$2';
$route['User-Track'] = 'Admin/ControllerAdmin/view_user_track';
$route['View-Message'] = 'Admin/ControllerMessage/view_send_message'; 

$route['View-Hotels'] = 'Admin/ControllerHotelAssign/view_hotels'; 

$route['View-Document'] = 'Admin/ControllerUploadDocument/view_document';
$route['AddDocument'] = 'Admin/ControllerUploadDocument/add_document'; 
$route['SendMessage'] = 'Admin/ControllerMessage/add_message';
$route['View-HotelAssign'] = 'Admin/ControllerHotelAssign/view_hotelAssign';
$route['AddHotelAssign'] = 'Admin/ControllerHotelAssign/add_hotelAssign';
$route['Add-Hotel'] = 'Admin/ControllerHotelAssign/add_hotel';
$route['Insert-Hotel'] = 'Admin/ControllerHotelAssign/insert_hotel';

$route['ViewUser-HotelAssign/(:any)'] = 'Admin/ControllerHotelAssign/view_userhotel_assign/$1';

$route['Edit-Assigned-Hotel/(:num)'] = 'Admin/ControllerHotelAssign/edit_assigned_hotel/$1';
