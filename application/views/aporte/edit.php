<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Aporte </h3>
            </div>
			<?php echo form_open('aporte/edit/'.$aporte['id_ap']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="motivo_ap" class="control-label">Motivo </label>
						<div class="form-group">
							<input type="text" name="motivo_ap" value="<?php echo ($this->input->post('motivo_ap') ? $this->input->post('motivo_ap') : $aporte['motivo_ap']); ?>" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="motivo_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_ap" class="control-label">Detalle </label>
						<div class="form-group">
							<input type="text" name="detalle_ap" value="<?php echo ($this->input->post('detalle_ap') ? $this->input->post('detalle_ap') : $aporte['detalle_ap']); ?>" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="detalle_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_ap" class="control-label">Monto </label>
						<div class="form-group">
							<input type="number" step="any" name="monto_ap" value="<?php echo ($this->input->post('monto_ap') ? $this->input->post('monto_ap') : $aporte['monto_ap']); ?>" class="form-control" id="monto_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_ap" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fechahora_ap" value="<?php echo ($this->input->post('fechahora_ap') ? $this->input->post('fechahora_ap') : $aporte['fechahora_ap']); ?>" class="form-control" id="fechahora_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mes_ap" class="control-label">Mes </label>
						<div class="form-group">
							<select name="mes_ap" class="form-control" required>
							<?php 
                                            foreach($all_mes as $mes)
                                            {
                                                    $selected = ($mes['mes_lec'] == $aporte['mes_ap']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$mes['mes_lec'].'" '.$selected.'>'.$mes['mes_lec'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gestion_ap" class="control-label">Gestion </label>
						<div class="form-group">
							<select name="gestion_ap" class="form-control" required>
							<?php 
                                            foreach($all_gestion as $gestion)
                                            {
                                                    $selected = ($gestion['gestion_lec'] == $aporte['gestion_ap']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$gestion['gestion_lec'].'" '.$selected.'>'.$gestion['gestion_lec'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_ap" class="control-label">Tipo </label>
						<div class="form-group">
							<select name="tipo_ap" class="form-control" required>
							<?php 
                                            foreach($all_tipo as $tipo)
                                            {
                                                    $selected = ($tipo['tipo'] == $aporte['tipo_ap']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$tipo['tipo'].'" '.$selected.'>'.$tipo['tipo'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_ap" class="control-label">Estado </label>
						<div class="form-group">
							<select name="estado_ap" class="form-control" required>
							<?php 
                                            foreach($all_estado as $estado)
                                            {
                                                    $selected = ($estado['estado'] == $aporte['estado_ap']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$estado['estado'].'" '.$selected.'>'.$estado['estado'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="exento_ap" class="control-label">Exento </label>
						<div class="form-group">
							<input type="text" name="exento_ap" value="<?php echo ($this->input->post('exento_ap') ? $this->input->post('exento_ap') : $aporte['exento_ap']); ?>" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="exento_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ice_ap" class="control-label">Ice </label>
						<div class="form-group">
							<input type="text" name="ice_ap" value="<?php echo ($this->input->post('ice_ap') ? $this->input->post('ice_ap') : $aporte['ice_ap']); ?>"  onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="ice_ap" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Guardar
				</button>
				<a href="<?php echo site_url('aporte'); ?>" class="btn btn-danger">
                       <i class="fa fa-times"></i> Cancelar</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>