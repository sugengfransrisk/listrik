<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembayaran extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->model('invoice_model');
    } 

    /*
     * Listing of pembayaran
     */
    function index()
    {
        if ($this->session->userdata('role')=='admin') {
        $data['pembayaran'] = $this->Pembayaran_model->get_all_pembayaran();
        }else{
        $data['pembayaran'] = $this->Pembayaran_model->get_user_pembayaran();
        }
        $data['_view'] = 'pembayaran/index';
        $this->load->view('layouts/main',$data);
    }

    function ok($id){
        $tarif=$this->invoice_model->tarif($id);
        $pakai=$this->invoice_model->pemakaian($id);
        $far=$this->invoice_model->tampil($id);
        $now = date('Y-m-d');
        $bulan= date('n');
        $tgl= date('d');
        $thn=date('Y');
        if (($tgl>30 )||( $far['bulanTagih'] < $bulan  )||($far['tahunTagih']<  $thn  )) {

            
           $denda=5000;
        } else {
            $denda=0;
        }


        $total=$tarif * $pakai;
        $params = array(
            'tanggal_bayar' => $now, 
            'id_tagihan' => $far['id'],
            'jumlah_tagihan' => $total,
            'biaya_denda' => $denda,
            'biaya_admin' => 5000,
            'status' => "menunggu konfirmasi",
            'id_pelanggan' => $this->session->userdata('pid')


        );
        if ($this->Pembayaran_model->submit($params,$id)== true) {
            $this->Pembayaran_model->ubah($id);
            redirect('pembayaran/index');
        } else {
            redirect('pembayaran/index');
        }
        

        
    }
    

    /*
     * Adding a new pembayaran
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tanggal_bayar' => $this->input->post('tanggal_bayar'),
				'id_tagihan' => $this->input->post('id_tagihan'),
				'jumlah_tagihan' => $this->input->post('jumlah_tagihan'),
				'biaya_denda' => $this->input->post('biaya_denda'),
				'biaya_admin' => $this->input->post('biaya_admin'),
				'status' => $this->input->post('status'),

            );
            
            $pembayaran_id = $this->Pembayaran_model->add_pembayaran($params);
            redirect('pembayaran/index');
        }
        else
        {            
            $data['_view'] = 'pembayaran/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pembayaran
     */
    function edit($id)
    {   
        // check if the pembayaran exists before trying to edit it
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($id);
        
        if(isset($data['pembayaran']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tanggal_bayar' => $this->input->post('tanggal_bayar'),
					'id_tagihan' => $this->input->post('id_tagihan'),
					'jumlah_tagihan' => $this->input->post('jumlah_tagihan'),
					'biaya_denda' => $this->input->post('biaya_denda'),
					'biaya_admin' => $this->input->post('biaya_admin'),
					'status' => $this->input->post('status'),
                );

                $this->Pembayaran_model->update_pembayaran($id,$params);            
                redirect('pembayaran/index');
            }
            else
            {
                $data['_view'] = 'pembayaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pembayaran you are trying to edit does not exist.');
    } 

    /*
     * Deleting pembayaran
     */
    function remove($id)
    {
            if ( $this->Pembayaran_model->delete_pembayaran($id)==true) {
                  redirect('pembayaran/index');
            } else {
                 redirect('pembayaran/index');
            }
     }
}
