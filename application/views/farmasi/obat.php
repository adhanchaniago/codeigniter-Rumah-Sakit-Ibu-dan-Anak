

<!DOCTYPE html>
<html>
  <head>
    <title>Farmasi</title>
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
           <center><h4>Pembayaran</h4></center>
            <?php if(isset($tampilperiksa)) {?> 
           <b>Pemeriksaan</b> : <?php echo $tampilperiksa->options ?>
          <?php } ?>
         

          <!-- <div class="col-md-13 text-right" style=" padding-bottom: 1px; ">
            <a class="btn btn-default" href="<?php echo base_url(); ?>page/add_obat/<?php echo $user->id_pasien; ?>"><i class="glyphicon glyphicon-plus "></i> Tambah Data Obat</a> </div> -->
            <div class="col-md-13">
          <div class="box box-primary">
        <!-- <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
                <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">Nama Obat</th>
                <th style=" text-align: center; ">Dosis</th>
                <th style=" text-align: center; ">Jumlah</th>
                <th style=" text-align: center; ">Aksi</th>
            </thead>
            <tbody>
               <?php $no=1; foreach ($obatm as $ob){  ?>
                    <tr>
                       <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $ob->nama_obat; ?></td>
                        <td><?php echo $ob->dosis; ?></td>
                        <td><?php echo $ob->jumlah; ?></td>
                        <td style=" text-align: center; "> 
                         <a class="btn btn-info glyphicon glyphicon-edit" href="/ci_login/page/edit_obat/<?php echo $ob->id_stokobat; ?> "> </a>
                         <a class="btn btn-danger glyphicon glyphicon-trash" href="/ci_login/page/deleteobat/<?php echo  $ob->id_stokobat; ?>"></a>
                          </td>
                    </tr>
                        <?php } ?>
            </tbody>
          </table> -->
          </div>
         <form  style="padding-left: 23%" role="form" method="post" action="" enctype="multipart/form-data" >
             
             

              <input type="hidden" name="id_pasien" value="<?php echo $user->id_pasien; ?>">
              <div class="box-body">

                
                <div class="col-md-10">
                  <div class="form-group">
                  <label for="no_rm">No RM</label>
                  <input name="no_rm" class="form-control " id="no_rm"  value="<?php echo $user->no_rm; ?>">
                  </div>
               </div>

                <div class="col-md-10">
                  <div class="form-group">
                  <label for="nama_pasien">Nama Pasien</label>
                  <input name="nama_pasien" class="form-control " id="nama_pasien"  value="<?php echo $user->nama_pasien; ?>">
                  </div>
               </div>

                <div class="col-md-10">
                  <div class="form-group">
                  <label for="resep">Dokter Pengirim</label>
                 <input name="nama_dokter" class="form-control " id="nama_dokter"  value="<?php echo $dokter->nama_dokter; ?>">
                  </div>
               </div>

               <div class="col-md-10">
                  <div class="form-group">
                  <label for="resep">Resep</label>
                  <textarea name="resep" rows="2" cols="88" class="form-control " id="resep"  ><?php if(isset($diagnosa))  echo $diagnosa->resep ?></textarea>
                  </div>
               </div>
  
              </div>
              <!-- /.box-body -->
                 
            </form>
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
