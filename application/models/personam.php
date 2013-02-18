<?php

class Personam extends CI_model
{

	function __construct() {
		parent::__construct();
	}


	function listaParroquias() {
		$q = $this->db->get('parroquias');
		return $q->result();
	}

	function listaCentros($idParroquia = null) {
		$this->db->where('cenIdParroquia', $idParroquia);
		$q = $this->db->get('centros');
		return $q->result();
	}

	/* AGREGAR PERSONA */
	function agregarPersona($datos) {
		if($this->db->insert('personas', $datos))
			return TRUE;
		else
			return FALSE;
	}

	/* VERIFICAR SI EXISTE LA PERSONA */
	function verificarExistente($cedula) {
		$this->db->where('perCedula' , $cedula);
		$this->db->from('personas');
		$num_rows = $this->db->count_all_results();

		if($num_rows == 1) { return TRUE; }
		elseif($num_rows == 0) { return FALSE; }
		else{ return FALSE; }
	}

	/* DETALLES PERSONA */
	function detallesPersona($cedula) {
		$this->db->select('*');
		// $this->db->join('parroquias', 'perIdParroquia = idParroquia');
		// $this->db->join('centros', 'perIdCentro = idCentro');
		$this->db->where('perCedula' , $cedula);
		$this->db->limit('1');
		return $this->db->get('personas')->result();
	}

	/* LISTAR PERSONAS */
	function listaEmpleados($pagina = 0, $per_pagina = 10) {
		$this->db->limit($per_pagina,$pagina);
		$q = $this->db->get('personas');
		return $q->result();
	}

	/* CONTAR PERSONAS
		* usado para el paginado
	*/
	function cantidadPersonas() {
		return $this->db->count_all('personas');
	}

	/* 	SACAR EL NOMBRE DE LOS CENTROS Y DE LAS PARROQUIAS */
	function pc($tabla, $donde, $valor) {
		// $this->db->join('centros', 'perIdCentro = idCentro');
		$this->db->select('*');
		$this->db->where($donde , $valor);
		$this->db->limit('1');
		return $this->db->get($tabla)->result();
	}

	function editarpersona($datos, $id) {
		$this->db->where('idPersona',$id);
		if($this->db->update('personas', $datos)) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	function eliminar($cedula){
		if($this->db->delete('personas',  array('perCedula' => $cedula)))
			return TRUE;
		else
			return FALSE;
	}

}