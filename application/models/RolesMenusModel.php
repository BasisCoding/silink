<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class RolesMenusModel extends CI_Model {
	
		function get_menu()
		{
			$this->db->select('menus.nama_menu, menus.icon, menus.link, menus.color, menus.parrent_id, menus.id');
			$this->db->from('menus');
			$this->db->join('roles', 'roles.id_roles = menus.role_id', 'left');
			$this->db->where('parrent_id', 0);
			$this->db->where('menus.role_id', $this->session->userdata('id_role'));
			$this->db->order_by('sequence', 'asc');
			
			$menus = $this->db->get()->result();
			$i = 0;

			foreach ($menus as $mn) {
				$menus[$i]->sub = $this->get_sub_menu($mn->id);
				$i++;
			}

			return $menus;
		}

		function get_sub_menu($id)
		{
			$this->db->select('menus.nama_menu, menus.icon, menus.link, menus.color, menus.parrent_id, menus.id');
			$this->db->from('menus');
			$this->db->join('roles', 'roles.id_roles = menus.role_id', 'left');
			$this->db->where('menus.parrent_id', $id);
			$this->db->where('menus.role_id', $this->session->userdata('id_role'));
			$this->db->order_by('sequence', 'asc');

			$menus = $this->db->get()->result();
			$i = 0;

			foreach ($menus as $mn) {
				$menus[$i]->sub = $this->get_sub_menu($mn->id);
				$i++;
			}

			return $menus;
		}

	}
	
	/* End of file RoleMenusModel.php */
	/* Location: ./application/models/RoleMenusModel.php */
?>