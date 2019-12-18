<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Me Edit</h3>
            </div>
			<?php echo form_open('me/edit/'.$me['id_mes']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="mes_lec" class="control-label">Mes Lec</label>
						<div class="form-group">
							<input type="text" name="mes_lec" value="<?php echo ($this->input->post('mes_lec') ? $this->input->post('mes_lec') : $me['mes_lec']); ?>" class="form-control" id="mes_lec" />
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