$(document).on("ready",inicio);
function inicio(){
       //tablaresultadoscliente(1);
}
/*
 * Funcion que buscara productos en la tabla productos
 */
function buscar_asociado(e) {
  tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13){
        tablaresultadosasociado(2);
    }
}
//Tabla resultados de la busqueda en el index de cliente
function tablaresultadosasociado(limite)
{
    var controlador = "";
    var parametro = "";
    var limit = limite;
    var base_url = document.getElementById('base_url').value;
    
    if(limit == 1){
        controlador = base_url+'cliente/buscarclienteslimit/';
    }else if(limit == 3){
        controlador = base_url+'cliente/buscarclientesall/';
    }else{
        controlador = base_url+'lectura/buscarasociado/';
        parametro = document.getElementById('filtrar').value;
        
    }        
    document.getElementById('loader').style.display = 'block'; //muestra el bloque del loader
    

    $.ajax({url: controlador,
           type:"POST",
           data:{parametro:parametro},
           success:function(respuesta){
               
                //$("#encontrados").val("- 0 -");
               var registros =  JSON.parse(respuesta);
                
               if (registros != null){
                    
                    var n = registros.length; //tamaño del arreglo de la consulta
                    //$("#encontrados").html("Registros Encontrados: "+n+" ");
                    html = "";
                    
                    for (var i = 0; i < n ; i++){
                        html += "<tr>";
                        
                        html += "<td>"+(i+1)+"</td>";
                        html += "<td>";
                        html += registros[i]["nombres_asoc"];
                        html += "</td>";
                        html += "<td>";
                        html += registros[i]["apellidos_asoc"];
                        html += "</td>";
                        html += "<td>";
                        html += registros[i]["direccion_asoc"];
                        html += "</td>";
                        html += "<td>";
                        html += "<a class='btn btn-success btn-xs' data-toggle='modal' data-target='#modalecturar"+registros[i]["id_asoc"]+"' title='Lecturar'><span class='fa fa-file-text'></span></a>";
                        
                        html += "<!------------------------ INICIO modal para confirmar eliminación ------------------->";
                        html += "<div class='modal fade' id='modalecturar"+registros[i]["id_asoc"]+"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel"+i+"'>";
                        html += "<div style='white-space: normal' class='modal-dialog' role='document'>";
                        html += "<br><br>";
                        html += "<div class='modal-content'>";
                        html += "<div class='modal-header'>";
                        html += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>x</span></button>";
                        html += "<div><span class='text-bold'>LECTURAR DE:</span><br>";
                        html += "<span style='display: inherit; text-align: center !important'>"+registros[i]['nombres_asoc']+" "+registros[i]['apellidos_asoc']+"</span>";
                        html += "</div>";
                        html += "</div>";
                        html += "<div class='modal-body'>";
                        html += "<!------------------------------------------------------------------->";
                        html += "<div class='col-md-12'>";
                        html += "<div class='input-group' style='width: 100%'>";
                        html += "<span class='input-group-addon' style='width: 20%'>Lect. Anterior</span>";
                        html += "<div style='width: 70%' class='form-control' id='anterior_lec"+registros[i]['id_asoc']+"'>"+registros[i]['ultima_lectura']+"</div>";
                        //html += "<input style='width: 70%' id='filtrar' type='text' class='form-control' onkeypress='buscar_asociado(event)' autocomplete='off' >";
                        html += "</div>";
                        html += "</div>";
                        html += "<div class='col-md-12'>";
                        html += "<div class='input-group' style='width: 100%'>";
                        html += "<span class='input-group-addon' style='width: 20%'>Lect. Actual&nbsp;&nbsp;&nbsp;</span>";
                        html += "<input style='width: 70%' id='actual_lec"+registros[i]['id_asoc']+"' type='text' class='form-control' onkeypress='calcular_consumo(event, "+registros[i]['id_asoc']+")' autocomplete='off' >";
                        html += "</div>";
                        html += "</div>";
                        html += "<div class='col-md-12'>";
                        html += "<div class='input-group' style='width: 100%'>";
                        html += "<span class='input-group-addon' style='width: 20%'>Consumo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
                        html += "<div style='width: 70%' class='form-control' id='consumo_lec"+registros[i]['id_asoc']+"'></div>";
                        //html += "<input style='width: 70%' id='filtrar' type='text' class='form-control' onkeypress='buscar_asociado(event)' autocomplete='off' >";
                        html += "</div>";
                        html += "</div>";
                        html += "<div class='row' id='eldetalle"+registros[i]['id_asoc']+"'>";
                        html += "</div>";
                        html += "<input type='hidden' value='"+registros[i]['fecha_anterior']+"' id='fecha_anterior"+registros[i]['id_asoc']+"' >";
                        html += "<!------------------------------------------------------------------->";
                        html += "</div>";
                        html += "<div class='modal-footer' style='text-align: center !important'>";
                        html += "<a onclick='registrar_lectura("+registros[i]['id_asoc']+")' class='btn btn-success'><span class='fa fa-check'></span> Registrar </a>";
                        html += "<a href='#' class='btn btn-danger' data-dismiss='modal'><span class='fa fa-times'></span> Cancelar </a>";
                        html += "</div>";
                        html += "</div>";
                        html += "</div>";
                        html += "</div>";
                        html += "<!------------------------ FIN modal para confirmar eliminación ------------------->";
                        html += "</td>";
                        
                        html += "</tr>";

                   }

                   $("#tablaresultados").html(html);
                   document.getElementById('loader').style.display = 'none';
            }
         document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader
        },
        error:function(respuesta){
           // alert("Algo salio mal...!!!");
           html = "";
           $("#tablaresultados").html(html);
        },
        complete: function (jqXHR, textStatus) {
            document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader 
            //tabla_inventario();
        }
        
    });   

}

function calcular_consumo(e, id_asoc) {
  tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13){
        resultado_consumo(id_asoc);
    }
}

function resultado_consumo(id_asoc){
    var uno, dos, tres, operacion;
    uno = $('#anterior_lec'+id_asoc);
    dos = $('#actual_lec'+id_asoc);
    tres = $('#consumo_lec'+id_asoc);
      
    operacion = parseFloat(dos.val()) - parseFloat(uno.html());
    tres.html(operacion);
    $('#consumo_lec'+id_asoc).html(operacion);
    resultado_detalle(id_asoc, operacion);
}

//Tabla resultados de la busqueda en el index de cliente
function resultado_detalle(id_asoc, operacion)
{
    var base_url = document.getElementById('base_url').value;
    var consumo_lec = operacion;
    var controlador = base_url+'lectura/obtenertarifa/';
    $.ajax({url: controlador,
           type:"POST",
           data:{id_asoc:id_asoc, consumo_lec:consumo_lec},
           success:function(respuesta){
               
                //$("#encontrados").val("- 0 -");
               var registros =  JSON.parse(respuesta);
                
    
                    html = "";
                    html += "<div class='col-md-12'>";
                    html += "<div class='box'>";
                    html += "<div class='box-body table-responsive'>";
                    html += "<table class='table table-striped'>";
                    html += "<tr>";
                    html += "<th class='text-center'>#</th>";
                    html += "<th class='text-center'>DETALLE</th>";
                    html += "<th class='text-center'>MONTO</th>";
                    html += "</tr>";
                    
                    html += "<tr>";
                    html += "<td>"+1+"</td>";
                    html += "<td class='text-right' style='align-items: center'>Consumo Agua</td>";
                    html += "<td>";
                    html += "<input id='consumo_agua"+id_asoc+"' type='text' value='"+registros[1]+"' class='form-control' autocomplete='off' >";
                    html += "</td>";
                    html += "</tr>";
                    html += "<tr>";
                    html += "<td>"+2+"</td>";
                    html += "<td class='text-right' style='align-items: center'>Aportes</td>";
                    html += "<td>";
                    html += "<input id='aportes"+id_asoc+"' type='text' value='"+registros[2]+"' class='form-control' autocomplete='off' >";
                    html += "</td>";
                    html += "</tr>";
                    html += "<tr>";
                    html += "<td>"+3+"</td>";
                    html += "<td class='text-right' style='vertical-align: central'>Multas</td>";
                    html += "<td>";
                    html += "<input id='multas"+id_asoc+"' type='text' value='"+registros[3]+"' class='form-control' autocomplete='off' >";
                    html += "<input id='tipo_asoc"+id_asoc+"' type='hidden' value='"+registros[4]+"'>";
                    html += "</td>";
                    html += "</tr>";
                    
                    
                    html += "</table>";
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";
                    
                   $("#eldetalle"+id_asoc).html(html);
        },
        error:function(respuesta){
           // alert("Algo salio mal...!!!");
           html = "";
           //$("#tablaresultados").html(html);
        },
        complete: function (jqXHR, textStatus) {
            //document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader 
            //tabla_inventario();
        }
        
    });  
}

/* registra la lectura */
function registrar_lectura(id_asoc)
{
    var base_url = document.getElementById('base_url').value;
    var controlador = base_url+'lectura/registrar_lectura';
    
    var anterior_lec   = document.getElementById('anterior_lec'+id_asoc).html;
    var fechaant_lec   = document.getElementById('fecha_anterior'+id_asoc).value;
    var actual_lec   = document.getElementById('actual_lec'+id_asoc).value;
    var consumo_lec  = document.getElementById('consumo_lec'+id_asoc).value;
    var consumo_agua = document.getElementById('consumo_agua'+id_asoc).value;
    var aportes      = document.getElementById('aportes'+id_asoc).value;
    var multas       = document.getElementById('multas'+id_asoc).value;
    
    //document.getElementById('loader').style.display = 'block';
    $.ajax({url: controlador,
           type:"POST",
           data:{id_asoc:id_asoc, anterior_lec:anterior_lec, fechaant_lec:fechaant_lec,
                 actual_lec:actual_lec, consumo_lec:consumo_lec,
                 consumo_agua:consumo_agua, aportes:aportes, multas:multas},
           success:function(respuesta){
               
                //$("#encontrados").val("- 0 -");
               var registros =  JSON.parse(respuesta);
                
                if (registros != null){
                    window.open(base_url+'lectura/recibo_boucher/'+registros, '_blank');
                    //window.opener.location.reload();
                    location.reload();
                }
        },
        error:function(respuesta){
           // alert("Algo salio mal...!!!");
           html = "";
           //$("#tablaresultados").html(html);
        },
        complete: function (jqXHR, textStatus) {
            //document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader 
            //tabla_inventario();
        }
        
    });   

}
