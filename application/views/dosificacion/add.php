<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dosificacion Add</h3>
            </div>
            <?php echo form_open('dosificacion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="numorden_dosif" class="control-label">Numorden Dosif</label>
						<div class="form-group">
							<input type="text" name="numorden_dosif" value="<?php echo $this->input->post('numorden_dosif'); ?>" class="form-control" id="numorden_dosif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="llave_dosif" class="control-label">Llave Dosif</label>
						<div class="form-group">
							<input type="text" name="llave_dosif" value="<?php echo $this->input->post('llave_dosif'); ?>" class="form-control" id="llave_dosif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechalim_dosif" class="control-label">Fechalim Dosif</label>
						<div class="form-group">
							<input type="text" name="fechalim_dosif" value="<?php echo $this->input->post('fechalim_dosif'); ?>" class="has-datepicker form-control" id="fechalim_dosif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_dosif" class="control-label">Estado Dosif</label>
						<div class="form-group">
							<input type="text" name="estado_dosif" value="<?php echo $this->input->post('estado_dosif'); ?>" class="form-control" id="estado_dosif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechahora_dosif" class="control-label">Fechahora Dosif</label>
						<div class="form-group">
							<input type="text" name="fechahora_dosif" value="<?php echo $this->input->post('fechahora_dosif'); ?>" class="form-control" id="fechahora_dosif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numfact_dosif" class="control-label">Numfact Dosif</label>
						<div class="form-group">
							<input type="text" name="numfact_dosif" value="<?php echo $this->input->post('numfact_dosif'); ?>" class="form-control" id="numfact_dosif" />
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