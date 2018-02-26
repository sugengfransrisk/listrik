<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('invoice_model');
	}

	public function index($id)
	{
		
		$data['_view']='pembayaran/struk';
		$data['far']=$this->invoice_model->tampil($id);
		$tarif=$this->invoice_model->tarif($id);
		$pakai=$this->invoice_model->pemakaian($id);
		

		$data['total']=$tarif * $pakai;
		
		$this->load->view('layouts/main', $data);
	}

}

/* End of file invoice.php */
/* Location: ./application/controllers/invoice.php */