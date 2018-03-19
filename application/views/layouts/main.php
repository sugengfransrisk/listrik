<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/uploads/logo.png">

    <title>LISTRIKU | <?php 
                      echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('role');
                      ?> Dashboard</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    
    <!-- Table css -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>index.php/petugas/" class="site_title"><img style="width: 40px; " src="<?php echo base_url() ?>assets/uploads/logo.png" alt="home" /><span >LISTRIKU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                 <img src="<?php echo base_url() ?>uploads/<?php echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('foto'); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span> 
                      <?php 
                      echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('role');
                      ?>
                </span>
                <h2><b><?php 
                     echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('fullname'); 
                      ?></b></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/Dashboard/"><i class="fa fa-home"></i> Dashboard </a></li>
                  <?php if ($this->session->userdata('role')=='admin') {
                   # code...
                 ?>
                  <li><a><i class="fa fa-table"></i> Lihat dan Kelola Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin/index');?>">Data Admin</a></li>
                      <li><a href="<?php echo base_url('Pelanggan/index');?>">Data Pelanggan</a></li>
                      <li><a href="<?php echo base_url('Tarif/index');?>">Data Tarif</a></li>
                      <li><a href="<?php echo base_url('Tagihan/index');?>">Data Tagihan</a></li>
                      <li><a href="<?php echo base_url('Pembayaran/index');?>">Data Pembayaran</a></li>
                      <!--<li><a href="<?php echo base_url(); ?>index.php/admin/lihatpelanggaran">Data Pelanggaran</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Tambah Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin/add');?>">Data Admin</a></li>
                      <li><a href="<?php echo base_url('Pelanggan/add');?>">Data Pelanggan</a></li>
                      <li><a href="<?php echo base_url('Tarif/add');?>">Data Tarif</a></li>
                      <li><a href="<?php echo base_url('Tagihan/add');?>">Data Tagihan</a></li>
                      <li><a href="<?php echo base_url('Pembayaran/add');?>">Data Pembayaran</a></li>
                      <!--<li><a href="<?php echo base_url(); ?>index.php/admin/tambahpelanggaran">Data Pelanggaran</a></li>-->
                    </ul>
                  </li>
                    <?php }?>
                 <?php if ($this->session->userdata('role')=='pelanggan') {
                   # code...
                 ?>
                  <li><a href="<?php echo base_url(); ?>Tagihan/index"><i class="fa fa-calendar"></i> Tagihan Anda </a></li>
                  <li><a href="<?php echo base_url(); ?>Pembayaran/index"><i class="fa fa-credit-card"></i> List Pembayaran </a></li>
                  <li><a href="<?php echo base_url(); ?>layanan"><i class="fa fa-comments"></i> Layanan Pelanggan </a></li>
                  <?php }?>
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ?>uploads/<?php echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('foto'); ?>" alt=""><?php  echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('fullname');  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                <?php if($this->session->userdata('role')=='admin'): ?>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                   
                                    <span class="badge bg-green"></span>
                                   
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                               
                                    <li>
                                        <a>
                                            <span class="image"><img src=""  alt="Profile Image" /></span>
                                            <span>
                                                <span></span>
                                                <span class="time">15</span>
                                            </span>
                                            <span class="message">
                                              <b>hai
                                            </span>
                                        </a>
                                    </li>
                               
                                    <li>
                                        <div class="text-center">
                                            <a href="<?php echo base_url() ?>notification/">
                                                <strong>Lihat semua notifikasi</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>Tidak Ada Notifkasi</strong>
                                            </a>
                                        </div>
                                    </li>
                               
                                </ul>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        <!-- /top navigation -->

         <?php                    
            if(isset($_view) && $_view)
            $this->load->view($_view);
        ?>      

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistem Informasi Pembayaran Listrik | LISTRIKU Beta release
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/validator/validator.js"></script>

    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/gentelella/build/js/custom.min.js"></script>
    
  </body>
</html>
