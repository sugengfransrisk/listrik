<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Pembayaran</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
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
                     </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($pembayaran as $p){ ?>
                    <tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $p['tanggal_bayar']; ?></td>
						<td><?php echo $p['id_tagihan']; ?></td>
						<td><?php echo $p['jumlah_tagihan']; ?></td>
						<td><?php echo $p['biaya_denda']; ?></td>
						<td><?php echo $p['biaya_admin']; ?></td>

						<td><?php echo $p['status']; ?></td>
						<td>
                            <?php if ($this->session->userdata('role')=='admin') {
                        # code...
                            ?>
                            <a href="<?php echo site_url('pembayaran/confirm/'.$p['id_pem']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-check-square"></span> Konfirmasi</a>
                            <?php } ?>
                            <a href="<?php echo site_url('pembayaran/remove/'.$p['id_pem']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-search "></span> Info</a>
                        </td>
                    </tr>
                    <?php }  ?>
             </div>
                    </div>
                  </div>
                </tbody>
            </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>