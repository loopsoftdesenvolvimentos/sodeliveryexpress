<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model');

		session_start();

		if(!isset($_SESSION['lista']) || !isset($_SESSION['lista_empresa'])){
			$_SESSION['lista'] = [];	
			$_SESSION['lista_empresa'] = [];
		}else{
			 $_SESSION['lista'];
			 $_SESSION['lista_empresa'];
		}
	}
	public function index()
	{
		$data['estados'] = $this->Model->all_estados();
		$this->load->view('index',$data);
	}
	public function filtros($tipo,$pesquisa)
	{
		$_SESSION['cont'] =0;

		if ($tipo == 'remover') {
		     unset($_SESSION['lista'][$pesquisa]);
		}	
		if($tipo == 'origem'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
			array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.cidade_entrega = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'destino'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.Cidade_saida = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}

		if($tipo == 'cidade'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.Cidade_saida = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'categoria'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and veiculo_categoria.desc_veiculo_categoria = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
			
		}
		if($tipo == 'complemento'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.complemento = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'raio'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.Raio <= "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'rastreador'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and frete.rastreador <= "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'carroceria'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'and carroceria.desc_carroceria <= "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}

		$data['pesquisas'] = $_SESSION['lista'];
		$data['fretes'] = $this->Model->filter($_SESSION['lista']);
		$data['carroceria'] = $this->Model->carrocerias();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);

	}
	public function fretes()
	{
		$data['pesquisas'] = $_SESSION['lista'];
		$data['fretes'] = $this->Model->fretes();
		$data['carroceria'] = $this->Model->carrocerias();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);
	}
	public function empresas()
	{
		$data['pesquisas'] = $_SESSION['lista_empresa'];
		$data['estados'] = $this->Model->all_estados();
		$this->load->view('empresas',$data);
	}
	public function empresas_filter($tipo,$filter)
	{

		$_SESSION['cont'] =0;


		if($tipo == 'search'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>'and like nome_fantasia %"'.$pesquisa.'"%','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'ramo'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>'and empresas.ramo = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		if($tipo == 'raio'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>'and empresas.Raio <= "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}
		$data['pesquisas'] = $_SESSION['lista_empresa'];
		$this->load->view('empresas',$data);
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
	public function quem_somos()
	{
		$this->load->view('quem_somos');
	}
	public function administrativo()
	{
		$this->load->view('administrativo');
	}
	public function acesso_veiculo()
	{
		$this->load->view('acesso_veiculo_index');
	}
	public function cadastro_empresa()
	{
		$this->load->view('cadastros');
	}
	public function cadastro_veiculo()
	{
		$this->load->view('veiculo_cadastro_verificar');
	}
	public function assinante()
	{
		$this->load->view('assinante');
	}
	public function areacadastro()
	{
		$this->load->view('areacadastro');
	}
	public function areavizualizacao()
	{
		$this->load->view('areavizualizacao');
	}
	public function areaadministrativa()
	{
		$this->load->view('areaadministrativa');
	}
}
