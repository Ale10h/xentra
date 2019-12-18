<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categorium extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categorium_model');
    } 

    /*
     * Listing of categoria
     */
    function index()
    {
        $data['categoria'] = $this->Categorium_model->get_all_categoria();
        
        $data['_view'] = 'categorium/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new categorium
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nom_cating' => $this->input->post('nom_cating'),
				'id_ging' => $this->input->post('id_ging'),
            );
            
            $categorium_id = $this->Categorium_model->add_categorium($params);
            redirect('categorium/index');
        }
        else
        {            
            $data['_view'] = 'categorium/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a categorium
     */
    function edit($id_cating)
    {   
        // check if the categorium exists before trying to edit it
        $data['categorium'] = $this->Categorium_model->get_categorium($id_cating);
        
        if(isset($data['categorium']['id_cating']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nom_cating' => $this->input->post('nom_cating'),
					'id_ging' => $this->input->post('id_ging'),
                );

                $this->Categorium_model->update_categorium($id_cating,$params);            
                redirect('categorium/index');
            }
            else
            {
                $data['_view'] = 'categorium/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The categorium you are trying to edit does not exist.');
    } 

    /*
     * Deleting categorium
     */
    function remove($id_cating)
    {
        $categorium = $this->Categorium_model->get_categorium($id_cating);

        // check if the categorium exists before trying to delete it
        if(isset($categorium['id_cating']))
        {
            $this->Categorium_model->delete_categorium($id_cating);
            redirect('categorium/index');
        }
        else
            show_error('The categorium you are trying to delete does not exist.');
    }
    
}
