<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Docentes extends CI_Controller{
	public function index(){
		$this->load->view('docentes');
	}
}
