<!DOCTYPE html>
<html>
  <head>
    <title>Diagnosa</title>
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
          <center><h4>Pemeriksaan Dokter</h4>
             <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">Jenis Pemeriksaan</th>
                <th style=" text-align: center; ">Nilai Normal</th>
                <th style=" text-align: center; ">Hasil</th>
            </thead>
            <tbody>
               <?php $no=1; foreach ($pembayaran as $p){  ?>
                    <tr>
                       <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $p->jenis_pemeriksaan; ?></td>
                        <td><?php echo $p->nilai_normal; ?></td>
                        <td><?php echo $p->hasil; ?></td>

                    </tr>
                        <?php } ?>
                   
            </tbody>
          </table>
         </center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpandiagnosa') ?>" enctype="multipart/form-data" >
              <div class="box-body">
                <div class="col-md-5">
                  <img src="http://icons.iconarchive.com/icons/icons-land/medical/128/People-Doctor-Male-icon.png">
          <br>
                </div>
              </div>
              <div class="box-body">
                <div style=" padding-top: 10%;; padding-bottom: 10%; " class="col-md-5">
                 <strong>  ID Dokter : <?php echo $this->session->userdata('ses_id'); ?> <br>
                  Nama Dokter : <?php echo $this->session->userdata('ses_nama'); ?></strong>
                </div>
              </div>

              <input type="hidden" name="id_pasien" value="<?php echo $user->id_pasien; ?>">

              <div class="box-body">
              <div class="col-md-5">
                <div class="form-group">
                <label >No. RM</label> <br>
                <input readonly type="text" class="form-control"  name="no_rm"  value="<?php  echo $user->no_rm ?>" >
                </div>
              </div>

                <div class="col-md-5">
                <div class="form-group">
                <label for="nama">Nama Pasien</label>
                <input readonly type="text" class="form-control" id="nama" name="nama_pasien" value="<?php  echo $user->nama_pasien ?>">
                </div>
                </div>
                
                 <div class="col-md-10">
                  <div class="form-group">
                  <label for="diagnosa">Diagnosa</label>
                  <textarea name="diagnosa" rows="2" cols="88" class="form-control " id="diagnosa"  ><?php if(isset($diagnosa))  echo $diagnosa->diagnosa ?></textarea>
                  </div>
               </div>

               <div class="col-md-10">
                  <div class="form-group">
                  <label for="resep">Resep dan Dosis</label>
                  <textarea name="resep" rows="2" cols="88" class="form-control " id="resep"  ><?php if(isset($diagnosa))  echo $diagnosa->resep ?></textarea>
                  </div>
               </div>
            
                <input type="hidden" class="form-control" id="nama" name="statuspasienid" value="selesai">
              
              
              </div>
              <!-- /.box-body -->
                 <div class="col-md-10">
              <div class="box-footer">
               
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
               
              
              </div>
            </div>
            </form>
   
             <?php if(($user->statuspasienid=="selesai")) {?> 
             <form role="form" method="post" action="<?php echo base_url('page/gantistatus6') ?>" enctype="multipart/form-data">
              <center> <div class="col-md-12">
              <div class="box-footer" style=" padding-top: 30px ">
              <input type="hidden" name="id_pasien" value="<?php echo  $user->id_pasien; ?>">
              <input type="hidden" name="statuspasienid" value="selesai">
              <input type="submit" class="btn btn-danger   name="submit" value="Validasi 2"><br>
              <p style=" font-size: 14px; color: red ">Tekan tombol Validasi2 jika telah selesai </p>
             </div>
              </div> 
           </center>
            </form>
<?php } 
else
?>
<div>&nbsp;</div>
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
