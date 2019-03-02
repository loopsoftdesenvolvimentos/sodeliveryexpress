<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VeiculosDAO extends CI_Model  {
	
	 public function __construct(){
        $this->load->database();
     }

     public function authenticate_motorista($informaçoes)
     {
     	return $this->db->select('*')
     					->from('veiculos')
     					->from('marca')
     					->from('cidades')
     					->from('estados')
     					->from('carroceria')
     					->from('veiculo_categoria')
     					->from('categoria')
     					->where('veiculos.id_marca = marca.id_marca')
     					->where('veiculos.id_cidade = cidades.id_cidade')
     					->where('cidades.id_estado = estados.id_estado')
     					->where('veiculos.id_carroceria = carroceria.id_carroceria')
     					->where('veiculos.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
     					->where('veiculo_categoria.id_categoria = categoria.id_categoria')
     					->where('placa_veiculo = "'.$informaçoes['user'].'"')
     					->where('senha = "'.$informaçoes['password'].'"')
     					->get()
     					->result();
     }
     public function atualizar_dados($data)
     {
         return $this->db->select('*')
                         ->from('veiculos')
                         ->from('marca')
                         ->from('cidades')
                         ->from('estados')
                         ->from('carroceria')
                         ->from('veiculo_categoria')
                         ->from('categoria')
                         ->where('veiculos.id_marca = marca.id_marca')
                         ->where('veiculos.id_cidade = cidades.id_cidade')
                         ->where('cidades.id_estado = estados.id_estado')
                         ->where('veiculos.id_carroceria = carroceria.id_carroceria')
                         ->where('veiculos.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
                         ->where('veiculo_categoria.id_categoria = categoria.id_categoria')
                         ->where('placa_veiculo = "'.$data[0]->placa_veiculo.'"')
                         ->where('senha = "'.$data[0]->senha.'"')
                         ->get()
                         ->result();
     }

    public function check_in_ativo() {

          return $this->db->count_all('checkin'); 
    }

    public function veiculos_cadastrados(){

         return $this->db->count_all('veiculos'); 
    }


    public function check_in_ativo_maps() {

    	return $this->db->select('*')
                        ->from('checkin')
                     	->from('estados')
                     	->where('checkin.estado = estados.id_estado')
                    	->where('checkin.destino = estados.id_estado')
                     	->get()
                     	->result();

    }

	public function categorias_veiculos()
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->join('veiculo_categoria', 'veiculo_categoria.id_categoria = categoria.id_categoria');
		$query = $this->db->get();
		return $query->result();
	}

	public function cadastrar_veiculo($data)
	{
		$this->db->insert('veiculos', $data);
	}

	public function editar_dados_veiculo($data){

		$this->db->where('placa_veiculo', $data['placa_veiculo']);
		$this->db->update('veiculos', $data);
	}

	public function Checkin_efetuar($data){

		$this->db->insert('checkin', $data);
	}

	public function pesquisar_placa($pesquisa){

		$query =  $this->db->select('*')->from('veiculos')->where('placa_veiculo = "'.$pesquisa.'"')->get()->result();
		return json_encode($query);
	}

	public function Marcas(){
		return $this->db->select('*')->from('marca')->get()->result();
	}
}
