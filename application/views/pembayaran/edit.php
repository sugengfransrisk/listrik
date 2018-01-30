<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pembayaran Edit</h3>
            </div>
			<?php echo form_open('pembayaran/edit/'.$pembayaran['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal_bayar" class="control-label">Tanggal Bayar</label>
						<div class="form-group">
							<input type="text" name="tanggal_bayar" value="<?php echo ($this->input->post('tanggal_bayar') ? $this->input->post('tanggal_bayar') : $pembayaran['tanggal_bayar']); ?>" class="has-datepicker form-control" id="tanggal_bayar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_tagihan" class="control-label">Id Tagihan</label>
						<div class="form-group">
							<input type="text" name="id_tagihan" value="<?php echo ($this->input->post('id_tagihan') ? $this->input->post('id_tagihan') : $pembayaran['id_tagihan']); ?>" class="form-control" id="id_tagihan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah_tagihan" class="control-label">Jumlah Tagihan</label>
						<div class="form-group">
							<input type="text" name="jumlah_tagihan" value="<?php echo ($this->input->post('jumlah_tagihan') ? $this->input->post('jumlah_tagihan') : $pembayaran['jumlah_tagihan']); ?>" class="form-control" id="jumlah_tagihan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="biaya_denda" class="control-label">Biaya Denda</label>
						<div class="form-group">
							<input type="text" name="biaya_denda" value="<?php echo ($this->input->post('biaya_denda') ? $this->input->post('biaya_denda') : $pembayaran['biaya_denda']); ?>" class="form-control" id="biaya_denda" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="biaya_admin" class="control-label">Biaya Admin</label>
						<div class="form-group">
							<input type="text" name="biaya_admin" value="<?php echo ($this->input->post('biaya_admin') ? $this->input->post('biaya_admin') : $pembayaran['biaya_admin']); ?>" class="form-control" id="biaya_admin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $pembayaran['status']); ?>" class="form-control" id="status" />
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