<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'	=> '',
    'hostname' => 'localhost',
    'username' => 'chegecac_tafta',
    'password' => 'TgGBY3YZOMp3',
    'database' => 'chegecac_Tafuta',
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

/*
'username' => 'chegecac_ci10d',
'password' => '%)MrpbG^j^uR',
'database' => 'chegecac_CiTendollar',
*/

$db['alt_db'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'chegecac_ci10d',
	'password' => 'rRpU@2J(opJE',
	'database' => 'chegecac_CiTendollar',
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
