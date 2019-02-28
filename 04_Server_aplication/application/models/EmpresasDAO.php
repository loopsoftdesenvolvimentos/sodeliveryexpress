<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresasDAO extends CI_Model  {
	
	 public function __construct(){
        $this->load->database();
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

	public function all_empresas_rows(){
			return $this->db->count_all("empresa");
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
	
	public function cadastrar_empresa($data){
		$this->db->insert('empresa', $data);
	}
}
