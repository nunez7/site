<?php
//esta linea no permite entrar directamente al modelo
defined('BASEPATH') OR exit('ERROR');

class Turismo_model extends CI_Model
{
    public function __construct()
	{
		//SUPER
		parent::__construct();
		$this->load->database();
	}
    public function read_estados()
	{
		$consulta = "SELECT clave_estado, nombre FROM estados ORDER BY nombre";
		$query = $this->db->query($consulta);
		return $query->result();
	}

    public function read_sexos()
	{
		$consulta = "SELECT cve_sexo, descripcion FROM sexo WHERE activo=1";
		$query = $this->db->query($consulta);
		return $query->result();
	}

    public function read_segmentos()
	{
		$consulta = "SELECT cve_segmento, descripcion FROM segmento_turistico WHERE activo=1;";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function data_segmento()
	{
		$consulta = "SELECT cve_segmento, descripcion, ( 
			SELECT COUNT(ts.cve_test_segmento) 
		FROM test_segmento ts 
		WHERE ts.cve_segmento=sc.cve_segmento )AS cantidad,
		(
		SELECT IFNULL(CAST(AVG(edad) AS INT), 0) FROM test_turismo tt
    	INNER JOIN test_segmento ts ON ts.cve_test=tt.cve_test
    	WHERE ts.cve_segmento=sc.cve_segmento
		)AS edad_promedio
		FROM segmento_turistico sc WHERE sc.activo=1;";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function read_edades()
	{
		$consulta = "SELECT DISTINCT edad FROM test_turismo ORDER BY edad";
		$query = $this->db->query($consulta);
		return $query->result();
	}

    public function create_encuesta($test_turismo){
		$this->db->insert('test_turismo', $test_turismo);
		return $this->db->insert_id();
	}

	public function insert_encuesta($test_segmento){
		$this->db->insert('test_segmento', $test_segmento);
		return true;
	}
	
	public function read_edades22()
	{
		$consulta = "SELECT CASE WHEN (edad < 18) THEN 'Menos de 18' ELSE CASE WHEN (edad BETWEEN 18 AND 20) THEN 'De 18 a 20' ELSE CASE WHEN (edad BETWEEN 21 AND 30) THEN 'De 21 a 30' ELSE CASE WHEN (edad BETWEEN 31 AND 40) THEN 'De 31 a 40' ELSE CASE WHEN (edad BETWEEN 41 AND 50) THEN 'De 40 a 50' ELSE CASE WHEN (edad BETWEEN 51 AND 60) THEN 'De 51 a 60' ELSE CASE WHEN (edad BETWEEN 61 AND 70) THEN 'De 61 a 70' ELSE CASE WHEN (edad >= 70) THEN 'De 70 o más' END END END END END END END END rango, COUNT(*) total FROM testturismo_2022 GROUP BY rango;";
		$query = $this->db->query($consulta);
		return $query->result();
	}
	
	public function create_encuesta22($test_turismo){
		$this->db->insert('testturismo_2022', $test_turismo);
		return $this->db->insert_id();
	}

	public function check_ip_encuestado($ip_real){
		$consulta = "SELECT * FROM testturismo_2022 WHERE ip_encuestado LIKE '".$ip_real."';";
		$query = $this->db->query($consulta);
		return $query;
	}
}