<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bolsarol Edit</h3>
            </div>
			<?php echo form_open('bolsarol/edit/'.$bolsarol['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="estado_rol" value="1" <?php echo ($bolsarol['estado_rol']==1 ? 'checked="checked"' : ''); ?> id='estado_rol' />
							<label for="estado_rol" class="control-label">Estado Rol</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_rol" class="control-label">Id Rol</label>
						<div class="form-group">
							<input type="text" name="id_rol" value="<?php echo ($this->input->post('id_rol') ? $this->input->post('id_rol') : $bolsarol['id_rol']); ?>" class="form-control" id="id_rol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rol" class="control-label">Rol</label>
						<div class="form-group">
							<input type="text" name="rol" value="<?php echo ($this->input->post('rol') ? $this->input->post('rol') : $bolsarol['rol']); ?>" class="form-control" id="rol" />
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