<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){

		$this->load->view('administrativo');
	}

	public function estatisticas(){

		$this->load->view('estatistica');
	}

	public function areaadministrativa(){
		
		$this->load->view('areaadministrativa');
	}

}
