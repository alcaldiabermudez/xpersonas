<?php

class Persona extends CI_Controller
{

	function __construct() {
		parent::__construct();
		$this->load->model('personam');
		//$this-> output->enable_profiler(TRUE);
	}

	/* PAGINA DE INICIO DEL MODULO "PERSONAS" */
	public function index() {
		$this->load->view('persona/index');
	}


	/* AGREGAR PERSONA - VISTA */
	public function agregar($cedula = null, $msj = null) {
		$datos['parroquias'] = $this->personam->listaParroquias();
		$datos['cedula'] = $cedula;
		$datos['msj'] = $msj;
		$datos['centros'] = $this->personam->listaCentros();
		$this->load->view('persona/agregar', $datos);
	}

	/* AGREGAR PERSONA - SI LOS DATOS EXISTEN */
	public function agregarpersona() {
		$datos = array (
			'idPersona'			=> 'NULL',
			'perCedula' 		=> $this->input->post('cedula'),
			'perNombres'		=> $this->input->post('nombres'),
			'perTelefono'		=> $this->input->post('telefono'),
			'perDireccion'		=> $this->input->post('direccion'),
			'perMapa'			=> $this->input->post('mapa'),
			'perDependencia'	=> $this->input->post('dependencia'),
			'perPSUV'			=> $this->input->post('psuv'),
			'perComandito'		=> $this->input->post('comandito'),
			'perCNE'			=> $this->input->post('cne'),
			'perIdParroquia'	=> $this->input->post('parroquia'),
			'perIdcentro'		=> $this->input->post('centrovotacion')
		);
		$cedula = $this->input->post('cedula');
		if($this->personam->verificarExistente($cedula) == TRUE) {
			redirect('persona/agregar/' . $cedula . "/existe");
		}
		else {
			if($this->personam->agregarPersona($datos) == true) {
				redirect('persona/detalles/' . $cedula);
			}
		}
	}


	/* DETALLES DE LA PERSONA */
	public function detalles($cedula = null) {
		$datos['persona'] = $this->personam->detallesPersona($cedula);
		$datos['parroquias'] = $this->personam->listaParroquias();
		$datos['cedula'] = $cedula;
		$this->load->view('persona/detalles', $datos);
	}

	
	/* LISTAR LAS PERSONAS */
	public function listar($pagina = 0) {
		$datos['per_pagina'] = 10;
		$datos['pagina'] = $pagina;
		$datos['personas'] = $this->personam->listaEmpleados($pagina);
		$datos['cantidadpersonas'] = $this->personam->cantidadPersonas();
		$this->load->view('persona/listar',$datos);
	}
	
	/* DETALLES PARA EDITAR LA PERSONA */
	public function editar($cedula = null) {
		$datos['parroquias'] = $this->personam->listaParroquias();
		$datos['persona'] = $this->personam->detallesPersona($cedula);
		$this->load->view('persona/editar',$datos);
	}
	

	/* EDITAR LA PERSONA SI LOS DATOS EXISTEN */
	public function editarpersona() {
		$datos = array (
			'perCedula' => $this->input->post('cedula'),
			'perNombres' => $this->input->post('nombres'),
			'perTelefono' => $this->input->post('telefono'),
			'perDireccion' => $this->input->post('direccion'),
			'perMapa' => $this->input->post('mapa'),
			'perDependencia' => $this->input->post('dependencia'),
			'perPSUV' => $this->input->post('psuv'),
			'perComandito' => $this->input->post('comandito'),
			'perCNE' => $this->input->post('cne'),
			'perIdParroquia' => $this->input->post('parroquia'),
			'perIdcentro' => $this->input->post('centrovotacion')
		);
		$id = $this->input->post('id');
		if($this->personam->editarpersona($datos, $id) == TRUE)
			redirect('persona/detalles/' . $this->input->post('cedula'));
			//var_dump($this->personam->editarpersona($datos, $this->input->post('id')));
	}

	/* BUSCAR PERSONA EN LA BASE DE DATOS POR LA CEDULA */
	public function buscar() {
		$cedula = $this->input->post('cedula');

		if($cedula == false) {
			$this->load->view('persona/form_busqueda');
		}
		else {
			if($this->personam->verificarExistente($cedula) == TRUE)
				redirect('persona/detalles/' . $cedula);
			else {
				$datos['msj'] = "";
				$datos['cedula'] = $cedula;
				$this->load->view('persona/form_busqueda', $datos);
			}
		}		
	}


	function eliminar($cedula = null, $confirmar = null)
	{
		$datos['persona'] = $this->personam->detallesPersona($cedula);
		$this->load->view('persona/eliminar', $datos);

		if(!is_null($confirmar)) {
			if($confirmar=="si") {
				if($this->personam->eliminar($cedula) == TRUE) {
					redirect('persona/listar/');
				}
				else{
					echo "No se ha Eliminado";
				}
			}
		}
	}


	/* LISTAR LOS CENTROS */
	public function listarcentros($idParroquia) {
		$datos['idParroquia'] = $idParroquia;
		$datos['centros'] = $this->personam->listaCentros($idParroquia);
		$this->load->view('persona/listarcentros', $datos);
	}

}
