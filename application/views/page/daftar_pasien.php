<!DOCTYPE html>
<html>
  <head>
    <title>Pendaftaran Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
  </head>
  
  <body>
        <?php $this->load->view('menu');?> 
        <div id="content">
       <table>
    <tr>
    <td><button style="margin-top: 0px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
    <i class="glyphicon glyphicon-align-left"></i> &nbsp; 
    </button> </td><td style=" padding-right: 10px;"></td><td style=" text-align: right; color: darkblue;">
    <?php echo date('l, d  M  Y'); ?></td>
    </tr>
    </table>
        <div  class=" container ">
          <center><h4>Pendaftaran Pasien</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanpasien') ?>" enctype="multipart/form-data" >

              <input type="hidden" name="id_pasien" value="">
              <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">
                <label >No. RM</label> <br>
                <input type="text" class="form-control"  name="no_rm"  value="" >
                </div>
              </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama_pasien" value="">
                </div>
                </div>


                <div class="col-md-10">
                 <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select  class="form-control"  name="jk_pasien">
                 <option value=""></option>
                 <option value="Laki-laki">Laki-laki</option>
                 <option value="Perempuan">Perempuan</option>
                 </select>
                 </div>
                 </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="">
                </div>
                 </div>

                
                 <div class="col-md-10">
                  <div class="form-group">
                  <label for="alamat_pasien">Alamat</label>
                  <textarea name="alamat_pasien" rows="2" cols="88" class="form-control " id="alamat"  ></textarea>
                  </div>
               </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="no_hp">Nomor Telpon</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="">
                </div>
              </div>

               <div class="col-md-10">
                <div class="form-group">
               <label >ID Dokter</label> <br>
                 <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="">
                 </div>
              </div> 

            
                <input type="hidden" class="form-control" id="nama" name="statuspasienid" value="baru">
              
              
              </div>
              <!-- /.box-body -->
                 <div class="col-md-10">
              <div class="box-footer">
               
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
               
                <input type="reset" class="btn btn-danger" value="Reset" />
              
              </div>
            </div>
            </form>



          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
         <!-- Bootstrap Js CDN -->
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
  </body>
</html>
