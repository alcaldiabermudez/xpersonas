<?php

class Familiarm extends CI_model
{

	function __construct()
	{
		parent::__construct();
	}

	function listaCentros($idParroquia = null) {
		$this->db->where('cenIdParroquia', $idParroquia);
		$q = $this->db->get('centros');
		return $q->result();
	}

	function listaParroquias() {
		$q = $this->db->get('parroquias');
		return $q->result();
	}

	function listaFamiliares($cedulaEmpleado) {
		$this->db->select('*');
		$this->db->join('centros',' famIdCentro= idCentro');
		$this->db->where('famCedEmpleado' , $cedulaEmpleado);
		$q = $this->db->get('familiares');
		return $q->result();
	}

	function agregarFamiliar($datos)
	{
		if($this->db->insert('familiares', $datos))
			return TRUE;
		else
			return FALSE;
	}

	function datosempleado($cedula)
	{
		$this->db->select('*');
		$this->db->where('empCedula' , $cedula);
		$q = $this->db->get('empleados');
		return $q->result();
	}

	function detallesFamiliar($cedula) {
		$this->db->select('*');
		$this->db->join('parroquias', 'famIdParroquia = idParroquia');
		$this->db->join('centros', 'famIdCentro = idCentro');
		$this->db->where('famCedula' , $cedula);
		$this->db->limit('1');
		$q = $this->db->get('familiares');
		return $q->result();
	}


	function editarfamiliar($datos, $id) {
		$this->db->where('idFamiliar',$id);
		if($this->db->update('familiares', $datos)) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	function verificarExistente($cedula) {
		$this->db->where('famCedula' , $cedula);
		$this->db->from('familiares');
		$num_rows = $this->db->count_all_results();

		if($num_rows == 1) { return TRUE; }
		elseif($num_rows == 0) { return FALSE; }
		else{ return FALSE; }
	}



}