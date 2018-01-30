<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pembayaran Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pembayaran/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Tanggal Bayar</th>
						<th>Id Tagihan</th>
						<th>Jumlah Tagihan</th>
						<th>Biaya Denda</th>
						<th>Biaya Admin</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pembayaran as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['tanggal_bayar']; ?></td>
						<td><?php echo $p['id_tagihan']; ?></td>
						<td><?php echo $p['jumlah_tagihan']; ?></td>
						<td><?php echo $p['biaya_denda']; ?></td>
						<td><?php echo $p['biaya_admin']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('pembayaran/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pembayaran/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>