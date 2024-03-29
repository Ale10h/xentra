<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Medidor Edit</h3>
            </div>
			<?php echo form_open('medidor/edit/'.$medidor['id_med']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?php echo ($this->input->post('estado') ? $this->input->post('estado') : $medidor['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_multa" class="control-label">Id Multa</label>
						<div class="form-group">
							<input type="text" name="id_multa" value="<?php echo ($this->input->post('id_multa') ? $this->input->post('id_multa') : $medidor['id_multa']); ?>" class="form-control" id="id_multa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_tarifa" class="control-label">Id Tarifa</label>
						<div class="form-group">
							<input type="text" name="id_tarifa" value="<?php echo ($this->input->post('id_tarifa') ? $this->input->post('id_tarifa') : $medidor['id_tarifa']); ?>" class="form-control" id="id_tarifa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_ap" class="control-label">Id Ap</label>
						<div class="form-group">
							<input type="text" name="id_ap" value="<?php echo ($this->input->post('id_ap') ? $this->input->post('id_ap') : $medidor['id_ap']); ?>" class="form-control" id="id_ap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zona_med" class="control-label">Zona Med</label>
						<div class="form-group">
							<input type="text" name="zona_med" value="<?php echo ($this->input->post('zona_med') ? $this->input->post('zona_med') : $medidor['zona_med']); ?>" class="form-control" id="zona_med" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_asoc" class="control-label">Id Asoc</label>
						<div class="form-group">
							<input type="text" name="id_asoc" value="<?php echo ($this->input->post('id_asoc') ? $this->input->post('id_asoc') : $medidor['id_asoc']); ?>" class="form-control" id="id_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="codigo_med" class="control-label">Codigo Med</label>
						<div class="form-group">
							<input type="text" name="codigo_med" value="<?php echo ($this->input->post('codigo_med') ? $this->input->post('codigo_med') : $medidor['codigo_med']); ?>" class="form-control" id="codigo_med" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marca_med" class="control-label">Marca Med</label>
						<div class="form-group">
							<input type="text" name="marca_med" value="<?php echo ($this->input->post('marca_med') ? $this->input->post('marca_med') : $medidor['marca_med']); ?>" class="form-control" id="marca_med" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modelo_med" class="control-label">Modelo Med</label>
						<div class="form-group">
							<input type="text" name="modelo_med" value="<?php echo ($this->input->post('modelo_med') ? $this->input->post('modelo_med') : $medidor['modelo_med']); ?>" class="form-control" id="modelo_med" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion_med" class="control-label">Direccion Med</label>
						<div class="form-group">
							<input type="text" name="direccion_med" value="<?php echo ($this->input->post('direccion_med') ? $this->input->post('direccion_med') : $medidor['direccion_med']); ?>" class="form-control" id="direccion_med" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categoria_med" class="control-label">Categoria Med</label>
						<div class="form-group">
							<input type="text" name="categoria_med" value="<?php echo ($this->input->post('categoria_med') ? $this->input->post('categoria_med') : $medidor['categoria_med']); ?>" class="form-control" id="categoria_med" />
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