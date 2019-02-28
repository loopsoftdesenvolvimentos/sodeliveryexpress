<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FretesDAO extends CI_Model  {
	
	 public function __construct(){
        $this->load->database();
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

	public function all_fretes_rows()
	{
			return $this->db->count_all("frete");
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
}
