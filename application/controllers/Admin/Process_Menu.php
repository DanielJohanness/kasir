<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Menu','Menu');
		$this->load->model('Auth/M_Auth','Auth');
		if (!$this->Auth->current_user()) {
			return redirect(base_url('Login'));
		}

        if ($this->session->userdata('level') !== '1') {
            return redirect(base_url('Error'));
        }
	}

	public function Data_Menu()
	{
		$data['menu'] = $this->Menu->getAllMenu();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('page/data-menu',$data);
		$this->load->view('partials/_footer');
	}

	public function Tambah_Menu()
	{
		$this->form_validation->set_rules('id_menu', 'Id Menu', 'required');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('harga', 'Harga Menu', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('partials/_header');
			$this->load->view('partials/_sidebar');
			$this->load->view('partials/_navbar');
			$this->load->view('admin/process_menu/tambah-menu');
			$this->load->view('partials/_footer');
        } else {
            if ($this->input->post('tambah-menu')) {
                $this->Menu->AddMenu();
        		helper_log("add", "menambahkan data menu");
                $this->session->set_flashdata('msg', 'Data Menu berhasil di tambahkan!');
                redirect(base_url('Data-Menu'));
            }
        }
	}

	public function Edit_Menu($id_menu)
	{
		$data['menu'] = $this->Menu->getByIdMenu($id_menu);

		$this->form_validation->set_rules('id_menu', 'Id Menu', 'required');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('harga', 'Harga Menu', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('partials/_header');
			$this->load->view('partials/_sidebar');
			$this->load->view('partials/_navbar');
			$this->load->view('admin/process_menu/edit-menu',$data);
			$this->load->view('partials/_footer');
        } else {
            if ($this->input->post('edit-menu')) {
                $this->Menu->EditMenu($id_menu);
        		helper_log("edit", "mengubah data menu");
                $this->session->set_flashdata('msg', 'Data Menu berhasil di ubah!');
                redirect(base_url('Data-Menu'));
            }
        }
	}

	public function Proses_Hapus_Menu($id_menu)
	{
		$this->Menu->DeleteMenu($id_menu);
        helper_log("delete", "menghapus data menu");
        $this->session->set_flashdata('msg', 'Data pasien berhasil di hapus!');
		redirect('Data-Menu');
	}
}