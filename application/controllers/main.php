<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

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
			FROM event
			/*WHERE DATE_FORMAT(date, \'%Y\') = DATE_FORMAT(now(), \'%Y\')*/
			ORDER BY date DESC, folio DESC
			LIMIT 0,2;');

		$last_events = $query->result_array();
		$data['last_events'] = $last_events;
		$this->load->view('index', $data);
	}

}