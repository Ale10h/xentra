<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categoria Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categorium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cating</th>
						<th>Nom Cating</th>
						<th>Id Ging</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categoria as $c){ ?>
                    <tr>
						<td><?php echo $c['id_cating']; ?></td>
						<td><?php echo $c['nom_cating']; ?></td>
						<td><?php echo $c['id_ging']; ?></td>
						<td>
                            <a href="<?php echo site_url('categorium/edit/'.$c['id_cating']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('categorium/remove/'.$c['id_cating']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
