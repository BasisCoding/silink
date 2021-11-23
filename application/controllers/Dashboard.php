<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function index()
	{
		$def['title'] = 'Dashboard';

		// Menu 

		$menu = $this->RolesMenusModel->get_menu();
		$def['menu'] = fetch_menu($menu);

		// BreadCrumb

		// $this->mybreadcrumb->add('<i class="icofont-ui-home"></i>', base_url(''));
		// $def['breadcrumb'] = $this->mybreadcrumb->render();

		// Page Plugins
		$def['css'] = '
		    <link rel="stylesheet" type="text/css" href="'. site_url('assets/css/animate.css').'">
		';

		$this->load->view('partials/head', $def);
		$this->load->view('partials/header');
		$this->load->view('partials/sidebar', $def);
		$this->load->view('partials/main');
		$this->load->view('partials/footer');
		$this->load->view('partials/plugins');
		$this->load->view('pages/plugins/dashboard');
	}
	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
?>