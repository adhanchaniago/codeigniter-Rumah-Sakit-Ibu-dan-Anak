<?php

/**
 * 
 */
class Cetak_model extends CI_Model
{
	function get_pembayaran($id_pembayaran)
  {
    $user = $this->db->from('pembayaran')
    				 ->where('id_pembayaran', $id_pembayaran)
    				->get()
                     ->row();
        return $user;
  }
	
	function get_pasien($id_pasien)
  {
    $user = $this->db->from('pasien')
    				 ->join('dokter','pasien.id_dokter=dokter.id_dokter','right')
    				  ->join('diagnosa','diagnosa.id_pasien=pasien.id_pasien','right')
    				  
    				 ->where('pasien.id_pasien', $id_pasien)
    				->get()
                     ->result();
        return $user;
  }

  function get_pemeriksaan($id_pasien)
  {
    $user = $this->db->from('pasien')
                              ->join('pembayaran','pembayaran.id_pasien=pasien.id_pasien','right')
    				 ->where('pasien.id_pasien', $id_pasien)
    				->get()
                     ->result();
        return $user;
  }

  function total_penjualan(){
      $query = $this->db->query(" SELECT pembayaran.harga, SUM(harga) as total FROM pembayaran GROUP BY id_pasien");
           
      return $query->result();
    }

   // $pembayaran = $this->db->get('pembayaran')->result();
   //      $data     =$this->db->query(" SELECT pembayaran.harga, SUM(harga) as total FROM pembayaran GROUP BY id_pasien");
}