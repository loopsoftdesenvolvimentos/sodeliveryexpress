<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model  {
	 public function __construct()
     {
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
}

?>