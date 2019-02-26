<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {


	public function index()
	{
		$data['estados'] = $this->Model->all_estados();
		$this->load->view('index',$data);
	}
	
	public function login()
	{
		$this->load->view('login');
	}

	public function contato()
	{
		$this->load->view('contato');
	}

	public function quem_somos()
	{
		$this->load->view('quem-somos');
	}

	public function assinante()
	{
		$this->load->view('assinante');
	}
	
	public function areacadastro()
	{
		$this->load->view('areacadastro');
	}

}	
