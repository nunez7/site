<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biblioteca extends CI_Controller{
	public function index(){
		$this->load->view('biblioteca');
	}

	public function get_list_libros(){
		$this->load->model('biblioteca_model');
		if ($this->input->post('libro')) {

			$libro = $this->input->post('libro');
			$datos = $this->biblioteca_model->get_libros_by_dato($libro);
			$i = 0;
			foreach ($datos as $list) {
				?>
				<aside>
					<p><strong>Nombre del libro:  <?= $list->nombre?></strong></p>
					<p><strong>Clave (id):</strong> <?= $list->id_libro ?>, <strong>ubicación (anaquel):</strong> <?= $list->anaquel ?>, <strong>ISBN:</strong> <?= $list->isbn ?> <br />
						<strong>Ult. Edición:</strong> <?= $list->edicion ?>, <strong>editorial:</strong> <?= $list->editorial ?>, <strong>existencia:</strong> <?= $list->cantidad ?></p>
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
	}
