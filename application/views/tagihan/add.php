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
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script type="text/javascript">
$("datepicker").datepicker( {
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
});
</script>