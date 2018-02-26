 <!-- Main content -->
  
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
           <span class="logo-lg"><img style="width: 30px; " src="<?php echo base_url() ?>assets/uploads/logo.png" alt="home" />LISTRIKU</span>
            <small class="pull-right"><?php echo date('Y-m-d')?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
         
          <address>
           <h2><br>
            Nama :<?php echo $far['nama']?><br>
            Alamat:<?php echo $far['alamat']?><br>
           </h2>
          </address>
        </div>
       
      <div class="row">
        <div class="col-xs-4 invoice-col">
          <p class="lead">Amount Due <?php
            $bulan = array("Januari", "February", "Maret","April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    
                    
            $d=$far['bulanTagih']; 

           echo $bulan["$d"];?>-<?php echo $far['tahunTagih']?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Pemakaian:</th>
                <td>Rp.<?php echo number_format($total)?></td>
              </tr>
              <tr>
                <th>Biaya Admin</th>
                <td>Rp. 5,000</td>
              </tr>
              <tr>
                <th>Denda:</th>
                <td>Rp.<?php
                 $now = date('Y-m-d');
                $bulan= date('m');
                $tgl= date('d');
                $thn=date('Y');
                if (($tgl>30 )||( $far['bulanTagih'] < $bulan  )||($far['tahunTagih']<>  $thn  )) {

            
                $denda=5000;
               } else {
                 $denda=0;
               }
               echo $denda;


                ?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Rp.
                  <?php
                  $admin=5000;
                  $semua=$total+$admin+$denda;
                  echo number_format($semua);



                  ?>

                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Table row -->
   
        <!-- /.col -->
      </div>

      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-4">
          <p class="lead">Metode Pembayaran:</p>
          <img src="<?php echo base_url() ?>assets/vendors/dist/img/credit/visa.png" alt="Visa">
          <img src="<?php echo base_url() ?>assets/vendors/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?php echo base_url() ?>assets/vendors/dist/img/credit/american-express.png" alt="American Express">
          <img src="<?php echo base_url() ?>assets/vendors/dist/img/credit/paypal2.png" alt="Paypal">

         
          
          
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a onclick="window.print();" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <a href="<?php echo site_url('pembayaran/ok/'.$far['id']); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>