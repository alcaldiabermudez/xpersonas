<?php

class Reporte extends CI_Controller
{

	function __construct() {
		parent::__construct();
		$this->load->model('reportem');
		// $this->output->enable_profiler(TRUE);
	}

	public function index() {
		$this->load->view('reporte/index');
	}

	public function xparroquia() {
		$idParroquia = $this->input->post('parroquia');

		if($idParroquia == false) {
			$datos['parroquias'] = $this->reportem->listaParroquias();
			$this->load->view('reporte/xparroquia',$datos);
		}
		else {
			$datos['personas'] = $this->reportem->xparroquia($idParroquia);
			$datos['centros'] = $this->reportem->listaCentros($idParroquia);
			$datos['parroquia'] = $idParroquia;
			$this->load->view('reporte/xparroquia',$datos);				
		}
	}
	
	public function xcentro() {
		$idCentro = $this->input->post('centro');

		if($idCentro == false) {
			$datos['centros'] = $this->reportem->listaxCentros();
			$this->load->view('reporte/xcentro',$datos);
		}
		else {
			$datos['personas'] = $this->reportem->xcentro($idCentro);
			$datos['centros'] = $this->reportem->listaCentros($idCentro);
			$datos['centro'] = $idCentro;
			$this->load->view('reporte/xcentro',$datos);				
		}
	}
	
	public function xpersona() {
		$datos['personas'] = $this->reportem->allpersonas();
		$this->load->view('reporte/xpersona',$datos);
	}

	public function empleadosxparroquia() {
		$parroquia = $this->input->post('parroquia');

		if($parroquia == false) {
			$datos['parroquias'] = $this->reportem->listaParroquias();
			$this->load->view('reporte/empleadosxparroquia',$datos);		
		}
		else {
			$datos['listapersonas'] = $this->reportem->empleadosxparroquia($parroquia);
			$datos['parroquia'] = $parroquia;
			$this->load->view('reporte/empleadosxparroquia',$datos);				
		}
	}

	public function familiaresxparroquia() {
		$parroquia = $this->input->post('parroquia');

		if($parroquia == false) {
			$datos['parroquias'] = $this->reportem->listaParroquias();
			$this->load->view('reporte/familiaresxparroquia',$datos);		
		}
		else {
			$datos['listapersonas'] = $this->reportem->familiaresxparroquia($parroquia);
			$datos['parroquia'] = $parroquia;
			$this->load->view('reporte/familiaresxparroquia',$datos);				
		}
	}

	public function general() {
		$datos['listapersonas'] = $this->reportem->general();
		$this->load->view('reporte/general',$datos);				
	}

}
