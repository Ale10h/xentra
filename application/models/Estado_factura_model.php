<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estado_factura_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get estado_factura by estado_fact
     */
    function get_estado_factura($estado_fact)
    {
        return $this->db->get_where('estado_factura',array('estado_fact'=>$estado_fact))->row_array();
    }
        
    /*
     * Get all estado_factura
     */
    function get_all_estado_factura()
    {
        $this->db->order_by('estado_fact', 'desc');
        return $this->db->get('estado_factura')->result_array();
    }
        
    /*
     * function to add new estado_factura
     */
    function add_estado_factura($params)
    {
        $this->db->insert('estado_factura',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update estado_factura
     */
    function update_estado_factura($estado_fact,$params)
    {
        $this->db->where('estado_fact',$estado_fact);
        return $this->db->update('estado_factura',$params);
    }
    
    /*
     * function to delete estado_factura
     */
    function delete_estado_factura($estado_fact)
    {
        return $this->db->delete('estado_factura',array('estado_fact'=>$estado_fact));
    }
}
