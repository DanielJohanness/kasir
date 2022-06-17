<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User','User');
		$this->load->model('Auth/M_Auth','Auth');
		if (!$this->Auth->current_user()) {
			return redirect(base_url('Login'));
		}
/*
        if ($this->session->userdata('level') === '3') {
            return redirect(base_url('Error'));
        }*/
	}

	public function Data_User()
	{
		$data['user'] = $this->User->getAllUser();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('page/data-user',$data);
		$this->load->view('partials/_footer');
	}

	public function Tambah_User()
	{
		$this->form_validation->set_rules('id_user', 'Id User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password User', 'required');
        $this->form_validation->set_rules('level', 'Level User', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('partials/_header');
			$this->load->view('partials/_sidebar');
			$this->load->view('partials/_navbar');
			$this->load->view('admin/process_user/tambah-user');
			$this->load->view('partials/_footer');
        } else {
            if ($this->input->post('tambah-user')) {
                $this->User->AddUser();
        		helper_log("add", "menambahkan data user");
                $this->session->set_flashdata('msg', 'Data User berhasil di tambahkan!');
                redirect(base_url('Data-User'));
            }
        }
	}

	public function Edit_User($id_user)
	{
		$data['user'] = $this->User->getByIdUser($id_user);

		$this->form_validation->set_rules('id_user', 'Id User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password User', 'required');
        $this->form_validation->set_rules('level', 'Level User', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('partials/_header');
			$this->load->view('partials/_sidebar');
			$this->load->view('partials/_navbar');
			$this->load->view('admin/process_user/edit-user',$data);
			$this->load->view('partials/_footer');
        } else {
            if ($this->input->post('edit-user')) {
                $this->User->EditUser($id_user);
				helper_log("edit", "mengubah data user");
                $this->session->set_flashdata('msg', 'Data User berhasil di ubah!');
                redirect(base_url('Data-User'));
            }
        }
	}

	public function Proses_Hapus_User($id_user)
	{
		$this->User->DeleteUser($id_user);
		helper_log("delete", "menghapus data user");
		redirect('Data-User');
	}

	public function Proses_Logout_User()
	{
		$this->Auth->logout();
		helper_log("logout", "user logout");
		redirect('Login');
	}
}