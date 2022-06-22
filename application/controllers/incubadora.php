<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incubadora extends CI_Controller{

	public function index(){
		$this->load->view('incubadora');
	}

	public function filosofia(){
		$data_view = array(
			'opcion' => 'filosofia'
		);
		$this->load->view('incubadora', $data_view);
	}

	public function servicios(){
	 	$data_view = array(
			'opcion' => 'servicios'
		);
		$this->load->view('incubadora', $data_view);
	 }

	public function somos(){
	 	$data_view = array(
			'opcion' => 'somos'
		);
		$this->load->view('incubadora', $data_view);
	 }

	public function objetivos(){
		$data_view = array(
			'opcion' => 'objetivos'
		);
		$this->load->view('incubadora', $data_view);
	}

	public function mercado(){
		$data_view = array(
			'opcion' => 'mercado'
		);
		$this->load->view('incubadora', $data_view);
	}

}