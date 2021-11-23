<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->helper('String');
	}
	
	public function index()
	{
		$dev['pagejs'] = 'login.js';

		$cookie = get_cookie('ppdb');
		if ($this->session->userdata('logged')) {
			redirect('dashboard','refresh');
		}else if ($cookie != '') {
			$row = $this->AuthModel->get_by_cookie($cookie)->row();
			if ($row) {
				$this->_reg_session($row);
			}else{
				$this->load->view('auth/login', $dev);
			}
		}else{
			$this->load->view('auth/login', $dev);
		}

		
	}

	public function proses()
	{
		$email_username		= $this->input->post('email_username');
		$password 	= $this->input->post('password');
		$remember 	= $this->input->post('remember_me');

		$row = $this->AuthModel->login($email_username)->row();

		if ($row) {
			if ($row->status == 1) {
				if (password_verify($password, $row->password)) {
					
					if ($remember) {
						$key = random_string('alnum', 64);

						set_cookie('ppdb', $key, 60 * 5);
						$update = array('cookie' => $key);

						$this->AuthModel->update($update, $row->id);
					}

					$response = $this->_reg_session($row);
				}else{
					$response = array(
						'type' => 'danger',
						'title' => 'Gagal !!!',
						'message' => 'Email atau password yang anda gunakan salah !',
						'redirect' => base_url('login'),
					);
				}
				
			}else{
				$response = array(
					'type' => 'warning',
					'title' => 'Gagal !!!',
					'message' => 'Akun anda belum aktif silahkan cek email atau hubungi administrator !',
					'redirect' => base_url('login'),
				);
			}

		}else{
			$response = array(
				'type' => 'warning',
				'title' => 'Gagal !!!',
				'message' => 'Akun yang anda masukan salah atau belum terdaftar !',
				'redirect' => base_url('login'),
			);
		}

		echo json_encode($response);
	}

	public function _reg_session($row)
	{
		$data_session = array(
			'id'				=> $row->id,
			'username'			=> $row->username,
			'email'				=> $row->email,
			'nama_lengkap'		=> $row->nama_lengkap,
			'foto'				=> $row->foto,
			'group_id'			=> $row->group_id,
			'group_name'		=> $row->group_name,
			'group_desc'		=> $row->group_desc,
			'logged' 			=> TRUE
		);

		$this->session->set_userdata($data_session);

		$response = array(
			'type' => 'primary',
			'title' => 'Berhasil !',
			'message' => 'Anda berhasil login, halaman ini akan di alihkan.',
			'redirect' => base_url('dashboard'),
		);

		return $response;
	}

	public function logout()
	{
		delete_cookie('ppdb');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	function create_password()
	{
		$password = 'password';
		echo password_hash($password, PASSWORD_DEFAULT);
	}
	
}

/* End of file LoginController.php */
/* Location: ./application/controllers/auth/LoginController.php */
?>