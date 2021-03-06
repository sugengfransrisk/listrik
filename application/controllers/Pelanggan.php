<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pelanggan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
    } 

    /*
     * Listing of pelanggan
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('pelanggan/index?');
        $config['total_rows'] = $this->Pelanggan_model->get_all_pelanggan_count();
        $this->pagination->initialize($config);

        $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan($params);
        
        $data['_view'] = 'pelanggan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pelanggan
     */
    function add()
    {   
        $data['tarif']=$this->Pelanggan_model->get_tarif();
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'kodeTarif' => $this->input->post('tarif'),
            );
            
            $pelanggan_id = $this->Pelanggan_model->add_pelanggan($params);
            redirect('pelanggan/index');
        }
        else
        {            
            $data['_view'] = 'pelanggan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pelanggan
     */
    function edit($id)
    {   
        // check if the pelanggan exists before trying to edit it
        $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan($id);
        
        if(isset($data['pelanggan']['id_p']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('alamat','Alamat','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'kodeTarif' => $this->input->post('kodeTarif'),
                );

                $this->Pelanggan_model->update_pelanggan($id,$params);            
                redirect('pelanggan/index');
            }
            else
            {
                $data['_view'] = 'pelanggan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pelanggan you are trying to edit does not exist.');
    } 

    /*
     * Deleting pelanggan
     */
    function remove($id)
    {
        $pelanggan = $this->Pelanggan_model->get_pelanggan($id);

        // check if the pelanggan exists before trying to delete it
        if(isset($pelanggan['id_p']))
        {
            $this->Pelanggan_model->delete_pelanggan($id);
            redirect('pelanggan/index');
        }
        else
            show_error('The pelanggan you are trying to delete does not exist.');
    }
    
}
