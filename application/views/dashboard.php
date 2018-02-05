
  
<div id="row">
            <div class="col-md-12">
              <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Dashboard </h3>
               </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
            <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-address-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pelanggan</span>
              <span class="info-box-number"><?php echo $plcount; ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin</span>
              <span class="info-box-number"><?php echo $admcount; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tarif</span>
              <span class="info-box-number"><?php echo $trfcount; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tagihan</span>
              <span class="info-box-number">41,410 Dibayar</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Dari 50,000 tagihan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>            
                       <div class="box box-danger">
            <div class="box-header">
                
               </div>
                    <!-- /.col-lg-12 -->
               
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


                        
    
   
        </div>
        <?php
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
        
 
                    

                    <!-- /.col -->
                    
                    <!-- /.col -->
              

	
