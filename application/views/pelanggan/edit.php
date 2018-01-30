<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pelanggan Edit</h3>
            </div>
			<?php echo form_open('pelanggan/edit/'.$pelanggan['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $pelanggan['nama']); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pelanggan['alamat']); ?>" class="form-control" id="alamat" />
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kodeTarif" class="control-label">KodeTarif</label>
						<div class="form-group">
							<input type="text" name="kodeTarif" value="<?php echo ($this->input->post('kodeTarif') ? $this->input->post('kodeTarif') : $pelanggan['kodeTarif']); ?>" class="form-control" id="kodeTarif" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>