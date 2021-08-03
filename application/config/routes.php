<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/home'] = 'admin/test';
$route['admin/dashboard'] = 'admin';

$route['admin/users'] = 'admin/users';
$route['admin/users/view'] = 'admin/users';

$route['admin/questions'] = 'questions';
$route['admin/questions/add'] = 'questions/add';
$route['admin/questions/view'] = 'questions/view';
$route['admin/questions/edit'] = 'questions/edit';
$route['admin/questions/delete'] = 'questions/delete';

$route['admin/messages'] = 'messages';
$route['admin/messages/sent'] = 'messages/sent';
$route['admin/messages/inbox'] = 'messages/inbox';
$route['admin/messages/view'] = 'messages/view';

$route['admin/sales'] = 'admin/sales';
$route['admin/analytics'] = 'admin/analytics';

$route['admin'] = 'admin';

$route['auth/login'] = 'auth/login';
$route['auth/register'] = 'auth/register';
$route['auth/forgot'] = 'auth/forgot';
$route['auth/reset'] = 'auth/reset';
$route['auth/activate'] = 'auth/activate';
$route['auth/terms'] = 'auth/terms';
$route['auth/conditions'] = 'auth/terms';
$route['auth/privacy'] = 'auth/privacy';
$route['auth/home'] = 'auth/home';


$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
