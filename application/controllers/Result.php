<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('ResultModel');
		$this->load->model('ProfileModel');
	}

	public function index()
	{
		$data['data'] = $this->ResultModel->getAllData();
		$data['bobot'] = $this->db->get('tb_bobot')->row();
		$this->load->view('admin/hasil_nilai', $data);
	}
	public function input()
	{
		$data['data'] = $this->db->query("SELECT ktp_id from tb_profile except SELECT ktp_id from tb_hasil")->result();

		$this->form_validation->set_rules('ktpid', 'KTP', 'trim|required|numeric|max_length[50]');
		$this->form_validation->set_rules('psiko', 'Psikotest', 'trim|required|numeric|max_length[2]');
		$this->form_validation->set_rules('kes', 'Kesehatan', 'trim|required|numeric|max_length[2]');
		$this->form_validation->set_rules('wawancara', 'Wawancara', 'trim|required|numeric|max_length[2]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/input_nilai', $data);
		} else {
			$ktpid 		= $this->input->post('ktpid', TRUE);
			$psiko 		= $this->input->post('psiko', TRUE);
			$kes 		= $this->input->post('kes', TRUE);
			$wawancara 	= $this->input->post('wawancara', TRUE);

			$data = $this->db->get('tb_bobot')->row();
			$total = ($psiko*$data->b_psikotest) + ($kes*$data->b_kesehatan) + ($wawancara*$data->b_wawancara);
			$grade = ($total < $data->b_standart) ? "GAGAL" : "LULUS";

			date_default_timezone_set('Asia/Jakarta');

			$test_data = (object) array(
				'ktp_id' => $ktpid,
				'psikotest' => $psiko,
				'kesehatan' => $kes,
				'wawancara' => $wawancara,
				'hasil' => $total,
				'ket' => $grade,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);
			$condition = $this->ResultModel->insertTest($test_data);
			if ($condition) {
				$this->session->set_flashdata('success','Data Berhasil Di Tambahkan');
				return redirect('users/dashboard_admin');
			}
		}
	}

	public function delete($id)
	{
		$this->ResultModel->deleteData($id);
		redirect('result','refresh');
	}

	public function edit($id)
	{
		$data['data'] = $this->ResultModel->editData($id);

		$this->form_validation->set_rules('ktpid', 'KTP', 'trim|required|numeric|max_length[50]');
		$this->form_validation->set_rules('psiko', 'Psikotest', 'trim|required|numeric|max_length[2]');
		$this->form_validation->set_rules('kes', 'Kesehatan', 'trim|required|numeric|max_length[2]');
		$this->form_validation->set_rules('wawancara', 'Wawancara', 'trim|required|numeric|max_length[2]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_nilai', $data);
		} else {
			$ktpid 		= $this->input->post('ktpid', TRUE);
			$psiko 		= $this->input->post('psiko', TRUE);
			$kes 		= $this->input->post('kes', TRUE);
			$wawancara 	= $this->input->post('wawancara', TRUE);

			$data = $this->db->get('tb_bobot')->row();
			$total = ($psiko*$data->b_psikotest) + ($kes*$data->b_kesehatan) + ($wawancara*$data->b_wawancara);
			$grade = ($total < $data->b_standart) ? "GAGAL" : "LULUS";

			date_default_timezone_set('Asia/Jakarta');

			$test_data = array(
				'ktp_id' => $this->ResultModel->editData($id)->ktp_id,
				'psikotest' => $psiko,
				'kesehatan' => $kes,
				'wawancara' => $wawancara,
				'hasil' => $total,
				'ket' => $grade,
				'created_at' => $this->ResultModel->editData($id)->created_at,
				'updated_at' => date('Y-m-d H:i:s')
			);

			$condition = $this->ResultModel->updateTest($test_data);
			if ($condition) {
				$this->session->set_flashdata('success','Data Berhasil Di Perbarui');
				return redirect('users/dashboard_admin');
			}
		}
	}
}
