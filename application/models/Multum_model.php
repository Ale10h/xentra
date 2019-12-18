<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Multum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get multum by id_multa
     */
    function get_multum($id_multa)
    {
        return $this->db->get_where('multa',array('id_multa'=>$id_multa))->row_array();
    }
        
    /*
     * Get all multa
     */
    function get_all_multa()
    {
        $this->db->order_by('id_multa', 'desc');
        return $this->db->get('multa')->result_array();
    }
        
    /*
     * function to add new multum
     */
    function add_multum($params)
    {
        $this->db->insert('multa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update multum
     */
    function update_multum($id_multa,$params)
    {
        $this->db->where('id_multa',$id_multa);
        return $this->db->update('multa',$params);
    }
    
    /*
     * function to delete multum
     */
    function delete_multum($id_multa)
    {
        return $this->db->delete('multa',array('id_multa'=>$id_multa));
    }
}