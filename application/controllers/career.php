<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller{

	public function index(){
		$this->load->view('career');
	}

	public function agro(){
		$this->load->view('agro');
	}

	public function acui(){
		$this->load->view('acui');
	}

	public function tal(){
		$this->load->view('tal');
	}

	public function admin(){
		$this->load->view('admin');
	}

	public function merca(){
		$this->load->view('merca');
	}

	public function turismo(){
		$this->load->view('turismo');
	}

	public function gastronomia(){
		$this->load->view('gastronomia');
	}

	public function tic(){
		$this->load->view('tic');
	}

	public function multimedia(){
		$this->load->view('multimedia');
	}

}