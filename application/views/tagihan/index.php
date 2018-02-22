<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tagihan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tagihan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hovered">
                    <tr>
						<th>ID</th>
						<th>TahunTagih</th>
						<th>BulanTagih</th>
						<th>Pemakaian</th>
						<th>Status</th>
						<th>Pelanggan Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tagihan as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['tahunTagih']; ?></td>
						<td><?php echo $t['bulanTagih']; ?></td>
						<td><?php echo $t['pemakaian']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('invoice/index/'.$t['id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-credit-card"></span> Bayar</a> 
                            <a href="<?php echo site_url('tagihan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tagihan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                </div>        
            </div>
        </div>
    </div>
</div>
