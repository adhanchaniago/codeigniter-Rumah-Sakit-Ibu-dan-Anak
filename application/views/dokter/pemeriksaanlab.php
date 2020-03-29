<!DOCTYPE html>
<html>
  <head>
    <title>Pemeriksaan Lab</title>
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
          <center><h4>Pemeriksaan Lab</h4>
         </center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpandiagnosa') ?>" enctype="multipart/form-data" >
              <div class="box-body">
                <div class="col-md-4">
                  <img src="http://icons.iconarchive.com/icons/icons-land/medical/128/People-Doctor-Male-icon.png">
                <br>
                </div>
              </div>
              <div class="box-body">
                
              </div>

              <input type="hidden" name="id_pasien" value="<?php  $user->id_pasien; ?>">
             
              <div  style=" padding-top: 30px"; class="box-body">
              <div class="col-md-5">
                <div class="form-group">
                <label >No. RM :</label><label><?php  echo $user->no_rm ?></label>
               </div>
              </div>

                <div class="col-md-5" style=" padding-bottom:  20px; ">
                <div class="form-group">
                <label for="nama">Nama Pasien :</label>
                <label><?php  echo $user->nama_pasien ?></label>
                </div>
                </div>
                </div>
              </div>
            </div>
            </form>
            <center>
              <table>
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
              </table>
            </center>
            <div style=" padding-left: 10%; padding-top: 10px;  " class=" col-md-12 " ><center>
           <?php if(isset($tampilperiksa)) {?> 

            <center><table border="1" class="table table-hover table-responsive table-bordered table-striped">
            <tr>
                <td style=" text-align: center; "><b>Pemeriksaan</b></td>
                <td>Aksi</td>
            </tr>
            <tr>
                  <td><?php echo $tampilperiksa->options ?></td>
                  <td><a href="/ci_login/page/edit_pemeriksaan/<?php echo $tampilperiksa->id_pemeriksaan; ?> " class="btn btn-primary glyphicon glyphicon-edit "></a></td>
            </tr>
            </table></center><center>
          </div>

            <?php }
            else ?>
              <div>&nbsp;</div>

            <?php if(($user->statuspasienid=="baru")) {?>
            <form role="form" method="post" action="<?php echo base_url('page/gantistatus') ?>" enctype="multipart/form-data">
              <center> <div class="col-md-12">
              <div class="box-footer" style=" padding-top: 10px ">
              <input type="hidden" name="id_pasien" value="<?php echo  $user->id_pasien; ?>">
              <input type="hidden" name="statuspasienid" value="proses">
              <input type="submit" class="btn btn-warning   name="submit" onclick="$(this).hide()" value="Proses">
             </div>
              </div> <p style=" font-size: 14px; ">*Tombol Proses tidak perlu di tekan jika tombol laboraturium masih ada</p>
           </center>
            </form>
             <?php } 
             else
             ?>
           <div>&nbsp;</div>
           
            <?php if(!isset($tampilperiksa)) {?> 
            <form>
               <center> <div class="col-md-12">
              <div class="box-footer" style=" padding-top: 10px ">
                <a href="/ci_login/page/pemeriksaanlab2/<?php echo $user->id_pasien; ?> " class="btn btn-primary ">Laboraturium</a>
              </div>
            </div></center>
            </form>
            <?php } ?>

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
