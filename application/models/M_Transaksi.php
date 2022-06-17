<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Transaksi extends CI_Model 
{
	public function AddTransaksi()
	{
		$data = [
			"id_transaksi" => $this->input->post('id_transaksi'),
			"id_user" => $this->input->post('id_user'),
			"id_menu" => $this->input->post('id_menu'),
			"qty" => $this->input->post('qty'),
		];

		$this->db->insert('transaksi', $data);
	}

	// public function EditTransaksi($id_transaksi)
	// {
	// 	$data = [
	// 		"id_transaksi" => $this->input->post('id_transaksi'),
	// 		"id_user" => $this->input->post('id_user'),
	// 		"id_menu" => $this->input->post('id_menu'),
	// 		"qty" => $this->input->post('qty'),
	// 	];

	// 	$this->db->where('id_transaksi',$id_transaksi);
	// 	$this->db->update('transaksi',$data);
	// }

	public function DeleteTransaksi($id_transaksi)
	{
        $this->db->delete('transaksi', array('id_transaksi' => $id_transaksi));
	}

	public function getAllTransaksi()
	{
		return $this->db->get('transaksi')->result_array();
	}

	public function getByIdTransaksi($id_transaksi)
	{
		return $this->db->get_where('transaksi',['id_transaksi'=>$id_transaksi])->row_array();
	}

   public function joinData(){
      $this->db->select(
      	'transaksi.*,
      	 menu.id_menu,
      	 menu.nama_menu,
      	 menu.harga,
      	 user.id_user,
      	 user.username,
      	');
      $this->db->from('transaksi');
      $this->db->join('user','user.id_user = transaksi.id_user');      
      $this->db->join('menu','menu.id_menu = transaksi.id_menu');
      $this->db->order_by('id_transaksi', 'DESC');      
	  return $this->db->get()->result_array();
   }

	public function countTransaksi()
	{
		return $this->db->from('menu')->count_all_results();
	}

	public function totalQuantity()
	{
		$this->db->select_sum('qty');
		$this->db->from('transaksi');
		return $this->db->get()->row()->qty;
	}

	public function getQuantity()
	{
		return $this->db->query("SELECT SUM(`qty`) FROM `transaksi` GROUP BY `id_menu` DESC")->result_array();
	}

	public function getMenuTransc()
	{
		$this->db->select(
      	'transaksi.*,
      	 menu.id_menu,
      	 menu.nama_menu,
      	 menu.harga,
      	 user.id_user,

      	');
      $this->db->from('transaksi');
      $this->db->join('menu','menu.id_menu = transaksi.id_menu');
      $this->db->join('user','transaksi.id_user = user.id_user');
      $this->db->order_by('transaksi.id_menu', 'DESC');      
	  	$array = $this->db->get()->result_array();
	  	$arr = array_column($array,"nama_menu");
	  	return($arr);
	}
}
