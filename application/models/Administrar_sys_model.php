<?php
//esta linea no permite entrar directamente al modelo
defined('BASEPATH') OR exit('ERROR');

class Administrar_sys_model extends CI_Model
{
	public function __construct()
	{
		//SUPER
		parent::__construct();
		$this->load->database();
	}

	public function inserta_oferta_trabajo($oferta){
		$this->db->insert('oferta_trabajo', $oferta);
		return true;
	}

	public function actualizar_oferta($cve_oferta, $data){
		$this->db->where('cve_oferta', $cve_oferta);
		$this->db->update('oferta_trabajo', $data);
		return true;
	}

	public function get_all_ofertas(){
		$consulta = 'SELECT cve_oferta,
			DATE_FORMAT(fecha, \'%d\') as day,
			DATE_FORMAT(fecha, \'%m\') as month,
			DATE_FORMAT(fecha, \'%Y\') as year, DATE_FORMAT(fecha, \'%d/%m/%Y\') as fecha, 
			descripcion, empresa, activo, 
			imagen
			FROM oferta_trabajo
			ORDER BY fecha DESC, cve_oferta DESC;';
		$query = $this->db->query($consulta);
		return $query->result();
	}

	public function get_oferta($id){
		$query = $this->db->query('SELECT cve_oferta, 
			fecha,
			descripcion, empresa,
			imagen, activo
			FROM oferta_trabajo
			WHERE cve_oferta = '.$id.' LIMIT 0,1');
		return $query;
	}
}