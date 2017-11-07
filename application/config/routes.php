<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products/index'] = 'products/index';
$route['products/create'] = 'products/create';
$route['products/update'] = 'products/update';
$route['products/(:any)'] = 'products/view/$1';
$route['products'] = 'products/index';

$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;