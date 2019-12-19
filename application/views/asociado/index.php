<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">
<!----------------------------- script buscador --------------------------------------->
<script src="<?php echo base_url('resources/js/funcion_asociado.js'); ?>" type="text/javascript"></script>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
</script>   
<!----------------------------- fin script buscador --------------------------------------->
<div class="box-header">
    <h3 class="box-title">Lista de Asociados</h3>
    <div class="box-tools">
        <a href="<?php echo site_url('asociado/add'); ?>" class="btn btn-success btn-sm">+ Nuevo</a> 
    </div>
</div>
<div class="col-md-12">
     <div class="col-md- 6">
        <div class="input-group">
            <span class="input-group-addon">Buscar</span>           
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese el nombre, codigo, ci, nit" onkeypress="buscar_asociado(event)" autocomplete="off" >
            <div style="border-color: #008d4c; background: #008D4C !important; color: white" class="btn btn-success input-group-addon" onclick="tablaresultados_asociado(2)"><span class="fa fa-search"></span></div>
        </div>
    </div>
</div>
<div id='loader'  style='display:none; text-align: center'>
    <img src="<?php echo base_url("resources/images/loader.gif"); ?>"  >
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            
            <div class="box-body table-responsive">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>ASOCIADO</th>
                        <th>CODIGO</th>
                        <th>C.I.</th>
                        <th>DIRECCIÓN</th>
                        <th>NIT</th>
                        <th>RAZON</th>
                        <th>MEDIDOR</th>
                        <th>SERVICIOS</th>
                        <th>CATEGORIA</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar" id="tablaresultados"></tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
