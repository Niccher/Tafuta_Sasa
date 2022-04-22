<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	'username' => 'tendolla_tafuta',
	'password' => 'Iv+v#N3yvzD+';//Q,D?u.j7BOUc',
	'database' => 'tendolla_tafuta',
*/
	
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'tendolla_tafuta',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

	/*'username' => 'tendolla_test',
	'password' => 'LKI~cwrl&skB',
	'database' => 'tendolla_test_run_db',*/

$db['alt_db'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',//tendolla_test',
	'password' => '',//LKI~cwrl&skB',
	'database' => 'tendolla_test_run_db',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => TRUE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
