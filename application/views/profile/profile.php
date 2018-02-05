<body>
<div class="col-md-12 col-lg-12 col-xs-12">
	<div class="col-lg-5 col-md-5 col-xs-12">
		<img style="max-height: 300px;max-width: 250px" src="<?php echo base_url() ?>/upload<?php echo $detail->foto ?>">
	</div>
	<div class="col-lg-7 col-md-7 col-xs-12">
		<label>Nama Lengkap</label>
        <p>&emsp;&nbsp;<?php echo $detail->fullname ?></p>
		<label>Username</label>
        <p>&emsp;&nbsp;<?php echo $detail->username ?></p>
        <label>Alamat</label>
       
        <p>&emsp;&nbsp;<?php echo $detail->alamat ?></p>
        <label>Last Login</label>
        
        <p>&emsp;&nbsp;<?php echo $detail->last_login ?></p>
        
        
	</div>
</div>
</body>