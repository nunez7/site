<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aspirante extends CI_Controller{
	public function __construct()
	{
		//SUPER
		parent::__construct();
		$this->load->model('aspirante_model');
	}

	public function index(){
		$carreras = $this->aspirante_model->read_carreras_by_turno(1);
		//aspirante_model es el archivo aspirante_model.php
		//var_dump($carreras);
		$data['carreras'] = $carreras;

		$bachilleratos = $this->aspirante_model->read_bachilleratos();
		//Estado 18, municipio 942, localidad 161857
		$estados = $this->aspirante_model->read_estados();
		$municipios = $this->aspirante_model->read_municipios(18);
		$localidades = $this->aspirante_model->read_localidades(942);
		$discapacidades = $this->aspirante_model->read_discapacidades();
		$medios_comunicacion = $this->aspirante_model->read_medios_comunicacion();

		$data['turno'] = 1;
		$data['bachilleratos'] = $bachilleratos;
		$data['estados'] = $estados;
		$data['municipios'] = $municipios;
		$data['localidades'] = $localidades;
		$data['discapacidades'] = $discapacidades;
		$data['medios_comunicacion'] = $medios_comunicacion;

		$this->load->view('aspirante', $data, FALSE);
	}
	
	public function despresurizado(){
		$carreras = $this->aspirante_model->read_carreras_by_turno(2);
		//aspirante_model es el archivo aspirante_model.php
		//var_dump($carreras);
		$data['carreras'] = $carreras;

		$bachilleratos = $this->aspirante_model->read_bachilleratos();
		//Estado 18, municipio 942, localidad 161857
		$estados = $this->aspirante_model->read_estados();
		$municipios = $this->aspirante_model->read_municipios(18);
		$localidades = $this->aspirante_model->read_localidades(942);
		$discapacidades = $this->aspirante_model->read_discapacidades();
		$medios_comunicacion = $this->aspirante_model->read_medios_comunicacion();

		$data['turno'] = 2;
		$data['bachilleratos'] = $bachilleratos;
		$data['estados'] = $estados;
		$data['municipios'] = $municipios;
		$data['localidades'] = $localidades;
		$data['discapacidades'] = $discapacidades;
		$data['medios_comunicacion'] = $medios_comunicacion;

		$this->load->view('aspirante', $data, FALSE);
	}

	public function nuevo(){
		$nombre = $this->input->post('nombre');
		$apaterno=$this->input->post('apaterno');
		$amaterno=$this->input->post('amaterno');
		$fecha_nacimiento=$this->input->post('fecha_nacimiento');
		$sexo =$this->input->post('sexo');
		$bachillerato=$this->input->post('bachillerato');
		$localidad_bachillerato =$this->input->post('localidad_bachillerato');
		$carrera=$this->input->post('carrera');
		$turno=$this->input->post('turno');
		$empresa_trabaja = $this->input->post('empresa_trabaja');
		$tutor = $this->input->post('tutor');
		$tutora = $this->input->post('tutora');
		//Domicilio
		$localidad=$this->input->post('localidad');
		$calle=$this->input->post('calle');
		$numero=$this->input->post('numero');
		$colonia=$this->input->post('colonia');
		//Datos adicionales
		$nss=$this->input->post('nss');
		$curp=$this->input->post('curp');
		$estado_civil=$this->input->post('estado_civil');
		$telefono_fijo=$this->input->post('telefono_fijo');
		$telefono_celular=$this->input->post('telefono_celular');
		$email=$this->input->post('email');
		$promovido=$this->input->post('promovido');
		$alumno_promotor=$this->input->post('alumno_promotor');
		//Encuesta
		$tiene_hijos=$this->input->post('tiene_hijos');
		$no_hijos=$this->input->post('no_hijos');
		$lengua_indigena=$this->input->post('lengua_indigena');
		$tiene_discapacidad=$this->input->post('tiene_discapacidad');
		$discapacidades=$this->input->post('discapacidades');
		$opcion_estudio=$this->input->post('opcion_estudio');
		$medio_entero=$this->input->post('medio_entero');


		$datos = $this->aspirante_model->check_aspirante_by_data($email, $nombre, $apaterno, $amaterno, $bachillerato);

		if($datos->num_rows() > 0){
			echo "exist-aspirante";
		}else{
			$aspirante = array(
				"cve_aspirante" => NULL,
				"cve_carrera" => $carrera,
				"cve_turno" => $turno,
				"nombre" => $nombre,
				"apellido_paterno" => $apaterno,
				"apellido_materno" => $amaterno,
				"sexo" => $sexo,
				"fecha_nacimiento" => $fecha_nacimiento,
				"bachillerato_procede" => $bachillerato,
				"loc_mun_bachillerato" => $localidad_bachillerato,
				"numero_telefonico" => $telefono_fijo, 
				"numero_celular" => $telefono_celular, 
				"email" => $email,
				"nss" => $nss,
				"curp" => $curp,
				"estado_civil" => $estado_civil,
				"promovido" => $promovido,
				"alumno_promotor" => $alumno_promotor,
				"empresa_trabaja" => $empresa_trabaja,
				"tutor"=> $tutor,
				"tutora"=> $tutora,
				"fecha_alta" => date("Y-m-d")
			);

			//INTENTAMOS INSERTAR
			$ultimo_id =  $this->aspirante_model->create($aspirante);

			$domicilio_completo = array(
				"cve_domicilio" => NULL,
				"cve_aspirante" => $ultimo_id,
				"cve_localidad" => $localidad,
				"calle" => $calle,
				"numero" => $numero,
				"colonia" => $colonia
			);


			$encuesta = array(
				"cve_encuesta" => NULL,
				"cve_aspirante" => $ultimo_id,
				"tiene_hijo" => $tiene_hijos,
				"no_hijo" => $no_hijos,
				"lengua_indigena" => $lengua_indigena,
				"discapacitado" => $tiene_discapacidad,
				"discapacidades" => $discapacidades,
				"opcion_ut" => $opcion_estudio,	
				"medio_entero" => $medio_entero	
			);

			$this->aspirante_model->insert_domicilio($domicilio_completo);
			$this->aspirante_model->insert_encuesta($encuesta);

			if($ultimo_id>0)
			{
				echo "created-".$ultimo_id;
			}
			else
			{
				echo "Error al guardar :(";
			}
		}

	}

	//Update alumno
	public function update(){
		$carrera=$this->input->post('carrera');
		$turno=$this->input->post('turno');
		$telefono=$this->input->post('telefono');
		$email=$this->input->post('email');
		$empresa_trabaja=$this->input->post('empresa_trabaja');
		$cve_aspirante=$this->input->post('cve_aspirante');

		$aspirante = array(
			"cve_carrera" => $carrera,
			"cve_turno" => $turno,
			"numero_telefonico" => $telefono, 
			"email" => $email,
			"empresa_trabaja" => $empresa_trabaja
		);
		$datos = $this->aspirante_model->check_aspirante_by_career($carrera, $turno, $telefono, $email);

		if($datos->num_rows() > 0){
			echo "exist-aspirante";
		}else{

			$ultimo_id = $this->aspirante_model->update($aspirante, $cve_aspirante);
			if($ultimo_id>0)
			{
				echo "created-".$ultimo_id;
			}
			else
			{
				echo "Error al guardar :(";
			}
		}
	}

	//Obtiene las carreras a partir de un turno seleccionado
	public function get_carreras_turno(){
		if ($this->input->post('cve_turno')) {
			$cve_turno = $this->input->post('cve_turno');
			$carreras = $this->aspirante_model->read_carreras_by_turno($cve_turno);
			foreach ($carreras as $career) {
				?>
				<option value="<?= $career->cve_carrera ?>"><?= $career->nombre ?></option>
				<?php
			}
		}
	}

	public function get_carreras_turno_json(){
		if ($this->input->post('cve_turno')) {
			$cve_turno = $this->input->post('cve_turno');
			$carreras = $this->aspirante_model->read_carreras_by_turno($cve_turno);
			echo json_encode($carreras);
		}
	}
	public function get_bachilleratos_json(){
		$bachilleratos = $this->aspirante_model->read_bachilleratos();
		echo json_encode($bachilleratos);
	}
	public function get_estados_json(){
		$estados = $this->aspirante_model->read_estados();
		echo json_encode($estados);
	}
	public function get_municipios_json(){
		if ($this->input->post('cve_estado')) {
			$cve_estado = $this->input->post('cve_estado');
			$municipios = $this->aspirante_model->read_municipios($cve_estado);
			echo json_encode($municipios);
		}
	}
	public function get_localidades_json(){
		if ($this->input->post('cve_municipio')) {
			$cve_municipio = $this->input->post('cve_municipio');
			$localidades = $this->aspirante_model->read_localidades($cve_municipio);
			echo json_encode($localidades);
		}
	}
	public function get_discapacidades_json(){
		$discapacidades = $this->aspirante_model->read_discapacidades();
		echo json_encode($discapacidades);
	}
	public function get_medios_json(){
		$medios_comunicacion = $this->aspirante_model->read_medios_comunicacion();
		echo json_encode($medios_comunicacion);
	}

	//Estados
	public function get_municipios(){
		if ($this->input->post('cve_estado')) {
			$cve_estado = $this->input->post('cve_estado');
			$municipios = $this->aspirante_model->read_municipios($cve_estado);
				?>
				<option value="">Selecciona </option>
				<?php
			foreach ($municipios as $mun) {
				?>
				<option value="<?= $mun->cve_municipio ?>"><?= $mun->nombre ?></option>
				<?php
			}
		}
	}
	public function get_localidades(){
		if ($this->input->post('cve_municipio')) {
			$cve_municipio = $this->input->post('cve_municipio');
			$localidades = $this->aspirante_model->read_localidades($cve_municipio);
				?>
				<option value="">Selecciona </option>
				<?php
			foreach ($localidades as $loc) {
				?>
				<option value="<?= $loc->cve_localidad ?>"><?= $loc->nombre ?></option>
				<?php
			}
		}
	}

	//Obtiene la ficha de aspirante
	public function ficha_aspirante($id){
		$aspirante = $this->aspirante_model->get_aspirante_by_id($id);

		if($aspirante->num_rows() > 0){
			$aspirante_data = $aspirante->row_array();
			$this->load->view('ficha_aspirante', $aspirante_data);
		}else{
			show_404();
		}
	}

	//Obtiene la ficha de aspirante
	public function ficha_escolares($id){
		$aspirante = $this->aspirante_model->get_aspirante_escolares($id);

		if($aspirante->num_rows() > 0){
			$aspirante_data = $aspirante->row_array();
			$this->load->view('ficha_aspirante_escolares', $aspirante_data);
		}else{
			show_404();
		}
	}

	public function cambiar_data(){
		$id = openssl_decrypt($this->input->post('cve_aspirante'), ENCMETH, SECRETKEY);
		$aspirante = $this->aspirante_model->get_aspirante_by_id_change($id);
		if($aspirante->num_rows() > 0){
			$aspi = $aspirante->row_array();
			$data['aspirante'] = $aspirante->row_array();
			//Las carreras
			$data['carreras'] = $this->aspirante_model->read_carreras_by_turno($aspi['cve_turno']);
			//Los bachilleratos
			$data['bachilleratos'] = $this->aspirante_model->read_bachilleratos();

			$this->load->view('cambiar_data', $data, FALSE);
		}else{
			show_404();
		}
	}
	//Es la vista de recuperacion de ficha
	public function recuperacion(){
		$this->load->view('recuperacion_aspirante');
	}

	//Es la vista de reporte de pago
	public function reportar_pago(){
		$this->load->view('reportar_pago_aspirante');
	}

	public function subir_archivos(){
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

		$datos = $this->aspirante_model->check_aspirante_document($ip_real);

		if($datos->num_rows() > 0){
			echo "exist-aspirante";
		}else{

		//Documento 1
			if (!empty($_FILES['comprobante']['name']))
			{
            // Configuración para el Archivo 1
				$config['upload_path'] = 'documentos/aspirante/';
				$config['allowed_types'] = 'jpg|png|pdf|jpeg';

            // Cargamos la configuración del Archivo 1
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

            // Subimos archivo 1
				if ($this->upload->do_upload('comprobante'))
				{
					$img1 = $this->upload->data();
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
		//Documento 2
			/*if (!empty($_FILES['acta']['name']))
			{
            // Configuración para el Archivo 1
				$config['upload_path'] = 'documentos/aspirante/';
				$config['allowed_types'] = 'jpg|png|pdf|jpeg';

            // Cargamos la configuración del Archivo 1
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

            // Subimos archivo 1
				if ($this->upload->do_upload('acta'))
				{
					$img2 = $this->upload->data();
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			if (!empty($_FILES['constancia']['name']))
			{
				$config['upload_path'] = 'documentos/aspirante/';
				$config['allowed_types'] = 'jpg|png|pdf|jpeg';

            // Cargamos la configuración del Archivo 1
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

            // Subimos archivo 1
				if ($this->upload->do_upload('constancia'))
				{
					$img3 = $this->upload->data();
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}*/
			if(!isset($img1['file_name'])){$img1['file_name'] = "";}
			//if(!isset($img2['file_name'])){$img2['file_name'] = "";}
			//if(!isset($img3['file_name'])){$img3['file_name'] = "";}

			$documentos = array(
				"cve_aspirante_documento" => NULL,
				"file1" => $img1['file_name'],
				"file2" => "Ninguno",
				"file3" => "Ninguno",
				"ip_aspirante" => $ip_real,
				"fecha_alta" => date("Y-m-d")." ".date("H:i:s")	
			);

			$this->aspirante_model->insert_documento($documentos);

			echo "save*_*".utf8_encode($img1['file_name'])."*_*Ninguno*_*Ninguno";
		}
	}
	
	//Se usa cuando se quiere recuperar una ficha desde email
	public function get_list_email(){
		if ($this->input->post('email')) {
			$email = $this->input->post('email');
			$datos = $this->aspirante_model->get_aspirante_by_email($email);
			$i = 0;
			foreach ($datos as $list) {
				?>
				<aside>
					<p><strong>Nombre: <?= $list->nombre_completo ?></strong></p>
					<p><strong>Bachillerato procede:</strong> <?= $list->bachillerato_procede ?><br /> <strong>Carrera:</strong> <?= $list->carrera ?>, <strong>Turno:</strong> <?= $list->turno ?></p>
					<p>  
						<form action="cambiar_data" method="post" class="form-horizontal">
							<input type="hidden" name="cve_aspirante" value="<?= openssl_encrypt($list->cve_aspirante, ENCMETH, SECRETKEY) ?>">
							<a href="ficha_aspirante/<?= $list->cve_aspirante ?>" class="btn btn-link btn-lg" target="_blank">Ver la ficha de pago</a>
							<button type="submit" class="btn btn-link btn-lg">Cambiar de carrera ó modalidad</button>
						</form>
					</p>
					<br />
				</aside><hr>
				<?php
				$i=1;
			}
			if($i==0){
				?>
				<aside>
					<p>No hay coincidencias</p>
				</aside><hr>
				<?php
			}
		}
	}
	public function getbydate($fecha){
		//Llamar con: http://localhost:81/utcpagenew/index.php/aspirante/getbydate/2020-03-01
		$aspirantes = $this->aspirante_model->get_aspirante_by_date($fecha);

		$data['aspirantes'] = $aspirantes;
		$this->load->view('list_aspirantes', $data);
	}
	public function getbydate_json($fecha){
		//Llamar con: http://localhost:81/utcpagenew/index.php/aspirante/getbydate/2020-03-01
		$aspirantes = $this->aspirante_model->get_aspirante_by_date($fecha);
		$json = json_encode($aspirantes);
		print_r($json);
	}
}
