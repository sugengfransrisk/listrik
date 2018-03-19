       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="icon"><i class="fa fa-users"></i></a>
                  <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="count"><?php echo $admcount; ?></a>                 
                  <h3>Admin LISTRIKU</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="icon"><i class="fa fa-address-book"></i></a>
                  <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="count"><?php echo $plcount; ?></a> 
                  <h3>Pelanggan</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="icon"><i class="fa fa-print"></i></a>
                  <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="count"><?php echo $byrcount; ?></a> 
                  <h3>pembayaran</h3>
                </div>
              </div>
               <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="icon"><i class="fa fa-credit-card"></i></a>
                  <a href="<?php echo base_url(); ?>index.php/admin/kelolasiswa" class="count"><?php echo $tgcount; ?></a> 
                  <h3>Tagihan</h3>
                </div>
              </div>
              <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-users"></i>  Admin <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>admin">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>No</th>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Role</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $no=1;
                     foreach($adminlist as $a){ ?>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a->username; ?></td>
                    <td><?php echo $a->fullname ?></td>
                    <td><?php echo $a->role ?></td>
                   
            
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-credit-card"></i>  Tagihan <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>pembayaran">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>ID</th>
                                <th>Tanggal Bayar</th>
                                <th>Id Tagihan</th>
                                <th>Jumlah Tagihan</th>
                               
                                           
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pembayaranlist as $bk): ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $bk->tanggal_bayar ?></td>
                                <td><?php echo $bk->id_tagihan ?></td>
                                <td><?php echo $bk->jumlah_tagihan ?></td>
                                <td><?php echo $bk->status ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-print"></i>  Pembayaran <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>pembayaran">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>ID</th>
                                <th>Tanggal Bayar</th>
                                <th>Id Tagihan</th>
                                <th>Jumlah Tagihan</th>
                               
                                           
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pembayaranlist as $bk): ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $bk->tanggal_bayar ?></td>
                                <td><?php echo $bk->id_tagihan ?></td>
                                <td><?php echo $bk->jumlah_tagihan ?></td>
                                <td><?php echo $bk->status ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-book"></i>  Pembayaran <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>pembayaran">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>ID</th>
                                <th>Tanggal Bayar</th>
                                <th>Id Tagihan</th>
                                <th>Jumlah Tagihan</th>
                               
                                           
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pembayaranlist as $bk): ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $bk->tanggal_bayar ?></td>
                                <td><?php echo $bk->id_tagihan ?></td>
                                <td><?php echo $bk->jumlah_tagihan ?></td>
                                <td><?php echo $bk->status ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   
   
               <?php if ($this->session->userdata('role')=='pelanggan') {
                   # code...
                 ?>
              <!--
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Verifikasi Pelanggaran Baru</h2>                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Absen</th>
                          <th>Jenis Pelanggaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Den Mas Ganteng Notobotolimo Ndekmejo Karosilo</td>
                          <td>12T1</td>
                          <td>69</td>
                          <td>Kedisiplinan</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>emil</td>
                          <td>12R1</td>
                          <td>63</td>
                          <td>Kerapian</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>yoyok</td>
                          <td>12R6</td>
                          <td>62</td>
                          <td>Kerajinan</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              -->

               <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Selamat Datang<small> <?php 
                      echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('role');
                      ?> !</small></h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron"><center>
                      <h1>Selamat Datang,  <?php 
                      echo $this->db->where('username', $this->session->userdata('username'))->get('admin')->row('fullname');
                      ?> !</h1>
                    </center>
                    </div>
                  </div>
                 

                </div>
              </div>
            </div>

                 
        <!-- /page content -->

               
                       
                      


                        
    
   
        </div>
        <?php
        $bulans = array("Januari", "February", "Maret","April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    
        foreach($data as $data){
            $bulan[] = $data->bulanTagih;
           
            $pakai[] = (float) $data->pemakaian;
        }
    ?>
        <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($pakai);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
    </script>
 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <?php }?>
 
                    

                    <!-- /.col -->
                    
                    <!-- /.col -->
              

	
