<!DOCTYPE html>
<html>
  <head>
    <title>Edit atau Tambah Kasir</title>
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
          <center><h4>Edit atau Tambah Kasir</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('superadmin/simpankasir') ?>" enctype="multipart/form-data" >
              
              <input type="hidden" name="id_kasir" value="<?php if(isset($editkasir)) echo $editkasir->id_kasir; ?>">
              <div class="box-body">
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="nama_kasir">Nama Kasir</label>
                <input type="text" class="form-control" id="nama_kasir" name="nama_kasir" value="<?php if(isset($editkasir)) echo $editkasir->nama_kasir; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="username_kasir">Username Kasir</label>
                <input type="text" class="form-control" id="username_kasir" name="username_kasir" value="<?php if(isset($editkasir)) echo $editkasir->username_kasir; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="password_kasir">Password Kasir</label>
                <input type="text" class="form-control" id="password_kasir" name="password_kasir" value="<?php if(isset($editkasir)) echo $editkasir->password_kasir; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="alamat_kasir">Alamat</label>
                <input type="text" class="form-control" id="alamat_kasir" name="alamat_kasir" value="<?php if(isset($editkasir)) echo $editkasir->alamat_kasir; ?>">
                </div>
                 </div>

                 <div class="col-md-10">
                 <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select class="form-control"   name="jk_kasir">
                 <option value="<?php if(isset($editkasir)) echo $editkasir->jk_kasir ?>"><?php if(isset($editkasir)) echo $editkasir->jk_kasir ?></option>
                 <option value="L">L</option>
                 <option value="P">P</option>
                 </select>
                 </div>
                 </div>

                 <div class="col-md-10">
                <div class="form-group">
                <label for="level">Level</label>
                <input readonly type="number" class="form-control" id="level_kasir" name="level_kasir" value=1>
                </div>
                 </div>

                 <div class="col-md-10">
                  <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="6" cols="88" class="form-control " id="keterangan"  ><?php if(isset($editkasir))  echo $editkasir->keterangan ?></textarea>
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
