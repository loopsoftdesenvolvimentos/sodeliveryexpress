<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
$route['estados/cidades/(:any)'] = 'pages/select_cidades/$1';
$route['crud'] = 'crud';
