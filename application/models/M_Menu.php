<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model 
{
	public function AddMenu()
	{
		$data = [
			"id_menu" => $this->input->post('id_menu', true),
			"nama_menu" => $this->input->post('nama_menu',true),
			"harga" => $this->input->post('harga',true),
		];

		$this->db->insert('menu', $data);
	}

	public function EditMenu($id_menu)
	{
		$data = [
			"nama_menu" => $this->input->post('nama_menu'),
			"harga" => $this->input->post('harga'),
		];

		$this->db->where('id_menu',$this->input->post('id_menu'));
		$this->db->update('menu',$data);
	}

	public function DeleteMenu($id_menu)
	{
        $this->db->delete('menu', array('id_menu' => $id_menu));
	}

	public function getAllMenu()
	{
		return $this->db->get('menu')->result_array();
	}

	public function getByIdMenu($id_menu)
	{
		return $this->db->get_where('menu',['id_menu'=>$id_menu])->row_array();
	}

	public function countMenu()
	{
		return $this->db->from('menu')->count_all_results();
	}
}
