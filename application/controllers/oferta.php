<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oferta extends CI_Controller{
	public function index($id){
		$this->load->database();
		$query = $this->db->query('SELECT cve_oferta, 
			DATE_FORMAT(fecha, \'%d/%m/%Y\') as fecha,
			descripcion, empresa,
			imagen
			FROM oferta_trabajo
			WHERE cve_oferta = '.$id.' LIMIT 0,1');

		if($query->num_rows() > 0){
			$event_data = $query->row_array();
			$this->load->view('oferta', $event_data);
		}else{
			show_404();
		}
	}

	public function all(){
		$this->load->database();
		$query = $this->db->query('SELECT cve_oferta,
			DATE_FORMAT(fecha, \'%d\') as day,
			DATE_FORMAT(fecha, \'%m\') as month,
			DATE_FORMAT(fecha, \'%Y\') as year,
			descripcion,empresa,
			imagen
			FROM oferta_trabajo
			WHERE DATE_FORMAT(fecha, \'%Y\') = DATE_FORMAT(now(), \'%Y\') AND activo=1 ORDER BY fecha DESC, cve_oferta DESC;');
		
			$event_data = $query->result_array();
			$data['ofertas'] = $event_data;
			$this->load->view('all_oferta', $data);
		
	}
}
