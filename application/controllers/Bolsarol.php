<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bolsarol extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bolsarol_model');
    } 

    /*
     * Listing of bolsarol
     */
    function index()
    {
        $data['bolsarol'] = $this->Bolsarol_model->get_all_bolsarol();
        
        $data['_view'] = 'bolsarol/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new bolsarol
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'estado_rol' => $this->input->post('estado_rol'),
				'id_rol' => $this->input->post('id_rol'),
				'rol' => $this->input->post('rol'),
            );
            
            $bolsarol_id = $this->Bolsarol_model->add_bolsarol($params);
            redirect('bolsarol/index');
        }
        else
        {            
            $data['_view'] = 'bolsarol/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a bolsarol
     */
    function edit($)
    {   
        // check if the bolsarol exists before trying to edit it
        $data['bolsarol'] = $this->Bolsarol_model->get_bolsarol($);
        
        if(isset($data['bolsarol']['']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'estado_rol' => $this->input->post('estado_rol'),
					'id_rol' => $this->input->post('id_rol'),
					'rol' => $this->input->post('rol'),
                );

                $this->Bolsarol_model->update_bolsarol($,$params);            
                redirect('bolsarol/index');
            }
            else
            {
                $data['_view'] = 'bolsarol/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bolsarol you are trying to edit does not exist.');
    } 

    /*
     * Deleting bolsarol
     */
    function remove($)
    {
        $bolsarol = $this->Bolsarol_model->get_bolsarol($);

        // check if the bolsarol exists before trying to delete it
        if(isset($bolsarol['']))
        {
            $this->Bolsarol_model->delete_bolsarol($);
            redirect('bolsarol/index');
        }
        else
            show_error('The bolsarol you are trying to delete does not exist.');
    }
    
}
