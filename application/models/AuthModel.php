<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
	
	function login($email)
	{
		$this->db->select('u.id, u.nama_lengkap, u.email, u.password, u.foto, u.username, u.cookie, u.status, r.id_roles, r.name_role, r.name_slug');
		$this->db->from('users as u');
		$this->db->join('roles as r', 'r.id_roles = u.role_id', 'left');
		$this->db->where('u.email', $email);
		return $this->db->get();
	}	

	function register($data)
	{
		return $this->db->insert('users', $data);
	}
	
}

/* End of file AuthModel.php */
/* Location: ./application/models/AuthModel.php */
?>