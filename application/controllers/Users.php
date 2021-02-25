<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('UserModel');
		$this->load->library('session');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('login');
	}

	public function login()
	{
		$email 	= $this->input->post('email', TRUE);
		$pass 	= $this->input->post('password', TRUE);

		$query = $this->UserModel->login($email, $pass);
		if ($query == NULL) {
			$this->session->set_flashdata('danger','Terjadi Kesalahan login, ulangi');
			redirect('users/index', 'refresh');
		} else {
			$data_email 	= $query->email;
			$data_level 	= $query->level;
			$data_status 	= $query->keterangan;
			$data_userid 	= $query->user_id;
			//set session user
            $this->session->set_userdata('email', $data_email);
            $this->session->set_userdata('id_login', uniqid(rand()));
            $this->session->set_userdata('level', $data_level);
            $this->session->set_userdata('status', $data_status);
            $this->session->set_userdata('user_id', $data_userid);
            
            var_dump($data_email, $data_level, $data_status);
            switch ($data_level) {
				case 1:
					//redirect ke halaman dashboard
					redirect('users/dashboard_admin');
					break;
				case 2:
					//redirect ke halaman dashboard
					redirect('users/dashboard_user');
					break;
				
			}
		}
      
	}

	public function logout() {
         $this->session->unset_userdata('email');
         $this->session->unset_userdata('id_login');
         $this->session->unset_userdata('level');
         $this->session->unset_userdata('status');
         $this->session->unset_userdata('user_id');
         $this->session->set_flashdata('danger','Anda berhasil logout');
         $this->session->set_flashdata('sukses','');
         redirect('users/index', 'refresh');
    }

    public function account()
    {
    	$this->load->view('admin/account');
    }

	public function dashboard_user(){
		$this->UserModel->check_login($this->session->userdata('level'));
	}

	public function dashboard_admin(){
		$this->UserModel->check_login($this->session->userdata('level'));
	}



}
