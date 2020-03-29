<?php
Class Cetakpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('cetak_model');
        $this->load->model('page_model');
    }
    
    function cetak($id_pasien=NULL){
        $pdf = new FPDF('l','mm','A5');
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

        $pasien = $this->cetak_model->get_pasien($id_pasien);
        foreach ($pasien as $row) {
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40,7,'No RM');
        $pdf->Cell(10,7,$row->no_rm);
        $pdf->Ln(5);
        $pdf->Cell(40,7,'Nama Pasien');
        $pdf->Cell(10,7,$row->nama_pasien);
        $pdf->Ln(5);
        }
        $pdf->Cell(10,3,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(45,6,'Jenis Pemeriksaan',1,0);
        $pdf->Cell(65,6,'Nilai Normal',1,0);
        $pdf->Cell(37,6,'Hasil',1,0);
        $pdf->Cell(35,6,'Harga',1,1);

        $pdf->SetFont('Arial','',10);
          $pemeriksaan = $this->cetak_model->get_pemeriksaan($id_pasien);
          $total=$this->page_model->total_penjualan2($id_pasien);
        $no=0;
        foreach ($pemeriksaan as $row){ 
             $no++;
            $pdf->Cell(7,6,$no,1,0);
            $pdf->Cell(45,6,$row->jenis_pemeriksaan,1,0);
            $pdf->Cell(65,6,$row->nilai_normal,1,0);
            $pdf->Cell(37,6,$row->hasil,1,0);
            $pdf->Cell(35,6,$row->harga,1,1,'R'); 
        }
        foreach ($total as $row){ 
           
            $pdf->Cell(52,6,'Total',1,0,'C');
            $pdf->Cell(102,6,'',1,0);
            $pdf->Cell(35,6,$row->total,1,1,'R'); 
        }

        
        $pdf->Output();
    }
}