<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tagihan Listing</h3>
            	<div class="box-tools">
                    <?php if ($this->session->userdata('role')=='admin') {
                        # code...
                   ?>
                    <a href="<?php echo site_url('tagihan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                    <?php  }?>
                </div>
            </div>
            <div class="box-body">
                <table id="result" class=" table table-striped table-hovered">
                    <tr>
						<th>ID</th>
						<th>TahunTagih</th>
						<th>BulanTagih</th>
						<th>Pemakaian</th>
						<th>Status</th>
						<th>Pelanggan Id</th>
						<th>Actions</th>
                    </tr>
                    <?php 
                    $bulan = array("Januari", "February", "Maret","April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    
                    foreach($tagihan as $t)
                       { $d=$t['bulanTagih']; ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['tahunTagih']; ?></td>
						<td><?php echo $bulan["$d"]; ?></td>
						<td><?php echo $t['pemakaian']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['nama']; ?></td>
						<td> <?php if ($this->session->userdata('role')=='pelanggan') {
                        # code...
                   ?>
                            <a href="<?php echo site_url('invoice/index/'.$t['id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-credit-card"></span> Bayar</a> 
                            <?php }?>
                            <td> <?php if ($this->session->userdata('role')=='admin') {
                        # code...
                   ?>
                            <a href="<?php echo site_url('tagihan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tagihan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                             <?php }?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                </div>        
            </div>
        </div>
    </div>
</div>
 <script>
 function autoRefresh_div()
 {
      $("#result")// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 1000); // refresh div after 5 secs
            </script>
