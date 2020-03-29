<!DOCTYPE html>
<html>
  <head>
    <title>Edit Pemeriksaan</title>
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
          <center><h4>Edit Pemeriksaan Dokter</h4></center>
          <div class="col-md-12"> <center> <table>
                <tr >
                  <td style=" padding: 5px; "><a href="#" class="btn btn-default btn-lg">HEMATOLOGI</a></td>
                  <td style=" padding: 5px; "><a href="#" class="btn btn-default btn-lg">IMUNOSEROLOGI</a></td>
                  <td style=" padding: 5px; "> <a href="#" class="btn btn-default btn-lg">KIMIA KLINIK</a></td>
                  <td style=" padding: 5px; ">  <a href="#" class="btn btn-default btn-lg">MIKROBIOLOGI</a></td>
                  <td style=" padding: 5px; "> <a href="#" class="btn btn-default btn-lg">URIN DAN FESES</a></td>
                </tr>
                <tr>
                  <td style=" text-align: center; ">Eirtrosit</td>
                  <td style=" text-align: center; ">HBsAg</td>
                  <td style=" text-align: center; ">SGOT</td>
                  <td style=" text-align: center; ">Kultur</td>
                  <td style=" text-align: center; ">PP test</td>
                </tr>
                <tr>
                  <td style=" text-align: center; ">Trombosit</td>
                  <td style=" text-align: center; ">Widal</td>
                  <td style=" text-align: center; ">SGPT</td>
                  <td style=" text-align: center; ">Pewarnaan Garam</td>
                  <td style=" text-align: center; ">Urin Rutin</td>
                </tr>
              </table> </center></div>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
           
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanperiksadokter') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_pemeriksaan" value="<?php if(isset($pemeriksa)) echo $pemeriksa->id_pemeriksaan; ?>">

              <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">
                <label >ID Pasien</label> <br>
                <input type="text" class="form-control"  name="id_pasien"  value="<?php echo $pemeriksa->id_pasien ?>" >
                </div>
              </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="options">Data</label>
                <input type="text" class="form-control" id="options" name="options" value="<?php echo $pemeriksa->options ?>">
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
