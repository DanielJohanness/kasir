<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_Transaksi extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Transaksi','Transaksi');
		$this->load->model('M_User','User');
		$this->load->model('M_Menu','Menu');
		$this->load->model('Auth/M_Auth','Auth');
		if (!$this->Auth->current_user()) {
			return redirect(base_url('Login'));
		}

        if ($this->session->userdata('level') === '2') {
            return redirect(base_url('Error'));
        }
	}

	public function Data_Transaksi()
	{
		$data['joined'] = $this->Transaksi->joinData();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('page/data-transaksi',$data);
		$this->load->view('partials/_footer',$data);
	}

	public function Tambah_Transaksi()
	{
		$data['transaksi'] = $this->Transaksi->getAllTransaksi();
		$data['menu'] = $this->Menu->getAllMenu();
		$data['user'] = $this->User->getAllUser();

		$this->form_validation->set_rules('id_transaksi', 'ID Transaksi', 'required');
		$this->form_validation->set_rules('id_user', 'Nama User', 'required');
        $this->form_validation->set_rules('id_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('qty', 'Jumlah Menu', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('partials/_header');
			$this->load->view('partials/_sidebar');
			$this->load->view('partials/_navbar');
			$this->load->view('admin/process_transaksi/tambah-transaksi',$data);
			$this->load->view('partials/_footer');
        } else {
            if ($this->input->post('tambah-transaksi')) {
                $this->Transaksi->AddTransaksi();
        		helper_log("add", "menambahkan data transaksi");
                $this->session->set_flashdata('msg', 'Data Transaksi berhasil di tambahkan!');
                redirect(base_url('Data-Transaksi'));
            }
        }
	}

	// public function Edit_Transaksi($id_transaksi)
	// {
	// 	$data['transaksi'] = $this->Transaksi->getByIdTransaksi($id_transaksi);
	// 	$data['menu'] = $this->Menu->getAllMenu();
	// 	$data['user'] = $this->User->getAllUser();

	// 	$this->form_validation->set_rules('id_transaksi', 'ID Transaksi', 'required');
	// 	$this->form_validation->set_rules('id_user', 'Nama User', 'required');
 //        $this->form_validation->set_rules('id_menu', 'Nama Menu', 'required');
 //        $this->form_validation->set_rules('qty', 'Jumlah Menu', 'required');

 //        if ($this->form_validation->run() == false) {
	// 		$this->load->view('partials/_header');
	// 		$this->load->view('partials/_sidebar');
	// 		$this->load->view('partials/_navbar');
	// 		$this->load->view('admin/process_transaksi/edit-transaksi',$data);
	// 		$this->load->view('partials/_footer');
 //        } else {
 //            if ($this->input->post('edit-transaksi')) {
 //                $this->Transaksi->EditTransaksi($id_transaksi);
 //        		helper_log("edit", "mengubah data transaksi");
 //                $this->session->set_flashdata('msg', 'Data Transaksi berhasil di dirubah!');
 //                redirect(base_url('Data-Transaksi'));
 //            }
 //        }
	// }

	public function Proses_Hapus_Transaksi($id_transaksi)
	{
		$this->Transaksi->DeleteTransaksi($id_transaksi);
		helper_log("delete", "menghapus data transaksi");
		redirect('Data-Transaksi');
	}
}