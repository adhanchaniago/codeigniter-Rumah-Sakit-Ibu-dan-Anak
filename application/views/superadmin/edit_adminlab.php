<!DOCTYPE html>
<html>
  <head>
    <title>Edit atau Tambah Admin Lab</title>
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
          <center><h4>Edit atau Tambah Admin Lab</h4></center>
            <div style="padding-left: 26%;" class="col-md-10">
          <div class="box box-primary" >
            
            <form style="" role="form" method="post" action="<?php echo base_url('superadmin/simpanadminlab') ?>" enctype="multipart/form-data" >
              
              <input type="hidden" name="id_adminlab" value="<?php if(isset($editadminlab)) echo $editadminlab->id_adminlab; ?>">
              <div class="box-body">
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="nama_adminlab">Nama Adminlab</label>
                <input type="text" class="form-control" id="nama_adminlab" name="nama_adminlab" value="<?php if(isset($editadminlab)) echo $editadminlab->nama_adminlab; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="username_adminlab">Username Adminlab</label>
                <input type="text" class="form-control" id="username_adminlab" name="username_adminlab" value="<?php if(isset($editadminlab)) echo $editadminlab->username_adminlab; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="password_adminlab">Password Adminlab</label>
                <input type="text" class="form-control" id="password_adminlab" name="password_adminlab" value="<?php if(isset($editadminlab)) echo $editadminlab->password_adminlab; ?>">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="alamat_adminlab">Alamat</label>
                <input type="text" class="form-control" id="alamat_adminlab" name="alamat_adminlab" value="<?php if(isset($editadminlab)) echo $editadminlab->alamat_adminlab; ?>">
                </div>
                 </div>

                 <div class="col-md-10">
                 <div class="form-group">
                 <label >Jenis Kelamin</label> <br>
                 <select class="form-control"   name="jk_adminlab">
                 <option value="<?php if(isset($editadminlab)) echo $editadminlab->jk_adminlab ?>"><?php if(isset($editadminlab)) echo $editadminlab->jk_adminlab ?></option>
                 <option value="L">L</option>
                 <option value="P">P</option>
                 </select>
                 </div>
                 </div>

                 <div class="col-md-10">
                <div class="form-group">
                <label for="level">Level</label>
                <input readonly type="number" class="form-control" id="level_adminlab" name="level_adminlab" value=1>
                </div>
                 </div>

                 <div class="col-md-10">
                  <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="6" cols="88" class="form-control " id="keterangan"  ><?php if(isset($editadminlab))  echo $editadminlab->keterangan ?></textarea>
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
