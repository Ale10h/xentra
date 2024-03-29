<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dosificacion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dosificacion by id_dosif
     */
    function get_dosificacion($id_dosif)
    {
        return $this->db->get_where('dosificacion',array('id_dosif'=>$id_dosif))->row_array();
    }
        
    /*
     * Get all dosificacion
     */
    function get_all_dosificacion()
    {
        $this->db->order_by('id_dosif', 'desc');
        return $this->db->get('dosificacion')->result_array();
    }
        
    /*
     * function to add new dosificacion
     */
    function add_dosificacion($params)
    {
        $this->db->insert('dosificacion',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dosificacion
     */
    function update_dosificacion($id_dosif,$params)
    {
        $this->db->where('id_dosif',$id_dosif);
        return $this->db->update('dosificacion',$params);
    }
    
    /*
     * function to delete dosificacion
     */
    function delete_dosificacion($id_dosif)
    {
        return $this->db->delete('dosificacion',array('id_dosif'=>$id_dosif));
    }
}
