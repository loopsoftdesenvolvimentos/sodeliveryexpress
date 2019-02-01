<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Rotas/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['veiculos'] = 'Rotas/veiculos';
$route['fretes'] = 'Rotas/fretes';
$route['empresas'] = 'Rotas/empresas';
$route['administrativo'] = 'Rotas/login';
$route['empresa/cadastro'] ='Rotas/cadastro_empresa';
$route['veiculo/cadastro'] ='Rotas/cadastro_veiculo';