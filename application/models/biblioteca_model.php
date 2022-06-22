<?php
//esta linea no permite entrar directamente al modelo
defined('BASEPATH') OR exit('ERROR');

class Biblioteca_model extends CI_Model
{
	public function get_libros_by_dato($cve_libro){
		$this->load->database();
		$consulta = "SELECT id_libro, nombre, anaquel, isbn, edicion, editorial, cantidad 
		FROM libro 
		WHERE nombre LIKE '".$cve_libro." %' OR anaquel LIKE '".$cve_libro." %' 
		OR autor LIKE  '".$cve_libro." %' OR isbn LIKE  '".$cve_libro." %' 
		ORDER BY anaquel, autor, nombre LIMIT 0 , 15";
		$query = $this->db->query($consulta);
		return $query->result();
	}
}