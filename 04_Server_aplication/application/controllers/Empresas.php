<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

    public function __construct(){

        parent::__construct();
		$this->load->model('Auth_model');
        $this->load->model('Model');
        $this->load->library('form_validation');
		$this->load->library('pagination');
    }

	public function index(){

        $config["base_url"] = site_url('empresas/index');
        $config["total_rows"] = $this->Model->all_empresas_rows();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_empresas_total();
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $this->session->lista_empresa;
		$data['estados'] = $this->Model->all_estados();
		$data['ramos'] = $this->Model->ramo();
		$data['empresas'] = $this->Model->all_empresas($config["per_page"], $page);

		$this->load->view('empresas', $data);
	}

	public function filtrar($tipo,$pesquisa){

		$this->session->cont = 0;

		if ($tipo == 'remover') {

		     unset($this->session->lista_empresa[$pesquisa]);
		}

		if($tipo == 'pesquisas'){
			foreach ($this->session->lista_empresa as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$this->session->cont += 1;
				}
			}
			$url = urldecode($pesquisa);
			if($this->session->cont == 0){
				array_push($this->session->lista_empresa,['tipo'=>$tipo,'select'=>'empresa.nome_fantasia like "%'.$url.'%"','pesquisa'=>$url]);
			}
		}

		if($tipo == 'cidade'){
			foreach ($this->session->lista_empresa as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$this->session->cont +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($this->session->cont == 0){
				array_push($this->session->lista_empresa,['tipo'=>$tipo,'select'=>' cidades.nome_cidade = "'.$url.'"','pesquisa'=>$url]);
			}
		}

		if($tipo == 'estados'){
			foreach ($this->session->lista_empresa as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$this->session->cont +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($this->session->cont == 0){
				array_push($this->session->lista_empresa,['tipo'=>$tipo,'select'=>' estados.sigla_estads = "'.$url.'"','pesquisa'=>$url]);
			}
		}

		if($tipo == 'ramo'){
			foreach ($this->session->lista_empresa as $key => $lista) {
				if($lista['pesquisa'] == $pesquisa){
					$this->session->cont +=1;
				}
			}
			$url = urldecode($pesquisa);
			if($this->session->cont == 0){
				array_push($this->session->lista_empresa,['tipo'=>$tipo,'select'=>'ramo.desc_ramo = "'.$url.'"','pesquisa'=>$url]);
			}
		}

       $config["base_url"] = base_url() . "/empresas";
       $config["total_rows"] = $this->Model->all_empresas_rows();
       $config["per_page"] = 2;
       $config["uri_segment"] = 3;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      	$data['total'] = $this->Model->all_empresas_total();
        $data['link'] = $this->pagination->create_links();
		$data['pesquisas'] = $this->session->lista_empresa;
		$data['estados'] = $this->Model->all_estados();
		$data['ramos'] = $this->Model->ramo();
		$data['empresas'] = $this->Model->filter_empresa($config["per_page"], $page,$this->session->lista_empresa);

		$this->load->view('empresas',$data);
	}

	public function cadastrar(){

		$data['estados']= $this->Model->all_estados();
		$data['ramo'] = $this->Model->all_ramos();
		$this->load->view('cadastros',$data);
	}

	public function cadastrar_empresa(){
		
		$this->form_validation->set_rules('razao_social','Razão social','required');	
		$this->form_validation->set_rules('CEP','CEP','required');
		$this->form_validation->set_rules('Nextel','Nextel','required');
		$this->form_validation->set_rules('cnpj','CNPJ','required');
		$this->form_validation->set_rules('Endereço','Endereço','required');
		$this->form_validation->set_rules('Email','E-mail','required');
		$this->form_validation->set_rules('Bairro','Bairro','required');
		$this->form_validation->set_rules('Complemento','Complemento','required');
		$this->form_validation->set_rules('nome_fantasia','Nome fantasia','required');
		$this->form_validation->set_rules('Inscriao_Estadual','Inscrição estadual','required');
		$this->form_validation->set_rules('Site','Site','required');
		$this->form_validation->set_rules('Fax','Fax','required');
		$this->form_validation->set_rules('url_facebook1','Url facebook','required');	
		$this->form_validation->set_rules('url_facebook2','Url facebook','required');
		$this->form_validation->set_rules('URL','Url facebook empresa','required');	
		$this->form_validation->set_rules('url_facebook3','Url facebook','required');
		$this->form_validation->set_rules('nome_contato1','Contato','required');	
		$this->form_validation->set_rules('nome_contato2','Contato','required');
		$this->form_validation->set_rules('nome_contato3','Contato','required');
		$this->form_validation->set_rules('Celular','Celular','required');	
		$this->form_validation->set_rules('Contato1','Contato celular','required');
		$this->form_validation->set_rules('Whatsapp','Whatsapp','required');
		$this->form_validation->set_rules('email_autentificação','E-mail de autentificação','required');
		$this->form_validation->set_rules('senha','Senha autentificação','required');

		if ($this->form_validation->run() == TRUE) {

            $config['upload_path']    = 'public/uploads/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 10000;
            $config['max_width']      = 10240;
            $config['max_height']     = 76800;

            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('client_name')){

                    $error = array('error' => $this->upload->display_errors());
            }else{

		         $data = array(
					'razao_social'=>$this->input->post('razao_social'),
					'cnpj'=>$this->input->post('cnpj'),
					'endereco'=>$this->input->post('Endereço'),
					'email'=>$this->input->post('Email'),
					'bairro'=> $this->input->post('Bairro'),
					'complemento'=>$this->input->post('Complemento'),
					'nome_fantasia'=> $this->input->post('nome_fantasia'),
					'inscricao_estadual'=> $this->input->post('Inscriao_Estadual'),
					'cep'=> $this->input->post('CEP'),
					'data_engresso_empresa'=>  date("Y/m/d"),
					'foto_empresa'=> 'public/uploads/'.$this->upload->data('client_name'),
					'site'=> $this->input->post('Site'),
					'skype'=> $this->input->post('Skype'),
					'nextel'=> $this->input->post('Nextel'),
					'fax'=> $this->input->post('Fax'),
					'url_facebook_empresa'=> $this->input->post('URL'),
					'url_facebook'=> $this->input->post('url_facebook1'),
					'contato'=> $this->input->post('nome_contato1'),
					'url_facebook2'=> $this->input->post('url_facebook2'),
					'contato2'=> $this->input->post('nome_contato2'),
					'url_facebook3'=> $this->input->post('url_facebook3'),
					'contato3'=> $this->input->post('nome_contato3'),
					'telefone_comercial'=> $this->input->post('Telefone_comercial'),
					'contato_comercial'=> $this->input->post('contato_comercial'),
					'celular'=> $this->input->post('Celular'),
					'operadora'=> $this->input->post('Operadora'),
					'contato1'=> $this->input->post('nome_contato1'),
					'whatsapp '=> $this->input->post('Whatsapp'),
					'id_cidade'=> $this->input->post('Cidade'),
					'id_ramo'=> $this->input->post('ramo_empresa'),
					'E_mail_autenticacao'=> $this->input->post('email_autentificação'),
					'senha_autenticacao'=>$this->input->post('senha')
				);

		        if($this->Model->cadastrar_empresa($data) != true){
		        	redirect('/empresas','refresh');
		        }
                  
            }
		}else{

			$data['estados']= $this->Model->all_estados();
			$data['ramo'] = $this->Model->all_ramos();
			$this->load->view('cadastros',$data);
		}
	}

}
