<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model  {
	 public function __construct()
     {
        $this->load->database();
     }
	public function all_estados()
	{
		$query = $this->db->get('Estados');
		return $query->result();
	}
	public function all_ramos()
	{
		$query = $this->db->get('ramo');
		return $query->result();
	}
	public function all_cidades($id)
	{
		$result = $this->db->query('select*from Estados,cidades where cidades.id_estado = Estados.id_estado and cidades.id_estado ='.$id.'')->result();
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
		return $this->db->get('Carroceria')->result();
	}
	public function fretes()
	{
		return $this->db->query("SELECT * FROM 	Frete,veiculo_categoria,categoria,Carroceria,forma_pagamento,Especie,Empresa where Frete.id_carroceria=Carroceria.id_carroceria and Frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento and Frete.id_especie = Especie.id_especie and Frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria and Frete.id_empresa = Empresa.id_empresa and veiculo_categoria.id_categoria= categoria.id_categoria")->result();
	}
	public function all_empresas($qtd,$inicio)
	{
			$this->db->limit($qtd, $inicio);

	       $query = $this->db->select('*')
                  ->from('Empresa')
                  ->from('cidades')
                  ->from('Estados')
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
			return $this->db->count_all("Empresa");
	}
	public function filter($filter)
	{

		$sqls ='';

		if($filter != false){
			foreach($filter as $key=>$value) {
			  $sqls .=  $value['select'];
		   }
		}


		$sql = 'SELECT * FROM `Frete`,veiculo_categoria,categoria,carroceria,forma_pagamento,especie,Empresa where frete.id_carroceria= carroceria.id_carroceria and frete.id_forma_pagamento = forma_pagamento.id_forma_pagamento and frete.id_especie = especie.id_especie and frete.id_veiculo_categoria = veiculo_categoria.id_veiculo_categoria and frete.id_empresa = empresa.id_empresa and veiculo_categoria.id_categoria= categoria.id_categoria'.$sqls.'';

			return $this->db->query($sql)->result();

	}
	public function filter_empresa($qtd,$inicio,$filter)
	{

		$this->db->limit($qtd, $inicio);

		if($filter != false){

		foreach($filter as $key=>$value) {

	       $query = $this->db->select('*')
                  ->from('Empresa')
                  ->from('cidades')
                  ->from('Estados')
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
	public function cadastrar_empresa($data){
		$this->db->insert('Empresa', $data);
	}
	public function ramo()
	{
		return $this->db->query("select ramo.desc_ramo ,
		count(empresa.id_ramo) as qtd_ramo from empresa,ramo where empresa.id_ramo = ramo.id_ramo group by ramo.desc_ramo")->result();
	}
}
