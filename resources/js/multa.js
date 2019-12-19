function validar(e,opcion) {

  tecla = (document.all) ? e.keyCode : e.which;

  

    if (tecla==13){ 

    

        if (opcion==1){             

            buscar_clientes();            

        }


        

    } 



    

}



//Selecciona los datos del nit

function seleccionar(opcion) {
    
        if (opcion==1){             
            document.getElementById('buscador').select();
        }
        
        if (opcion==2){
            document.getElementById('buscador').select();
        }
        
     
}



// esta funcion busca la cliente mediante su nit e inserta los datos 

// en cada input corresponiente si es que existe

// sino existe.. deja abierta la posibilidad de ingresar datos de nuevos de clientes

function buscar_clientes()
{
    var base_url = document.getElementById('base_url').value;
    var controlador = base_url+"multum/buscar_asociado";
    var parametro = document.getElementById('buscador').value;
    
        $.ajax({url: controlador,
            type:"POST",
            data:{parametro:parametro},
            success:function(respuesta){
                
                resultado = JSON.parse(respuesta);
                fin = resultado.length;
                html = "";
                
                for(var i = 0; i<fin; i++)
                {
                    html += "<option value='"+resultado[i]["id_asoc"]+"' label='"+resultado[i]["apellidos_asoc"]+"'>"+resultado[i]["nombres_asoc"]+"</option>";
                    
                }    
                $("#listaclientes").html(html);

            },
            error: function(respuesta){
            }
        });
}
function seleccionar_cliente(){
    var id_asoc = document.getElementById('buscador').value;
    var base_url = document.getElementById('base_url').value;
    var controlador = base_url+"multum/seleccionar_cliente/"+id_asoc;
    //alert(controlador);
        $.ajax({url: controlador,
            type:"POST",
            data:{},
            success:function(respuesta){
                
                resultado = JSON.parse(respuesta);
                tam = resultado.length;
                
//                alert(resultado[0]["cliente_nit"]);
                
                if (tam>=1){
                    $("#id_asoc").val(resultado[0]["id_asoc"]);
                    $("#nombre_asoc").val(resultado[0]["apellidos_asoc"]);  
                    document.getElementById('motivo_multa').focus();
                }
       

            },
            error: function(respuesta){
            }
        });    
    
}

