<?php

class ModeloResultados extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	public function mostrar(){
		$sql =  $this->db
			->select("*") # Selecciono todas las colunmas
			->from("tabla_a")
			->join("tabla_b", "tabla_a.id_plan_contratado = tabla_b.id_plan") # junto tablas
			->order_by('id_producto', 'ASC') # ordeno por id cliente
			->like('id_producto', '#133')
			->or_like('id_producto', '#142')
			->get();

		return $sql->result();
	}
}