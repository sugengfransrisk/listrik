<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pelanggan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pelanggan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="datatable" class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>KodeTarif</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pelanggan as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['nama']; ?></td>
						<td><?php echo $p['alamat']; ?></td>
						<td><?php echo $p['kodeTarif']; ?></td>
						<td>
                            <a href="<?php echo site_url('pelanggan/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pelanggan/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
