<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Parametro extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Parametro_model');
    } 

    /*
     * Listing of parametros
     */
    function index()
    {
        $data['parametros'] = $this->Parametro_model->get_all_parametros();
        
        $data['_view'] = 'parametro/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new parametro
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'dias_param' => $this->input->post('dias_param'),
				'monto_param' => $this->input->post('monto_param'),
				'estado' => $this->input->post('estado'),
				'detalle_param' => $this->input->post('detalle_param'),
				'descip_param' => $this->input->post('descip_param'),
            );
            
            $parametro_id = $this->Parametro_model->add_parametro($params);
            redirect('parametro/index');
        }
        else
        {            
            $data['_view'] = 'parametro/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a parametro
     */
    function edit($id_param)
    {   
        // check if the parametro exists before trying to edit it
        $data['parametro'] = $this->Parametro_model->get_parametro($id_param);
        
        if(isset($data['parametro']['id_param']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'dias_param' => $this->input->post('dias_param'),
					'monto_param' => $this->input->post('monto_param'),
					'estado' => $this->input->post('estado'),
					'detalle_param' => $this->input->post('detalle_param'),
					'descip_param' => $this->input->post('descip_param'),
                );

                $this->Parametro_model->update_parametro($id_param,$params);            
                redirect('parametro/index');
            }
            else
            {
                $data['_view'] = 'parametro/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The parametro you are trying to edit does not exist.');
    } 

    /*
     * Deleting parametro
     */
    function remove($id_param)
    {
        $parametro = $this->Parametro_model->get_parametro($id_param);

        // check if the parametro exists before trying to delete it
        if(isset($parametro['id_param']))
        {
            $this->Parametro_model->delete_parametro($id_param);
            redirect('parametro/index');
        }
        else
            show_error('The parametro you are trying to delete does not exist.');
    }
    
}
