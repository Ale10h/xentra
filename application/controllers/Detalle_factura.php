<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detalle_factura extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Detalle_factura_model');
    } 

    /*
     * Listing of detalle_factura
     */
    function index()
    {
        $data['detalle_factura'] = $this->Detalle_factura_model->get_all_detalle_factura();
        
        $data['_view'] = 'detalle_factura/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new detalle_factura
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_fact' => $this->input->post('id_fact'),
				'cant_detfact' => $this->input->post('cant_detfact'),
				'descip_detfact' => $this->input->post('descip_detfact'),
				'punit_detfact' => $this->input->post('punit_detfact'),
				'desc_detfact' => $this->input->post('desc_detfact'),
				'total_detfact' => $this->input->post('total_detfact'),
				'tipo_detfact' => $this->input->post('tipo_detfact'),
				'exento_detfact' => $this->input->post('exento_detfact'),
				'ice_detfact' => $this->input->post('ice_detfact'),
            );
            
            $detalle_factura_id = $this->Detalle_factura_model->add_detalle_factura($params);
            redirect('detalle_factura/index');
        }
        else
        {            
            $data['_view'] = 'detalle_factura/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a detalle_factura
     */
    function edit($id_detfact)
    {   
        // check if the detalle_factura exists before trying to edit it
        $data['detalle_factura'] = $this->Detalle_factura_model->get_detalle_factura($id_detfact);
        
        if(isset($data['detalle_factura']['id_detfact']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_fact' => $this->input->post('id_fact'),
					'cant_detfact' => $this->input->post('cant_detfact'),
					'descip_detfact' => $this->input->post('descip_detfact'),
					'punit_detfact' => $this->input->post('punit_detfact'),
					'desc_detfact' => $this->input->post('desc_detfact'),
					'total_detfact' => $this->input->post('total_detfact'),
					'tipo_detfact' => $this->input->post('tipo_detfact'),
					'exento_detfact' => $this->input->post('exento_detfact'),
					'ice_detfact' => $this->input->post('ice_detfact'),
                );

                $this->Detalle_factura_model->update_detalle_factura($id_detfact,$params);            
                redirect('detalle_factura/index');
            }
            else
            {
                $data['_view'] = 'detalle_factura/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The detalle_factura you are trying to edit does not exist.');
    } 

    /*
     * Deleting detalle_factura
     */
    function remove($id_detfact)
    {
        $detalle_factura = $this->Detalle_factura_model->get_detalle_factura($id_detfact);

        // check if the detalle_factura exists before trying to delete it
        if(isset($detalle_factura['id_detfact']))
        {
            $this->Detalle_factura_model->delete_detalle_factura($id_detfact);
            redirect('detalle_factura/index');
        }
        else
            show_error('The detalle_factura you are trying to delete does not exist.');
    }
    
}
