<!DOCTYPE html>
<html>
  <head>
    <title>Edit Pasien</title>
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
          <center><h4>Data Pasien</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanpasien') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_pasien" value="<?php if(isset($editpasien)) echo $editpasien->id_pasien; ?>">

              <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">
                  <table>
                    <tr>
                      <td><label >No. RM  </label></td><td style=" padding-right: 10px;padding-left: 10px; ">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->no_rm ?></td>
                    </tr>
                     <tr>
                      <td><label >Nama   </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->nama_pasien ?></td>
                    </tr>
                    <tr>
                      <td><label >Jenis Kelamin </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->jk_pasien ?></td>
                    </tr>
                    <tr>
                      <td><label >Tanggal Lahir  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->tgllahir ?></td>
                    </tr>
                    <tr>
                      <td><label >Alamat  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->alamat_pasien ?></td>
                    </tr>
                    <tr>
                      <td><label >No. Telp  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->no_hp ?></td>
                    </tr>
                    <tr>
                      <td><label >Status  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($editpasien)) echo $editpasien->statuspasienid ?></td>
                    </tr>
                      <?php if(isset($diagnosa)) { ?>
                    <tr>
                      <td><label >Diagnosa  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($diagnosa)) echo $diagnosa->diagnosa ?></td>
                    </tr>
                    <tr>
                      <td><label >Resep  </label></td><td style=" padding-left: 10px;">:</td>
                      <td><?php if(isset($diagnosa)) echo $diagnosa->resep ?></td>
                    </tr>
                    <?php } ?>
                     <?php if(isset($tampilperiksa)) {?> 
                    <tr>
                      <td> <b>Pemeriksaan</b>  </td><td>:</td>
                      
                      <td><?php echo $tampilperiksa->options ?></td>
                    </tr>
                    <?php } ?>
                  </table>

                   <table id="table1" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <th style=" text-align: center; ">No</th>
                <th style=" text-align: center; ">Jenis Pemeriksaan</th>
                <th style=" text-align: center; ">Nilai Normal</th>
                <th style=" text-align: center; ">Hasil</th>
            </thead>
            <tbody>
               <?php $no=1; foreach ($pembayaran as $p){  ?>
                    <tr>
                       <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $p->jenis_pemeriksaan; ?></td>
                        <td><?php echo $p->nilai_normal; ?></td>
                        <td><?php echo $p->hasil; ?></td>
                        
                        
                    </tr>
                        <?php } ?>
                    
            </tbody>
          </table>
                 
                </div>
              </div>
                
             
              </div>
              <!-- /.box-body -->
                 <div class="col-md-10">
              
            </div>
            </form>
            
            </div>
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
