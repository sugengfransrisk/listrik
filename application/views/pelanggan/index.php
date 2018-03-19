<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Admin</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>KodeTarif</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                     foreach($pelanggan as $p){ ?>
                    <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $p['nama']; ?></td>
						<td><?php echo $p['alamat']; ?></td>
						<td><?php echo $p['kode']; ?></td>
						<td>
                            <a href="<?php echo site_url('pelanggan/edit/'.$p['id_p']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kelola</a> 
                            <a href="<?php echo site_url('pelanggan/remove/'.$p['id_p']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
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

