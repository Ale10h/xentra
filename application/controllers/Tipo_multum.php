<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_multum extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tipo_multum_model');
    } 

    /*
     * Listing of tipo_multa
     */
    function index()
    {
        $data['tipo_multa'] = $this->Tipo_multum_model->get_all_tipo_multa();
        
        $data['_view'] = 'tipo_multum/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tipo_multum
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $tipo_multum_id = $this->Tipo_multum_model->add_tipo_multum($params);
            redirect('tipo_multum/index');
        }
        else
        {            
            $data['_view'] = 'tipo_multum/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tipo_multum
     */
    function edit($tipo)
    {   
        // check if the tipo_multum exists before trying to edit it
        $data['tipo_multum'] = $this->Tipo_multum_model->get_tipo_multum($tipo);
        
        if(isset($data['tipo_multum']['tipo']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Tipo_multum_model->update_tipo_multum($tipo,$params);            
                redirect('tipo_multum/index');
            }
            else
            {
                $data['_view'] = 'tipo_multum/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tipo_multum you are trying to edit does not exist.');
    } 

    /*
     * Deleting tipo_multum
     */
    function remove($tipo)
    {
        $tipo_multum = $this->Tipo_multum_model->get_tipo_multum($tipo);

        // check if the tipo_multum exists before trying to delete it
        if(isset($tipo_multum['tipo']))
        {
            $this->Tipo_multum_model->delete_tipo_multum($tipo);
            redirect('tipo_multum/index');
        }
        else
            show_error('The tipo_multum you are trying to delete does not exist.');
    }
    
}