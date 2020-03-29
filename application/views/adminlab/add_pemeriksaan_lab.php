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
          <center><h4>Pemeriksaan Lab</h4></center>

<!-- <table>
              <tr><td> -->
            <div style=" padding-left: 200px; "  class="col-md-12">
              <div style=" padding-left: 45px; " class="col-md-10">
              <?php if(isset($tampilperiksa)) {?> 
              <b>Pemeriksaan</b> : <?php echo $tampilperiksa->options ?>
              <?php } ?>
              </div>
            
            <div class="box box-primary" >
            
            <form style=" padding-left: 30px; " role="form" method="post" action="<?php echo base_url('page/simpanpemeriksaan_lab') ?>" enctype="multipart/form-data" >
              <input type="hidden" name="id_pembayaran" value="">
              <input type="hidden" name="id_pasien" value="<?php echo $user->id_pasien; ?>">

              <div class="box-body">
              
                <div class="col-md-10">
                <div class="form-group">
                <label for="jenis">Jenis Pemeriksaan</label>
                <input name="jenis_pemeriksaan" id="jenis" class="form-control" type="text" placeholder="Jenis Pemeriksaan" >
                <!-- <select  class="form-control"  name="jenis">
                <option>Jenis Pemeriksaan</option>
                <?php
                  foreach ($nilai_normal as $na ) { ?>
                  <option value="<?php echo $na->jenis; ?>"><?php echo $na->jenis; ?></option>
                 <?php } ?>
                </select>  -->
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="pilihan">Nilai Normal</label>
                <input readonly name="nilai_normal" id="pilihan" class="form-control" type="text" placeholder="Nilai Normal..." >

                <!-- <select class="form-control"  name="nilai_normal">
                  <option></option>
                  <?php foreach ($nilai_normal as $na ) { ?>
                     <option value="<?php echo $na->pilihan; ?>"><?php echo $na->pilihan; ?></option>
                 <?php } ?>
                </select> -->
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="hasil">Hasil</label>
                <input type="text" class="form-control" id="hasil" name="hasil" placeholder="Hasil Pemeriksaan" value="">
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
        <!-- </td><td> -->

         <!--  <table class=" table table-hover table-responsive table-bordered table-striped ">
            <tr>
              <td>No</td>
              <td>Jenis Pemeriksaan</td>
              <td>Nilai Normal</td>
            </tr>
            <?php $no=1; foreach ($nilai_normal as $na ) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $na->jenis; ?></td>
              <td><?php echo $na->pilihan; ?></td>
            </tr>
            <?php } ?>
          </table> -->

       <!--  </td>
          </table> -->



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
   <script type="text/javascript">
    $(document).ready(function(){
       $('#jenis').on('input',function(){
                var jenis=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('page/nilai_normal2')?>",
                    dataType : "JSON",
                    data : {jenis: jenis},
                    cache:false,
                    success: function(data){
                        $.each(data,function(jenis, jenis, pilihan){
                          $('[name="jenis_pemeriksaan"]').val(data.jenis);
                            $('[name="nilai_normal"]').val(data.pilihan);
                            
                        });
                    }
                });
                return false;
           });

    });
  </script>
  </body>
</html>
