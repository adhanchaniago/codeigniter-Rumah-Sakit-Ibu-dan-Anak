<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <div class="row">
         
          <center><h2>Input Registrasi</h2></center>
           <div class="row">
            
            </div>
            
             <form role="form" method="post" action="<?php echo base_url('page/simpanuser2') ?>" enctype="multipart/form-data">
              
                 
                  <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email_v" >
                  </div>

                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password_v" >
                  </div>
                  <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama_v" >
                  </div>
                  <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select   name="gender_v">
                 <option ></option>
                 <option value="L">L</option>
                 <option value="P">P</option>
                 </select>
                 </div>

                   <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat_v" rows="5" cols="55" class="form-control " id="alamat"  ></textarea>
                  </div>
                 
            
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                 
                <input type="reset" class="btn btn-danger" value="Reset" />
              
              </div>
            </form>
         
        
        </div>
      </div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
