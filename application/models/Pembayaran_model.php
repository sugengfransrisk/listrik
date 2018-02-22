<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembayaran_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pembayaran by id
     */
    function get_pembayaran($id)
    {
        return $this->db->get_where('pembayaran',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all pembayaran
     */
    function get_all_pembayaran()
    {
        $this->db->order_by('tanggal_bayar', 'desc');
        return $this->db->join('admin', 'admin.id = pembayaran.id_admin', 'left')
                        ->get('pembayaran')->result_array();
    }

    function submit($params){

        $kueri=$this->db->insert('pembayaran', $params);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
        

    }
        
    /*
     * function to add new pembayaran
     */
    function add_pembayaran($params)
    {
        $this->db->insert('pembayaran',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pembayaran
     */
    function update_pembayaran($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('pembayaran',$params);
    }
    
    /*
     * function to delete pembayaran
     */
    function delete_pembayaran($id)
    {
        return $this->db->delete('pembayaran',array('id'=>$id));
    }
}
