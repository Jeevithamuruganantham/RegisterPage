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
$route['places/(:any)']            = "home/singlemoretopic_place";
$route['places-details/(:any)']            = "home/places_details";
$route['places-visit/(:any)']            = "home/places_visit_details";

$route['car-rental']            = "home/vehicle_offers";
$route['car-rental/(:num)']            = "home/vehicle_offers";
$route['car-rental/(:any)']            = "home/vehicle_offers_readmore";

$route['tour-offers']            = "home/tours_offers";
$route['tour-offers/(:num)']            = "home/tours_offers";
$route['tour-offers/(:any)']            = "home/tours_offers_readmore";

$route['kodaikanal-places']            = "home/rameswaram_places";
$route['kodaikanal-places/(:num)']            = "home/rameswaram_places";
$route['kodaikanal-places/(:any)']            = "home/rameswaram_places_readmore";

$route['special-offers']            = "home/special_offers";
$route['special-offers/(:num)']            = "home/special_offers";
$route['special-offers/(:any)']            = "home/special_offers_readmore";


$route['tour-package/(:any)']            = "home/tour_packages_readmore";
$route['tour-package/(:any)/(:num)']            = "home/tour_packages_readmore";



$route['tour-pack/(:any)']            = "home/tour_pack_readmore";
$route['tour-pack/(:any)/(:num)']            = "home/tour_pack_readmore";


$route['hotels']            = "home/hotels";
$route['hotel/(:num)']            = "home/hotel";
$route['hotel/(:any)']            = "home/hotel_readmore";


$route['bank-detail']                 = "home/bank_detail";
$route['travel-desk']            = "home/travel_desk";

$route['about-us']                 = "home/about_us";


$route['chennai-rameswaram-round-trip-available']                 = "home/round_trip";

$route['our-team']                 = "home/our_team";
$route['work-with-us']                 = "home/work_with";
$route['resources']            = "home/resources";
$route['resources/(:any)']            = "home/resource_details";
$route['about/(:any)']             = "home/readmore";
$route['aavin/(:any)']             = "home/readmore";
$route['pages/(:any)']             = "home/readmore";
$route['feature/(:any)']           = "home/readmore";

$route['privacy-policy']     = "home/privacy_policy";
$route['cancellation-policy']     = "home/cancellation_policy";
$route['faqs']     = "home/faqs";
$route['terms']              = "home/termscon";

$route['our-gallery']            = "home/gallery";
$route['our-gallery/(:num)']     = "home/gallery";

$route['details/(:any)']            = "home/details";

$route['contact-us']            = "home/contact_us";
$route['contact-success']    = "home/contact_success";

$route['enquiry']            = "home/enquiry";
$route['enquiry-success']    = "home/enquiry_success";

$route['home-enquiry']            = "home/home_enquiry";
$route['home-enquiry-success']    = "home/home_enquiry_success";

$route['procurement']        = "home/procurement";
$route['dairy']              = "home/dairy";
$route['engineering']        = "home/engineering";
$route['marketing']          = "home/marketing";
$route['registration']       = "home/registration";
$route['whatsfresh']         = "home/whatsfresh";

$route['sitemap']            = "home/sitemap";

$route['car-rentalss']            = "home/tariff";

$route['book-your-cab']            = "home/cab";

$route['booking-success']            = "home/booking_success";
$route['trip-booking-success']            = "home/trip_booking_success";

$route['places-to-visit']            = "home/places_to_visit";
$route['places-to-visit/(:num)']            = "home/places_to_visit";

$route['features/(:any)']            = "home/features";

$route['our-services']            = "home/our_services";


//admin part
$admin_url = "admin/";
$route[$admin_url."login"] = $admin_url.'admin_login';
$route[$admin_url."login/do_login"] = $admin_url.'admin_login/do_login';
$route[$admin_url.'menu/'] = $admin_url.'menu/index/';
$route[$admin_url.'article/'] = $admin_url.'article/index/';

/* End of file routes.php */
/* Location: ./application/config/routes.php */