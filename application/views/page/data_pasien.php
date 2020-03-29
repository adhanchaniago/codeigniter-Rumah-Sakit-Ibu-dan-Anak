<!DOCTYPE html>
<html>
  <head>
    <title>Data Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
    </table>&nbsp; &nbsp;
    
        <div  class=" container ">
          <center><h4>Data Pasien</h4></center>
          <div class="col-md-12 text-right" style=" padding-bottom: 3px; ">
            <a class="btn btn-default" href="<?php echo base_url(); ?>page/daftar_pasien"><i class="glyphicon glyphicon-plus "></i> Tambah Pasien</a> </div>
            <div class="col-md-12">
          <div class="box box-primary">
        <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <tr>
                <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">No RM</th>
                <th style=" text-align: center; ">Nama</th>
                <th style=" text-align: center; ">Jenis Kelamin</th>
                <th style=" text-align: center; ">Tanggal Lahir</th>
                <th style=" text-align: center; ">Alamat</th>
                <th style=" text-align: center; ">Status</th>
                <th style=" text-align: center; ">Aksi</th>
              </tr>
            </thead>
            <tbody>
               <?php $no=1; foreach ($user as $u){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $u->no_rm; ?></td>
                        <td><?php echo $u->nama_pasien; ?></td>
                        <td><?php echo $u->jk_pasien; ?></td>
                        <td><?php echo $u->tgllahir; ?></td>
                        <td><?php echo $u->alamat_pasien; ?></td>
                        <td style=" text-align: center; "><img src="<?php echo base_url('assets/ico/'.$u->statuspasien) ?>"></td>
                        <td style=" text-align: center; ">
                          <a class="btn btn-default " href="cetak_pasien/<?php echo $u->id_pasien; ?> ">Cetak </a>

                         <a class="btn btn-warning " href="rekam_medis/<?php echo $u->id_pasien; ?> ">Rekam Medis </a>  
                           <a class="btn btn-info glyphicon glyphicon-edit" href="edit_pasien/<?php echo $u->id_pasien; ?> "> </a> 
                        <a class="btn btn-danger glyphicon glyphicon-trash" href="deletepasien/<?php echo  $u->id_pasien; ?>"></a>
                        </td>
                    </tr>
                        <?php } ?>
              
            </tbody>

          </table>

          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
   <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
         <!-- Bootstrap Js CDN -->
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
          <script type="text/javascript">
    $(document).ready(function() {
        $('#table1').DataTable();
    } );
    </script>
  </body>
</html>
