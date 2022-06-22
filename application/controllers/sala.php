<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sala extends CI_Controller{

	public function index(){

		$this->load->database();
		$query = $this->db->query('SELECT folio,
			DATE_FORMAT(date, \'%d\') as day,
			DATE_FORMAT(date, \'%m\') as month,
			DATE_FORMAT(date, \'%Y\') as year,
			title,
			file,
			gallery_url,
			image_url
			FROM sala1
			/*WHERE DATE_FORMAT(date, \'%Y\') = DATE_FORMAT(now(), \'%Y\')*/
			ORDER BY date DESC, folio DESC
			LIMIT 0,2;');

		$last_events = $query->result_array();
		$data['last_events'] = $last_events;
		$this->load->view('sala', $data);
		
	}

	public function all($id){

		$this->load->database();
		$query = $this->db->query('SELECT folio, 
			DATE_FORMAT(date, \'%d/%m/%Y\') as date,
			title,
			file,
			gallery_url,
			image_url
			FROM sala1
			WHERE folio = '.$id.' LIMIT 0,1');

		if($query->num_rows() > 0){
			$event_data = $query->row_array();
			$this->load->view('event-sala', $event_data);
		}else{
			show_404();
		}
	}

	public function filosofia(){
		$data_view = array(
			'opcion_sala' => 'filosofia'
		);
		$this->load->view('sala', $data_view);
	}
    public function servicios(){
	 	$data_view = array(
			'opcion_sala' => 'servicios'
		);
		$this->load->view('sala', $data_view);
	 }
	
	public function somos(){
	 	$data_view = array(
			'opcion_sala' => 'somos'
		);
		$this->load->view('sala', $data_view);
	 }

}