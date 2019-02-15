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
	public function all_ramos()
	{
		$query = $this->db->get('ramo');
		return $query->result();
	}
	public function all_cidades($id)
	{
		$result = $this->db->query('select*from estados,cidades where cidades.id_estado = estados.id_estado and cidades.id_estado ='.$id.'')->result();
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
	public function fretes($qtd, $inicio)
	{
		$this->db->limit($qtd, $inicio);

	    $query = $this->db->select('*')
                  ->from('frete')
                  ->from('veiculo_categoria')
                  ->from('categoria')
                  ->from('carroceria')
                  ->from('forma_pagamento')
                  ->from('especie')
                  ->from('empresa')
                  ->where('frete.id_carroceria= carroceria.id_carroceria ')
                  ->where('frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento')
                  ->where('frete.id_especie = especie.id_especie')
                  ->where('frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
                  ->where('frete.id_empresa = empresa.id_empresa ')
                  ->where('veiculo_categoria.id_categoria= categoria.id_categoria')
                  ->get();

	       if ($query->num_rows() > 0) {

	           foreach ($query->result() as $row) {
	               $data[] = $row;

	           }
	           return $data;
	       }
	       return false;
	}
	public function fretesEstado($q){
		return $this->db->query("SELECT * FROM frete,veiculo_categoria,categoria,carroceria,forma_pagamento,especie,empresa where frete.id_carroceria=carroceria.id_carroceria and frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento and frete.id_especie = especie.id_especie and frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria and frete.id_empresa = empresa.id_empresa and veiculo_categoria.id_categoria= categoria.id_categoria and uf_saida = '".$q."'")->result();
	}
	public function all_empresas($qtd,$inicio)
	{
			$this->db->limit($qtd, $inicio);

	       $query = $this->db->select('*')
                  ->from('empresa')
                  ->from('cidades')
                  ->from('estados')
                  ->from('ramo')
                  ->where('empresa.id_ramo =  ramo.id_ramo')
                  ->where('empresa.id_cidade = cidades.id_cidade')
                   ->where('cidades.id_estado = estados.id_estado')
                  ->get();

	       if ($query->num_rows() > 0) {

	           foreach ($query->result() as $row) {
	               $data[] = $row;

	           }
	           return $data;
	       }
	       return false;
	}
	public function all_empresas_rows()
	{
			return $this->db->count_all("empresa");
	}
	public function all_fretes_rows()
	{
			return $this->db->count_all("frete");
	}
	public function all_empresas_total()
	{
			  $query = $this->db->select('*')
                  ->from('empresa')
                  ->from('cidades')
                  ->from('estados')
                  ->from('ramo')
                  ->where('empresa.id_ramo =  ramo.id_ramo')
                  ->where('empresa.id_cidade = cidades.id_cidade')
                   ->where('cidades.id_estado = estados.id_estado')
                  ->get();

			return $query->num_rows();
	}
	public function all_fretes_total(){
		$query = $this->db->select('*')
                  ->from('frete')
                  ->from('veiculo_categoria')
                  ->from('categoria')
                  ->from('carroceria')
                  ->from('forma_pagamento')
                  ->from('especie')
                  ->from('empresa')
                  ->where('frete.id_carroceria= carroceria.id_carroceria ')
                  ->where('frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento')
                   ->where('frete.id_especie = especie.id_especie')
                   ->where('frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
                   ->where('frete.id_empresa = empresa.id_empresa ')
                   ->where('veiculo_categoria.id_categoria= categoria.id_categoria')
                  ->get();

                  return $query->num_rows();
	}
	public function filter_empresa($qtd,$inicio,$filter)
	{

		$this->db->limit($qtd, $inicio);

		if($filter != false){

		foreach($filter as $key=>$value) {

	       $query = $this->db->select('*')
                  ->from('empresa')
                  ->from('cidades')
                  ->from('estados')
                  ->from('ramo')
                  ->where('empresa.id_ramo =  ramo.id_ramo')
                  ->where('empresa.id_cidade = cidades.id_cidade')
                   ->where('cidades.id_estado = estados.id_estado')
                   ->where($value['select'])
                  ->get();
	         }

		 if ($query->num_rows() > 0) {
	           foreach ($query->result() as $row) {
	               $data[] = $row;
	           }
	           return $data;
	       }
	   }
	}
	public function fretes_filter($qtd,$inicio,$filter)
	{

		$this->db->limit($qtd, $inicio);

		if($filter != false){

		foreach($filter as $key=>$value) {

	       $query = $this->db->select('*')
	               ->from('frete')
                  ->from('veiculo_categoria')
                  ->from('categoria')
                  ->from('carroceria')
                  ->from('forma_pagamento')
                  ->from('especie')
                  ->from('empresa')
                  ->where('frete.id_carroceria= carroceria.id_carroceria ')
                  ->where('frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento')
                   ->where('frete.id_especie = especie.id_especie')
                   ->where('frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
                   ->where('frete.id_empresa = empresa.id_empresa ')
                   ->where('veiculo_categoria.id_categoria= categoria.id_categoria')
                   ->where($value['select'])
                  ->get();
	         }

		 if ($query->num_rows() > 0) {
	           foreach ($query->result() as $row) {
	               $data[] = $row;
	           }
	           return $data;
	       }
	   }
	}
	public function cadastrar_empresa($data){
		$this->db->insert('empresa', $data);
	}
	public function ramo()
	{
		return $this->db->query("select ramo.desc_ramo ,
		count(empresa.id_ramo) as qtd_ramo from empresa,ramo where empresa.id_ramo = ramo.id_ramo group by ramo.desc_ramo")->result();
	}
	public function Complemento_group_by()
	{
		return $this->db->query("select frete.complemento ,count(frete.id_frete) as qtd_complemento from frete group by frete.complemento")->result();
	}
	public function rastreador_group_by()
	{
		return $this->db->query("select frete.rastreador ,count(frete.id_frete) as qtd_rastreador from frete group by frete.rastreador")->result();
	}

	public function carroceria_group_by()
	{
		return $this->db->query("select carroceria.desc_carroceria, count(carroceria.id_carroceria) as qtd_carroceria from frete,carroceria WHERE frete.id_carroceria = carroceria.id_carroceria group by carroceria.id_carroceria")->result();
	}
	public function frete_unico($id_frete)
	{
		 $query = $this->db->select('*')
	               ->from('frete')
                  ->from('veiculo_categoria')
                  ->from('categoria')
                  ->from('carroceria')
                  ->from('forma_pagamento')
                  ->from('especie')
                  ->from('empresa')
                  ->from('cidades')
                  ->from('estados')
                  ->where('frete.id_carroceria= carroceria.id_carroceria ')
                  ->where('frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento')
                   ->where('frete.id_especie = especie.id_especie')
                   ->where('frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria')
                   ->where('frete.id_empresa = empresa.id_empresa ')
                   ->where('veiculo_categoria.id_categoria= categoria.id_categoria')
                   ->where('empresa.id_cidade= cidades.id_cidade')
                   ->where('cidades.id_estado= estados.id_estado')
                   ->where('frete.id_frete= '.$id_frete.'')
                  ->get();

	        return $query->result();
	}
	public function pesquisar_placa($pesquisa)
	{
		$query =  $this->db->select('*')->from('veiculos')->where('placa_veiculo = "'.$pesquisa.'"')->get()->result();
		return json_encode($query);
	}
}
