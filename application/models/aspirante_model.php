<?php
//esta linea no permite entrar directamente al modelo
defined('BASEPATH') OR exit('ERROR');

class Aspirante_model extends CI_Model
{

	public function __construct()
	{
		//SUPER
		parent::__construct();
		$this->load->database();
	}

	public function read_carreras()
	{
		$consulta = "SELECT cve_carrera, nombre FROM carrera WHERE activo=1 AND cve_turno=1 ORDER BY cve_nivel_estudio, nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_estados()
	{
		$consulta = "SELECT clave_estado, nombre FROM estados ORDER BY nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_municipios($cve_estado)
	{
		$consulta = "SELECT cve_municipio, nombre FROM municipios WHERE cve_estado=".$cve_estado." ORDER BY nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_localidades($cve_municipio)
	{
		$consulta = "SELECT cve_localidad, nombre FROM localidades WHERE cve_municipio=".$cve_municipio." ORDER BY nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_discapacidades()
	{
		$consulta = "SELECT cve_discapacidad, descripcion FROM discapacidad WHERE activo=1";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_medios_comunicacion()
	{
		$consulta = "SELECT cve_medio, descripcion FROM medio_informativo WHERE activo=1";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_carreras_by_turno($turno)
	{
		$consulta = "SELECT cve_carrera, nombre FROM carrera WHERE activo=1 AND cve_turno=".$turno." 
		ORDER BY cve_nivel_estudio, nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_bachilleratos(){
		$consulta = "SELECT cve_bachillerato, nombre FROM bachillerato ORDER BY nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function create($aspirante){
		$this->db->insert('aspirante', $aspirante);
		return $this->db->insert_id();
	}

	public function insert_encuesta($encuesta){
		$this->db->insert('aspirante_encuesta', $encuesta);
		return true;
	}

	public function insert_domicilio($domicilio){
		$this->db->insert('aspirante_domicilio', $domicilio);
		return true;
	}

	public function insert_documento($documento){
		$this->db->insert('aspirante_documento', $documento);
		return true;
	}

	public function update($aspirante, $cve_aspirante){
		$this->db->where('cve_aspirante', $cve_aspirante);
		$this->db->update('aspirante', $aspirante);
		return 1;
	}

	public function get_aspirante_by_id($cve_aspirante){
		$query = $this->db->query('SELECT CONCAT(a.nombre, " ",apellido_paterno, " ", apellido_materno)AS nombre_completo, bachillerato_procede, email, 
			c.nombre AS carrera, IF(c.cve_nivel_estudio>1, 1200, 1100)AS monto, t.nombre AS turno 
			FROM aspirante a 
			INNER JOIN carrera c ON c.cve_carrera=a.cve_carrera 
			INNER JOIN turno t ON t.cve_turno=a.cve_turno 
			WHERE cve_aspirante ='.$cve_aspirante.' ');
		return $query;
	}

	public function get_aspirante_escolares($cve_aspirante){
		$query = $this->db->query('SELECT CONCAT(a.nombre, " ",apellido_paterno, " ", apellido_materno)AS nombre_completo, bachillerato_procede, c.nombre AS carrera, t.nombre AS turno, 
			CONCAT("Calle: ",ad.calle, ", No. ", ad.numero, ", Col. ", ad.colonia, ", Loc. ",loc.nombre,", Mpio. ",m.nombre,", Edo. ",es.nombre)AS domicilio, 
			IFNULL(a.curp, "")AS curp, IFNULL(a.sexo, "N")AS sexo, IFNULL(a.estado_civil, "")AS estado_civil, IFNULL(a.nss, "")AS nss, 
			IFNULL(a.numero_celular, "")AS telefono_celular, IFNULL(a.numero_telefonico, "")AS telefono_fijo, a.email, 
			IFNULL(a.promovido, "0")AS promovido, IFNULL(a.alumno_promotor, "No")AS alumno_promotor, 
			IFNULL(ae.tiene_hijo, "0")AS tiene_hijo, IFNULL(ae.no_hijo, "0")AS no_hijo, 
			IFNULL(ae.lengua_indigena, "0")AS habla_indigena, 
			IFNULL(ae.discapacitado, "0")AS discapacidado, IFNULL(ae.discapacitado, "Ninguna")AS discapacidades, IFNULL(ae.opcion_ut, "1")AS opcion_utc, 
			IFNULL(ae.medio_entero, "Ninguno")AS medio_entero, IFNULL(a.empresa_trabaja, "Ninguna")AS empresa_trabaja, IFNULL(a.tutor, "No tiene")as tutor,
			IFNULL(a.tutora, "No tiene")as tutora,  IFNULL(a.loc_mun_bachillerato, "Ninguna")as localidad_bachillerato 
			FROM aspirante a 
			INNER JOIN carrera c ON c.cve_carrera=a.cve_carrera 
			JOIN turno t ON t.cve_turno=a.cve_turno 
			LEFT JOIN aspirante_domicilio ad ON ad.cve_aspirante=a.cve_aspirante 
			LEFT JOIN localidades loc ON loc.cve_localidad=ad.cve_localidad 
			LEFT JOIN municipios m ON m.cve_municipio=loc.cve_municipio 
			LEFT JOIN estados es ON es.clave_estado=m.cve_estado 
			LEFT JOIN aspirante_encuesta ae ON ae.cve_aspirante=a.cve_aspirante 
			WHERE a.cve_aspirante ='.$cve_aspirante.' ');
		return $query;
	}

	public function get_aspirante_by_id_change($cve_aspirante){
		$query = $this->db->query('SELECT cve_aspirante, cve_carrera, cve_turno, nombre, apellido_paterno, apellido_materno, 
		bachillerato_procede, numero_telefonico, email, promovido, alumno_promotor, IFNULL(empresa_trabaja, "Ninguna")AS empresa_trabaja
			FROM aspirante WHERE cve_aspirante = '.$cve_aspirante.' ');
		return $query;
	}

	public function get_aspirante_by_email($email){
		$consulta = "SELECT a.cve_aspirante, CONCAT(a.nombre, ' ' ,apellido_paterno, ' ', apellido_materno)AS nombre_completo, bachillerato_procede, email, c.nombre AS carrera, IF(c.cve_nivel_estudio>1, 1200, 1100)AS monto, t.nombre AS turno 
		FROM aspirante a 
		INNER JOIN carrera c ON c.cve_carrera=a.cve_carrera 
		INNER JOIN turno t ON t.cve_turno=a.cve_turno 
		WHERE a.email = '".$email."' ";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function check_aspirante_by_data($email, $nombre, $apaterno, $amaterno, $bachillerato_procede){
		$consulta = "SELECT a.cve_aspirante, CONCAT(a.nombre, ' ' ,apellido_paterno, ' ', apellido_materno)AS nombre_completo, bachillerato_procede, email, c.nombre AS carrera, IF(c.cve_nivel_estudio>1, 1200, 1100)AS monto, t.nombre AS turno 
		FROM aspirante a 
		INNER JOIN carrera c ON c.cve_carrera=a.cve_carrera 
		INNER JOIN turno t ON t.cve_turno=a.cve_turno 
		WHERE (a.email = '".$email."') OR (a.nombre='".$nombre."' AND a.apellido_paterno='".$apaterno."' AND a.apellido_materno='".$amaterno."') ";
		$query = $this->db->query($consulta);
		return $query;
	}

	public function check_aspirante_by_career($cve_carrera, $cve_turno, $telefono, $email){
		$consulta = "SELECT a.cve_aspirante
		FROM aspirante a 
		WHERE a.cve_carrera=".$cve_carrera." AND a.cve_turno=".$cve_turno." AND a.numero_telefonico='".$telefono."' 
		AND a.email='".$email."'";
		$query = $this->db->query($consulta);
		return $query;
	}

	public function check_aspirante_document($ip_real){
		$consulta = "SELECT * FROM aspirante_documento WHERE ip_aspirante LIKE '".$ip_real."' AND DATE(fecha_alta)=CURDATE()";
		$query = $this->db->query($consulta);
		return $query;
	}

	public function get_aspirante_by_date($fecha){
		$consulta = "SELECT a.cve_aspirante, c.nombre AS carrera, t.nombre AS turno, a.nombre, a.apellido_paterno, a.apellido_materno, a.bachillerato_procede, a.numero_telefonico, a.email, a.fecha_alta, a.nss FROM aspirante a INNER JOIN carrera c ON c.cve_carrera=a.cve_carrera INNER JOIN turno t ON t.cve_turno=a.cve_turno WHERE a.fecha_alta > '".$fecha."' ORDER BY a.fecha_alta";
		$query = $this->db->query($consulta);
		return $query->result();
	}
}