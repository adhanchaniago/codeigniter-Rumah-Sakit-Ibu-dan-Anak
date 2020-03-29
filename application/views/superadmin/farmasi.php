<!DOCTYPE html>
<html>
  <head>
    <title>Data Admin Farmasi</title>
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
    </table>
    
        <div  class=" container ">
          <center><h4>Data Admin Farmasi</h4></center>
          <div class="col-md-13 text-right" style=" padding-bottom: 3px; ">
            <a class="btn btn-default" href="<?php echo base_url(); ?>superadmin/edit_farmasi"><i class="glyphicon glyphicon-plus "></i> Tambah Admin Farmasi</a> </div>
            <div class="col-md-13">
          <div class="box box-primary">
        <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <tr>
                <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">Nama</th>
                <th style=" text-align: center; ">Username</th>
                <th style=" text-align: center; ">Password</th>
                <th style=" text-align: center; ">Alamat</th>
                <th style=" text-align: center; ">JK</th>
                <th style=" text-align: center; ">Aksi</th>
              </tr>
            </thead>
            <tbody>
               <?php $no=1; foreach ($user as $u){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $u->nama_farmasi; ?></td>
                        <td><?php echo $u->username_farmasi; ?></td>
                        <td><?php echo $u->password_farmasi; ?></td>
                        <td><?php echo $u->alamat_farmasi; ?></td>
                        <td><?php echo $u->jk_farmasi; ?></td>
                       
                        <td style=" text-align: center; "> 
                      <a class="btn btn-info glyphicon glyphicon-edit" href="/ci_login/superadmin/edit_farmasi/<?php echo $u->id_farmasi; ?> "> </a>
                         <a class="btn btn-danger glyphicon glyphicon-trash" href="/ci_login/superadmin/deletefarmasi/<?php echo  $u->id_farmasi; ?>"></a>
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
