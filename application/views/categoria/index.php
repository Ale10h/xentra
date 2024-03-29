<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categorias Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categoria/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Categoria</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categorias as $c){ ?>
                    <tr>
						<td><?php echo $c['categoria']; ?></td>
						<td>
                            <a href="<?php echo site_url('categoria/edit/'.$c['categoria']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('categoria/remove/'.$c['categoria']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
