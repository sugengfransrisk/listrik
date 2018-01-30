<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tagihan Add</h3>
            </div>
            <?php echo form_open('tagihan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tahunTagih" class="control-label">TahunTagih</label>
						<div class="form-group">
							<input type="text" name="tahunTagih" value="<?php echo $this->input->post('tahunTagih'); ?>" class="has-datepicker form-control" id="tahunTagih" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bulanTagih" class="control-label">BulanTagih</label>
						<div class="form-group">
							<input type="text" name="bulanTagih" value="<?php echo $this->input->post('bulanTagih'); ?>" class="has-datepicker form-control" id="bulanTagih" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pemakaian" class="control-label">Pemakaian</label>
						<div class="form-group">
							<input type="text" name="pemakaian" value="<?php echo $this->input->post('pemakaian'); ?>" class="form-control" id="pemakaian" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pelanggan_id" class="control-label">Pelanggan Id</label>
						<div class="form-group">
							<input type="text" name="pelanggan_id" value="<?php echo $this->input->post('pelanggan_id'); ?>" class="form-control" id="pelanggan_id" />
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