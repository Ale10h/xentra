<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rol Usuario Add</h3>
            </div>
            <?php echo form_open('rol_usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_rol" class="control-label">Id Rol</label>
						<div class="form-group">
							<input type="text" name="id_rol" value="<?php echo $this->input->post('id_rol'); ?>" class="form-control" id="id_rol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_usu" class="control-label">Id Usu</label>
						<div class="form-group">
							<input type="text" name="id_usu" value="<?php echo $this->input->post('id_usu'); ?>" class="form-control" id="id_usu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="has-datetimepicker form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_rol" class="control-label">Estado Rol</label>
						<div class="form-group">
							<input type="text" name="estado_rol" value="<?php echo $this->input->post('estado_rol'); ?>" class="form-control" id="estado_rol" />
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