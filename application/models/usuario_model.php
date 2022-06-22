<?php 
defined('BASEPATH') OR exit('ERROR');

class Usuario_model extends CI_Model
{
	public function __construct()
	{
		//SUPER
		parent::__construct();
		$this->load->database();
	}

	public function check_usuario($user, $pass){
		$encryptedMessage = openssl_encrypt($pass, ENCMETH, SECRETKEY, 0, "");

		/*$consulta = "SELECT cve_usuario, nombre, r.descripcion AS rol 
		FROM usuario u 
		INNER JOIN rol r ON r.cve_rol=u.cve_usuario 
		WHERE u.activo=1 AND user='".$user."' AND password='".$encryptedMessage."'";
		$query = $this->db->query($consulta);*/

		$this->db->select('u.cve_usuario, u.nombre, r.descripcion AS rol');
		$query = $this->db->from('usuario u');
		$this->db->join('rol r', 'r.cve_rol=u.cve_usuario', 'inner');
		$this->db->where('u.user', $user);
		$this->db->where('u.password', $encryptedMessage);
		$this->db->where('u.activo', 1);
		$query = $this->db->get();
		return $query;
	}
}
?>