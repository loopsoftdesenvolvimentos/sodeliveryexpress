<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Veiculos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Auth_model');
        $this->load->model('Model');
        $this->load->library('form_validation');
    }
    public function verificar_session()
    {
        if($this->session->loggedin == false){
            redirect('pages/login','location');
        }
    }
    public function authenticate_motorista()
    {

        $this->form_validation->set_rules('login_user','Placa veiculo','required');    
        $this->form_validation->set_rules('Senha_placa','Senha de acesso','required');    


        if($this->form_validation->run() == TRUE){
            $informacoes = array(
                'user'=>$this->input->post('login_user'),
                'password'=>$this->input->post('Senha_placa')
            );
            $authenticate = $this->Auth_model->authenticate_motorista($informacoes);

            if ($authenticate)
            {
                $this->session->set_userdata('loggedin', true);
                $this->session->set_userdata('dados', $authenticate);
                 echo json_encode(['sucess'=>'Redirecionando área do checkin']);;
            }
            else
            {
                $errors = validation_errors();
                echo json_encode(['error'=>'Veiculo não encontrado.']);
            }
        }else{
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('dados');
        redirect('pages/login','location');
    }

    public function cadastro_veiculo()
    {
        $data['categoria_veiculos'] = $this->Model->categorias_veiculos();
        $data['estados'] = $this->Model->all_estados();
        $data['marcas'] = $this->Model->Marcas();
        $data['carrocerias'] =$this->Model->carrocerias();
        $this->load->view('areacadastro',$data);
    }

    public function editar_dados()
    {
        $this->verificar_session();
        $data['categoria_veiculos'] = $this->Model->categorias_veiculos();
        $data['estados'] = $this->Model->all_estados();
        $data['marcas'] = $this->Model->Marcas();
        $data['carrocerias'] =$this->Model->carrocerias();
        $data['motorista'] = $this->Auth_model->atualizar_dados($this->session->dados);
        $this->load->view('editar_cadastro_motorista',$data);
    }

    public function acesso_veiculo()
    {
        $this->verificar_session();
        $this->load->view('acesso_veiculo_index');
    }

    public function checkin()
    {
        $this->verificar_session();
        $data['estados'] = $this->Model->all_estados();
        $this->load->view('checkin',$data);
    }

    public function cadastrar_veiculo()
    {
        $this->form_validation->set_rules('nome_proprietario','Nome motorista','required');
        $this->form_validation->set_rules('Cidade','Cidade','required');
        $this->form_validation->set_rules('email','E-mail','required');
        $this->form_validation->set_rules('telefone1','Telefone','required');
        $this->form_validation->set_rules('Tipo','Tipo contato','required');
        $this->form_validation->set_rules('Veiculo','Veiculo','required');
        $this->form_validation->set_rules('carroceria_veiculo','Carroceria Veiculo','required');
        $this->form_validation->set_rules('Rastreador','Rastreador','required');
        $this->form_validation->set_rules('Marca','Marca','required');
        $this->form_validation->set_rules('Ano','Ano','required');
        $this->form_validation->set_rules('RNTRC','RNTRC','required');
        $this->form_validation->set_rules('permissao','Permissão','required');
        $this->form_validation->set_rules('senha','Senha','required');


        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
        }else{
             

             $data = array(
                'nome_proprietario'=>$this->input->post('nome_proprietario'),
                'placa_veiculo'=>$this->input->post('placa_veiculo'),
                'id_cidade'=>$this->input->post('Cidade'),
                'email'=>$this->input->post('email'),
                'telefone'=> $this->input->post('telefone1'),
                'Tipo'=>$this->input->post('Tipo'),
                'contato'=>$this->input->post('contato'),
                'id_veiculo_categoria'=> $this->input->post('Veiculo'),
                'id_carroceria'=>$this->input->post('carroceria_veiculo'),
                'rastreador'=> $this->input->post('Rastreador'),
                'id_marca'=> $this->input->post('Marca'),
                'ano'=>$this->input->post('Ano'),
                'rntrc'=> $this->input->post('RNTRC'),
                'permissionado'=>$this->input->post('permissao'),
                'senha'=> $this->input->post('Senha'),
            );

	        if($this->Model->cadastrar_veiculo($data) != true){
	            echo json_encode(['sucess'=>'<p>Veiculo cadastrado com sucesso, redirecionando .. .</p>']);
	        }
        }
    }

    public function editar_dados_motorista()
    {
        $data = array(
	        'nome_proprietario'=>$this->input->post('nome_proprietario'),
	        'placa_veiculo'=>$this->input->post('placa_veiculo'),
	        'id_cidade'=>$this->input->post('Cidade'),
	        'email'=>$this->input->post('email'),
	        'telefone'=> $this->input->post('telefone1'),
	        'endereco'=> $this->input->post('Endereço'),
	        'data_nascimento'=> $this->input->post('nascimento'),
	        'modelo'=> $this->input->post('Modelo'),
	        'seguro'=> $this->input->post('Seguro'),
	        'cnh'=> $this->input->post('CNH'),
	        'tipo'=>$this->input->post('Tipo'),
	        'contato'=>$this->input->post('contato'),
	        'id_veiculo_categoria'=> $this->input->post('Veiculo'),
	        'id_carroceria'=>$this->input->post('carroceria_veiculo'),
	        'rastreador'=> $this->input->post('Rastreador'),
	        'id_marca'=> $this->input->post('Marca'),
	        'ano'=>$this->input->post('Ano'),
	        'rntrc'=> $this->input->post('RNTRC'),
	        'permissionado'=>$this->input->post('permissao'),
	    );

        if($this->Model->editar_dados_veiculo($data) != true){
            echo json_encode(['sucess'=>'<p>Informações alteradas com sucesso.</p>']);
        }
    }
    public function Checkin_efetuar()
    {
        $data = array(
            'estado'=>$this->input->post('Estados'),
            'destino'=>$this->input->post('Cidade'),
            'id_veiculo'=>$this->session->dados[0]->id_veiculo,
        );

         if($this->Model->Checkin_efetuar($data) != true){
              redirect('Auth_veiculo/acesso_veiculo','location');  
        }
    }
}
