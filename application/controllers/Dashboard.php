<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	}

	public function index(){
		$data = array(
			'title'			=> 'Dashboard',
			'_view'	=> 'dashboard',
			'tgcount'		=> $this->Dashboard_model->tagihancount(),
			'admcount'		=> $this->Dashboard_model->admincount(),
			'byrcount'		=> $this->Dashboard_model->pembayarancount(),
			'trfcount'		=> $this->Dashboard_model->tarifcount(),
			'plcount'		=> $this->Dashboard_model->pelanggancount(),
			'adminlist'		=> $this->Dashboard_model->adminlist(),
			'tariflist'		=> $this->Dashboard_model->tariflist(),
			'pelangganlist'		=> $this->Dashboard_model->pelangganlist(),
			'tagihanlist'		=> $this->Dashboard_model->tagihanlist(),
			'data'=>$this->Dashboard_model->grafik()
		);
		$this->load->view('layouts/main', $data);
	}

	public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=> false,
			'role'		=> ''
		);

		$this->session->sess_destroy();
		redirect('welcome');
	}

	public function profile(){
		$uname = $this->input->get('usr');
		$data = array(
			'title'			=> $uname.'.s Profile',
			'primary_view'	=> 'profile_view',
		);
		if($this->Dashboard_model->checkUser($uname) == true){
			$this->load->view('template', $data);
		}else{
			$this->load->view('full_404_view');
		}
	}
	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */