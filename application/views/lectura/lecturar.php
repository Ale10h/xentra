<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<!----------------------------- script buscador --------------------------------------->
<script src="<?php echo base_url('resources/js/lectura_lecturar.js'); ?>" type="text/javascript"></script>
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
    <span class="text-bold">LECTURAR ASOCIADOS</span>
    <!--<div class="box-tools">
        <a href="<?php //echo site_url('lectura/add'); ?>" class="btn btn-success btn-sm">Add</a>
    </div>-->
</div>
<div class="col-md-12">
     <div class="col-md- 6">
        <div class="input-group">
            <span class="input-group-addon">Buscar</span>           
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese el nombre, codigo, ci, nit" onkeypress="buscar_asociado(event)" autocomplete="off" >
            <div style="border-color: #008d4c; background: #008D4C !important; color: white" class="btn btn-success input-group-addon" onclick="tablaresultadosasociado(2)"><span class="fa fa-search"></span></div>
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
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DIRECCIÓN</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar" id="tablaresultados"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
