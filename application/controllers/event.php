<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller{
	public function index($id){
		$this->load->database();
		$query = $this->db->query('SELECT folio, 
			DATE_FORMAT(date, \'%d/%m/%Y\') as date,
			title,
			file,
			gallery_url,
			image_url
			FROM event
			WHERE folio = '.$id.' LIMIT 0,1');

		if($query->num_rows() > 0){
			$event_data = $query->row_array();
			$this->load->view('event', $event_data);
		}else{
			show_404();
		}
	}

	public function all(){
		$this->load->database();
		$query = $this->db->query('SELECT folio,
			DATE_FORMAT(date, \'%d\') as day,
			DATE_FORMAT(date, \'%m\') as month,
			DATE_FORMAT(date, \'%Y\') as year,
			title,
			file,
			gallery_url,
			image_url
			FROM event
			WHERE DATE_FORMAT(date, \'%Y\') = DATE_FORMAT(now(), \'%Y\') ORDER BY date DESC, folio DESC;');
		
			$event_data = $query->result_array();
			$data['events'] = $event_data;
			$this->load->view('all_events', $data);
		
	}

	public function semanaCultural(){
		$this->load->view("semana_cultural");
	}
}
