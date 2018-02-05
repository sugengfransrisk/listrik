<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Add</h3>
            </div>
          	<div class="box-body">
          		<div class="row clearfix">
          			<form method="post" action="<?php echo base_url(); ?>admin/add" enctype="multipart/form-data">
					<div class="col-md-6">
						
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password"  class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username"  class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fullname" class="control-label">Fullname</label>
						<div class="form-group">
							<input type="text" name="fullname" class="form-control" id="fullname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<input type="text" name="role" class="form-control" id="role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="file"  name="foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" class="form-control" id="alamat" />
						</div>
					</div>
				
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
            	</form>
          	</div>
      	</div>
    </div>
</div>
