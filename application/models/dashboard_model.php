<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function tagihancount(){
		return $this->db->count_all('tagihan');
	}

	public function admincount(){
		return $this->db->count_all('admin');
	}

	public function tarifcount(){
		return $this->db->count_all('tarif');
	}

	public function pembayarancount(){
		return $this->db->count_all('pembayaran');
	}

	public function pelanggancount(){
		return $this->db->count_all('pelanggan');
	}
	

	

	
	public function grafik()
	{
		$id=$this->session->userdata('pid');

		$this->db->select('bulanTagih')
				 ->select('SUM(pemakaian) as pemakaian')
				 ->from('tagihan')
				 ->where('pelanggan_id', $id)
				 
				 ->group_by('bulanTagih');


	 $query = $this->db->get();
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
       }
    }
	public function adminlist(){
		return $this->db->order_by('id', 'DESC')->limit(4)->get('admin')->result();
	}

	public function tariflist(){
		return $this->db->order_by('id', 'DESC')->limit(4)->get('tarif')->result();
	}

	public function pembayaranlist(){
		return $this->db->order_by('id_pem', 'DESC')->limit(4)->get('pembayaran')->result();
	}

	public function pelangganlist(){
		return $this->db->order_by('id_p', 'DESC')->limit(4)->get('pelanggan')->result();
	}

	public function tagihanlist(){
		$this->db
			->join('pelanggan', 'pelanggan.id_p = tagihan.pelanggan_id', 'left')
			->join('admin', 'admin.id = tagihan.id_admin', 'left')
			->order_by('tagihan.id', 'DESC')->limit(4);
		return $this->db->get('tagihan')->result();
	}
}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */