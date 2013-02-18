<?php

class Reportem extends CI_model
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

	function listaxCentros() {
		$q = $this->db->get('centros');
		return $q->result();
	}

	function allpersonas()
	{
		$p = $this->db->query("SELECT p.*, c.cenNombre FROM personas p left join centros c ON (p.perIdCentro = c.idCentro)");
		return $p->result();
	}
	
	function xparroquia($idParroquia)
	{
		$p = $this->db->query("SELECT p.*, c.cenNombre FROM personas p left join centros c ON (p.perIdCentro = c.idCentro) WHERE perIdParroquia = '$idParroquia'");
		return $p->result();
	}
	
	function xcentro($idCentro)
	{
		$p = $this->db->query("SELECT p.*, c.cenNombre FROM personas p left join centros c ON (p.perIdCentro = c.idCentro) WHERE perIdCentro = '$idCentro'");
		return $p->result();
	}

	function empleadosxparroquia($idParroquia = null)
	{
		$this->db->from('empleados');
		$this->db->join('centros',' empIdCentro= idCentro');
		$this->db->join('parroquias',' empIdParroquia= idparroquia');
		$this->db->where('idparroquia',$idParroquia);
		$e = $this->db->get(); // $e empleados

		return $e->result();
	}

	function familiaresxparroquia($idParroquia = null)
	{
		$this->db->from('familiares');
		$this->db->join('centros',' famIdCentro= idCentro');
		$this->db->join('parroquias',' famIdParroquia= idparroquia');
		$this->db->where('idparroquia',$idParroquia);
		$f = $this->db->get(); // $f familiares
		
		return $f->result();
	}


	function general()
	{
		$this->db->from('empleados');
		$this->db->join('centros',' empIdCentro= idCentro');
		$this->db->join('parroquias',' empIdParroquia= idparroquia');
		$e = $this->db->get(); // $e empleados

		$this->db->from('familiares');
		$this->db->join('centros',' famIdCentro= idCentro');
		$this->db->join('parroquias',' famIdParroquia= idparroquia');
		$f = $this->db->get(); // $f familiares
		
		return array_merge($e->result(),$f->result());
	}

}
