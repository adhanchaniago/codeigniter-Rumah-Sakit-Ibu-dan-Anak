<!DOCTYPE html>
<html>
  <head>
    <title>Edit atau Tambah Pembayaran</title>
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
          <center><h4>Pembayaran</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanpembayaran') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_pembayaran" value="<?php if(isset($pembayaran)) echo $pembayaran->id_pembayaran; ?>">
              <input type="hidden" name="id_pasien" value="<?php if(isset($pembayaran)) echo $pembayaran->id_pasien; ?>">

              <div class="box-body">
              
                <!-- <div class="col-md-10">
                <div class="form-group">
                <label for="jenis_pemeriksaan">Id</label>
                 <input type="text" name="id_pasien" value="<?php echo $user->id_pasien; ?>">
</div>
                </div> -->
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="jenis_pemeriksaan">Jenis Pemeriksaan</label>
                <input type="text" class="form-control" id="jenis_pemeriksaan" name="jenis_pemeriksaan" value="<?php if(isset($pembayaran)) echo $pembayaran->jenis_pemeriksaan ?>">
                </div>
                </div>


                <div class="col-md-10">
                <div class="form-group">
                <label for="nilai_normal">Nilai Normal</label>
                <input type="text" class="form-control" id="nilai_normal" name="nilai_normal" value="<?php if(isset($pembayaran)) echo $pembayaran->nilai_normal ?>">
                </div>
                 </div>

                 <div class="col-md-10">
                <div class="form-group">
                <label for="hasil">Hasil</label>
                <input type="text" class="form-control" id="hasil" name="hasil" value="<?php if(isset($pembayaran)) echo $pembayaran->hasil ?>">
                </div>
                 </div>

                   <div class="col-md-10">
                <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php if(isset($pembayaran)) echo $pembayaran->harga ?>">
                </div>
                </div>

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
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
  </body>
</html>
