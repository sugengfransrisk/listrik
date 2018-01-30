<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Add</h3>
            </div>
            <?php echo form_open('admin/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fullname" class="control-label">Fullname</label>
						<div class="form-group">
							<input type="text" name="fullname" value="<?php echo $this->input->post('fullname'); ?>" class="form-control" id="fullname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo $this->input->post('role'); ?>" class="form-control" id="role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="text" name="foto" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_login" class="control-label">Last Login</label>
						<div class="form-group">
							<input type="text" name="last_login" value="<?php echo $this->input->post('last_login'); ?>" class="has-datepicker form-control" id="last_login" />
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