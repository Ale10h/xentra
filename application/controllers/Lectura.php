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
    function lecturar()
    {
        $data['_view'] = 'lectura/lecturar';
        $this->load->view('layouts/main',$data);
    }
    /* busca asociados */
    function buscarasociado()
    {
        if ($this->input->is_ajax_request()){
            $parametro = $this->input->post('parametro');
            if ($parametro!=""){
                $this->load->model('Asociado_model');
                $datos = $this->Asociado_model->get_busqueda_asociado($parametro);
                echo json_encode($datos);
            }
            else echo json_encode(null);
        }
        else
        {                 
            show_404();
        }
    }
    /* busca asociados */
    function registrar_lectura()
    {
        if ($this->input->is_ajax_request()){
            $id_asoc      = $this->input->post('id_asoc');
          /*  $actual_lec   = $this->input->post('actual_lec');
            $consumo_lec  = $this->input->post('consumo_lec');
            $consumo_agua = $this->input->post('consumo_agua');
            $aportes      = $this->input->post('aportes');
            $multas       = $this->input->post('multas');*/
            $fecha_actual = date("Y-m-d");
            $hora_actual  = date("H:i:s");
            $fecha_all    = date("Y-m-d H:i:s");
            if($id_asoc!=""){
                $usuario_id = 1;
                $params = array(
                    'id_usu' => $usuario_id,
                    'id_asoc' => $this->input->post('id_asoc'),
                    'mes_lec' => "NOVIEMBRE",
                    'gestion_lec' => "2019",
                    'anterior_lec' => $this->input->post('anterior_lec'),
                    'actual_lec' => $this->input->post('actual_lec'),
                    'fechaant_lec' => $this->input->post('fechaant_lec'),
                    'consumo_lec' => $this->input->post('consumo_agua'),
                    'fecha_lec' => $fecha_actual,
                    'hora_lec' => $hora_actual,
                    'totalcons_lec' => $this->input->post('consumo_agua')+$this->input->post('aportes')+$this->input->post('multas'),
                    'fechahora_lec' => $fecha_all,
                    'monto_lec' => $this->input->post('monto_lec'),
                    'estado_lec' => "LECTURADO",
                    'tipo_asoc' => $this->input->post('tipo_asoc'),
                    'servicios_asoc' => "AGUA Y ALCANTARILLADO",
                    'totalmultas_' => $this->input->post('multas'),
                    /*'cantfact_lec' => "1",
                    'montofact_lec' => "32.17",*/
                );

                $lectura_id = $this->Lectura_model->add_lectura($params);
                /*$this->load->model('Asociado_model');
                $datos = $this->Asociado_model->get_busqueda_asociado($parametro);*/
                echo json_encode($lectura_id);
            }
            else echo json_encode(null);
        }
        else
        {                 
            show_404();
        }
    }
    function recibo_boucher($lectura_id)
    {
        $this->load->model('Empresa_model');
        
        $data['lectura'] = $this->Lectura_model->get_lecturasocio($lectura_id);
        $data['empresa'] = $this->Empresa_model->get_empresa(1);
        
        $data['_view'] = 'lectura/recibo_boucher';
        $this->load->view('layouts/main',$data);
    }
    /* busca asociados */
    function obtenertarifa()
    {
        if ($this->input->is_ajax_request()){
            $id_asoc     = $this->input->post('id_asoc');
            $consumo_lec = $this->input->post('consumo_lec');
            if ($id_asoc!=""){
                $this->load->model('Tarifa_model');
                $tipo_asoc = $this->Lectura_model->get_tipoasociado($id_asoc);
                $aporte = $this->Lectura_model->get_tipoaporte();
                $multa = $this->Lectura_model->get_multa($id_asoc);
                if($multa == "" || $multa == null){
                    $multa = 0;
                }
                $tarifa = $this->Tarifa_model->get_estatarifa($consumo_lec, $tipo_asoc);
                $datos[1] = $tarifa['costo_agua']+$tarifa['costo_alcant'];
                $datos[2] = $aporte;
                $datos[3] = $multa;
                $datos[4] = $tipo_asoc;
                
                echo json_encode($datos);
            }
            else echo json_encode(null);
        }
        else
        {                 
            show_404();
        }
    }
    
}
