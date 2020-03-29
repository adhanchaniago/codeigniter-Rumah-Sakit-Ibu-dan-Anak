<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('pdf');
    $this->load->model('cetak_model');
    $this->load->model('page_model');
    $this->load->model('superadmin_model');
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }
  function index(){
    $this->load->view('v_dashboard');
  } 
  function data_pasien(){
     if($this->session->userdata('akses')=='1' ){
      $data['user'] = $this->page_model->get_data_pasien();
      $this->load->view('page/data_pasien',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function data($id_pasien=NULL, $id_dokter=NULL){
    if($this->session->userdata('aksesdokter')=='2' ){
      $data['dokter'] = $this->page_model->get_dokterpasien($id_dokter);
      $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['editpasien'] = $this->page_model->get_pasien($id_pasien);
      $data['diagnosa'] = $this->page_model->get_diagnosa($id_pasien);
      $data['statuspasien'] = $this->page_model->get_status_pasien();
      $this->load->view('dokter/data',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

 function rekam_medis($id_pasien=NULL){
    if($this->session->userdata('akses')=='1' ){
      $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['editpasien'] = $this->page_model->get_pasien($id_pasien);
      $data['diagnosa'] = $this->page_model->get_diagnosa($id_pasien);
      $data['statuspasien'] = $this->page_model->get_status_pasien();
      $this->load->view('page/rekam_medis',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

 


  function administrasi(){
     if($this->session->userdata('akses')=='1' ){
      $this->load->view('page/administrasi');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  } 
  function daftar_pasien(){
     if($this->session->userdata('akses')=='1' ){
       $data['user'] = $this->superadmin_model->get_data_dokter();
      $this->load->view('page/daftar_pasien');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function edit_pasien($id_pasien=NULL){
    if($this->session->userdata('akses')=='1'  ){
      $data['editpasien'] = $this->page_model->get_pasien($id_pasien);
      $data['statuspasien'] = $this->page_model->get_status_pasien();
      $this->load->view('page/edit_pasien',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
    function simpanpasien(){
        $this->page_model->savepasien();
        redirect('/page/data_pasien') ;
    }
  function deletepasien($id_pasien = NULL){
        $this->db->where('id_pasien', $id_pasien);
        $this->db->delete('pasien');
        redirect('/page/data_pasien') ;
    }

    
   function data_pasien_dokter(){
     if($this->session->userdata('aksesdokter')=='2' ){
      $data['user'] = $this->page_model->get_data_pasien_dokter();
      $this->load->view('dokter/data_pasien_dokter',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function data_pasien_dokter_all(){
     if($this->session->userdata('aksesdokter')=='2' ){
      $data['user'] = $this->page_model->get_data_pasien_dokter_all();
      $this->load->view('dokter/data_pasien_dokter_all',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
   function diagnosa($id_pasien=NULL){
     if($this->session->userdata('aksesdokter')=='2' ){
       $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['user2'] = $this->page_model->get_data_pasien_dokter();
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      $data['diagnosa'] = $this->page_model->get_diagnosa($id_pasien);
      $this->load->view('dokter/diagnosa',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

   function simpandiagnosa(){
        $this->page_model->savediagnosa();
       
    }

    function data_logistik(){
     if($this->session->userdata('aksesadminlab')=='1' ){
      // $data['logistik'] = $this->page_model->get_data_logistik();
      $data['logistik'] = $this->page_model->get_nilai_normal();
      $this->load->view('adminlab/logistik',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

   function deletelogistik($id_log = NULL){
        $this->db->where('id_log', $id_log);
        $this->db->delete('logistiklabor');
        redirect('/page/data_logistik') ;
    }

    function edit_logistik($id_log=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      $data['editlog'] = $this->page_model->get_logistik($id_log);
      $data['satuan'] = $this->page_model->get_satuan();
      $this->load->view('adminlab/edit_logistik',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_penggunaan($id=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      $data['logistik'] = $this->page_model->get_data_logistik();
      $data['editlog'] = $this->page_model->get_transaksi_peng($id);
      $data['satuan'] = $this->page_model->get_satuan();
      $this->load->view('adminlab/edit_penggunaan',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_riwayat($id=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      $data['editlog'] = $this->page_model->get_transaksi_stok($id);
      $data['satuan'] = $this->page_model->get_satuan();
      $this->load->view('adminlab/edit_riwayat',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpanlogistik(){
        $this->page_model->savelogistik();
        redirect('/page/data_logistik') ;
    }

    function data_stok(){
     if($this->session->userdata('aksesadminlab')=='1' ){
      $data['stok'] = $this->page_model->get_data_stok();
      $this->load->view('adminlab/data_stok_logistik',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function data_riwayat_transaksi(){
     if($this->session->userdata('aksesadminlab')=='1' ){
      $data['stok'] = $this->page_model->get_data_penggunaan();
      $this->load->view('adminlab/data_riwayat_transaksi',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function add_penggunaan($id_nilai=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){

      $data['logistik'] = $this->page_model->get_data_logistik();
       $data['stok'] = $this->page_model->get_stok($id_nilai);
      $data['logstok'] = $this->page_model->get_nilainormal_stok();
       $data['editlog'] = $this->page_model->get_nilai_normal($id_nilai);
      //$data['satuan'] = $this->page_model->get_satuan();
    $this->load->view('adminlab/add_penggunaan',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

     function add_stok($id_nilai=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      
      $data['logistik'] = $this->page_model->get_data_logistik();
       $data['stok'] = $this->page_model->get_stok($id_nilai);
      $data['logstok'] = $this->page_model->get_nilainormal_stok();
       $data['editlog'] = $this->page_model->get_nilai_normal($id_nilai);
     // $data['satuan'] = $this->page_model->get_satuan();

    $this->load->view('adminlab/add_stok',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

     function add_bismistok(){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      
     
    $this->load->view('adminlab/add_bismistok');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function data_riwayat_stok(){
     if($this->session->userdata('aksesadminlab')=='1' ){
      $data['stok'] = $this->page_model->get_data_riwayat_stok();
      $this->load->view('adminlab/data_riwayat_stok',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function data_pasien_lab(){
     if($this->session->userdata('aksesadminlab')=='1' ){
      $data['user'] = $this->page_model->get_data_lab();
      $this->load->view('adminlab/data_pasien_lab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_pemeriksaan( $id_pemeriksaan=NULL){
    if($this->session->userdata('aksesdokter')=='2'  ){
       $data['pemeriksa'] = $this->page_model->get_pemeriksaan($id_pemeriksaan);
      $this->load->view('dokter/edit_pemeriksaan',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    } 

    function pemeriksaanlab($id_pasien=NULL){
     if($this->session->userdata('aksesdokter')=='2' ){
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      $data['tampilperiksa'] = $this->page_model->tampilperiksa($id_pasien);
      $data['pemeriksaan'] = $this->page_model->get_pemeriksaandokter($id_pasien);
      $this->load->view('dokter/pemeriksaanlab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    } 

    function pemeriksaan_lab($id_pasien=NULL){
     if($this->session->userdata('aksesadminlab')=='1' ){
      $data['tampilperiksa'] = $this->page_model->tampilperiksa($id_pasien);
      $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      $data['dokter'] = $this->page_model->get_pasiendokter();
      $data['total']=$this->page_model->total_penjualan();
      $this->load->view('adminlab/pemeriksaan_lab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function pemeriksaanlab2($id_pasien=NULL){
     if($this->session->userdata('aksesdokter')=='2' ){
     $data['user'] = $this->page_model->get_pasien($id_pasien);
     $this->load->view('dokter/pemeriksaanlab2',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function insertpem(){
       $this->page_model->insertperiksa();
      
     // $this->load->view('adminlab/pemeriksaanlab3');
    }

    function simpanpemeriksaan(){
        $this->page_model->savepemeriksaan();
        redirect('/page/data_pasien_dokter') ;
    }

     function simpantransaksi(){
        $this->page_model->savetransaksi();
        redirect('/page/data_riwayat_transaksi') ;
    }

    function simpanstok(){
        $this->page_model->savestok();
        redirect('/page/data_riwayat_transaksi') ;
    }

    function simpanperiksadokter(){
        $this->page_model->saveperiksadokter();
      
    }

    function data_pasien_kasir(){
     if($this->session->userdata('akseskasir')=='1' ){
      $data['user'] = $this->page_model->get_data_kasir();
      $this->load->view('kasir/data_pasien_kasir',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function gantistatus(){

      $this->page_model->savestatus();
      $data['user'] = $this->page_model->get_pasien($id_pasien);
     
    }

     function gantistatus2(){
      $this->page_model->savestatus();
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      redirect('/page/data_pasien_kasir') ;
    }  

     function gantistatus5(){
      $this->page_model->savestatus5();
      $data['user'] = $this->page_model->get_pasien($id_pasien);
     
    }   

    function gantistatus6(){
      $this->page_model->savestatus();
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      redirect('/page/data_pasien_dokter') ;
    }    

    function pembayaran($id_pasien=NULL ){
     if($this->session->userdata('akseskasir')=='1' ){
      $data['tampilperiksa'] = $this->page_model->tampilperiksa($id_pasien);
      $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['user'] = $this->page_model->get_pasien($id_pasien);
      $data['dokter'] = $this->page_model->get_pasiendokter();
      $data['total']=$this->page_model->total_penjualan();
      $this->load->view('kasir/pembayaran',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_pembayaran($id_pembayaran=NULL){
    if($this->session->userdata('akseskasir')=='1'  ){
      $data['pembayaran'] = $this->page_model->get_data_pembayaran($id_pembayaran);
      $this->load->view('kasir/edit_pembayaran',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }
    function edit_pemeriksaan_lab($id_pembayaran=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
      $data['pembayaran'] = $this->page_model->get_data_pembayaran($id_pembayaran);
      $this->load->view('adminlab/edit_pemeriksaan_lab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function add_pembayaran($id_pasien=NULL){
    if($this->session->userdata('akseskasir')=='1'  ){
    $data['user'] = $this->page_model->get_pasien($id_pasien);
    $this->load->view('kasir/add_pembayaran',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function add_pemeriksaan_lab($id_pasien=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
    $data['tampilperiksa'] = $this->page_model->tampilperiksa($id_pasien);
    $data['user'] = $this->page_model->get_pasien($id_pasien);
    $data['nilai_normal'] = $this->page_model->get_nilai_normal();
    $this->load->view('adminlab/add_pemeriksaan_lab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function nilai_normal(){
    if($this->session->userdata('aksesadminlab')=='1'  ){
    
    $data['nilai_normal'] = $this->page_model->get_nilai_normal();
    $this->load->view('adminlab/nilai_normal',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpanpembayaran($id_pembayaran = NULL){
        $this->page_model->savepembayaran2();
        
    }

    function simpanpemeriksaan_lab($id_pembayaran = NULL){
        $this->page_model->savepembayaran();
       
    }

    function deletepembayaran($id_pembayaran = NULL){
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->delete('pembayaran');
        redirect('/page/data_pasien_kasir') ;
    }
    function deletepemeriksaan_lab($id_pembayaran = NULL){
      $id_pasien = $this->input->post('id_pasien');
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->delete('pembayaran');
        redirect('/page/pemeriksaan_lab/'.$id_pasien) ;
    }

    function data_farmasi(){
     if($this->session->userdata('aksesfarmasi')=='1' ){
      $data['user'] = $this->page_model->get_data_farmasi();
      $this->load->view('farmasi/data_farmasi',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function obat($id_pasien=NULL){
     if($this->session->userdata('aksesfarmasi')=='1' ){
     $data['obatm'] = $this->page_model->get_obat($id_pasien);
     $data['diagnosa'] = $this->page_model->get_diagnosa($id_pasien);
     $data['resep'] = $this->page_model->get_resep($id_pasien);
     $data['user'] = $this->page_model->get_pasien($id_pasien);
     $data['dokter'] = $this->page_model->get_pasiendokter();
      
     $this->load->view('farmasi/obat',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_obat($id_stokobat=NULL){
    if($this->session->userdata('aksesfarmasi')=='1'  ){
    $data['editobat'] = $this->page_model->get_edit_obat($id_stokobat);
    $this->load->view('farmasi/edit_obat',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }



    function editpemeriksaan($id_nilai=NULL){
    if($this->session->userdata('aksesadminlab')=='1'  ){
    $data['editnilai'] = $this->page_model->getpemeriksaan($id_nilai);
    $this->load->view('adminlab/edit_nilai',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }



    function deleteobat($id_stokobat = NULL){
        $this->db->where('id_stokobat', $id_stokobat);
        $this->db->delete('obat');
        redirect('/page/data_farmasi');
    }
    function add_obat($id_pasien=NULL){
    if($this->session->userdata('aksesfarmasi')=='1'  ){
    $data['user'] = $this->page_model->get_pasien($id_pasien);
    $this->load->view('farmasi/add_obat',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpanobat($id_stokobat = NULL){
        $this->page_model->saveobat();
        redirect('/page/data_farmasi') ;
    }

    function simpannilai($id_nilai = NULL){
        $this->page_model->savenilai();
        redirect('/page/nilai_normal') ;
    }

    function deletenilai($id_nilai = NULL){
        $this->db->where('id_nilai', $id_nilai);
        $this->db->delete('nilai_normal');
        redirect('/page/nilai_normal') ;
    }

     function cetak_pasien($id_pasien=NULL){
        $pdf = new FPDF('L','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(10,7,'',0,1);
        // mencetak string 
        $pdf->Cell(190,7,'RUMAH SAKIT IBU DAN ANAK SAKINA IDAMAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Jalan Nyi Tjondrolukito No. Yogyakarta, Telp. (0274)',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,7,'Email: rsiasakinaidaman@gmail.com',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,2,'',0,1);
        $pdf->SetFont('Arial','',10);
        $date= date('l, d  F  Y');
        $pdf->Cell(190,7,$date,0,1,'R');
        

       
        $pemeriksaan = $this->cetak_model->get_pemeriksaan($id_pasien);
        $pasien = $this->cetak_model->get_pasien($id_pasien);
      foreach ($pasien as $row) {
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(40,7,'No RM');
            $pdf->Cell(10,7,$row->no_rm);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Nama Pasien');
            $pdf->Cell(10,7,$row->nama_pasien);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Jenis Kelamin');
            $pdf->Cell(45,7,$row->jk_pasien);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Tanggal Lahir');
            $pdf->Cell(45,7,$row->tgllahir);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Alamat');
            $pdf->Cell(37,7,$row->alamat_pasien);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Nomor HP');
            $pdf->Cell(35,7,$row->no_hp); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Nama Dokter');
            $pdf->Cell(35,7,$row->nama_dokter); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Diagnosa');
            $pdf->Cell(35,7,$row->diagnosa); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Resep');
            $pdf->Cell(35,7,$row->resep); 
            $pdf->Ln(5);
        }

         $pdf->Cell(10,3,'',0,1);

         $pdf->SetFont('Arial','B',10);
        $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(45,6,'Jenis Pemeriksaan',1,0);
        $pdf->Cell(65,6,'Nilai Normal',1,0);
        $pdf->Cell(37,6,'Hasil',1,1);
        $no=0;
        $pdf->SetFont('Arial','',10);
        foreach ($pemeriksaan as $row){ 
         $no++;
            $pdf->Cell(7,6, $no ,1,0);
            $pdf->Cell(45,6,$row->jenis_pemeriksaan,1,0);
            $pdf->Cell(65,6,$row->nilai_normal,1,0);
            $pdf->Cell(37,6,$row->hasil,1,1);
        }

        $pdf->Output();
  }

   function nilai_normal2(){
   $jenis=$this->input->post('jenis');
   $data=$this->page_model->get_data_nilai_bykode($jenis);
   echo json_encode($data);
    }
}