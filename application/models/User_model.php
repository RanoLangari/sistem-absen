<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function updatePassword($id, $data)
	{
		$this->db->update('users', $data, ['id_users' => $id]);
		return $this->db->affected_rows();
	}
	public function updatePasswordAdmin($data)
	{
		$this->db->update('users', $data, ['id_users' => 1]);
		return $this->db->affected_rows();
	}
	//create function gethadir
	public function getHadir()
	{
		$format = "Y-m-d";
		$this->db->select('presents.*, users.name');
		$this->db->from('presents');
		$this->db->join('users', 'users.id_users = presents.user_id');
		$this->db->where('presents.date', date($format));
		$this->db->where('status', 0);
		return $this->db->get()->result_array();
	}
	//create function getijin
	public function getIjin()
	{
		$format = "Y-m-d";
		$this->db->select('presents.*, users.name');
		$this->db->from('presents');
		$this->db->join('users', 'users.id_users = presents.user_id');
		$this->db->where('presents.date', date($format));
		$this->db->where('status', 1);
		return $this->db->get()->result_array();
	}
	//create function getabsen
	public function getSakit()
	{
		$format = "Y-m-d";
		$this->db->select('presents.*, users.name');
		$this->db->from('presents');
		$this->db->join('users', 'users.id_users = presents.user_id');
		$this->db->where('presents.date', date($format));
		$this->db->where('status', 2);
		return $this->db->get()->result_array();
	}
	

}

/* End of file ModelName.php */
