<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));	
	}

	public function logar(){

		$this->form_validation->set_rules('email_user','Email','required');	
		$this->form_validation->set_rules('Senha_login','Senha','required');

		if(!$this->form_validation->run()){

			$this->load->view('login');
		}else{

			$dados = array(
				'email' => $this->input->post('email_user'),
				'senha_autenticacao' => $this->input->post('Senha_login')
			);

			

			if($this->Model->empresa_login($dados)){

				echo "Logado com sucesso!";
			}else{

				echo "Email e/ou senha inválido(s)!";
			}
		}

	}

	public function cadastrar_empresa()
	{
		
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
            
            if (!$this->upload->do_upload('client_name'))
            {
                    $error = array('error' => $this->upload->display_errors());
            }
            else
            {
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
		        	redirect('/pages/empresas','refresh');
		        }
                  
            }
		}else{
			$data['estados']= $this->Model->all_estados();
			$data['ramo'] = $this->Model->all_ramos();
			$this->load->view('cadastros',$data);
		}
	}
	
}

