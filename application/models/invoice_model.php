<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {

	public function tampil($id)
	{

		 return $this->db->join('pelanggan', 'pelanggan.id_p = tagihan.pelanggan_id', 'left')->get_where('tagihan',array('id'=>$id))->row_array();

		  
	}
	function tarif($id)
	{
		$tg = $this->db->where('id', $id)->select('pelanggan_id')->from('tagihan')->get();

		$idp= $tg->row()->pelanggan_id; 
		$plg = $this->db->where('id_p', $idp)->select('kodeTarif')->from('pelanggan')->get();
		$idt= $plg->row()->kodeTarif;
		$trf = $this->db->where('id', $idt)->select('tarif_perKWH')->from('tarif')->get();
		return $trf->row()->tarif_perKWH;


	
	}
	function pemakaian($id)
	{
		$tg = $this->db->where('id', $id)->select('pemakaian')->from('tagihan')->get();

		return $tg->row()->pemakaian; 
	}

	

}

/* End of file invoice_model.php */
/* Location: ./application/models/invoice_model.php */