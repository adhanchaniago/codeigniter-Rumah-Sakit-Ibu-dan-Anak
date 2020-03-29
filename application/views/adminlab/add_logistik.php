<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Logistik</title>
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
          <center><h4>Tambah Logistik</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanlogistik') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_log" value="<?php if(isset($editlog)) echo $editlog->id_log; ?>">

              <div class="box-body">
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="nama_brg">Nama Barang</label>
                <input type="text" class="form-control" id="nama_brg" name="nama_brg" value="">
                </div>
                </div>


                <div class="col-md-10">
                <div class="form-group">
                <label for="tglbeli">Tanggal Beli</label>
                <input type="date" class="form-control" id="tglbeli" name="tglbeli" value="">
                </div>
                 </div>

                 <div class="col-md-10">
                <div class="form-group">
                <label for="tglkadaluarsa">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="tglkadaluarsa" name="tglkadaluarsa" value="">
                </div>
                 </div>

                   <div class="col-md-10">
                <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="">
                </div>
                </div>

              <div class="col-md-10">
                <div class="form-group">
               <label >Satuan</label> <br>
                <select   name="id_satuan">
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
              </div>
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
