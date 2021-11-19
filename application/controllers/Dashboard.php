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
		    <link rel="stylesheet" type="text/css" href="'. site_url('assets/css/chartist.css').'">
		    <link rel="stylesheet" type="text/css" href="'. site_url('assets/css/date-picker.css').'">
		    <link rel="stylesheet" type="text/css" href="'. site_url('assets/css/prism.css').'">
		    <link rel="stylesheet" type="text/css" href="'. site_url('assets/css/vector-map.css').'">
		';
		$def['js'] = '
			<script src="'. site_url('assets/js/chart/chartist/chartist.js') .'"></script>
			<script src="'. site_url('assets/js/chart/chartist/chartist-plugin-tooltip.js') .'"></script>
			<script src="'. site_url('assets/js/chart/knob/knob.min.js') .'"></script>
			<script src="'. site_url('assets/js/chart/knob/knob-chart.js') .'"></script>
			<script src="'. site_url('assets/js/chart/apex-chart/apex-chart.js') .'"></script>
			<script src="'. site_url('assets/js/chart/apex-chart/stock-prices.js') .'"></script>
			<script src="'. site_url('assets/js/prism/prism.min.js') .'"></script>
			<script src="'. site_url('assets/js/clipboard/clipboard.min.js') .'"></script>
			<script src="'. site_url('assets/js/counter/jquery.waypoints.min.js') .'"></script>
			<script src="'. site_url('assets/js/counter/jquery.counterup.min.js') .'"></script>
			<script src="'. site_url('assets/js/counter/counter-custom.js') .'"></script>
			<script src="'. site_url('assets/js/custom-card/custom-card.js') .'"></script>
			<script src="'. site_url('assets/js/notify/bootstrap-notify.min.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-au-mill.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-in-mill.js') .'"></script>
			<script src="'. site_url('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') .'"></script>
			<script src="'. site_url('assets/js/dashboard/default.js') .'"></script>
			<script src="'. site_url('assets/js/notify/index.js') .'"></script>
			<script src="'. site_url('assets/js/datepicker/date-picker/datepicker.js') .'"></script>
			<script src="'. site_url('assets/js/datepicker/date-picker/datepicker.en.js') .'"></script>
			<script src="'. site_url('assets/js/datepicker/date-picker/datepicker.custom.js') .'"></script>
		';

		$this->load->view('partials/head', $def);
		$this->load->view('partials/header');
		$this->load->view('partials/sidebar', $def);
		$this->load->view('partials/main');
		$this->load->view('partials/footer');
		$this->load->view('partials/plugins', $def);
	}
	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
?>