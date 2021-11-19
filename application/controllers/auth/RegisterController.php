<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->model('AuthModel');
	}
	
	public function index()
	{
		$dev['pagejs'] = 'register.js';

		$cookie = get_cookie('silink');
		if ($this->session->userdata('logged')) {
			redirect('dashboard','refresh');
		}else if ($cookie <> '') {
			$row = $this->AuthModel->get_by_cookie($cookie)->row();
			if ($row) {
				$this->_reg_session($row);
			}else{
				$this->load->view('auth/register', $dev);
			}
		}else{
			$this->load->view('auth/register', $dev);
		}
	}

	public function proses()
	{
		$config = array(
			array(

				'field' => 'nama_lengkap',
				'label' => 'Nama Lengkap',
				'rules' => 'required|xss_clean',
				'errors' => array(
					'required' => 'Nama Lengkap Wajib diisi',
				),

			),

			array(

				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|trim|is_unique[users.username]|min_length[6]|xss_clean',
				'errors' => array(
					'required' => 'Username Wajib diisi',
					'trim' => 'Username tidak boleh menggunakan spasi',
					'is_unique' => 'Username sudah tersedia',
					'min_length' => 'Username minimal 6 karakter',
				),

			),

			array(

				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[6]|xss_clean',
				'errors' => array(
					'required' => 'Password Wajib diisi',
					'min_length' => 'Password minimal 6 karakter',
				),

			),

			array(

				'field' => 'password_confirmation',
				'label' => 'Konfirmasi Password',
				'rules' => 'required|matches[password]|xss_clean',
				'errors' => array(
					'required' => 'Konfirmasi Password Wajib diisi',
					'matches' => 'Konfirmasi Password tidak sama dengan password',
				),

			),

			array(

				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[users.email]|xss_clean',
				'errors' => array(
					'required' => 'Email Wajib diisi',
					'valid_email' => 'Harap isi email dengan benar',
					'is_unique' => 'Email sudah tersedia',
				),

			),

		);

		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {

			$data = [
				'type'              => 'val_error',
				'nama_lengkap'      => form_error('nama_lengkap', '<small class="txt-danger">', '</small>'),
				'username'          => form_error('username', '<small class="txt-danger">', '</small>'),
				'password'          => form_error('password', '<small class="txt-danger">', '</small>'),
				'password_confirmation' => form_error('password_confirmation', '<small class="txt-danger">', '</small>'),
				'email'             => form_error('email', '<small class="txt-danger">', '</small>')
			];

			echo json_encode($data);
		} else {
			$data['nama_lengkap']     	= $this->input->post('nama_lengkap');
			$data['username']         	= $this->input->post('username');
			$data['email']				= $this->input->post('email');
			$data['password']         	= password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			$act = $this->AuthModel->register($data);
			if ($act) {
				$this->verified_code($data['email']);
				$response = array(
					'type' => 'success',
					'title' => 'Berhasil !',
					'message' => 'Pendaftaran berhasil, silahkan verifikasi email terlebih dahulu untuk melakukan login !',
					'redirect' => base_url('login'),
				);
			} else {
				$response = array(
					'type' => 'danger',
					'title' => 'Gagal !',
					'message' => 'Pendaftaran gagal silahkan coba beberapa menit lagi !',
					'redirect' => base_url('register'),
				);
			}

			echo json_encode($response);
		}
	}

	public function send_email($to, $kode)
	{

		$data['from']     	= 'basiscoding20@gmail.com';
		$data['to']     	= $to;
		$data['title']     	= 'Konfirmasi Email';
		$data['kode']     	= $kode;

		$template = $this->load->view('template-email', $data, TRUE);

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com', // atau smptp lainnya                
            'smtp_user' => 'basiscoding20@gmail.com',  // Email gmail admin aplikasi
            'smtp_pass'   => 'nlzzzxffmtpfjodx',  // Password Gmail atau Sandi Aplikasi Gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        $this->load->library('email', $config); // panggil library email
        $this->email->from($data['from'], $data['title']);
        $this->email->to($data['to']);
        $this->email->subject('Email Notifikasi');
        $this->email->message($template);
        if ($this->email->send()) {
        	return true;
        } else {
        	return false;
        }
    }

    public function verified_code($email)
    {
    	$this->load->helper('string');
    	$str = random_string('alnum', 10);
    	$this->db->update('users', array('verification_code' => $str), array('email' => $email));
    	$this->send_email($email, $str);
    }

    public function verification($code)
    {
    	$validasi = $this->db->get_where('users', array('verification_code' => $code));
    	if ($validasi->num_rows() > 0) {
    		if ($validasi->row()->email_verified_at == NULL) {
    			$update = $this->AuthModel->verification($code);
    			echo "<script>alert('Verifikasi berhasil !!!');</script>";

    			redirect('login', 'refresh');
    		} else {
    			echo "<script>alert('Akun anda sudah terverifikasi sebelumnya !!!');</script>";
    			redirect('login', 'refresh');
    		}
    	} else {
    		echo "<script>alert('Kode verifikasi sudah kadaluwarsa !!!');</script>";
    	}
    }

}

/* End of file RegisterController.php */
/* Location: ./application/controllers/auth/RegisterController.php */
?>