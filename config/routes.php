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

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['our-services']            = "home/our_sarvice";
$route['our-services/(:num)']     = "home/our_sarvice";
$route['our-services/(:any)']     = "home/our_sarvice_readmore";
 $route['about-us']                = "home/about_us";
 $route['contact-us']              = "home/contact_us"; 
 $route['signup-sucess']              = "home/signup_success"; 
 $route['login']              = "home/login"; 
$route['signup']              = "home/signup"; 
 $route['register']              = "home/register"; 
 $route['reg']              = "home/reg"; 
 $route['register-success']              = "home/register_success"; 

//admin part
$admin_url = "admin/";
$route[$admin_url."login"] = $admin_url.'admin_login';
$route[$admin_url."login/do_login"] = $admin_url.'admin_login/do_login';
$route[$admin_url.'menu/'] = $admin_url.'menu/index/';
$route[$admin_url.'article/'] = $admin_url.'article/index/';

/* End of file routes.php */
/* Location: ./application/config/routes.php */