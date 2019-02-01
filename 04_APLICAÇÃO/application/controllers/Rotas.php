<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rotas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function veiculos()
	{
		$this->load->view('veiculo');
	}
	public function fretes()
	{
		$this->load->view('frete');
	}
	public function empresas()
	{
		$this->load->view('empresas');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function cadastro_empresa()
	{
		$this->load->view('cadastros');
	}
	public function cadastro_veiculo()
	{
		$this->load->view('veiculo_cadastro_verificar');
	}
}
