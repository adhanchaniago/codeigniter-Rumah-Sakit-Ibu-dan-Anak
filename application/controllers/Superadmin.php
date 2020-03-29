<?php
class Superadmin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library('pdf');
    $this->load->model('superadmin_model');
    $this->load->model('page_model');
    $this->load->model('cetak_model');
    //$this->load->library('pdf');
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }
  function index(){
    $this->load->view('v_dashboard');
  } 

  function admin(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_admin();
      $this->load->view('superadmin/admin',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function edit_admin($admin_id=NULL){
    if($this->session->userdata('akses')=='5'  ){
      $data['editadmin'] = $this->superadmin_model->get_admin($admin_id);
      $this->load->view('superadmin/edit_admin',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function simpanadmin(){
        $this->superadmin_model->saveadmin();
        redirect('/superadmin/admin') ;
    }

  function deleteadmin($admin_id = NULL){
        $this->db->where('admin_id', $admin_id);
        $this->db->delete('administrator');
        redirect('/superadmin/admin') ;
    }

    function dokter(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_dokter();
      $this->load->view('superadmin/dokter',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_dokter($id_dokter=NULL){
    if($this->session->userdata('akses')=='5'  ){
      $data['editdokter'] = $this->superadmin_model->get_dokter($id_dokter);
      $this->load->view('superadmin/edit_dokter',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpandokter(){
        $this->superadmin_model->savedokter();
        redirect('/superadmin/dokter') ;
    }

    function deletedokter($id_dokter = NULL){
        $this->db->where('id_dokter', $id_dokter);
        $this->db->delete('dokter');
        redirect('/superadmin/dokter') ;
    }

    function adminlab(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_adminlab();
      $this->load->view('superadmin/adminlab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_adminlab($id_adminlab=NULL){
    if($this->session->userdata('akses')=='5'  ){
      $data['editadminlab'] = $this->superadmin_model->get_adminlab($id_adminlab);
      $this->load->view('superadmin/edit_adminlab',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpanadminlab(){
        $this->superadmin_model->saveadminlab();
        redirect('/superadmin/adminlab') ;
    }

    function deleteadminlab($id_adminlab = NULL){
        $this->db->where('id_adminlab', $id_adminlab);
        $this->db->delete('adminlab');
        redirect('/superadmin/adminlab') ;
    }

    function kasir(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_kasir();
      $this->load->view('superadmin/kasir',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_kasir($id_kasir=NULL){
    if($this->session->userdata('akses')=='5'  ){
      $data['editkasir'] = $this->superadmin_model->get_kasir($id_kasir);
      $this->load->view('superadmin/edit_kasir',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpankasir(){
        $this->superadmin_model->savekasir();
        redirect('/superadmin/kasir') ;
    }

    function deletekasir($id_kasir = NULL){
        $this->db->where('id_kasir', $id_kasir);
        $this->db->delete('kasir');
        redirect('/superadmin/kasir') ;
    }

    function farmasi(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_farmasi();
      $this->load->view('superadmin/farmasi',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_farmasi($id_farmasi=NULL){
    if($this->session->userdata('akses')=='5'  ){
      $data['editfarmasi'] = $this->superadmin_model->get_farmasi($id_farmasi);
      $this->load->view('superadmin/edit_farmasi',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function simpanfarmasi(){
        $this->superadmin_model->savefarmasi();
        redirect('/superadmin/farmasi') ;
    }

    function deletefarmasi($id_farmasi = NULL){
        $this->db->where('id_farmasi', $id_farmasi);
        $this->db->delete('farmasi');
        redirect('/superadmin/farmasi') ;
    }

    function pasien(){
     if($this->session->userdata('akses')=='5' ){
      $data['user'] = $this->superadmin_model->get_data_pasien();
      $this->load->view('superadmin/pasien',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function edit_pasien($id_pasien=NULL){
    if($this->session->userdata('akses')=='5' ){
      $data['editpasien'] = $this->page_model->get_pasien($id_pasien);
      $data['statuspasien'] = $this->page_model->get_status_pasien();
      $this->load->view('superadmin/edit_pasien',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function deletepasien($id_pasien = NULL){
        $this->db->where('id_pasien', $id_pasien);
        $this->db->delete('pasien');
        redirect('/superadmin/pasien') ;
    }

     function simpanpasien(){
        $this->page_model->savepasien();
        redirect('/superadmin/pasien') ;
    }

    function data_pasien($id_pasien=NULL, $id_dokter=NULL){
    if($this->session->userdata('akses')=='5' ){
      $data['dokter'] = $this->page_model->get_dokterpasien($id_dokter);
      $data['pembayaran'] = $this->page_model->get_pembayaran($id_pasien);
      $data['editpasien'] = $this->page_model->get_pasien($id_pasien);
      $data['diagnosa'] = $this->page_model->get_diagnosa($id_pasien);
      $data['statuspasien'] = $this->page_model->get_status_pasien();
      $this->load->view('superadmin/data_pasien',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
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
}