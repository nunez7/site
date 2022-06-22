<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrar_sys extends CI_Controller{

	public function index(){
        // load Session Library
        $this->load->library('session');
		//echo $this->session->userdata('usuario');
		if (!empty($this->session->userdata('usuario'))) {
			$this->load->view('administrar_sys');
		}else{
			redirect('login', 'refresh');
		}
	}

	public function ofertas(){
		$this->load->model('administrar_sys_model');
		$ofertas = $this->administrar_sys_model->get_all_ofertas();

		$data['ofertas'] = $ofertas;
		$data['opcion'] = "ofertas";
		$this->load->view('administrar_sys', $data, FALSE);
	}

	public function estado_oferta($id, $estado){
		$this->load->model('administrar_sys_model');
		$data = array(
			'activo' => $estado
		);
		$this->administrar_sys_model->actualizar_oferta($id, $data);
		redirect('administrar_sys/ofertas', 'refresh');
	}

	public function update_oferta($id){
		$this->load->model('administrar_sys_model');
		$oferta = $this->administrar_sys_model->get_oferta($id);

		if($oferta->num_rows() > 0){
			$data['oferta'] = $oferta->row_array();
			$data['opcion'] = "update_oferta";
			$this->load->view('administrar_sys', $data, FALSE);
		}else{
			show_404();
		}
	}

	public function registro_oferta(){

		$this->load->model('administrar_sys_model');

		$fecha_p = $this->input->post('fecha_p');
		$descripcion=$this->input->post('descripcion');
		$empresa=$this->input->post('empresa');

		//Documento 1
		if (!empty($_FILES['imagen']['name']))
		{
            // Configuración para el Archivo 1
			$config['upload_path'] = 'documentos/oferta_trabajo/';
			$config['allowed_types'] = 'jpg|png|pdf|jpeg';

            // Cargamos la configuración del Archivo 1
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

            // Subimos archivo 1
			if ($this->upload->do_upload('imagen'))
			{
				$img1 = $this->upload->data();
			}
			else
			{
				echo $this->upload->display_errors();
			}
		}

		if(!isset($img1['file_name'])){$img1['file_name'] = "";}

		$oferta = array(
			"cve_oferta" => NULL,
			"empresa" => $empresa,
			"descripcion" => $descripcion,
			"imagen" => $img1['file_name'],
			"fecha" => $fecha_p,
			"fecha_alta" => date("Y-m-d")." ".date("H:i:s"),
			"activo" => 1
		);
		$this->administrar_sys_model->inserta_oferta_trabajo($oferta);
		echo "save*_*1";
	}

	public function update_ofer(){

		$this->load->model('administrar_sys_model');

		$fecha_p = $this->input->post('fecha_p');
		$descripcion=$this->input->post('descripcion');
		$empresa=$this->input->post('empresa');
		$cve_oferta=$this->input->post('cve_oferta');

		//Documento 1
		$tiene_imagen = false;
		if (!empty($_FILES['imagen']['name']))
		{
            // Configuración para el Archivo 1
			$config['upload_path'] = 'documentos/oferta_trabajo/';
			$config['allowed_types'] = 'jpg|png|pdf|jpeg';

            // Cargamos la configuración del Archivo 1
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

            // Subimos archivo 1
			if ($this->upload->do_upload('imagen'))
			{
				$img1 = $this->upload->data();
				$tiene_imagen = true;
			}
			else
			{
				echo $this->upload->display_errors();
			}
		}

		if(!isset($img1['file_name'])){$img1['file_name'] = "";}

		if($tiene_imagen){
			//Eliminamos la imagen anterior
			$datos_anteriores = $this->administrar_sys_model->get_oferta($cve_oferta);
			if($datos_anteriores->num_rows() > 0){
				$oferta_data = $datos_anteriores->row_array();
				//echo "array*_*".print_r();
				unlink("documentos/oferta_trabajo/".$oferta_data["imagen"]);
			}

			$data = array(
				"empresa" => $empresa,
				"descripcion" => $descripcion,
				"imagen" => $img1['file_name'],
				"fecha" => $fecha_p
			);
			$this->administrar_sys_model->actualizar_oferta($cve_oferta, $data);
		}else{
			$data = array(
				"empresa" => $empresa,
				"descripcion" => $descripcion,
				"fecha" => $fecha_p
			);
			$this->administrar_sys_model->actualizar_oferta($cve_oferta, $data);
		}

		echo "save*_*1";
	}
}