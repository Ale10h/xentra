<!----------------------------- script buscador --------------------------------------->
<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('resources/js/multa.js'); ?>" type="text/javascript"></script>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registro de Multa</h3>
            </div>
                     	<div class="box-body">
          		<div class="row clearfix">
          			<div class="col-md-6">
						<label for="buscador" class="control-label">Buscar Asociado</label>
						<div class="form-group">
<input type="search" name="buscador" id="buscador" list="listaclientes" class="form-control" onkeypress="validar(event,1)" onKeyUp="this.value = this.value.toUpperCase();" onchange="seleccionar_cliente()" onclick="seleccionar(2)" autocomplete="off" />		
  <datalist id="listaclientes">

                </datalist>					</div></div>
            <?php echo form_open('multum/add'); ?>
          	
                <div class="col-md-6">				
                <label for="buscador" class="control-label">ID Asociado</label>
<div class="form-group">
 <input type="text" name="id_asoc" id="id_asoc" class="form-control" >
 </div></div>
					
					<div class="col-md-6">
						<label for="nombre_asoc" class="control-label">Nombre Asociado</label>
						<div class="form-group">
							<input type="text" id="nombre_asoc" name="nombre_asoc" value="<?php echo $this->input->post('nombre_asoc'); ?>" class="form-control" id="nombre_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="motivo_multa" class="control-label">Motivo </label>
						<div class="form-group">
							<input type="text" id="motivo_multa" name="motivo_multa" value="<?php echo $this->input->post('motivo_multa'); ?>" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="motivo_multa" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_multa" class="control-label">Detalle </label>
						<div class="form-group">
							<input type="text" name="detalle_multa" value="<?php echo $this->input->post('detalle_multa'); ?>" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="detalle_multa" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_multa" class="control-label">Monto </label>
						<div class="form-group">
							<input type="number" step="any" name="monto_multa" value="<?php echo $this->input->post('monto_multa'); ?>" class="form-control" id="monto_multa" />
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="fechahora_multa" class="control-label">Fechahora </label>
						<div class="form-group">
							<input type="text" name="fechahora_multa" value="<?php echo $this->input->post('fechahora_multa'); ?>" class="form-control" id="fechahora_multa" />
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="mes_multa" class="control-label">Mes </label>
						<div class="form-group">
							<select name="mes_multa" class="form-control" required>
							<?php 
                                            foreach($all_mes as $mes)
                                            {
                                                    $selected = ($mes['mes_lec'] == $this->input->post('mes_multa')) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$mes['mes_lec'].'" '.$selected.'>'.$mes['mes_lec'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gestion_multa" class="control-label">Gestion </label>
						<div class="form-group">
							<select name="gestion_multa" class="form-control" required>
							<?php 
                                            foreach($all_gestion as $gestion)
                                            {
                                                    $selected = ($gestion['gestion_lec'] == $this->input->post('gestion_multa')) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$gestion['gestion_lec'].'" '.$selected.'>'.$gestion['gestion_lec'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_multa" class="control-label">Tipo </label>
						<div class="form-group">
							<select name="tipo_multa" class="form-control" required>
                                            
                                            <?php 
                                            foreach($all_tipo as $tipo)
                                            {
                                                    $selected = ($tipo['tipo'] == $this->input->post('tipo_multa')) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$tipo['tipo'].'" '.$selected.'>'.$tipo['tipo'].'</option>';
                                            } 
                                            ?>
                                    </select>
						</div>
					</div>
					
					
					
					<div class="col-md-6">
						<label for="exento_multa" class="control-label">Exento </label>
						<div class="form-group">
							<input type="text" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" name="exento_multa" value="<?php echo $this->input->post('exento_multa'); ?>" class="form-control" id="exento_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ice_multa" class="control-label">Ice </label>
						<div class="form-group">
							<input type="text" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" name="ice_multa" value="<?php echo $this->input->post('ice_multa'); ?>" class="form-control" id="ice_multa" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
            	</button>
            	<a href="<?php echo site_url('multum'); ?>" class="btn btn-danger">
                       <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>