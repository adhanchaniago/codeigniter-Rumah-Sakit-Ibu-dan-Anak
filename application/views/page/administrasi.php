<!DOCTYPE html>
<html>
  <head>
    <title>Administrasi Pendaftaran</title>
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
          <center><h3>Administrasi Pendaftaran</h3>
           <img src="http://icons.iconarchive.com/icons/aha-soft/free-large-boss/96/Admin-icon.png">
            <?php $this->session->set_userdata('ses_id'); ?>
             <?php $this->session->set_userdata('ses_name'); ?>
             <br>
            <a href="<?php echo base_url().'page/daftar_pasien'?>" type="button" class="btn btn-warning">Pasien baru</a>
             <a href="<?php echo base_url().'page/data_pasien'?>" type="button" class="btn btn-info">Pasien lama</a>
         </center>
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
