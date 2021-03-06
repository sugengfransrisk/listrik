<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tagihan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tagihan_model');
    } 

    /*
     * Listing of tagihan
     */
    function index()
    {
        if ($this->session->userdata('role')=='admin') {
          $data['tagihan'] = $this->Tagihan_model->get_all_tagihan();
           $this->load->model('Pelanggan_model');
          $data['all_pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();
        } else {
          $data['tagihan'] = $this->Tagihan_model->get_user_tagihan();
        }
        
      
         
        $data['_view'] = 'tagihan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tagihan
     */
    function add()

    {   

         $id_admin= $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('id'); 

     
            $params = array(
				'tahunTagih' => $this->input->post('tahunTagih'),
				'bulanTagih' => $this->input->post('bulanTagih'),
				'pemakaian' => $this->input->post('pemakaian'),
				'status' => "Belum Dibayar",
				'pelanggan_id' => $this->input->post('pelanggan_id'),
                'id_admin' => $id_admin,
            );
            
            $tagihan_id = $this->Tagihan_model->add_tagihan($params);
            redirect('tagihan/index');
       
    }  

    /*
     * Editing a tagihan
     */
    function edit($id)
    {   
        // check if the tagihan exists before trying to edit it
        $data['tagihan'] = $this->Tagihan_model->get_tagihan($id);
        
        if(isset($data['tagihan']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tahunTagih' => $this->input->post('tahunTagih'),
					'bulanTagih' => $this->input->post('bulanTagih'),
					'pemakaian' => $this->input->post('pemakaian'),
					'status' => $this->input->post('status'),
					'pelanggan_id' => $this->input->post('pelanggan_id'),
                );

                $this->Tagihan_model->update_tagihan($id,$params);            
                redirect('tagihan/index');
            }
            else
            {
                $data['_view'] = 'tagihan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tagihan you are trying to edit does not exist.');
    } 

    /*
     * Deleting tagihan
     */
    function remove($id)
    {
        $tagihan = $this->Tagihan_model->get_tagihan($id);

        // check if the tagihan exists before trying to delete it
        if(isset($tagihan['id']))
        {
            $this->Tagihan_model->delete_tagihan($id);
            redirect('tagihan/index');
        }
        else
            show_error('The tagihan you are trying to delete does not exist.');
    }
    
}
