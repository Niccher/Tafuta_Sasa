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

$route['admin/mails'] = 'chat/admin_init';
$route['admin/chats'] = 'chat/admin_init';
$route['admin/chat'] = 'chat/admin_init';
$route['admin/mail/send/(:any)'] = 'chat/admin_send/';
$route['admin/mail/with/(:any)'] = 'chat/admin_convo_with/$1';

$route['admin/sales'] = 'admin/sales';
$route['admin/analytics'] = 'admin/analytics';

$route['admin/test/files'] = 'admin/analytics';

$route['questions/get_attachment/(:any)'] = 'questions/questions_get_attachment';
$route['questions/delete/(:any)'] = 'questions/questions_deleted/$1';

$route['admin/get/order_attachments'] = 'adminorders/orders_make_attachment_ui';
$route['admin/get/attachment_delete/(:any)'] = 'adminorders/orders_attachment_delete/$1';
$route['admin/orders/edit/(:any)'] = 'adminorders/orders_edit/$1';
$route['admin/orders/view/(:any)'] = 'adminorders/orders_view/$1';
$route['admin/orders/delete/(:any)'] = 'adminorders/orders_delete/$1';
$route['admin/orders'] = 'adminorders';

$route['admin/order/assign/(:any)'] = 'adminorders/order_assign/$1';

$route['orders/uploads/attachment/(:any)'] = 'clientorders/orders_get_attachment';

$route['orders/temp_submit'] = 'adminorders/submit_temp_files';
$route['admin/get/submit_temp_attachments'] = 'adminorders/submit_temp_make_attachment_ui';
$route['admin/get/submit_temp_attachment_delete/(:any)'] = 'adminorders/submit_temp_attachment_delete';
$route['admin/get/submit_order'] = 'adminorders/order_submit';


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
$route['home/v1'] = 'pages/landing';
$route['home/v2'] = 'pages/land';
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

$route['client/orders'] = 'clientorders';
$route['client/orders/add'] = 'clientorders/orders_make';
$route['client/orders/attach'] = 'clientorders/orders_add_attachment';
$route['client/order/make'] = 'clientorders/orders_add';
$route['client/get/order_attachments'] = 'clientorders/orders_make_attachment_ui';
$route['client/get/attachment_delete/(:any)'] = 'clientorders/orders_attachment_delete/$1';
$route['client/orders/edit/(:any)'] = 'clientorders/orders_edit/$1';
$route['client/orders/view/(:any)'] = 'clientorders/orders_view/$1';
$route['client/orders/delete/(:any)'] = 'clientorders/orders_delete/$1';
$route['client/orders/pay/(:any)'] = 'clientorders/orders_pay/$1';

$route['client/orders/download_attachments/(:any)'] = 'clientorders/download_attachments/$1';

$route['client/profile/add'] = 'client/profileadd';
$route['client/profile/attach_img'] = 'client/profile_add_image';
$route['client/massage/send'] = 'chat/client_send';
$route['client/convos/(:any)'] = 'chat/client_convo_with/$1';

$route['user/new/create'] = 'pages/view_new_user';
$route['buyer/pay/(:any)'] = 'pages/view_payform/$1'; 
$route['client/pay/(:any)'] = 'transaction/transaction_stripe_pay/$1'; 

$route['default_controller'] = 'pages/landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
