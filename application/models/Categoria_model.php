<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get categoria by categoria
     */
    function get_categoria($categoria)
    {
        return $this->db->get_where('categorias',array('categoria'=>$categoria))->row_array();
    }
        
    /*
     * Get all categorias
     */
    function get_all_categorias()
    {
        $this->db->order_by('categoria', 'desc');
        return $this->db->get('categorias')->result_array();
    }
        
    /*
     * function to add new categoria
     */
    function add_categoria($params)
    {
        $this->db->insert('categorias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update categoria
     */
    function update_categoria($categoria,$params)
    {
        $this->db->where('categoria',$categoria);
        return $this->db->update('categorias',$params);
    }
    
    /*
     * function to delete categoria
     */
    function delete_categoria($categoria)
    {
        return $this->db->delete('categorias',array('categoria'=>$categoria));
    }
}
