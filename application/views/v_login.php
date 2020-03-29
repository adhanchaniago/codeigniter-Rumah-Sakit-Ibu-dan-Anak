<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body style=" background-image: url(assets/pic/background.jpg); ">

    <div class="container">
        <div class="col-md-4 col-md-offset-4" style=" margin-top: 60px ">
          <form class="form-signin" action="<?php echo base_url(); ?>login/auth" method="post">

            <h2 style=" text-align: center; " class="form-signin-heading"><b>PEMBUKUAN <br>DUSUN WISATA</b></h2>
            <center><img width="100px" src="assets/ico/hospital.png"></center>
            <div style=" padding: 20px; background-color: #eee ">
            <center><label style="text-align: center">Sign In</label></center>

            <label for="username" class="sr-only">Username</label>

           <label>Username</label> <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>

            <label for="password" class="sr-only">Password</label>
            <label style=" padding-top: 10px ">Password</label><input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
             <p style="color: red"><?php echo $this->session->flashdata('msg');?></p>
           <center> <button class="btn btn-lg btn-primary " type="submit">Sign in</button></center>
          </div>
          </form>
        </div>
        </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
