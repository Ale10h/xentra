<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ingreso extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ingreso_model');
    } 

    /*
     * Listing of ingreso
     */
    function index()
    {
        $data['ingreso'] = $this->Ingreso_model->get_all_ingreso();
        
        $data['_view'] = 'ingreso/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ingreso
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_usu' => $this->input->post('id_usu'),
				'detalle_ing' => $this->input->post('detalle_ing'),
				'nombre_ing' => $this->input->post('nombre_ing'),
				'fechahora_ing' => $this->input->post('fechahora_ing'),
				'monto_ing' => $this->input->post('monto_ing'),
				'descripcion_ing' => $this->input->post('descripcion_ing'),
				'estado_ing' => $this->input->post('estado_ing'),
				'tipo_ing' => $this->input->post('tipo_ing'),
				'numrec_ing' => $this->input->post('numrec_ing'),
				'numrec_egr' => $this->input->post('numrec_egr'),
            );
            
            $ingreso_id = $this->Ingreso_model->add_ingreso($params);
            redirect('ingreso/index');
        }
        else
        {            
            $data['_view'] = 'ingreso/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ingreso
     */
    function edit($id_ing)
    {   
        // check if the ingreso exists before trying to edit it
        $data['ingreso'] = $this->Ingreso_model->get_ingreso($id_ing);
        
        if(isset($data['ingreso']['id_ing']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_usu' => $this->input->post('id_usu'),
					'detalle_ing' => $this->input->post('detalle_ing'),
					'nombre_ing' => $this->input->post('nombre_ing'),
					'fechahora_ing' => $this->input->post('fechahora_ing'),
					'monto_ing' => $this->input->post('monto_ing'),
					'descripcion_ing' => $this->input->post('descripcion_ing'),
					'estado_ing' => $this->input->post('estado_ing'),
					'tipo_ing' => $this->input->post('tipo_ing'),
					'numrec_ing' => $this->input->post('numrec_ing'),
					'numrec_egr' => $this->input->post('numrec_egr'),
                );

                $this->Ingreso_model->update_ingreso($id_ing,$params);            
                redirect('ingreso/index');
            }
            else
            {
                $data['_view'] = 'ingreso/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ingreso you are trying to edit does not exist.');
    } 

    /*
     * Deleting ingreso
     */
    function remove($id_ing)
    {
        $ingreso = $this->Ingreso_model->get_ingreso($id_ing);

        // check if the ingreso exists before trying to delete it
        if(isset($ingreso['id_ing']))
        {
            $this->Ingreso_model->delete_ingreso($id_ing);
            redirect('ingreso/index');
        }
        else
            show_error('The ingreso you are trying to delete does not exist.');
    }
    
}
