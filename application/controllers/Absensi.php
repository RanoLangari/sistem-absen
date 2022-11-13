<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('absensi_model', 'absensi');
		$this->load->helper('absen');
		$this->load->helper('tanggal');
	}

	public function entri()
	{
		$data['title'] = 'PRESENSI | Isi Kehadiran';

		$data['absen'] = $this->absensi->getAbsen($this->session->userdata('id_users'));
		$data['page']	= 'user/kehadiran/entri';


		$this->load->view('templates/app', $data);
	}
	public function checkAbsen()
	{
		$tgl = $this->input->post('tgl');
		$absen = checkAbsenHarian($tgl);
		if ($absen) {
			$this->session->set_flashdata('message', 'Anda sudah melakukan absensi pada tanggal ' . tgl_indo($tgl));
			redirect(base_url('absensi/entri'));
		}
		$this->session->set_flashdata('message', 'Anda belum melakukan absensi pada tanggal ' . tgl_indo($tgl));
		redirect(base_url('absensi/entri'));
	}
	public function absen()
	{
		$data = [
			'id_users' => $this->session->userdata('id_users'),
			'tgl' => date('Y-m-d'),
			'jam_masuk' => date('H:i:s'),
			'jam_keluar' => date('H:i:s'),
			'keterangan' => 'Hadir',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];
		$this->absensi->insertEntri($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Absen berhasil!</div>');
		redirect(base_url('absensi/entri'));
	}

	public function Hadir()
	{
		$data = [
			'user_id'		=> $this->session->userdata('id_users'),
			'date'			=> date('Y-m-d'),
			'time'			=> date('H:i:s'),
			'information'	=> 'Hadir',
			'status'			=> 0
		];

		$this->absensi->insertEntri($data);
		$this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

		redirect(base_url('absensi/entri'));
	}

	public function ijin()
	{
		$data = [
			'user_id'		=> $this->session->userdata('id_users'),
			'date'			=> date('Y-m-d'),
			'time'			=> date('H:i:s'),
			'information'	=> 'Ijin',
			'status'			=> 0
		];

		$this->absensi->insertEntri($data);
		$this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

		redirect(base_url('absensi/entri'));
	}

	public function sakit()
	{
		$data = [
			'user_id'		=> $this->session->userdata('id_users'),
			'date'			=> date('Y-m-d'),
			'time'			=> date('H:i:s'),
			'information'	=> 'Sakit',
			'status'			=> 0
		];

		$this->absensi->insertEntri($data);
		$this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

		redirect(base_url('absensi/entri'));
	}

	public function tabel()
	{
		$data['title'] 	= 'PRESENSI | Tabel Kehadiran';
		$data['page']		= 'user/kehadiran/tabel';
		$data['absensi'] 	= $this->absensi->getAbsensi();

		$this->load->view('templates/app', $data);
	}

	public function rekap()
	{
		$data['title'] 	= 'PRESENSI | Rekap Kehadiran';
		$data['page']		= 'user/kehadiran/rekap';
		$data['Hadir'] 	= $this->absensi->getHadir();
		$data['Ijin'] 		= $this->absensi->getIjin();
		$data['Sakit'] 	= $this->absensi->getSakit();

		$this->load->view('templates/app', $data);
	}
}

/* End of file Controllername.php */