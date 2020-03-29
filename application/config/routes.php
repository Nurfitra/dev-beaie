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
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'c_public';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/*
| -------------------------------------------------------------------------
| Admin Routes
| -------------------------------------------------------------------------
*/
//Login Page
$route['admin'] = 'adm_login';
$route['login'] = 'adm_login';
$route['logout'] = 'adm_login/logout';
$route['login/check_login'] = 'adm_login/check_login';

//Dashboard
$route['admin/dashboard'] = 'adm_dashboard';

//Users
$route['admin/users'] = 'adm_users';
$route['admin/users/add'] = 'adm_users/add';
$route['admin/users/changepasswd'] = 'adm_users/changepasswd';
$route['admin/users/edit/(:num)'] = 'adm_users/edit/$1';
$route['admin/users/remove/(:num)'] = 'adm_users/remove/$1';


//processing
$route['admin/processing'] = 'adm_home/processing';

//onfarm
$route['admin/onfarm'] = 'adm_home/onfarm';

$route['admin/history'] = 'adm_history/history';
$route['admin/history_video'] = 'adm_history/add_vid';

//processing IMG
$route['admin/processing_img'] = 'adm_home_img/add_processing';
$route['admin/processing_img/remove/(:num)'] = 'adm_home_img/remove_processing/$1';

//onfarm IMG
$route['admin/onfarm_img'] = 'adm_home_img/add_onfarm';
$route['admin/onfarm_img/remove/(:num)'] = 'adm_home_img/remove_onfarm/$1';

//Profile
$route['admin/profile'] = 'adm_profile';

//Gallery
$route['admin/gallery'] = 'adm_gallery';
$route['admin/gallery/add'] = 'adm_gallery/add';
$route['admin/gallery/edit/(:num)'] = 'adm_gallery/edit/$1';
$route['admin/gallery_upload/(:num)'] = 'adm_gallery/gallery_upload/$1';
$route['admin/gallery_upload/remove/(:num)/(:num)'] = 'adm_gallery/remove_upload/$1/$2';
$route['admin/gallery/remove/(:num)'] = 'adm_gallery/remove/$1';


//video
$route['admin/video'] = 'adm_video';
$route['admin/video/add'] = 'adm_video/add';
$route['admin/video/edit/(:num)'] = 'adm_video/edit/$1';
$route['admin/video_upload'] = 'adm_video/video_upload';
$route['admin/video_upload/remove/(:num)'] = 'adm_video/remove_upload/$1';


//Activity
$route['admin/activity'] = 'adm_activity';
$route['admin/activity/add'] = 'adm_activity/add';
$route['admin/activity/edit/(:num)'] = 'adm_activity/edit/$1';
$route['admin/activity_upload/(:num)'] = 'adm_activity/activity_upload/$1';
$route['admin/activity_upload/remove/(:num)/(:num)'] = 'adm_activity/remove_upload/$1/$2';
$route['admin/activity/remove/(:num)'] = 'adm_activity/remove/$1';

//OurPartner
$route['admin/OurClient'] = 'adm_ourpartner';
$route['admin/OurClient/add'] = 'adm_ourpartner/add';
$route['admin/OurClient/edit/(:num)'] = 'adm_ourpartner/edit/$1';
$route['admin/OurClient/remove/(:num)'] = 'adm_ourpartner/remove/$1';

//Faq
$route['admin/faq'] = 'adm_faq';
$route['admin/faq/add'] = 'adm_faq/add';
$route['admin/faq/edit/(:num)'] = 'adm_faq/edit/$1';
$route['admin/faq/remove/(:num)'] = 'adm_faq/remove/$1';

//News
$route['admin/news'] = 'adm_news';
$route['admin/news/add'] = 'adm_news/add';
$route['admin/news/edit/(:num)'] = 'adm_news/edit/$1';
$route['admin/news/remove/(:num)'] = 'adm_news/remove/$1';

//Slider
$route['admin/home_slider'] = 'adm_home_slider';
$route['admin/home_slider/add'] = 'adm_home_slider/add';
$route['admin/home_slider/edit/(:num)'] = 'adm_home_slider/edit/$1';
$route['admin/home_slider/remove/(:num)'] = 'adm_home_slider/remove/$1';

//Kemitraan
$route['admin/kemitraan'] = 'adm_kemitraan';
$route['admin/kemitraan/add'] = 'adm_kemitraan/add';
$route['admin/kemitraan/edit/(:num)'] = 'adm_kemitraan/edit/$1';
$route['admin/kemitraan_upload/(:num)'] = 'adm_kemitraan/kemitraan_upload/$1';
$route['admin/kemitraan_upload/remove/(:num)/(:num)'] = 'adm_kemitraan/remove_upload/$1/$2';
$route['admin/kemitraan/remove/(:num)'] = 'adm_kemitraan/remove/$1';

//Joinus
$route['admin/joinus'] = 'adm_joinus';

//public
$route['home'] = 'c_public';
$route['companyProfile'] = 'c_public/companyProfile';
$route['products'] = 'c_public/products';
$route['news'] = 'c_public/news';
$route['news/detail/(:num)'] = 'c_public/news_detail/$1';
$route['mitra/detail/(:num)'] = 'c_public/mitra_detail/$1';
$route['contact'] = 'c_public/contact';
$route['joinus'] = 'c_public/joinus';
$route['faq'] = 'c_public/faq';
$route['lang/(:any)'] = 'c_public/lang/$1';
