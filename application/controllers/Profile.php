<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('ProfileModel');
	}

	public function index()
	{
		$data['data'] = $this->ProfileModel->getAllData();
		$this->load->view('admin/profile', $data);
	}
	public function input()
	{
		$this->form_validation->set_rules('ktpid', 'Nomor KTP', 'trim|required|numeric|max_length[30]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alm', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('hp', 'Nomor HP/WA', 'trim|required|numeric|max_length[15]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/profile_input');
		} else {
			date_default_timezone_set('Asia/Jakarta');

			$profile_data = (object) array(
				'ktp_id' => $this->input->post('ktpid', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'alamat' => $this->input->post('alm', TRUE),
				'hp' => $this->input->post('hp', TRUE),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$condition = $this->ProfileModel->insertProfile($profile_data);
			if ($condition) {
				$this->session->set_flashdata('success','Data Berhasil Di Tambahkan');
				return redirect('users/dashboard_admin');
			}
		}
	}

	public function edit($id)
	{
		$data['data'] 	= $this->ProfileModel->getProfile($id);
		$ktp_old		= $this->ProfileModel->getProfile($id)->ktp_id;
		$ktp_new		= $this->input->post('ktpid', TRUE);

		$this->form_validation->set_rules('ktpid', 'Nomor KTP', 'trim|required|numeric|max_length[30]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alm', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('hp', 'Nomor HP/WA', 'trim|required|numeric|max_length[15]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/profile_edit', $data);
		} else {
			date_default_timezone_set('Asia/Jakarta');

			$update_ktp = ($ktp_old == $ktp_new) ? $ktp_old : $ktp_new;

			$profile_data = (object) array(
				'ktp_id' => $update_ktp,
				'nama' => $this->input->post('nama', TRUE),
				'alamat' => $this->input->post('alm', TRUE),
				'hp' => $this->input->post('hp', TRUE),
				'created_at' => $this->ProfileModel->getProfile($id)->created_at,
				'updated_at' => date('Y-m-d H:i:s')
			);

			$this->db->query("UPDATE tb_profile SET ktp_id='".$update_ktp."' WHERE ktp_id='".$ktp_old."' ");
			$this->db->query("UPDATE tb_hasil SET ktp_id='".$update_ktp."' WHERE ktp_id='".$ktp_old."' ");

			$condition = $this->ProfileModel->updateProfile($profile_data);
			if ($condition) {
				$this->session->set_flashdata('success','Data Berhasil Di Perbarui');
				return redirect('users/dashboard_admin');
			}
		}
	}

	public function detail($id)
	{
		$data['data'] = $this->ProfileModel->getProfile($id);
		$this->load->view('admin/profile_detail', $data);
	}

	public function delete($id)
	{
		$this->ProfileModel->deleteData($id);
		redirect('profile','refresh');
	}
}
