<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User','User');
		$this->load->model('M_Menu','Menu');
		$this->load->model('M_Transaksi','Transaksi');
		$this->load->model('Auth/M_Log','Logg');
		$this->load->model('Auth/M_Auth','Auth');
		
		if (!$this->Auth->current_user()) {
			return redirect(base_url('Login'));
		}
	}

	public function Dashboard()
	{
		$data['menu'] = $this->Menu->countMenu();
		$data['user'] = $this->User->countUser();
		$data['transaksi'] = $this->Transaksi->countTransaksi();
		$data['quantity'] = $this->Transaksi->totalQuantity();
		$data['joined'] = $this->Transaksi->joinData();
		$data['log'] = $this->Logg->getLog();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('dashboard',$data);
		$this->load->view('partials/_footer',$data);
	}

	public function Laporan_Penjualan()
	{
        if ($this->session->userdata('level') === '2') {
            return redirect(base_url('Error'));
        }

		$data['joined'] = $this->Transaksi->joinData();
		$data['quantity'] = $this->Transaksi->getQuantity();
		$data['menu'] = $this->Transaksi->getMenuTransc();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('page/laporan-penjualan',$data);
		$this->load->view('partials/_footer',$data);
	}

	public function User_Log()
	{
        if ($this->session->userdata('level') === '3') {
            return redirect(base_url('Error'));
        }
		
		$data['log'] = $this->Logg->getLog();

		$this->load->view('partials/_header');
		$this->load->view('partials/_sidebar');
		$this->load->view('partials/_navbar');
		$this->load->view('page/user-log',$data);
		$this->load->view('partials/_footer');
	}
}
