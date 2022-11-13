<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		is_admin();
		$this->load->model('admin_model', 'admin');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['total_Staff_Tata_Usaha'] = $this->admin->getTotalStaff_Tata_Usaha();
		$data['total_Staff_Kepegawaian'] = $this->admin->getTotalStaff_Kepegawaian();
		$data['total_Staff_Perlengkapan'] = $this->admin->getTotalStaff_Perlengkapan();
		$data['page'] 	= 'dashboard/index';
		$this->load->view('templates/app', $data);
	}

	public function profile()
	{
		$data['title']		= 'Biodata';
		$data['page'] 		= 'admin/profile/profile';
		$data['admin']		= $this->admin->getAdminProfile();
		$data['position'] 	= $this->admin->getPosition();

		$this->load->view('templates/app', $data);
	}

	public function change_email()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
			'required' 	  => 'Email tidak boleh kosong.',
			'valid_email' => 'Email tidak valid',
			'is_unique'	  => 'Email sudah terdaftar.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= 'Ubah Email';
			$data['page'] 		= 'admin/profile/email';
			$data['email']		= $this->admin->getAdminProfile();

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'email' => $this->input->post('email'),
			];
			$this->admin->UpdateEmail($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email berhasil diubah.</div>');
			redirect(base_url('admin'));
		}
	}

	public function change_password()
	{
		$this->form_validation->set_rules('new_password', 'Password Baru', 'required|trim', [
			'required' => 'Password baru tidak boleh kosong.',
		]);
		$this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|trim|matches[new_password]', [
			'required' => 'Konfirmasi password tidak boleh kosong.',
			'matches'  => 'Konfirmasi password tidak sesuai'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= 'Ubah Password';
			$data['page'] 		= 'admin/profile/password';

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'password' => hashEncrypt($this->input->post('new_password')),
			];

			$this->admin->updatePassword($data);
			$this->session->set_flashdata('message', 'Password berhasil diupdate.');

			redirect(base_url('admin'));
		}
	}
}

/* End of file Anggota.php */