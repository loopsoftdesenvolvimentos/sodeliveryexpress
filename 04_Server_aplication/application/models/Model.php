<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model  {
	 public function __construct()
     {
        $this->load->database();
     }
	public function all_estados()
	{
		$query = $this->db->get('estados');
		return $query->result(); 
	}
	public function all_cidades($id)
	{
		$result = $this->db->where("id_estado",$id)->get("cidades")->result();
       	return json_encode($result);
	}
	public function categorias_veiculos()
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->join('veiculo_categoria', 'veiculo_categoria.id_categoria = categoria.id_categoria');
		$query = $this->db->get();
		return $query->result(); 
	}
	public function carrocerias()
	{
		return $this->db->get('carroceria')->result();
	}
	public function fretes()
	{
		return $this->db->query('select*from frete,empresa,carroceria,estados,Cidades,forma_pagamento,especie,veiculo_categoria where frete.id_carroceria = carroceria.id_carroceria and frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento and frete.id_especie = especie.id_especie and frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria and frete.id_empresa = empresa.id_empresa and cidades.id_estado = estados.id_estado')->result();
	}
	public function filter($filter)
	{
		$sql = 'select*from frete,empresa,carroceria,estados,Cidades,categoria,forma_pagamento,especie,veiculo_categoria where frete.id_carroceria = carroceria.id_carroceria and frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento and frete.id_especie = especie.id_especie and frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria and veiculo_categoria.id_categoria = categoria.id_categoria and frete.id_empresa = empresa.id_empresa and cidades.id_estado = estados.id_estado '.$filter.'';

			return $this->db->query($sql)->result();

	}
}