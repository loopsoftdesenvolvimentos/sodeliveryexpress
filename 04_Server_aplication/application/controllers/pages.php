<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model');
	}
	public function index()
	{
		$data['estados'] = $this->Model->all_estados();
		$this->load->view('index',$data);
	}
	public function filtros($tipo,$pesquisa)
	{

		session_start();

		 $_SESSION['filter'];

		if($tipo == 'origem'){
			$_SESSION['filter'] .= 'and frete.cidade_entrega = '.$pesquisa.'';
		}
		if($tipo == 'destino'){
			$_SESSION['filter'] .= 'and frete.Cidade_saida = '.$pesquisa.'';
		}

		if($tipo == 'Cidade'){
			$_SESSION['filter'] .= 'and frete.Cidade_saida = '.$pesquisa.'';
		}
		if($tipo == 'categoria'){
			$_SESSION['filter'] .= 'and veiculo_categoria.desc_veiculo_categoria = "'.$pesquisa.'"';
		}
		if($tipo == 'complemento'){
			$_SESSION['filter'] .= 'and frete.complemento = "'.$pesquisa.'"';
		}
		if($tipo == 'Raio'){
			$_SESSION['filter'] .= 'and frete.Raio <= "'.$pesquisa.'"';
		}

		echo $_SESSION['filter'];

		$data['fretes'] = $this->Model->filter($_SESSION['filter']);
		$data['carroceria'] = $this->Model->carrocerias();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);

	}
	public function fretes()
	{
		$data['fretes'] = $this->Model->fretes();
		$data['carroceria'] = $this->Model->carrocerias();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);
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
	public function select_cidades($id)
	{
		echo $this->Model->all_cidades($id);
	}

}
