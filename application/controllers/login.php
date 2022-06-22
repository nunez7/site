<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
		$this->load->database();
    }

	public function index(){
		$this->load->view('login');
	}

	public function iniciar_sesion(){
		$nombre = $this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('usuario_model');

		$datos = $this->usuario_model->check_usuario($nombre, $password);

		if($datos->num_rows() > 0){
			// load Session Library
        	$this->load->library('session');
			//Variables de sesion
			$usuario_data = $datos->row_array();
			
			/*$this->session->logeado = true;
			$this->session->cveusuario =  $usuario_data["cve_usuario"];
			$this->session->nombre =  $usuario_data["nombre"];
			$this->session->rol =  $usuario_data["rol"];
			$this->session->usuario =  $nombre;*/

			//echo "HOLA ".$this->session->logeado;
			$data=array(
                    'logeado'=>true,
                    'cveusuario'=>$usuario_data["cve_usuario"],
                    'nombre' => $usuario_data["nombre"],
                    'rol' => $usuario_data["rol"],
                    'usuario' => $nombre
            );
			$this->session->set_userdata($data);
			redirect('administrar_sys');
		}else{
			$this->session->set_flashdata('error', 'Datos incorrectos');
			$data = array();
			$data['error'] = $this->session->flashdata('error');
			$this->load->view('login', $data);
		}
	}

	public function cerrar_sesion(){
		//$this->load->library('session');
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
}