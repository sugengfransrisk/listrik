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
						<th>Kode</th>
						<th>Daya</th>
						<th>Tarif PerKWH</th>
						<th>Beban</th>
						<th>Actions</th>
                    </tr>
                     </thead>
                    <tbody>
                    <?php foreach($tarif as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['kode']; ?></td>
						<td><?php echo $t['daya']; ?></td>
						<td><?php echo $t['tarif_perKWH']; ?></td>
						<td><?php echo $t['beban']; ?></td>
						<td>
                            <a href="<?php echo site_url('tarif/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kelola</a> 
                            <a href="<?php echo site_url('tarif/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
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
                    <h2>Tambah Data <small>Tarif</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row clearfix">
                          <form action="<?php echo base_url(); ?>tarif/add" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="col-md-6">
                        <label for="kode" class="control-label">Kode</label>
                        <div class="form-group">
                            <input type="text" name="kode" value="<?php echo $this->input->post('kode'); ?>" class="form-control" id="kode" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="daya" class="control-label">Daya</label>
                        <div class="form-group">
                            <input type="text" name="daya" value="<?php echo $this->input->post('daya'); ?>" class="form-control" id="daya" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tarif_perKWH" class="control-label">Tarif PerKWH</label>
                        <div class="form-group">
                            <input type="text" name="tarif_perKWH" value="<?php echo $this->input->post('tarif_perKWH'); ?>" class="form-control" id="tarif_perKWH" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="beban" class="control-label">Beban</label>
                        <div class="form-group">
                            <input type="text" name="beban" value="<?php echo $this->input->post('beban'); ?>" class="form-control" id="beban" />
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
