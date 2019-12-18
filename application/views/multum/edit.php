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
						<label for="motivo_multa" class="control-label">Motivo Multa</label>
						<div class="form-group">
							<input type="text" name="motivo_multa" value="<?php echo ($this->input->post('motivo_multa') ? $this->input->post('motivo_multa') : $multum['motivo_multa']); ?>" class="form-control" id="motivo_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_multa" class="control-label">Detalle Multa</label>
						<div class="form-group">
							<input type="text" name="detalle_multa" value="<?php echo ($this->input->post('detalle_multa') ? $this->input->post('detalle_multa') : $multum['detalle_multa']); ?>" class="form-control" id="detalle_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_multa" class="control-label">Monto Multa</label>
						<div class="form-group">
							<input type="text" name="monto_multa" value="<?php echo ($this->input->post('monto_multa') ? $this->input->post('monto_multa') : $multum['monto_multa']); ?>" class="form-control" id="monto_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_multa" class="control-label">Fechahora Multa</label>
						<div class="form-group">
							<input type="text" name="fechahora_multa" value="<?php echo ($this->input->post('fechahora_multa') ? $this->input->post('fechahora_multa') : $multum['fechahora_multa']); ?>" class="form-control" id="fechahora_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mes_multa" class="control-label">Mes Multa</label>
						<div class="form-group">
							<input type="text" name="mes_multa" value="<?php echo ($this->input->post('mes_multa') ? $this->input->post('mes_multa') : $multum['mes_multa']); ?>" class="form-control" id="mes_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gestion_multa" class="control-label">Gestion Multa</label>
						<div class="form-group">
							<input type="text" name="gestion_multa" value="<?php echo ($this->input->post('gestion_multa') ? $this->input->post('gestion_multa') : $multum['gestion_multa']); ?>" class="form-control" id="gestion_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_multa" class="control-label">Tipo Multa</label>
						<div class="form-group">
							<input type="text" name="tipo_multa" value="<?php echo ($this->input->post('tipo_multa') ? $this->input->post('tipo_multa') : $multum['tipo_multa']); ?>" class="form-control" id="tipo_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_asoc" class="control-label">Id Asoc</label>
						<div class="form-group">
							<input type="text" name="id_asoc" value="<?php echo ($this->input->post('id_asoc') ? $this->input->post('id_asoc') : $multum['id_asoc']); ?>" class="form-control" id="id_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_asoc" class="control-label">Nombre Asoc</label>
						<div class="form-group">
							<input type="text" name="nombre_asoc" value="<?php echo ($this->input->post('nombre_asoc') ? $this->input->post('nombre_asoc') : $multum['nombre_asoc']); ?>" class="form-control" id="nombre_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_multa" class="control-label">Estado Multa</label>
						<div class="form-group">
							<input type="text" name="estado_multa" value="<?php echo ($this->input->post('estado_multa') ? $this->input->post('estado_multa') : $multum['estado_multa']); ?>" class="form-control" id="estado_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_usu" class="control-label">Id Usu</label>
						<div class="form-group">
							<input type="text" name="id_usu" value="<?php echo ($this->input->post('id_usu') ? $this->input->post('id_usu') : $multum['id_usu']); ?>" class="form-control" id="id_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="exento_multa" class="control-label">Exento Multa</label>
						<div class="form-group">
							<input type="text" name="exento_multa" value="<?php echo ($this->input->post('exento_multa') ? $this->input->post('exento_multa') : $multum['exento_multa']); ?>" class="form-control" id="exento_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ice_multa" class="control-label">Ice Multa</label>
						<div class="form-group">
							<input type="text" name="ice_multa" value="<?php echo ($this->input->post('ice_multa') ? $this->input->post('ice_multa') : $multum['ice_multa']); ?>" class="form-control" id="ice_multa" />
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