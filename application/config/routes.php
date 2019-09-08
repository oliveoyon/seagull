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
$route['default_controller'] = 'welcome';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = TRUE;

$route['blog/(.*?)'] = "web/blog/$1";
$route['event/(.*?)'] = "web/event/$1";  //for web
$route['src/(.*?)'] = "web/src/$1";
$route['manager/(.*?)'] = "manager/manager/$1";
$route['login/(.*?)'] = "login/login/$1";
$route['book_author/(.*?)'] = "book_author/book_author/$1";
$route['book_reviewer/(.*?)'] = "book_reviewer/book_reviewer/$1";
$route['book_member/(.*?)'] = "book_member/book_member/$1";
$route['product/(.*?)'] = "manager/product/$1";
$route['journal/(.*?)'] = "manager/journal/$1";
$route['news/(.*?)'] = "manager/news/$1";
$route['book_manuscript/(.*?)'] = "manager/book_manuscript/$1";
$route['events/(.*?)'] = "manager/events/$1";  //for admin event post
$route['archives/(.*?)'] = "web/archives/$1";  //for admin event post
$route['(.*?)'] = "web/home/$1";

//$route['(.*?)'] = "manager/$1";
