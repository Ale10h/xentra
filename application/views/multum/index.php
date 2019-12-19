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
<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">
<div class="row">

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Multas</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('multum/add'); ?>" class="btn btn-success btn-sm">Registrar</a> 
                </div>
            </div>
            <div class="col-md-12 no-print">
            <div class="input-group">
                      <span class="input-group-addon"> 
                        Buscar 
                      </span>           
                <input id="filtrar" type="text" class="form-control" placeholder="Ingrese el nombre del asociado"  >
            </div></div>
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
						<th>N° </th>
						<th>Motivo </th>
						<th>Detalle </th>
						<th>Monto </th>
						<th>Fecha </th>
						<th>Mes </th>
						<th>Gestion </th>
						<th>Tipo </th>
						<th>Nombre Asociado</th>
						<th>Estado </th>
						<th>Usuario</th>
						<th>Exento </th>
						<th>Ice </th>
						<th></th>

                    </tr>
					<tbody class="buscar">
                    <?php $cont=0; foreach($multa as $m){ 
                    	$cont=$cont+1;  ?>
                    <tr>
						<td><?php echo $cont; ?></td>
						<td><?php echo $m['motivo_multa']; ?></td>
						<td><?php echo $m['detalle_multa']; ?></td>
						<td align="right"><?php echo number_format($m['monto_multa'],'2','.',','); ?></td>
						<td><?php echo date('d/m/Y H:i:s', strtotime($m['fechahora_multa'])) ?></td>
						<td><?php echo $m['mes_multa']; ?></td>
						<td><?php echo $m['gestion_multa']; ?></td>
						<td><?php echo $m['tipo_multa']; ?></td>
						<td><?php echo $m['nombre_asoc']; ?><sub><?php echo $m['id_asoc']; ?></sub></td>
						<td><?php echo $m['estado_multa']; ?></td>
						<td><?php echo $m['id_usu']; ?></td>
						<td><?php echo $m['exento_multa']; ?></td>
						<td><?php echo $m['ice_multa']; ?></td>
						<td>
                            <a href="<?php echo site_url('multum/edit/'.$m['id_multa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a> 
                            <a href="<?php echo site_url('multum/remove/'.$m['id_multa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
