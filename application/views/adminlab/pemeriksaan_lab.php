

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
    </table>
    
        <div  class=" container ">
           <center><h4>Pemeriksaan Laboraturium</h4></center>
            <?php if(isset($tampilperiksa)) {?> 
           <b>Pemeriksaan</b> : <?php echo $tampilperiksa->options ?>
          <?php } ?>
          <table>
            <tr>
              <td><b>ID Kasir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;<?php echo $this->session->userdata('ses_id'); ?>&nbsp;&nbsp;</td>
              <td><b>No RM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;<?php echo $user->no_rm; ?>&nbsp;&nbsp;</td>
              <td><b>Dokter Pengirim :</b> &nbsp;<?php echo $dokter->nama_dokter; ?></td>
            </tr>
            <tr>
              <td><b>Nama Kasir &nbsp;:</b>&nbsp;<?php echo $this->session->userdata('ses_nama'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b>Nama Pasien :</b> &nbsp;<?php echo $user->nama_pasien; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
          </table>

          <div class="col-md-13 text-right" style=" padding-bottom: 1px; ">
            <a class="btn btn-default" href="<?php echo base_url(); ?>page/add_pemeriksaan_lab/<?php echo $user->id_pasien; ?>"><i class="glyphicon glyphicon-plus "></i> Tambah Data</a> </div>
            <div class="col-md-13">
          <div class="box box-primary">
        <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">Jenis Pemeriksaan</th>
                <th style=" text-align: center; ">Nilai Normal</th>
                <th style=" text-align: center; ">Hasil</th>
                <th style=" text-align: center; ">Aksi</th>
            </thead>
            <tbody>
               <?php $no=1; foreach ($pembayaran as $p){  ?>
                    <tr>
                       <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $p->jenis_pemeriksaan; ?></td>
                        <td><?php echo $p->nilai_normal; ?></td>
                        <td><?php echo $p->hasil; ?></td>

                        <td style=" text-align: center; "> 
                          <a class="btn btn-info glyphicon glyphicon-edit" href="/ci_login/page/edit_pemeriksaan_lab/<?php echo $p->id_pembayaran; ?> "> </a>
                         <a class="btn btn-danger glyphicon glyphicon-trash" href="/ci_login/page/deletepemeriksaan_lab/<?php echo  $p->id_pembayaran; ?>"></a>
                          </td>
                    </tr>
                        <?php } ?>
                   
            </tbody>
          </table>
          <center> <div class="col-md-12">
              <div class="box-footer" style=" padding-top: 10px ">
                <a target="_blank" href="/ci_login/Cetakpdf2/cetak/<?php echo $p->id_pasien ?> " class="btn btn-success ">Cetak</a>
              </div>
            </div></center>
          </div>
          <form role="form" method="post" action="<?php echo base_url('page/gantistatus5') ?>" enctype="multipart/form-data">
              <center> <div class="col-md-12">
              <div class="box-footer" style=" padding-top: 10px ">
              <input type="hidden" name="id_pasien" value="<?php echo  $user->id_pasien; ?>">
              <input type="hidden" name="statuspasienid" value="proses">
              <input onclick="$(this).hide()" type="submit" class="btn btn-warning   name="submit" value="Validasi 1">
             </div>
              </div> <p style=" font-size: 14px; ">*Tekan tombol proses jika telah selesai mengisi pemeriksaan laboraturium</p>
           </center>
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
