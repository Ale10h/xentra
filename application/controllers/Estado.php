<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estado extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estado_model');
    } 

    /*
     * Listing of estados
     */
    function index()
    {
        $data['estados'] = $this->Estado_model->get_all_estados();
        
        $data['_view'] = 'estado/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new estado
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $estado_id = $this->Estado_model->add_estado($params);
            redirect('estado/index');
        }
        else
        {            
            $data['_view'] = 'estado/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a estado
     */
    function edit($estado)
    {   
        // check if the estado exists before trying to edit it
        $data['estado'] = $this->Estado_model->get_estado($estado);
        
        if(isset($data['estado']['estado']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Estado_model->update_estado($estado,$params);            
                redirect('estado/index');
            }
            else
            {
                $data['_view'] = 'estado/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The estado you are trying to edit does not exist.');
    } 

    /*
     * Deleting estado
     */
    function remove($estado)
    {
        $estado = $this->Estado_model->get_estado($estado);

        // check if the estado exists before trying to delete it
        if(isset($estado['estado']))
        {
            $this->Estado_model->delete_estado($estado);
            redirect('estado/index');
        }
        else
            show_error('The estado you are trying to delete does not exist.');
    }
    
}
