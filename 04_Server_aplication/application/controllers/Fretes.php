<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Auth_model');
        $this->load->model('Model');
        $this->load->library('form_validation');
		$this->load->library('pagination');
    }


	public function index()
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
	public function fretesEstado($q)
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
		$data['fretes'] = $this->Model->fretesEstado($q);
		$data['carroceria'] = $this->Model->carroceria_group_by();
		$data['complemento'] = $this->Model->Complemento_group_by();
		$data['rastreador'] = $this->Model->rastreador_group_by();
		$data['estados'] = $this->Model->all_estados();
		$data['categoria_veiculos'] = $this->Model->categorias_veiculos();

		$this->load->view('frete',$data);
	}

}