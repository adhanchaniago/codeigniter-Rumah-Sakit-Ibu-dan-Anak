<!DOCTYPE html>
<html>
  <head>
    <title>Edit Obat</title>
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
    </table>
        <div  class=" container ">
          <center><h4>Pembayaran</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanobat') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_stokobat" value="">
              <input type="hidden" name="id_pasien" value="<?php if(isset($editobat)) echo $editobat->id_pasien; ?>">
              <div class="box-body">
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?php if(isset($editobat)) echo $editobat->nama_obat; ?>">
                </div>
                </div>
                <div class="col-md-10">
                <div class="form-group">
                <label for="dosis">Dosis</label>
                <input type="text" class="form-control" id="dosis" name="dosis" value="<?php if(isset($editobat)) echo $editobat->dosis; ?>">
                </div>
                 </div>
                 <div class="col-md-10">
                <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php if(isset($editobat)) echo $editobat->jumlah; ?>">
                </div>
                 </div>

                   <div class="col-md-10">
                <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php if(isset($editobat)) echo $editobat->harga; ?>">
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
