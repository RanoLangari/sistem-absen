<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function getPosition()
	{
		return $this->db->get('positions')->result_array();
	}
	public function getTotalStaff_Tata_Usaha()
	{
		$this->db->select('users.*, positions.position_name');
		$this->db->from('users');
		$this->db->join('positions', 'users.position_id = positions.id_positions');
		$this->db->where('position_id', 1);
		return $this->db->get()->num_rows();
	}

	public function getTotalStaff_Kepegawaian()
	{
		$this->db->select('users.*, positions.position_name');
		$this->db->from('users');
		$this->db->join('positions', 'users.position_id = positions.id_positions');
		$this->db->where('position_id', 2);
		return $this->db->get()->num_rows();
	}
	public function getTotalStaff_Perlengkapan()
	{
		$this->db->select('users.*, positions.position_name');
		$this->db->from('users');
		$this->db->join('positions', 'users.position_id = positions.id_positions');
		$this->db->where('position_id', 3);
		return $this->db->get()->num_rows();
	}

	public function getAdminProfile()
	{
		return $this->db->get_where('users', ['id_users' => 1])->row_array();
	}

	public function updateProfile($data)
	{
		$this->db->update('users', $data, ['id_users' => 1]);
		return $this->db->affected_rows();
	}

	public function updatePassword($data)
	{
		$this->db->update('users', $data, ['id_users' => 1]);
		return $this->db->affected_rows();
	}
	public function UpdateEmail($data)
	{
		$this->db->update('users', $data, ['id_users' => 1]);
		return $this->db->affected_rows();
	}
}

/* End of file ModelName.php */