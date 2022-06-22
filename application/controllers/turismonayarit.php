<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class TurismoNayarit extends CI_Controller
{
	public function index()
	{
		$this->load->view('turismonayarit');
	}

	public function encuesta()
	{
		$this->load->model('turismo_model');
		$estados = $this->turismo_model->read_estados();
		$sexos = $this->turismo_model->read_sexos();
		$segmentos = $this->turismo_model->read_segmentos();

		$data['estados'] = $estados;
		$data['sexos'] = $sexos;
		$data['segmentos'] = $segmentos;
		$this->load->view("encuesta-turismo", $data, FALSE);
	}

	public function estadisticas(){
		$this->load->model('turismo_model');
		// $data['segmentos'] = $this->turismo_model->read_segmentos();
		$data['edades'] = $this->turismo_model->read_edades22();
		// $data['datos_segmento'] = $this->turismo_model->data_segmento();

		$this->load->view("turismo_grafica", $data, FALSE);
	}

	public function savetest()
	{	
		$this->load->model('turismo_model');		
		function getRealIP() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
				$ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
			return $ipaddress;
		}

		$ip_real = getRealIP();	
		
		$datos = $this->turismo_model->check_ip_encuestado($ip_real);

		if($datos->num_rows() == 0){			
			$nombre_completo = $_POST['nombre_completo'];
		    $edad  = $_POST['edad'];
		    $procedencia  = $_POST['procedencia'];
		    $telefono  = $_POST['tel'];
		    $correo  = $_POST['email'];
	    
			$test = array(
				"id"=> null,
				"nombre_completo" => $nombre_completo,			
				"edad" => $edad,
				"procedencia" => $procedencia,
				"telefono" => $telefono,			
				"correo" => $correo,			
				"fecha_alta" => date("Y-m-d")." ".date("H:i:s"),
				"ip_encuestado" => $ip_real
			);
		
			//INTENTAMOS INSERTAR
			$ultimo_id = $this->turismo_model->create_encuesta22($test);

			if ($ultimo_id > 0) {
				echo "ok";
			} else {
				echo "error";
			}
		}else{
			echo "error";
		}

	}
}
