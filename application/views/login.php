<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LISTRIKU</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/uploads/logo.png">

  
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css">


  
</head>

<body>

  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong><a class="logo"> &nbsp; &nbsp; &nbsp;<b><img style="width: 50px; " src="<?php echo base_url() ?>assets/uploads/logo.png" alt="home" /><span >LISTRIKU <small>|<i> Admin</i></small></span></a></h1>
      <form method="post" action="<?php echo base_url() ?>login/dologin">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="#" class="lnk">
             
            <button type="submit" class="btn btn--right">Sign in  </button>
            <button type="submit" class="btn btn--left">Daftar  </button>
          
    
          </div>
      </form>

  </div>
</div>
<div class="container">
                  
                  <p>Copyright © <?php echo date('Y') ?> All Rights Reserved. Mastedz Soft. Privacy and Terms</p>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
