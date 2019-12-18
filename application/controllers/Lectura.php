<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lectura extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lectura_model');
    } 

    /*
     * Listing of lectura
     */
    function index()
    {
        $data['lectura'] = $this->Lectura_model->get_all_lectura();
        
        $data['_view'] = 'lectura/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new lectura
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_usu' => $this->input->post('id_usu'),
				'id_asoc' => $this->input->post('id_asoc'),
				'mes_lec' => $this->input->post('mes_lec'),
				'gestion_lec' => $this->input->post('gestion_lec'),
				'anterior_lec' => $this->input->post('anterior_lec'),
				'actual_lec' => $this->input->post('actual_lec'),
				'fechaant_lec' => $this->input->post('fechaant_lec'),
				'consumo_lec' => $this->input->post('consumo_lec'),
				'fecha_lec' => $this->input->post('fecha_lec'),
				'hora_lec' => $this->input->post('hora_lec'),
				'totalcons_lec' => $this->input->post('totalcons_lec'),
				'fechahora_lec' => $this->input->post('fechahora_lec'),
				'monto_lec' => $this->input->post('monto_lec'),
				'estado_lec' => $this->input->post('estado_lec'),
				'tipo_asoc' => $this->input->post('tipo_asoc'),
				'servicios_asoc' => $this->input->post('servicios_asoc'),
				'totalmultas_' => $this->input->post('totalmultas_'),
				'cantfact_lec' => $this->input->post('cantfact_lec'),
				'montofact_lec' => $this->input->post('montofact_lec'),
            );
            
            $lectura_id = $this->Lectura_model->add_lectura($params);
            redirect('lectura/index');
        }
        else
        {            
            $data['_view'] = 'lectura/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a lectura
     */
    function edit($id_lec)
    {   
        // check if the lectura exists before trying to edit it
        $data['lectura'] = $this->Lectura_model->get_lectura($id_lec);
        
        if(isset($data['lectura']['id_lec']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_usu' => $this->input->post('id_usu'),
					'id_asoc' => $this->input->post('id_asoc'),
					'mes_lec' => $this->input->post('mes_lec'),
					'gestion_lec' => $this->input->post('gestion_lec'),
					'anterior_lec' => $this->input->post('anterior_lec'),
					'actual_lec' => $this->input->post('actual_lec'),
					'fechaant_lec' => $this->input->post('fechaant_lec'),
					'consumo_lec' => $this->input->post('consumo_lec'),
					'fecha_lec' => $this->input->post('fecha_lec'),
					'hora_lec' => $this->input->post('hora_lec'),
					'totalcons_lec' => $this->input->post('totalcons_lec'),
					'fechahora_lec' => $this->input->post('fechahora_lec'),
					'monto_lec' => $this->input->post('monto_lec'),
					'estado_lec' => $this->input->post('estado_lec'),
					'tipo_asoc' => $this->input->post('tipo_asoc'),
					'servicios_asoc' => $this->input->post('servicios_asoc'),
					'totalmultas_' => $this->input->post('totalmultas_'),
					'cantfact_lec' => $this->input->post('cantfact_lec'),
					'montofact_lec' => $this->input->post('montofact_lec'),
                );

                $this->Lectura_model->update_lectura($id_lec,$params);            
                redirect('lectura/index');
            }
            else
            {
                $data['_view'] = 'lectura/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The lectura you are trying to edit does not exist.');
    } 

    /*
     * Deleting lectura
     */
    function remove($id_lec)
    {
        $lectura = $this->Lectura_model->get_lectura($id_lec);

        // check if the lectura exists before trying to delete it
        if(isset($lectura['id_lec']))
        {
            $this->Lectura_model->delete_lectura($id_lec);
            redirect('lectura/index');
        }
        else
            show_error('The lectura you are trying to delete does not exist.');
    }
    
}