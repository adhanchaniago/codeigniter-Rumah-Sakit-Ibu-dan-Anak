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
              <input type="hidden" name="id_pasien" value="<?php  $user->id_pasien; ?>">
              <div  style=" padding-top: 30px"; class="box-body">
                 <div class="col-md-5">
                <div class="form-group">
                <label >ID :</label><label><?php  echo $user->id_pasien ?></label>
               </div>
              </div>
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
