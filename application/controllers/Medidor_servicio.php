<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Medidor_servicio extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Medidor_servicio_model');
    } 

    /*
     * Listing of medidor_servicios
     */
    function index()
    {
        $data['medidor_servicios'] = $this->Medidor_servicio_model->get_all_medidor_servicios();
        
        $data['_view'] = 'medidor_servicio/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new medidor_servicio
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'servicio' => $this->input->post('servicio'),
				'id_med' => $this->input->post('id_med'),
				'monto_serv' => $this->input->post('monto_serv'),
				'fecha_serv' => $this->input->post('fecha_serv'),
				'hora_serv' => $this->input->post('hora_serv'),
            );
            
            $medidor_servicio_id = $this->Medidor_servicio_model->add_medidor_servicio($params);
            redirect('medidor_servicio/index');
        }
        else
        {            
            $data['_view'] = 'medidor_servicio/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a medidor_servicio
     */
    function edit($id_serv)
    {   
        // check if the medidor_servicio exists before trying to edit it
        $data['medidor_servicio'] = $this->Medidor_servicio_model->get_medidor_servicio($id_serv);
        
        if(isset($data['medidor_servicio']['id_serv']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'servicio' => $this->input->post('servicio'),
					'id_med' => $this->input->post('id_med'),
					'monto_serv' => $this->input->post('monto_serv'),
					'fecha_serv' => $this->input->post('fecha_serv'),
					'hora_serv' => $this->input->post('hora_serv'),
                );

                $this->Medidor_servicio_model->update_medidor_servicio($id_serv,$params);            
                redirect('medidor_servicio/index');
            }
            else
            {
                $data['_view'] = 'medidor_servicio/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The medidor_servicio you are trying to edit does not exist.');
    } 

    /*
     * Deleting medidor_servicio
     */
    function remove($id_serv)
    {
        $medidor_servicio = $this->Medidor_servicio_model->get_medidor_servicio($id_serv);

        // check if the medidor_servicio exists before trying to delete it
        if(isset($medidor_servicio['id_serv']))
        {
            $this->Medidor_servicio_model->delete_medidor_servicio($id_serv);
            redirect('medidor_servicio/index');
        }
        else
            show_error('The medidor_servicio you are trying to delete does not exist.');
    }
    
}
