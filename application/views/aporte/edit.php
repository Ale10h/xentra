<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Aporte Edit</h3>
            </div>
			<?php echo form_open('aporte/edit/'.$aporte['id_ap']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="motivo_ap" class="control-label">Motivo Ap</label>
						<div class="form-group">
							<input type="text" name="motivo_ap" value="<?php echo ($this->input->post('motivo_ap') ? $this->input->post('motivo_ap') : $aporte['motivo_ap']); ?>" class="form-control" id="motivo_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_ap" class="control-label">Detalle Ap</label>
						<div class="form-group">
							<input type="text" name="detalle_ap" value="<?php echo ($this->input->post('detalle_ap') ? $this->input->post('detalle_ap') : $aporte['detalle_ap']); ?>" class="form-control" id="detalle_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_ap" class="control-label">Monto Ap</label>
						<div class="form-group">
							<input type="text" name="monto_ap" value="<?php echo ($this->input->post('monto_ap') ? $this->input->post('monto_ap') : $aporte['monto_ap']); ?>" class="form-control" id="monto_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_ap" class="control-label">Fechahora Ap</label>
						<div class="form-group">
							<input type="text" name="fechahora_ap" value="<?php echo ($this->input->post('fechahora_ap') ? $this->input->post('fechahora_ap') : $aporte['fechahora_ap']); ?>" class="form-control" id="fechahora_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mes_ap" class="control-label">Mes Ap</label>
						<div class="form-group">
							<input type="text" name="mes_ap" value="<?php echo ($this->input->post('mes_ap') ? $this->input->post('mes_ap') : $aporte['mes_ap']); ?>" class="form-control" id="mes_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gestion_ap" class="control-label">Gestion Ap</label>
						<div class="form-group">
							<input type="text" name="gestion_ap" value="<?php echo ($this->input->post('gestion_ap') ? $this->input->post('gestion_ap') : $aporte['gestion_ap']); ?>" class="form-control" id="gestion_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_ap" class="control-label">Tipo Ap</label>
						<div class="form-group">
							<input type="text" name="tipo_ap" value="<?php echo ($this->input->post('tipo_ap') ? $this->input->post('tipo_ap') : $aporte['tipo_ap']); ?>" class="form-control" id="tipo_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_ap" class="control-label">Estado Ap</label>
						<div class="form-group">
							<input type="text" name="estado_ap" value="<?php echo ($this->input->post('estado_ap') ? $this->input->post('estado_ap') : $aporte['estado_ap']); ?>" class="form-control" id="estado_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_usu" class="control-label">Id Usu</label>
						<div class="form-group">
							<input type="text" name="id_usu" value="<?php echo ($this->input->post('id_usu') ? $this->input->post('id_usu') : $aporte['id_usu']); ?>" class="form-control" id="id_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="exento_ap" class="control-label">Exento Ap</label>
						<div class="form-group">
							<input type="text" name="exento_ap" value="<?php echo ($this->input->post('exento_ap') ? $this->input->post('exento_ap') : $aporte['exento_ap']); ?>" class="form-control" id="exento_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ice_ap" class="control-label">Ice Ap</label>
						<div class="form-group">
							<input type="text" name="ice_ap" value="<?php echo ($this->input->post('ice_ap') ? $this->input->post('ice_ap') : $aporte['ice_ap']); ?>" class="form-control" id="ice_ap" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>