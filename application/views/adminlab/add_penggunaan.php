<!DOCTYPE html>
<html>
  <head>
    <title> Penggunaan Data Logistik</title>
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
        <div  class=" container " style="padding-left: 6%;">
          <center><h4>Penggunaan Logistik</h4></center>
          <div class="col-md-10">
           <table id="" class="table table-hover table-responsive table-bordered table-striped" >
            <thead>
              <tr>
                <th style=" text-align: center; ">No</th>
               <!--  <th style=" text-align: center; ">ID Barang</th> -->
                <th style=" text-align: center; ">Nama Barang</th>
               
                <th style=" text-align: center; ">Stok</th>
                <th style=" text-align: center; ">Satuan</th>
              </tr>
            </thead>
            <tbody>
               <?php $no=1; foreach ($logistik as $lg){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>
                       <!--  <td><?php echo $lg->id_nilai; ?></td> -->
                        <td><?php echo $lg->nama_brg; ?></td>
                        <td><?php echo $lg->stok; ?></td>
                        <td><?php echo $lg->satuan; ?></td>
                    </tr>
                        <?php } ?>
            </tbody>
          </table></div>

            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpantransaksi') ?>" enctype="multipart/form-data" >
               <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">

                <input type="hidden" class="form-control" id="id" name="id" value="">
                </div>
                </div>
             
              
                 <div class="col-md-10">
                <div class="form-group">
               <label >Nama Barang</label> <br>
                <select  class="form-control" name="id_nilai">
                  <option></option>
                  <?php
                  foreach ($logstok as $sa ) {
                   
                      $selected = '';
                    echo '<option value="'.$sa->id_nilai.'" '.$selected.'>'.$sa->nama_brg.'</option>';
                  }

                  ?>
                </select>
                 </div>
              </div>

                   <div class="col-md-10">
                <div class="form-group">
                <label for="jml_penggunaan">Penggunaan</label>
                <input type="number" class="form-control" id="jml_penggunaan" name="jml_penggunaan" value="">
                </div>
                </div>
                
             <!--  <div class="col-md-10">
                <div class="form-group">
               <label >Satuan</label> <br>
                <select class="form-control"  name="id_satuan">
                  <option></option>
                  <?php
                  foreach ($satuan as $sa ) {
                    if($sa->id_satuan == $editlog->id_satuan)
                     {
                      $selected = 'selected';  echo '<option value="'.$sa->id_satuan.'" '.$selected.'>'.$sa->satuan.'</option>';}
                    else 
                      $selected = '';
                    echo '<option value="'.$sa->id_satuan.'" '.$selected.'>'.$sa->satuan.'</option>';
                  }

                  ?>
                </select>
                 </div>
              </div> -->
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
