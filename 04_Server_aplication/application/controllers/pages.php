<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function fretes()
	{
		$this->load->view('frete');
	}
	public function empresas()
	{
		$this->load->view('empresas');
	}
	public function veiculos()
	{
		$this->load->view('veiculo');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function contato()
	{
		$this->load->view('contato');
	}
	public function checkin()
	{
		$this->load->view('checkin');
	}
	public function duvidas()
	{
		$this->load->view('duvidas');
	}
	public function estatisticas()
	{
		$this->load->view('estatistica');
	}
	public function quem_somos()
	{
		$this->load->view('quem-somos');
	}


}
