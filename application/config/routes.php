<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/home'] = 'admin';
$route['admin/dashboard'] = 'admin';

$route['admin/users'] = 'admin/users';
$route['admin/users/view'] = 'admin/users';
$route['admin/users/invite'] = 'admin/users_invite';

$route['admin/questions'] = 'admin/questions';
$route['admin/questions/add'] = 'admin/questions_add';
$route['admin/questions/view'] = 'admin/questions_view';
$route['admin/questions/edit'] = 'admin/edit';
$route['admin/questions/delete'] = 'admin/delete';

$route['admin/messages'] = 'messages';
$route['admin/messages/sent'] = 'messages/sent';
$route['admin/messages/inbox'] = 'messages/inbox';
$route['admin/messages/view'] = 'messages/view';

$route['admin/mails'] = 'admin/mails';
$route['admin/chats'] = 'admin/chats';
$route['admin/mail/view'] = 'admin/mail_read';
$route['admin/mail/read'] = 'admin/mail_read';
$route['admin/mail/create'] = 'admin/mail_compose';

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

$route['home'] = 'pages/landing';
$route['search'] = 'pages/search';
$route['search/question'] = 'pages/view_answer';
$route['search/question/clean'] = 'pages/view_answer_clean';


$route['client/home'] = 'client';
$route['client/dashboard'] = 'client';

$route['client/profile'] = 'client/profile';
$route['client/users/invite'] = 'client/users_invite';

$route['client/questions'] = 'client/questions';
$route['client/sales'] = 'client/subscribe';
$route['client/account'] = 'client/account';
$route['client/invoice'] = 'client/invoice';
$route['client/account/invoice'] = 'client/invoice';
$route['client/questions/view'] = 'client/questions_view';
$route['client/chats'] = 'client/chats';



$route['default_controller'] = 'pages/landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
