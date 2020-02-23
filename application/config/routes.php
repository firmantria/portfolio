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
$route['default_controller'] = 'profile';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Portfolio
$route['portfolio'] = 'profile';

// Admin
$route['cms'] = 'admin';

// Auth
$route['logout'] = 'auth/logout';
$route['login'] = 'auth/index';
$route['verify'] = 'auth/verify';

// Skill
$route['my-skill'] = 'skill/index';
$route['add-my-skill'] = 'skill/add';
$route['delete-my-skill'] = 'skill/delete';
$route['update-my-skill'] = 'skill/update';

// Pengalaman
$route['pengalaman-kerja'] = 'pengalamankerja/index';
$route['only-one-pengalaman-kerja'] = 'pengalamankerja/get_by_id';
$route['add-pengalaman-kerja'] = 'pengalamankerja/add';
$route['update-pengalaman-kerja'] = 'pengalamankerja/update';
$route['delete-pengalaman-kerja'] = 'pengalamankerja/delete';

// Pendidikan
$route['riwayat-pendidikan'] = 'pendidikan/index';
$route['only-one-riwayat-pendidikan'] = 'pendidikan/get_by_id';
$route['add-riwayat-pendidikan'] = 'pendidikan/add';
$route['update-riwayat-pendidikan'] = 'pendidikan/update';
$route['delete-riwayat-pendidikan'] = 'pendidikan/delete';

// Service
$route['service'] = 'service/index';
$route['only-one-service'] = 'service/get_by_id';
$route['add-service'] = 'service/add';
$route['update-service'] = 'service/update';
$route['delete-service'] = 'service/delete';

// Message
$route['inbox'] = 'pesan/index';
$route['add-inbox'] = 'pesan/add';
$route['all-inbox'] = 'pesan/all_inbox';
$route['detail-inbox'] = 'pesan/detail_inbox';

// Code Practice
$route['code-practice'] = 'practice/index';
