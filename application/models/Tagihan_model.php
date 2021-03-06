<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tagihan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tagihan by id
     */
    function get_tagihan($id)
    {
        return $this->db->get_where('tagihan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tagihan
     */
    function get_all_tagihan()
    {
       
        return $this->db->where('status', "Belum Dibayar")
                        ->join('pelanggan', 'pelanggan.id_p = tagihan.pelanggan_id', 'left')
                        ->get('tagihan')->result_array();
    }
     function get_user_tagihan()
    {
        $user=$this->session->userdata('pid');
        $this->db->order_by('id', 'desc');
        return $this->db->where('status', "Belum Dibayar")
                        ->where('pelanggan_id', $user)
                        ->join('pelanggan', 'pelanggan.id_p = tagihan.pelanggan_id', 'left')
                        ->get('tagihan')->result_array();
    }
        

    /*
     * function to add new tagihan
     */
    function add_tagihan($params)
    {
        $this->db->insert('tagihan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tagihan
     */
    function update_tagihan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tagihan',$params);
    }
    
    /*
     * function to delete tagihan
     */
    function delete_tagihan($id)
    {
        return $this->db->delete('tagihan',array('id'=>$id));
    }
}
