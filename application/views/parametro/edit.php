<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Parametro Edit</h3>
            </div>
			<?php echo form_open('parametro/edit/'.$parametro['id_param']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="dias_param" class="control-label">Dias Param</label>
						<div class="form-group">
							<input type="text" name="dias_param" value="<?php echo ($this->input->post('dias_param') ? $this->input->post('dias_param') : $parametro['dias_param']); ?>" class="form-control" id="dias_param" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_param" class="control-label">Monto Param</label>
						<div class="form-group">
							<input type="text" name="monto_param" value="<?php echo ($this->input->post('monto_param') ? $this->input->post('monto_param') : $parametro['monto_param']); ?>" class="form-control" id="monto_param" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?php echo ($this->input->post('estado') ? $this->input->post('estado') : $parametro['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_param" class="control-label">Detalle Param</label>
						<div class="form-group">
							<input type="text" name="detalle_param" value="<?php echo ($this->input->post('detalle_param') ? $this->input->post('detalle_param') : $parametro['detalle_param']); ?>" class="form-control" id="detalle_param" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descip_param" class="control-label">Descip Param</label>
						<div class="form-group">
							<input type="text" name="descip_param" value="<?php echo ($this->input->post('descip_param') ? $this->input->post('descip_param') : $parametro['descip_param']); ?>" class="form-control" id="descip_param" />
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