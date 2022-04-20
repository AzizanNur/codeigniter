<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 					= 'Maincontrol';
$route['auth-login'] 							= 'Maincontrol/login';

//apartement
$route['form-apartement']						= 'Apartement/build_index';
$route['add-apartement']						= 'Apartement/build_add';
$route['save-apartement/([a-z-0-9\-_]{0,})']	= 'Apartement/build_save/$1';
$route['edit-apartement/([0-9\-_]{0,})']		= 'Apartement/build_edit/$1';
$route['delete-apartement/([0-9\-_]{0,})']  	= 'Apartement/build_delete/$1';

//gedung
$route['form-gedung']					      	= 'gedung/build_index';
$route['add-gedung']					       	= 'gedung/build_add';
$route['save-gedung/([a-z-0-9\-_]{0,})']	    = 'gedung/build_save/$1';
$route['edit-gedung/([0-9\-_]{0,})']		    = 'gedung/build_edit/$1';
$route['delete-gedung/([0-9\-_]{0,})']  	    = 'gedung/build_delete/$1';

//unit
$route['form-unit']					      	     = 'unit/build_index';
$route['add-unit']					             = 'unit/build_add';
$route['save-unit/([a-z-0-9\-_]{0,})']	         = 'unit/build_save/$1';
$route['edit-unit/([0-9\-_]{0,})']		         = 'unit/build_edit/$1';
$route['delete-unit/([0-9\-_]{0,})']  	         = 'unit/build_delete/$1';

$route['404_override'] 							= '';
$route['translate_uri_dashes'] 					= FALSE;

