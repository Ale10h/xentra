<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Multum Edit</h3>
            </div>
			<?php echo form_open('multum/edit/'.$multum['id_multa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_asoc" class="control-label">Nombre Asoc</label>
						<div class="form-group">
							<input type="text" readonly name="nombre_asoc" value="<?php echo ($this->input->post('nombre_asoc') ? $this->input->post('nombre_asoc') : $multum['nombre_asoc']); ?>" class="form-control" id="nombre_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="motivo_multa" class="control-label">Motivo </label>
						<div class="form-group">
							<input type="text" name="motivo_multa" value="<?php echo ($this->input->post('motivo_multa') ? $this->input->post('motivo_multa') : $multum['motivo_multa']); ?>"  onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="motivo_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_multa" class="control-label">Detalle </label>
						<div class="form-group">
							<input type="text" name="detalle_multa" value="<?php echo ($this->input->post('detalle_multa') ? $this->input->post('detalle_multa') : $multum['detalle_multa']); ?>"  onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" class="form-control" id="detalle_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_multa" class="control-label">Monto </label>
						<div class="form-group">
							<input type="number" step="any" name="monto_multa" value="<?php echo ($this->input->post('monto_multa') ? $this->input->post('monto_multa') : $multum['monto_multa']); ?>" class="form-control" id="monto_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_multa" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fechahora_multa" value="<?php echo ($this->input->post('fechahora_multa') ? $this->input->post('fechahora_multa') : $multum['fechahora_multa']); ?>" class="form-control" id="fechahora_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mes_multa" class="control-label">Mes </label>
						<div class="form-group">
							<select name="mes_multa" class="form-control" required>
							<?php 
                                            foreach($all_mes as $mes)
                                            {
                                                    $selected = ($mes['mes_lec'] == $multum['mes_multa']) ? ' selected="selected"' : "";

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
                                                    $selected = ($gestion['gestion_lec'] == $multum['gestion_multa']) ? ' selected="selected"' : "";

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
                                                    $selected = ($tipo['tipo'] == $multum['tipo_multa']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$tipo['tipo'].'" '.$selected.'>'.$tipo['tipo'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					<div class="col-md-6" hidden>
						<label for="id_asoc" class="control-label">Id Asoc</label>
						<div class="form-group">
							<input type="hidden" name="id_asoc" value="<?php echo ($this->input->post('id_asoc') ? $this->input->post('id_asoc') : $multum['id_asoc']); ?>" class="form-control" id="id_asoc" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="estado_multa" class="control-label">Estado </label>
						<div class="form-group">
							<select name="estado_multa" class="form-control" required>
							<?php 
                                            foreach($all_estado as $estado)
                                            {
                                                    $selected = ($estado['estado'] == $multum['estado_multa']) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$estado['estado'].'" '.$selected.'>'.$estado['estado'].'</option>';
                                            } 
                                            ?>
                                        </select>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="exento_multa" class="control-label">Exento </label>
						<div class="form-group">
							<input type="text" name="exento_multa" value="<?php echo ($this->input->post('exento_multa') ? $this->input->post('exento_multa') : $multum['exento_multa']); ?>" class="form-control" id="exento_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ice_multa" class="control-label">Ice </label>
						<div class="form-group">
							<input type="text" name="ice_multa" value="<?php echo ($this->input->post('ice_multa') ? $this->input->post('ice_multa') : $multum['ice_multa']); ?>" class="form-control" id="ice_multa" />
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