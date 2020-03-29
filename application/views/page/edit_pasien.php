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
          <center><h4>Edit Pasien</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('page/simpanpasien') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_pasien" value="<?php if(isset($editpasien)) echo $editpasien->id_pasien; ?>">

              <div class="box-body">
              <div class="col-md-10">
                <div class="form-group">
                <label >No. RM</label> <br>
                <input type="text" class="form-control"  name="no_rm"  value="<?php echo $editpasien->no_rm ?>" >
                </div>
              </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama_pasien" value="<?php echo $editpasien->nama_pasien ?>">
                </div>
                </div>


                <div class="col-md-10">
                 <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select   name="jk_pasien">
                 <option value="<?php echo $editpasien->jk_pasien ?>"><?php echo $editpasien->jk_pasien ?></option>
                 <option value="Laki-laki">Laki-laki</option>
                 <option value="Perempuan">Perempuan</option>
                 </select>
                 </div>
                 </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?php echo $editpasien->tgllahir ?>">
                </div>
                 </div>

                
                 <div class="col-md-10">
                  <div class="form-group">
                  <label for="alamat_pasien">Alamat</label>
                  <textarea name="alamat_pasien" rows="2" cols="88" class="form-control tinymce-editor" id="alamat"  ><?php echo $editpasien->alamat_pasien ?></textarea>
                  </div>
               </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="no_hp">Nomor Telpon</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $editpasien->no_hp ?>">
                </div>
              </div>


              <div class="col-md-10">
                <div class="form-group">
               <label >Status</label> <br>
                <select class="form-control"   name="statuspasienid">
                  <option></option>
                  <?php
                  foreach ($statuspasien as $sp ) {
                    if($sp->statuspasienid == $editpasien->statuspasienid)
                     {
                      $selected = 'selected';  echo '<option value="'.$sp->statuspasienid.'" '.$selected.'>'.$sp->statuspasienid.'</option>';}
                    else 
                      $selected = '';
                    echo '<option value="'.$sp->statuspasienid.'" '.$selected.'>'.$sp->statuspasienid.'</option>';
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
