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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['api/login'] = 'api/ApiLogin/do_login';
$route['api/sign_up'] = 'api/ApiLogin/sign_up';

$route['api/clients/all'] = 'api/ApiClient/all';
$route['api/clients/add'] = 'api/ApiClient/add';
$route['api/clients/update'] = 'api/ApiClient/update';
$route['api/clients/(:num)/delete'] = 'api/ApiClient/delete/$1';


$route['api/contacts/add'] = 'api/ApiContact/add';
$route['api/contacts/update'] = 'api/ApiContact/update';
$route['api/contacts/(:num)/delete'] = 'api/ApiContact/delete/$1';
$route['api/contacts/all'] = 'api/ApiContact/all';


$route['api/invoices/all'] = 'api/ApiInvoice/all';
$route['api/invoices/add'] = 'api/ApiInvoice/add';
$route['api/invoices/update'] = 'api/ApiInvoice/update';



$route['api/invoices/add/item'] = 'api/ApiInvoice/create_item';
$route['api/invoices/add/update'] = 'api/ApiInvoice/update';
$route['api/invoices/update/item'] = 'api/ApiInvoice/update_item';
$route['api/invoices/items/(:num)/delete'] = 'api/ApiInvoice/delete_item/$1';
$route['api/invoices/make_payment'] = 'api/ApiInvoice/make_payment';
$route['api/invoices/void_invoice'] = 'api/ApiInvoice/void_invoice';



$route['api/profile/get'] = 'api/ApiProfile/get';
$route['api/profile/update'] = 'api/ApiProfile/update';