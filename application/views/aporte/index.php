<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Aportes</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('aporte/add'); ?>" class="btn btn-success btn-sm">Registrar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
						<th>N°</th>
						<th>Motivo</th>
						<th>Detalle</th>
						<th>Monto</th>
						<th>Fecha</th>
						<th>Mes</th>
						<th>Gestion</th>
						<th>Tipo</th>
						<th>Estado</th>
						<!--<th>Usu</th>-->
						<th>Exento</th>
						<th>Ice</th>
						<th></th>
                    </tr>
                    <?php $cont=0; foreach($aporte as $a){ 
                    	$cont=$cont+1; ?>
                    <tr>
						<td><?php echo $cont; ?></td>
						<td><?php echo $a['motivo_ap']; ?></td>
						<td><?php echo $a['detalle_ap']; ?></td>
						<td align="right"><?php echo number_format($a['monto_ap'],'2','.',','); ?></td>
						<td><?php echo date('d/m/Y H:i:s', strtotime($a['fechahora_ap'])) ?></td>
						<td><?php echo $a['mes_ap']; ?></td>
						<td><?php echo $a['gestion_ap']; ?></td>
						<td><?php echo $a['tipo_ap']; ?></td>
						<td><?php echo $a['estado_ap']; ?></td>
						<!--<td><?php echo $a['id_usu']; ?></td>-->
						<td><?php echo $a['exento_ap']; ?></td>
						<td><?php echo $a['ice_ap']; ?></td>
						<td>
                            <a href="<?php echo site_url('aporte/edit/'.$a['id_ap']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                            <a href="<?php echo site_url('aporte/remove/'.$a['id_ap']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
