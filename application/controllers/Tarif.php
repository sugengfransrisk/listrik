<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tarif extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tarif_model');
    } 

    /*
     * Listing of tarif
     */
    function index()
    {
        $data['tarif'] = $this->Tarif_model->get_all_tarif();
        
        $data['_view'] = 'tarif/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tarif
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kode' => $this->input->post('kode'),
				'daya' => $this->input->post('daya'),
				'tarif_perKWH' => $this->input->post('tarif_perKWH'),
				'beban' => $this->input->post('beban'),
            );
            
            $tarif_id = $this->Tarif_model->add_tarif($params);
            redirect('tarif/index');
        }
        else
        {            
            $data['_view'] = 'tarif/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tarif
     */
    function edit($id)
    {   
        // check if the tarif exists before trying to edit it
        $data['tarif'] = $this->Tarif_model->get_tarif($id);
        
        if(isset($data['tarif']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kode' => $this->input->post('kode'),
					'daya' => $this->input->post('daya'),
					'tarif_perKWH' => $this->input->post('tarif_perKWH'),
					'beban' => $this->input->post('beban'),
                );

                $this->Tarif_model->update_tarif($id,$params);            
                redirect('tarif/index');
            }
            else
            {
                $data['_view'] = 'tarif/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tarif you are trying to edit does not exist.');
    } 

    /*
     * Deleting tarif
     */
    function remove($id)
    {
        $tarif = $this->Tarif_model->get_tarif($id);

        // check if the tarif exists before trying to delete it
        if(isset($tarif['id']))
        {
            $this->Tarif_model->delete_tarif($id);
            redirect('tarif/index');
        }
        else
            show_error('The tarif you are trying to delete does not exist.');
    }
    
}
