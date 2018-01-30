<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tarif Add</h3>
            </div>
            <?php echo form_open('tarif/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
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