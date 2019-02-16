<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model');
		$this->load->model('Auth_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('email');		

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
	public function frete_filter($tipo,$pesquisa)
	{
		$_SESSION['cont'] = 0;

		if ($tipo == 'remover') {
		     unset($_SESSION['lista'][$pesquisa]);
		}	
		if($tipo == 'categoria'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'veiculo_categoria.desc_veiculo_categoria = "'.$url.'"','pesquisa'=>$url]);
			}
			
		}
		if($tipo == 'cidade_origem'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>' frete.cidade_saida = "'.$url.'"','pesquisa'=>$url]);
			}
			
		}
		if($tipo == 'estado_origem'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>' frete.uf_saida = "'.$url.'"','pesquisa'=>$url]);
			}
			
		}

		if($tipo == 'cidade_saida'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>' frete.cidade_entrega = "'.$url.'"','pesquisa'=>$url]);
			}
			
		}
		if($tipo == 'estado_saida'){

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>' frete.uf_entrega = "'.$url.'"','pesquisa'=>$url]);
			}
			
		}
		if($tipo == 'complemento'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.complemento = "'.$url.'"','pesquisa'=>$url]);
			}
		}
		if($tipo == 'precos'){
			$url = urldecode($pesquisa);

			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $url){
					$_SESSION['cont'] +=1;
				}
			}
		
			if($_SESSION['cont'] == 0){
				if($url == 'A Combinar'){
					array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.preco_frete = "A Combinar"','pesquisa'=>$url]);
				}else if ($url == 'Até 2500') {
					array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.preco_frete <= 2500','pesquisa'=>$url]);
				}else if ($url == '2500 a 5000') {
					array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.preco_frete BETWEEN 2500 AND 5000 ','pesquisa'=>$url]);
				}else{
					array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.preco_frete > 5000','pesquisa'=>$url]);
				}
			}
		}
		if($tipo == 'rastreador'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>'frete.rastreador = "'.$url.'"','pesquisa'=>$url]);
			}
		}
		if($tipo == 'carroceria'){
			foreach ($_SESSION['lista'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista'],['tipo'=>$tipo,'select'=>' carroceria.desc_carroceria = "'.$pesquisa.'"','pesquisa'=>$pesquisa]);
			}
		}

	  $config["base_url"] = base_url() . "/pages/fretes";
       $config["total_rows"] = $this->Model->all_fretes_rows();
       $config["per_page"] = 4;
       $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_fretes_total(); 
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $_SESSION['lista'];
		$data['fretes'] = $this->Model->fretes_filter($config["per_page"],$page,$_SESSION['lista']);
		$data['carroceria'] = $this->Model->carroceria_group_by();
		$data['complemento'] = $this->Model->Complemento_group_by();
		$data['rastreador'] = $this->Model->rastreador_group_by();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);
	}
	public function fretes()
	{
	   $config["base_url"] = base_url() . "/pages/fretes";
       $config["total_rows"] = $this->Model->all_fretes_rows();
       $config["per_page"] = 4;
       $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_fretes_total(); 
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $_SESSION['lista'];
		$data['fretes'] = $this->Model->fretes($config["per_page"],$page);
		$data['carroceria'] = $this->Model->carroceria_group_by();
		$data['complemento'] = $this->Model->Complemento_group_by();
		$data['rastreador'] = $this->Model->rastreador_group_by();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();
		$this->load->view('frete',$data);
	}
	public function empresas()
	{	
       $config["base_url"] = base_url() . "/pages/empresas";
       $config["total_rows"] = $this->Model->all_empresas_rows();
       $config["per_page"] = 2;
       $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_empresas_total(); 
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $_SESSION['lista_empresa'];
		$data['estados'] = $this->Model->all_estados();
		$data['ramos'] = $this->Model->ramo();
		$data['empresas'] = $this->Model->all_empresas($config["per_page"], $page);
		$this->load->view('empresas',$data);
	}
	public function empresas_filter($tipo,$pesquisa)
	{

		$_SESSION['cont'] = 0;

		if ($tipo == 'remover') {
		     unset($_SESSION['lista_empresa'][$pesquisa]);
		}
		if($tipo == 'pesquisas'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>'empresa.nome_fantasia like "%'.$url.'%"','pesquisa'=>$url]);
			}
		}
		if($tipo == 'cidade'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>' cidades.nome_cidade = "'.$url.'"','pesquisa'=>$url]);
			}
		}
		if($tipo == 'estados'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>' estados.sigla_estads = "'.$url.'"','pesquisa'=>$url]);
			}
		}
		if($tipo == 'ramo'){
			foreach ($_SESSION['lista_empresa'] as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$_SESSION['cont'] +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($_SESSION['cont'] == 0){
				array_push($_SESSION['lista_empresa'],['tipo'=>$tipo,'select'=>'ramo.desc_ramo = "'.$url.'"','pesquisa'=>$url]);
			}
		}
       $config["base_url"] = base_url() . "/pages/empresas";
       $config["total_rows"] = $this->Model->all_empresas_rows();
       $config["per_page"] = 2;
       $config["uri_segment"] = 3;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_empresas_total(); 
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $_SESSION['lista_empresa'];
		$data['estados'] = $this->Model->all_estados();
		$data['ramos'] = $this->Model->ramo();
		$data['empresas'] = $this->Model->filter_empresa($config["per_page"], $page,$_SESSION['lista_empresa']);
		$this->load->view('empresas',$data);
	}
	public function veiculos()
	{
		

     	$data['check_in_ativo'] = $this->Auth_model->check_in_ativo();
     	$data['veiculos_cadastrados'] = $this->Auth_model->veiculos_cadastrados();
		$this->load->view('veiculo',$data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function contato()
	{
		$this->load->view('contato');
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
	
	public function cadastro_empresa()
	{
		$data['estados']= $this->Model->all_estados();
		$data['ramo'] = $this->Model->all_ramos();
		$this->load->view('cadastros',$data);
	}
	public function assinante()
	{
		$this->load->view('assinante');
	}
	public function areavizualizacao()
	{
		$this->load->view('areavizualizacao');
	}
	public function areaadministrativa()
	{
		$this->load->view('areaadministrativa');
	}
	public function frete($id_frete)
	{
		$data['dados_frete'] = $this->Model->frete_unico($id_frete);
		$this->load->view('frete_unico',$data);
	}
	public function email()
	{
         $this->load->library('email'); 
         $this->email->initialize(array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'localhost',
		  'smtp_user' => 'root',
		  'smtp_pass' => '',
		  'smtp_port' => 21,
		  'crlf' => "\r\n",
		  'newline' => "\r\n"
		));
   
         $this->email->from($this->input->post('email_empresa'),$this->input->post('empresa')); 
         $this->email->to($this->input->post('email'));
         $this->email->subject('Contato empresarial por '. $this->input->post('Nome')); 
         $this->email->message($this->input->post('mensagem')); 
   
         if($this->email->send()) {
         	redirect($_SERVER["REQUEST_URI"],'refresh');
         }else{ 
 		
     	}
	}
	public function pesquisar_placa($pesquisa)
	{
		echo $this->Model->pesquisar_placa($pesquisa);
	}
}