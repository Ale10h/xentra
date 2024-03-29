<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Rol_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get rol_usuario by 
     */
    function get_rol_usuario($)
    {
        return $this->db->get_where('rol_usuario',array(''=>$))->row_array();
    }
        
    /*
     * Get all rol_usuario
     */
    function get_all_rol_usuario()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('rol_usuario')->result_array();
    }
        
    /*
     * function to add new rol_usuario
     */
    function add_rol_usuario($params)
    {
        $this->db->insert('rol_usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update rol_usuario
     */
    function update_rol_usuario($,$params)
    {
        $this->db->where('',$);
        return $this->db->update('rol_usuario',$params);
    }
    
    /*
     * function to delete rol_usuario
     */
    function delete_rol_usuario($)
    {
        return $this->db->delete('rol_usuario',array(''=>$));
    }
}
