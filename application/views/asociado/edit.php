<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Asociado Edit</h3>
            </div>
			<?php echo form_open('asociado/edit/'.$asociado['id_asoc']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_emp" class="control-label">Id Emp</label>
						<div class="form-group">
							<input type="text" name="id_emp" value="<?php echo ($this->input->post('id_emp') ? $this->input->post('id_emp') : $asociado['id_emp']); ?>" class="form-control" id="id_emp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?php echo ($this->input->post('estado') ? $this->input->post('estado') : $asociado['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_asoc" class="control-label">Tipo Asoc</label>
						<div class="form-group">
							<input type="text" name="tipo_asoc" value="<?php echo ($this->input->post('tipo_asoc') ? $this->input->post('tipo_asoc') : $asociado['tipo_asoc']); ?>" class="form-control" id="tipo_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ciudad" class="control-label">Ciudad</label>
						<div class="form-group">
							<input type="text" name="ciudad" value="<?php echo ($this->input->post('ciudad') ? $this->input->post('ciudad') : $asociado['ciudad']); ?>" class="form-control" id="ciudad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombres_asoc" class="control-label">Nombres Asoc</label>
						<div class="form-group">
							<input type="text" name="nombres_asoc" value="<?php echo ($this->input->post('nombres_asoc') ? $this->input->post('nombres_asoc') : $asociado['nombres_asoc']); ?>" class="form-control" id="nombres_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellidos_asoc" class="control-label">Apellidos Asoc</label>
						<div class="form-group">
							<input type="text" name="apellidos_asoc" value="<?php echo ($this->input->post('apellidos_asoc') ? $this->input->post('apellidos_asoc') : $asociado['apellidos_asoc']); ?>" class="form-control" id="apellidos_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ci_asoc" class="control-label">Ci Asoc</label>
						<div class="form-group">
							<input type="text" name="ci_asoc" value="<?php echo ($this->input->post('ci_asoc') ? $this->input->post('ci_asoc') : $asociado['ci_asoc']); ?>" class="form-control" id="ci_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion_asoc" class="control-label">Direccion Asoc</label>
						<div class="form-group">
							<input type="text" name="direccion_asoc" value="<?php echo ($this->input->post('direccion_asoc') ? $this->input->post('direccion_asoc') : $asociado['direccion_asoc']); ?>" class="form-control" id="direccion_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechanac_asoc" class="control-label">Fechanac Asoc</label>
						<div class="form-group">
							<input type="text" name="fechanac_asoc" value="<?php echo ($this->input->post('fechanac_asoc') ? $this->input->post('fechanac_asoc') : $asociado['fechanac_asoc']); ?>" class="has-datepicker form-control" id="fechanac_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono_asoc" class="control-label">Telefono Asoc</label>
						<div class="form-group">
							<input type="text" name="telefono_asoc" value="<?php echo ($this->input->post('telefono_asoc') ? $this->input->post('telefono_asoc') : $asociado['telefono_asoc']); ?>" class="form-control" id="telefono_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="codigo_asoc" class="control-label">Codigo Asoc</label>
						<div class="form-group">
							<input type="text" name="codigo_asoc" value="<?php echo ($this->input->post('codigo_asoc') ? $this->input->post('codigo_asoc') : $asociado['codigo_asoc']); ?>" class="form-control" id="codigo_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nit_asoc" class="control-label">Nit Asoc</label>
						<div class="form-group">
							<input type="text" name="nit_asoc" value="<?php echo ($this->input->post('nit_asoc') ? $this->input->post('nit_asoc') : $asociado['nit_asoc']); ?>" class="form-control" id="nit_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="razon_asoc" class="control-label">Razon Asoc</label>
						<div class="form-group">
							<input type="text" name="razon_asoc" value="<?php echo ($this->input->post('razon_asoc') ? $this->input->post('razon_asoc') : $asociado['razon_asoc']); ?>" class="form-control" id="razon_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto_asoc" class="control-label">Foto Asoc</label>
						<div class="form-group">
							<input type="text" name="foto_asoc" value="<?php echo ($this->input->post('foto_asoc') ? $this->input->post('foto_asoc') : $asociado['foto_asoc']); ?>" class="form-control" id="foto_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_asoc" class="control-label">Fechahora Asoc</label>
						<div class="form-group">
							<input type="text" name="fechahora_asoc" value="<?php echo ($this->input->post('fechahora_asoc') ? $this->input->post('fechahora_asoc') : $asociado['fechahora_asoc']); ?>" class="form-control" id="fechahora_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zona_asoc" class="control-label">Zona Asoc</label>
						<div class="form-group">
							<input type="text" name="zona_asoc" value="<?php echo ($this->input->post('zona_asoc') ? $this->input->post('zona_asoc') : $asociado['zona_asoc']); ?>" class="form-control" id="zona_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medidor_asoc" class="control-label">Medidor Asoc</label>
						<div class="form-group">
							<input type="text" name="medidor_asoc" value="<?php echo ($this->input->post('medidor_asoc') ? $this->input->post('medidor_asoc') : $asociado['medidor_asoc']); ?>" class="form-control" id="medidor_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="servicios_asoc" class="control-label">Servicios Asoc</label>
						<div class="form-group">
							<input type="text" name="servicios_asoc" value="<?php echo ($this->input->post('servicios_asoc') ? $this->input->post('servicios_asoc') : $asociado['servicios_asoc']); ?>" class="form-control" id="servicios_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categoria_asoc" class="control-label">Categoria Asoc</label>
						<div class="form-group">
							<input type="text" name="categoria_asoc" value="<?php echo ($this->input->post('categoria_asoc') ? $this->input->post('categoria_asoc') : $asociado['categoria_asoc']); ?>" class="form-control" id="categoria_asoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="orden_asoc" class="control-label">Orden Asoc</label>
						<div class="form-group">
							<input type="text" name="orden_asoc" value="<?php echo ($this->input->post('orden_asoc') ? $this->input->post('orden_asoc') : $asociado['orden_asoc']); ?>" class="form-control" id="orden_asoc" />
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