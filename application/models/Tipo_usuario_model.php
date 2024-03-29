<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo_usuario by tipo_usuario
     */
    function get_tipo_usuario($tipo_usuario)
    {
        return $this->db->get_where('tipo_usuario',array('tipo_usuario'=>$tipo_usuario))->row_array();
    }
        
    /*
     * Get all tipo_usuario
     */
    function get_all_tipo_usuario()
    {
        $this->db->order_by('tipo_usuario', 'desc');
        return $this->db->get('tipo_usuario')->result_array();
    }
        
    /*
     * function to add new tipo_usuario
     */
    function add_tipo_usuario($params)
    {
        $this->db->insert('tipo_usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo_usuario
     */
    function update_tipo_usuario($tipo_usuario,$params)
    {
        $this->db->where('tipo_usuario',$tipo_usuario);
        return $this->db->update('tipo_usuario',$params);
    }
    
    /*
     * function to delete tipo_usuario
     */
    function delete_tipo_usuario($tipo_usuario)
    {
        return $this->db->delete('tipo_usuario',array('tipo_usuario'=>$tipo_usuario));
    }
}
