<!DOCTYPE html>
<html>
  <head>
    <title>Input Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <h2>Laporan Hasil Studi</h2>
           <div class="row">
            
            </div>
             <form role="form" method="post" action="<?php echo base_url('page/simpanuser3') ?>" enctype="multipart/form-data">
              
                 
                  <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="email_v" name="email_v" value="<?php echo $editstatus->email_v; ?>">
                  </div>

                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password_v" value="<?php echo $editstatus->password_v; ?>" >
                  </div>

                  <div class="form-group">
                  <label for="nama">nama</label>
                  <input type="text" class="form-control" id="nama" name="nama_v" value="<?php echo $editstatus->nama_v; ?>">
                  </div>
                 
                 
                 <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select   name="gender_v">
                 <option value="<?php  echo $editstatus->gender_v ?>"><?php echo $editstatus->gender_v ?></option>
                 <option value="L">L</option>
                 <option value="P">P</option>
                 </select>
                 </div>

                   <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat_v" rows="5" cols="55" class="form-control " id="alamat"  ><?php echo $editstatus->alamat_v ?></textarea>
                  </div>
              
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Disetujui">
                 
              
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
