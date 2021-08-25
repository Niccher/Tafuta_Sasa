<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin';
$route['admin/home'] = 'admin';
$route['admin/dashboard'] = 'admin';

$route['admin/users'] = 'user';
$route['admin/users/home'] = 'user';
$route['admin/users/details/(:any)'] = 'user/users_view';

$route['admin/questions'] = 'questions/questions';
$route['admin/questions/add'] = 'questions/questions_add';
$route['admin/questions/view/(:any)'] = 'questions/questions_view';
$route['admin/questions/edit'] = 'questions/edit';
$route['admin/questions/delete'] = 'questions/delete'; 
$route['admin/questions/attach'] = 'questions/questions_add_attachment';

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

$route['questions/get_attachment/(:any)'] = 'questions/questions_get_attachment';
$route['questions/delete/(:any)'] = 'questions/questions_deleted/$1';


$route['auth'] = 'auth/login';
$route['auth/login'] = 'auth/login';
$route['auth/register'] = 'auth/register';
$route['auth/forgot'] = 'auth/forgot';
$route['auth/reset/(:any)'] = 'auth/reset'; 
$route['auth/new_password'] = 'auth/new_password';
$route['auth/activate'] = 'auth/activate';
$route['auth/terms'] = 'auth/terms';
$route['auth/conditions'] = 'auth/terms';
$route['auth/privacy'] = 'auth/privacy';
$route['auth/home'] = 'auth/home';
$route['auth/logout'] = 'auth/logout';

$route['home'] = 'pages/landing';
$route['search'] = 'pages/search';
$route['search/question'] = 'pages/view_answer';
$route['search/question/clean'] = 'pages/view_answer_clean';
$route['search/answer/(:any)'] = 'pages/view_answer_name';

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
$route['client/chats'] = 'chat/client_init';
$route['client/chat'] = 'chat/client_init';

$route['client/profile/add'] = 'client/profileadd';
$route['client/massage/send'] = 'chat/client_send';
$route['client/convos/(:any)'] = 'chat/client_convo_with/$1';



$route['default_controller'] = 'pages/landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
