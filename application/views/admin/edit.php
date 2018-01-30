<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Edit</h3>
            </div>
			<?php echo form_open('admin/edit/'.$admin['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $admin['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $admin['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fullname" class="control-label">Fullname</label>
						<div class="form-group">
							<input type="text" name="fullname" value="<?php echo ($this->input->post('fullname') ? $this->input->post('fullname') : $admin['fullname']); ?>" class="form-control" id="fullname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo ($this->input->post('role') ? $this->input->post('role') : $admin['role']); ?>" class="form-control" id="role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="text" name="foto" value="<?php echo ($this->input->post('foto') ? $this->input->post('foto') : $admin['foto']); ?>" class="form-control" id="foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $admin['alamat']); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_login" class="control-label">Last Login</label>
						<div class="form-group">
							<input type="text" name="last_login" value="<?php echo ($this->input->post('last_login') ? $this->input->post('last_login') : $admin['last_login']); ?>" class="has-datepicker form-control" id="last_login" />
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