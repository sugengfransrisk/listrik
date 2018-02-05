
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/tambah'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table  class="table table-striped table-bordered">
                    <tr>
						<th>No</th>
						<th>Username</th>
						<th>Fullname</th>
						<th>Role</th>
						<th>Foto</th>
						<th>Alamat</th>
						<th>Last Login</th>
						<th>Actions</th>
                    </tr>

                    <?php
                    $no=1;
                     foreach($admin as $a){ ?>
                    <tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $a['username']; ?></td>
						<td><?php echo $a['fullname']; ?></td>
						<td><?php echo $a['role']; ?></td>
						<td><?php echo $a['foto']; ?></td>
						<td><?php echo $a['alamat']; ?></td>
						<td><?php echo $a['last_login']; ?></td>
						<td>
                             <a  class="btn btn-info btn-xs prof" id="<?php echo $a['id']; ?>" ><span class="fa fa-search prof"></span><i > Info</i></a> 
                            <a href="<?php echo site_url('admin/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
 <div class="modal fade" id="profileModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Profil</h4>
              </div>
              <div class="modal-body">
                <div id="contents" class="container"></div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<script>
$(document).ready(function(){ 
    $(".prof").click(function(){
        var user_id = $(this).attr("id");
        $("#profileModal").modal("show");
        $.ajax({
            url: "<?php echo base_url() ?>admin/detail",
            type: "POST",
            data: "id="+user_id,
            cache: false,
            success: function(data){
                $('#contents').html(data);
                $("#detailModal").modal("show");
            }
        })
    });
});
</script>
    <script
        src="http://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('.table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</div>

