<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EducacionContinua extends CI_Controller
{
	public function __construct()
	{
		//SUPER
		parent::__construct();
	}
	public function index()
	{
		//http://siest.utdelacosta.edu.mx/dexter
		$data['server'] = "http://siest.utdelacosta.edu.mx/dexter";
		//$data['server'] = "http://localhost:8080/dexter";
		$this->load->view('aspirantec', $data);
	}

	//Es la vista de recuperacion de ficha
	public function consulta_adeudo(){
		//$data['server'] = "http://localhost:8080/dexter";
		$data['server'] = "http://siest.utdelacosta.edu.mx/dexter";
		$this->load->view('consulta_adeudoec', $data);
	}
}
