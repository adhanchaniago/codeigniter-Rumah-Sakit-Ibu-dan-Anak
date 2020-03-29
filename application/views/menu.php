<div style=" padding-top: 3px; padding-bottom: 5px; background: #19adea; color: white; font-family: 'comfortaa' ">
<center> <h3>RUMAH SAKIT IBU DAN ANAK SAKINA IDAMAN</h3>
<h5>Jalan Nyi Tjandrolukito No. Yogyakarta, Telp. (0274) </h5>
<h5>Email : rsiasakinaidaman@gmail.com </h5>
 </center>
</div>
      <div class="wrapper">
        <nav id="sidebar">

         <?php if($this->session->userdata('akses')=='5') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
           <!--  <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-home"></i>
                    Home
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a style=" background-color: #7abeff; color: white;" href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="<?php echo base_url().'superadmin/admin'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Admin
                </a>
            </li> 
             <li>
                <a href="<?php echo base_url().'superadmin/dokter'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Dokter
                </a>
            </li>   
            <li>
                <a href="<?php echo base_url().'superadmin/adminlab'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Admin Lab
                </a>
            </li> 
            <li>
                <a href="<?php echo base_url().'superadmin/kasir'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Kasir
                </a>
            </li> 
            <li>
                <a href="<?php echo base_url().'superadmin/farmasi'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Farmasi
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'superadmin/pasien'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Pasien
                </a>
            </li>           
           
        </ul>
        <center>
            <b><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></b></center>
        <?php } ?>

        <?php if($this->session->userdata('akses')=='1') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
             <li>
                <a href="<?php echo base_url().'page/administrasi'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Administrasi Pendaftaran
                </a>
            </li>   
            <li>
                <a href="<?php echo base_url().'page/data_pasien'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Pasien
                </a>
            </li>           
           <!-- <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Laporan Hasil Pemeriksaan Pasien
                </a>
            </li> -->
        </ul>
        <center>
            <b><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></b></center>
        <?php } ?>


        <?php if($this->session->userdata('aksesdokter')=='2') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_pasien_dokter'?>">
                    <i class="glyphicon glyphicon-list"></i>
                     Proses Pasien
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_pasien_dokter_all'?>">
                    <i class="glyphicon glyphicon-list"></i>
                     Data Pasien
                </a>
            </li>   
          <!--  <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                   Pemeriksaan Lab
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Hasil Pemeriksaan Lab
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Diagnosis dan Obat
                </a>
            </li> -->
        </ul>
         
            <strong><center><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></center></strong>
        
<?php } ?>

<?php if($this->session->userdata('aksesadminlab')=='1') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_pasien_lab'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Data Pasien
                </a>
            </li>   
           <!-- <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                   Pemeriksaan Lab
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Hasil Pemeriksaan Lab
                </a>
            </li> -->
            <li>
                <a href="<?php echo base_url().'page/nilai_normal'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Logistik Laboraturium
                </a>
            </li>
             <li>
                <a href="<?php echo base_url().'page/data_riwayat_transaksi'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Riwayat Penggunaan
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_riwayat_stok'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Riwayat Penyetokan
                </a>
            </li>
            <!-- <li>
                <a href="<?php echo base_url().'page/data_riwayat_stok'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Satuan
                </a>
            </li> -->
              <!-- <li>
                <a href="<?php echo base_url().'page/nilai_normal'?>">
                    <i class="glyphicon glyphicon-list"></i>
                    Edit Jenis Pemeriksaan
                </a>
            </li> -->
        </ul>
         
            <strong><center><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></center></strong>
        
<?php } ?>
<?php if($this->session->userdata('akseskasir')=='1') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_pasien_kasir'?>">
                    <i class="glyphicon glyphicon-tasks"></i>
                    Data Pasien
                </a>
            </li>   
          <!--  <li>
                <a href="<?php echo base_url().'page'?>">
                    <i class="glyphicon glyphicon-list"></i>
                   Laporan Pembayaran
                </a>
            </li> -->
        </ul>
         
            <strong><center><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></center></strong>
        
<?php } ?>
<?php if($this->session->userdata('aksesfarmasi')=='1') { ?>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo base_url().'page'?>">
                    <i  class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'page/data_farmasi'?>">
                    <i class="glyphicon glyphicon-tasks"></i>
                    Data Pasien
                </a>
            </li>   
        </ul>
         
            <strong><center><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></center></strong>
        
<?php } ?>



 </nav>