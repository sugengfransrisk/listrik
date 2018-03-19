<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Admin</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
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
                     </thead>
                    <tbody>
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
                            <a href="<?php echo base_url('admin/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kelola</a> 
                            <a href="<?php echo base_url('admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </div>
                    </div>
                  </div>
                </tbody>
            </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
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

