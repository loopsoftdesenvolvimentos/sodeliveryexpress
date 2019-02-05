<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
$route['estados/cidades/(:any)'] = 'pages/select_cidades/$1';
$route['fretes/(:any)/(:any)'] = 'pages/filtros/$1/$2';
$route['empresas/(:any)/(:any)'] = 'pages/empresas_filter/$1/$2';
