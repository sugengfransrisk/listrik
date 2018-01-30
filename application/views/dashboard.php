<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h2 class="text-muted vb">PELANGGAN</h2> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-info">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h2 class="text-success vb">PEMBAYARAN</h2> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-warning">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h2 class="text-muted vb">ADMIN</h2> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-success">23</h3> </div>
                                    
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    
                                </div>
                            </div>
                        </div>
                    </div>               
                     
                        <div class="white-box">
                            <div class="text-center">
                            <div class="text-left">
                                <h2 class="text-info">Penggunaan Listik Anda</h2>
                            </div>
                            <div class="col-in row">
                                <canvas class="text-center" id="canvas" width="1000" height="280"></canvas>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-users text-info"></i>  Anggota <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>anggota">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Jenkel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $agtNo = $agtCount; foreach($agtList as $agt): ?>
                            <?php if($agt->GENDER=='L'){$g='Laki-laki';}else{$g='Perempuan';} ?>
                            <tr>
                                <th scope="row"><?php echo $agtNo; ?></th>
                                <td><?php echo $agt->ID_ANGGOTA ?></td>
                                <td><?php echo $agt->FULL_NAME ?></td>
                                <td><?php echo $g ?></td>
                            </tr>
                            <?php $agtNo--;endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-book"></i>  Buku <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>buku">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $bkNo = $bkCount; foreach($bkList as $bk): ?>
                            <tr>
                                <th scope="row"><?php echo $bkNo; ?></th>
                                <td><?php echo $bk->ID_BUKU ?></td>
                                <td><?php echo $bk->TITLE ?></td>
                                <td><?php echo $bk->AUTHOR ?></td>
                                <td><?php echo $bk->QTY ?></td>
                            </tr>
                            <?php $bkNo--;endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-user"></i>  Petugas <small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>petugas">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ptgNo = $ptgCount; foreach($ptgList as $ptg): ?>
                            <?php if($ptg->ROLE=='admin'){$r='Petugas';}else{$r='Admin';} ?>
                            <tr>
                                <th scope="row"><?php echo $ptgNo; ?></th>
                                <td><?php echo $ptg->ID_ADMIN ?></td>
                                <td><?php echo $ptg->FULLNAME ?></td>
                                <td><?php echo $ptg->USERNAME ?></td>
                                <td><?php echo $r ?></td>
                            </tr>
                            <?php $ptgNo--;endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list-alt"></i>  Transaksi<small>4 terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>transaksi">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jumlah Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ct=$trnCount;foreach($trnList as $trn): ?>
                            <tr>
                                <th scope="row"><?php echo $ct; ?></th>
                                <td><?php echo $trn->ID_PINJAM ?></td>
                                <td><?php echo $trn->FULL_NAME ?></td>
                                <td><?php echo $trn->TGL_PINJAM ?></td>
                                <td><?php echo $trn->JML_BUKU ?></td>
                            </tr>
                            <?php $ct--;endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
                    

                    <!-- /.col -->
                    
                    <!-- /.col -->
              

	<!--<?php/*
        foreach($data as $data){
            $merk[] = $data->merk;
            $stok[] = (float) $data->stok;
        }
    ?>


	

	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
	<script>

            var lineChartData = {
                labels : <?php echo json_encode($merk);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
   	</script>*/
    
