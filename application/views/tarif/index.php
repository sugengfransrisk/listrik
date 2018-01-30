<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tarif Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tarif/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Kode</th>
						<th>Daya</th>
						<th>Tarif PerKWH</th>
						<th>Beban</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tarif as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['kode']; ?></td>
						<td><?php echo $t['daya']; ?></td>
						<td><?php echo $t['tarif_perKWH']; ?></td>
						<td><?php echo $t['beban']; ?></td>
						<td>
                            <a href="<?php echo site_url('tarif/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tarif/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
