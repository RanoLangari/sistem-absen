<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

	public function insertEntri($data)
	{
		$this->db->insert('presents', $data);
	}
	public function getAbsen($id)
	{
		$this->db->where('user_id', $id);
		$this->db->where('date', date('Y-m-d'));
		return $this->db->get('presents')->row_array();
	}

	public function getAbsensi()
	{
		$this->db->where('user_id', $this->session->userdata('id_users'));
		$this->db->like('date', date('m'));
		return $this->db->get('presents')->result_array();
	}
	
	public function getHadir()
	{
		$this->db->where('user_id', $this->session->userdata('id_users'));
		$this->db->where('status', 1);
		$this->db->like('date', date('m'));
		$this->db->where('information', 'Hadir');
		return $this->db->get('presents')->num_rows();
	}

	public function getIjin()
	{
		$this->db->where('user_id', $this->session->userdata('id_users'));
		$this->db->where('status', 1);
		$this->db->like('date', date('m'));
		$this->db->where('information', 'Ijin');
		return $this->db->get('presents')->num_rows();
	}

	public function getSakit()
	{
		$this->db->where('user_id', $this->session->userdata('id_users'));
		$this->db->where('status', 1);
		$this->db->like('date', date('m'));
		$this->db->where('information', 'Sakit');
		return $this->db->get('presents')->num_rows();
	}

}

/* End of file ModelName.php */
