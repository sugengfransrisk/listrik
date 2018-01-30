<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Password</th>
						<th>Username</th>
						<th>Fullname</th>
						<th>Role</th>
						<th>Foto</th>
						<th>Alamat</th>
						<th>Last Login</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['password']; ?></td>
						<td><?php echo $a['username']; ?></td>
						<td><?php echo $a['fullname']; ?></td>
						<td><?php echo $a['role']; ?></td>
						<td><?php echo $a['foto']; ?></td>
						<td><?php echo $a['alamat']; ?></td>
						<td><?php echo $a['last_login']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
