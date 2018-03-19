<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Tagihan</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
						<th>ID</th>
						<th>TahunTagih</th>
						<th>BulanTagih</th>
						<th>Pemakaian</th>
						<th>Status</th>
						<th>Pelanggan Id</th>
						<th>Actions</th>
                    </tr>
                     </thead>
                    <tbody>
                    <?php 
                    $bulan = array("a","Januari", "February", "Maret","April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    
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
                            <?php }
                             if ($this->session->userdata('role')=='admin') {
                        # code...
                   ?>
                            <a href="<?php echo site_url('tagihan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kelola</a> 
                            <a href="<?php echo site_url('tagihan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                             <?php }?>
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
 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Terbitkan Tagihan <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="row clearfix">
                     <form action="<?php echo base_url(); ?>tagihan/add" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="col-md-6">
                        <label for="tahunTagih" class="control-label">TahunTagih</label>
                        <div class="form-group">
                            <input type="text" name="tahunTagih" value="<?php echo $this->input->post('tahunTagih'); ?>" class="atepicker form-control" id="datepicker" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="bulanTagih" class="control-label">BulanTagih</label>
                        <div class="form-group">
                            <select name="bulanTagih" class="form-control">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">July</option>
                                <option value="8">Agustus</option>
                                <option value="9">Spetember</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="pemakaian" class="control-label">Pemakaian</label>
                        <div class="form-group">
                            <input type="text" name="pemakaian" value="<?php echo $this->input->post('pemakaian'); ?>" class="form-control" id="pemakaian" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="pelanggan_id" class="control-label">Pelanggan</label>
                        <div class="form-group">
                            <select name="pelanggan_id" class="form-control">
                                <option value="">Pilih pelanggan</option>
                                <?php 
                                foreach($all_pelanggan as $pelanggan)
                                {
                                    $selected = ($pelanggan['id_p'] == $this->input->post('pelanggan_id')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$pelanggan['id_p'].'" '.$selected.'>'.$pelanggan['nama'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                </div>
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                      </div>


                    </form>
                  </div>
                </div>
              </div>
            </div>


                  </div>
                </div>
              </div>

  </div>
</div>
<script>
$(document).ready(function(){
       $('#table').DataTable({
           "paging":false
   });
   });
   setTimeout(function() {
   location.reload();
   }, 3000); 
 </script>
