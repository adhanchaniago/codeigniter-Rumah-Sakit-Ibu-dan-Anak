<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Pemeriksaan Lab</title>
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
          <center><h4> Jenis Pemeriksaan</h4></center>
          <div class="col-md-12 text-right" style=" padding-bottom: 3px; ">
            <a class="btn btn-default" href="<?php echo base_url(); ?>page/editpemeriksaan"><i class="glyphicon glyphicon-plus "></i> Tambah Jenis Pemeriksaan</a> </div>

            <div style=" padding-left: 36%px; "  class="col-md-12">
              
            
            <div style="padding-left: 36%px;" class="box box-primary col-md-12" >
            <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <tr>
                <th>No</th>
              <th>Jenis Pemeriksaan</th>
              <th>Nilai Normal</th>
              <th>Logistik</th>
              <th>Tanggal Beli</th>
              <th>Tanggal Kadaluarsa</th>
              <th>Stok</th>
              <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
               
            <?php $no=1; foreach ($nilai_normal as $na ) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $na->jenis; ?></td>
              <td><?php echo $na->pilihan; ?></td>
              <td><?php echo $na->nama_brg; ?></td>
              <td><?php echo $na->tglbeli; ?></td>
              <td><?php echo $na->tglkadaluarsa; ?></td>
              <td><?php echo $na->stok; ?></td>
           
                        <td style=" text-align: center; "> 
                           <a class="btn btn-info glyphicon glyphicon-edit" href="editpemeriksaan/<?php echo $na->id_nilai; ?> "> </a>
                         <a class="btn btn-danger glyphicon glyphicon-trash" href="deletenilai/<?php echo  $na->id_nilai; ?>"></a>
                        </td>
                    </tr>
                       <?php } ?> 
            </tbody>

          </table>
           



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
