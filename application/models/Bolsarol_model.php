<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bolsarol_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bolsarol by 
     */
    function get_bolsarol($)
    {
        return $this->db->get_where('bolsarol',array(''=>$))->row_array();
    }
        
    /*
     * Get all bolsarol
     */
    function get_all_bolsarol()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('bolsarol')->result_array();
    }
        
    /*
     * function to add new bolsarol
     */
    function add_bolsarol($params)
    {
        $this->db->insert('bolsarol',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bolsarol
     */
    function update_bolsarol($,$params)
    {
        $this->db->where('',$);
        return $this->db->update('bolsarol',$params);
    }
    
    /*
     * function to delete bolsarol
     */
    function delete_bolsarol($)
    {
        return $this->db->delete('bolsarol',array(''=>$));
    }
}
