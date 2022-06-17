<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model 
{
	public function AddUser()
	{
		$pw_hashed = password_hash($this->input->post('password', true), PASSWORD_BCRYPT);

		$data = [
			"id_user" => $this->input->post('id_user'),
			"username" => $this->input->post('username'),
			"password" => $pw_hashed,
			"level" => $this->input->post('level'),
		];

		$this->db->insert('user', $data);
	}

	public function EditUser($id_user)
	{
		$pw_hashed = password_hash($this->input->post('password', true), PASSWORD_BCRYPT);

		$data = [
			"id_user" => $this->input->post('id_user'),
			"username" => $this->input->post('username'),
			"password" => $pw_hashed,
			"level" => $this->input->post('level'),
		];

		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user',$data);
	}

	public function DeleteUser($id_user)
	{
        $this->db->delete('user', array('id_user' => $id_user));
	}

	public function getAllUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function getByIdUser($id_user)
	{
		return $this->db->get_where('user',['id_user'=>$id_user])->row_array();
	}

	public function countUser()
	{
		return $this->db->from('user')->count_all_results();
	}
}
