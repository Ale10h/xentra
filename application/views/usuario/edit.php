<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Edit</h3>
            </div>
			<?php echo form_open('usuario/edit/'.$usuario['id_usu']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="estado_usu" class="control-label">Estado Usu</label>
						<div class="form-group">
							<input type="text" name="estado_usu" value="<?php echo ($this->input->post('estado_usu') ? $this->input->post('estado_usu') : $usuario['estado_usu']); ?>" class="form-control" id="estado_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_usuario" class="control-label">Tipo Usuario</label>
						<div class="form-group">
							<input type="text" name="tipo_usuario" value="<?php echo ($this->input->post('tipo_usuario') ? $this->input->post('tipo_usuario') : $usuario['tipo_usuario']); ?>" class="form-control" id="tipo_usuario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_usu" class="control-label">Nombre Usu</label>
						<div class="form-group">
							<input type="text" name="nombre_usu" value="<?php echo ($this->input->post('nombre_usu') ? $this->input->post('nombre_usu') : $usuario['nombre_usu']); ?>" class="form-control" id="nombre_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="login_usu" class="control-label">Login Usu</label>
						<div class="form-group">
							<input type="text" name="login_usu" value="<?php echo ($this->input->post('login_usu') ? $this->input->post('login_usu') : $usuario['login_usu']); ?>" class="form-control" id="login_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="clave_usu" class="control-label">Clave Usu</label>
						<div class="form-group">
							<input type="text" name="clave_usu" value="<?php echo ($this->input->post('clave_usu') ? $this->input->post('clave_usu') : $usuario['clave_usu']); ?>" class="form-control" id="clave_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="imagen_usu" class="control-label">Imagen Usu</label>
						<div class="form-group">
							<input type="text" name="imagen_usu" value="<?php echo ($this->input->post('imagen_usu') ? $this->input->post('imagen_usu') : $usuario['imagen_usu']); ?>" class="form-control" id="imagen_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_usu" class="control-label">Fechahora Usu</label>
						<div class="form-group">
							<input type="text" name="fechahora_usu" value="<?php echo ($this->input->post('fechahora_usu') ? $this->input->post('fechahora_usu') : $usuario['fechahora_usu']); ?>" class="form-control" id="fechahora_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="terminal_usu" class="control-label">Terminal Usu</label>
						<div class="form-group">
							<input type="text" name="terminal_usu" value="<?php echo ($this->input->post('terminal_usu') ? $this->input->post('terminal_usu') : $usuario['terminal_usu']); ?>" class="form-control" id="terminal_usu" />
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