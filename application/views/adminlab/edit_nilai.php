<!DOCTYPE html>
<html>
  <head>
    <title> Edit Jenis Pemeriksaan</title>
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
        <div  class=" container " style="padding-left: 6%;">
          <center><h4>Penggunaan Logistik</h4></center>
         

            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpannilai') ?>" enctype="multipart/form-data" >

               <input type="hidden" name="id_nilai" value="<?php if(isset($editnilai)) echo $editnilai->id_nilai; ?>">

               <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">
                <label for="id">Jenis Pemeriksaan</label>
                <input type="text" class="form-control" id="id" name="jenis" value="<?php if(isset($editnilai)) echo $editnilai->jenis ?>">
                </div>
                </div>

                
                   <div class="col-md-10">
                <div class="form-group">
                <label for="nilai">Nilai Normal</label>
                <input type="text" class="form-control" id="pilihan" name="pilihan" value=" <?php if(isset($editnilai))echo $editnilai->pilihan ?>">
                </div>
                </div>
                
                
              <div class="col-md-10">
                <div class="form-group">
                <label for="id">Nama Logistik</label>
                <input type="text" class="form-control" id="id" name="nama_brg" value="<?php if(isset($editnilai)) echo $editnilai->nama_brg ?>">
                </div>
                </div>

                
                <div class="col-md-10">
                <div class="form-group">
                <label for="id">Tanggal Beli</label>
                <input type="date" class="form-control" id="id" name="tglbeli" value="<?php if(isset($editnilai)) echo $editnilai->tglbeli ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="id">Tanggal Beli</label>
                <input type="date" class="form-control" id="id" name="tglkadaluarsa" value="<?php if(isset($editnilai)) echo $editnilai->tglkadaluarsa ?>">
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
