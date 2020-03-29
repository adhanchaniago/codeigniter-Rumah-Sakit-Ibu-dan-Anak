<?php

class Page_model extends CI_Model
{
	function get_data_pasien()
	{
		$user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->order_by('id_pasien' , 'DESC')
                           ->get()
                           ->result();
        return $user;
	}

  
 
  function get_dokter($id_dokter)
  {
    $user = $this->db->from('dokter')
                          ->join('pasien', 'pasien.id_dokter= dokter.id_dokter','right')
                           ->get()
                           ->result();
        return $user;
  }

  function get_nilai_normal()
  {
    $user = $this->db->from('nilai_normal')
                     ->get()
                     ->result();
        return $user;
  }

  function getpemeriksaan($id_nilai)
  {
    $user = $this->db->from('nilai_normal')
                    ->where('id_nilai',$id_nilai)
                     ->get()
                     ->row();
        return $user;
  }

  function get_dokterpasien($id_dokter)
  {
    $user = $this->db->from('dokter')
                          ->join('pasien', 'pasien.id_dokter= dokter.id_dokter','right')
                          ->where('dokter.id_dokter',$id_dokter)
                           ->get()
                           ->row();
        return $user;
  }

  function get_dokter_pasien()
  {
    $user = $this->db->from('dokter')
                           ->get()
                           ->result();
        return $user;
  }

  function get_status_pasien()
  {
    $user = $this->db->from('statuspsien')
                           ->get()
                           ->result();
        return $user;
  }


	function get_pasien($id_pasien)
	{
		$user = $this->db->from('pasien')
                           ->where('id_pasien',$id_pasien)
                           ->get()
                           ->row();
        return $user;
	} 

  function get_pasien_dokter($id_dokter)
  {
    $user = $this->db->from('pasien')
                          ->join('dokter','pasien.id_dokter=dokter.id_dokter','left')
                           ->get()
                           ->row();
        return $user;
  } 
	
	function savepasien()
    {
     	 $id_pasien = $this->input->post('id_pasien');

        $data = array(
           'no_rm' => $_POST['no_rm'],
           'nama_pasien' => $_POST['nama_pasien'],
           'jk_pasien' => $_POST['jk_pasien'],
           'tgllahir' => $_POST['tgllahir'],
           'alamat_pasien' => $_POST['alamat_pasien'],
           'no_hp' => $_POST['no_hp'],
           'statuspasienid' => $_POST['statuspasienid'],
           'id_dokter' => $_POST['id_dokter']
        );
          if($id_pasien)
        {
            //simpan edit
            $this->db->where('id_pasien', $id_pasien);
            $this->db->update('pasien', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('pasien', $data);
        }
        
    }

    function get_data_pasien_dokter()
	{
		$user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->join('dokter','pasien.id_dokter=dokter.id_dokter','left')
                            ->where('pasien.id_dokter=dokter.id_dokter')
                            ->where('pasien.statuspasienid','baru')
                            ->or_where('pasien.statuspasienid','proses')
                           ->get()
                           ->result();
        return $user;
	}

  function get_data_pasien_dokter_all()
  {
    $user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->join('dokter','pasien.id_dokter=dokter.id_dokter','left')
                            ->where('pasien.id_dokter=dokter.id_dokter')
                            ->where('pasien.statuspasienid','selesai')
                            ->or_where('pasien.statuspasienid','farmasi')
                           ->get()
                           ->result();
        return $user;
  }

  function savediagnosa()
    {
       $id_diagnosa = $this->input->post('id_diagnosa');
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           'id_pasien' => $_POST['id_pasien'],
           'diagnosa' => $_POST['diagnosa'],
           'resep' => $_POST['resep']
        );
          if($id_diagnosa)
        {
            $this->db->where('id_diagnosa', $id_diagnosa);
            $this->db->update('diagnosa', $data);
        }
        else
        {
            $this->db->insert('diagnosa', $data);
        }
         redirect('/page/diagnosa/'.$id_pasien) ;
        
    }

    function get_diagnosa($id_pasien)
  {
    $user = $this->db->from('diagnosa')
                           ->where('diagnosa.id_pasien',$id_pasien)
                           ->get()
                           ->row();
        return $user;
  }

  function get_data_logistik()
  {
    $user = $this->db->from('logistiklabor')
                           ->join('satuan','logistiklabor.id_satuan=satuan.id_satuan','left')
                          ->get()
                           ->result();
        return $user;
  }

  function get_logistik($id_log)
  {
    $user = $this->db->from('logistiklabor')
                           ->where('id_log',$id_log)
                           ->get()
                           ->row();
        return $user;
  }

  function get_logistik_stok()
  {
    $user = $this->db->from('logistiklabor')
                           ->get()
                           ->result();
        return $user;
  }

   function get_nilainormal_stok()
  {
    $user = $this->db->from('nilai_normal')
                           ->get()
                           ->result();
        return $user;
  }


  function get_satuan()
  {
    $user = $this->db->from('satuan')
                          ->get()
                           ->result();
        return $user;
  }

  function savelogistik()
    {
       $id_log = $this->input->post('id_log');

        $data = array(
           'nama_brg' => $_POST['nama_brg'],
           'tglbeli' => $_POST['tglbeli'],
           'tglkadaluarsa' => $_POST['tglkadaluarsa'],
           'stok' => $_POST['stok'],
           'id_satuan' => $_POST['id_satuan']
        );
          if($id_log)
        {
            $this->db->where('id_log', $id_log);
            $this->db->update('logistiklabor', $data);
        }
        else
        {
            $this->db->insert('log', $data);
        }
        
    }

    function get_data_penggunaan()
  {
    $user = $this->db->from('transaksi')
                          ->join('nilai_normal','nilai_normal.id_nilai = transaksi.id_nilai','left')
                          ->join('satuan','transaksi.id_satuan=satuan.id_satuan','left')
                         ->get()
                          ->result();
        return $user;
  }

     function get_data_riwayat_stok()
  {
    $user = $this->db->from('stok')
                          ->join('nilai_normal','nilai_normal.id_nilai = stok.id_nilai')
                          ->join('satuan','stok.id_satuan=satuan.id_satuan','left')
                         ->get()
                          ->result();
        return $user;
  }

   function get_stok($id_nilai)
  {
    $user = $this->db->from('stok')
    ->where('id_nilai',$id_nilai)
                         ->get()
                          ->row();
        return $user;
  }

  function get_transaksi($id_log)
  {
    $user = $this->db->from('transaksi')
    ->where('id_log',$id_log)
                         ->get()
                          ->row();
        return $user;
  }

  function get_transaksi_peng($id)
  {
    $user = $this->db->from('transaksi')
                     ->where('id',$id)
                     ->get()
                     ->row();
        return $user;
  }

  function get_transaksi_stok($id)
  {
    $user = $this->db->from('stok')
                     ->where('id',$id)
                     ->get()
                     ->row();
        return $user;
  }


  function get_data_kasir()
  {
    $user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->where('pasien.statuspasienid','selesai')
                           ->get()
                           ->result();
        return $user;
  }

  function get_data_lab()
  {
    $user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->where('pasien.statuspasienid','proses')
                            // ->or_where('pasien.statuspasienid','proses')
                           ->get()
                           ->result();
        return $user;
  }
  function insertperiksa(){
   
       $checkboxes = $this->input->post('check_list');
       $id_pasien = $this->input->post('id_pasien');
        $warna = implode(", ",$checkboxes);
       $data = array(
         'id_pasien' => $_POST['id_pasien'],
          'options'    =>  $warna
        );
      
      $this->db->insert('pemeriksaan',$data);

       redirect ('/page/pemeriksaanlab/' .$id_pasien) ;
    }
 
    public function tampilperiksa($id_pasien){
      return $this->db->from('pemeriksaan')
                      ->where('id_pasien',$id_pasien)
                      ->get()
      ->row();
    }
  function savepemeriksaan()
    {
       $id_pemeriksaan = $this->input->post('id_pemeriksaan');

        $data = array(
           'id_pasien' => $_POST['id_pasien'],
           'eritrosit' => $_POST['eritrosit'],
           'trombosit' => $_POST['trombosit'],
           'hbsag'     => $_POST['hbsag'],
           'widal'     => $_POST['widal'],
           'sgot'      => $_POST['sgot'],
           'sgpt'      => $_POST['sgpt']

           // 'kultur'      => $_POST['kultur'],
           // 'pewarnaan'      => $_POST['pewarnaan']
           // 'pp'      => $_POST['pp'],
           // 'urin'      => $_POST['urin']
        );
          if($id_pemeriksaan)
        {
            $this->db->where('id_pemeriksaan', $id_pemeriksaan);
            $this->db->update('pemeriksaan', $data);
        }
        else
        {
            $this->db->insert('pemeriksaan', $data);
        }
        
    }

    function savestatus()
    {
     
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           
           'statuspasienid' => $_POST['statuspasienid']
        );
          if($id_pasien)
        {
            $this->db->where('id_pasien', $id_pasien);
            $this->db->update('pasien', $data);
        }
         redirect ('/page/pemeriksaanlab/' .$id_pasien) ;
       
      }

       function savestatus5()
    {
     
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           
           'statuspasienid' => $_POST['statuspasienid']
        );
          if($id_pasien)
        {
            $this->db->where('id_pasien', $id_pasien);
            $this->db->update('pasien', $data);
        }
         redirect ('/page/data_pasien_lab/' ) ;
       
      }

      function get_pembayaran($id_pasien)
      {
        $user = $this->db->from('pembayaran')
                              ->join('pasien','pembayaran.id_pasien=pasien.id_pasien','right')
                              ->where('pembayaran.id_pasien',$id_pasien)
                              ->get()
                              ->result();
            return $user;
      }

      function get_diagnosa_resep($id_pasien)
      {
        $user = $this->db->from('diagnosa')
                              ->join('pasien','diagnosa.id_pasien=pasien.id_pasien','right')
                              ->where('diagnosa.id_pasien',$id_pasien)
                              ->get()
                              ->result();
            return $user;
      }

      function get_resep($id_pasien)
      {
        $user = $this->db->from('diagnosa')
                               ->join('pasien','diagnosa.id_pasien=pasien.id_pasien','right')
                              ->where('diagnosa.id_pasien',$id_pasien)
                              ->get()
                              ->row();
            return $user;
      }


      function get_data_pembayaran($id_pembayaran)
      {
        $user = $this->db->from('pembayaran')
                              ->where('id_pembayaran',$id_pembayaran)
                              ->get()
                              ->row();
            return $user;
      }

      function get_data_pemeriksaan($id_pasien)
      {
        $user = $this->db->from('pemeriksaan')
                              ->join('pasien','pemeriksaan.id_pasien=pasien.id_pasien')
                              // ->where('pemeriksaan.id_pemeriksaan',$id_pemeriksaan)
                              ->get()
                              ->row();
            return $user;
      }

       function get_pemeriksaan($id_pemeriksaan)
      {
        $user = $this->db->from('pemeriksaan')
                             ->where('id_pemeriksaan',$id_pemeriksaan)
                              ->get()
                              ->row();
            return $user;
      }

       function get_pemeriksaandokter($id_pasien)
      {
        $user = $this->db->from('pemeriksaan')
                              ->join('pasien','pemeriksaan.id_pasien=pasien.id_pasien')
                              ->get()
                              ->row();
            return $user;
      }

      function savepembayaran()
    {
       $id_pembayaran = $this->input->post('id_pembayaran');
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           'id_pasien' => $_POST['id_pasien'],
           'jenis_pemeriksaan' => $_POST['jenis_pemeriksaan'],
           'nilai_normal' => $_POST['nilai_normal'],
           'hasil'     => $_POST['hasil'],
           'harga'     => $_POST['harga']

        );
          if($id_pembayaran)
        {
            $this->db->where('id_pembayaran', $id_pembayaran);
            $this->db->update('pembayaran', $data);
        }
        else
        {
            $this->db->insert('pembayaran', $data);
        }
         redirect('/page/pemeriksaan_lab/'.$id_pasien) ;
    }

     function savepembayaran2()
    {
       $id_pembayaran = $this->input->post('id_pembayaran');
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           'id_pasien' => $_POST['id_pasien'],
           'jenis_pemeriksaan' => $_POST['jenis_pemeriksaan'],
           'nilai_normal' => $_POST['nilai_normal'],
           'hasil'     => $_POST['hasil'],
           'harga'     => $_POST['harga']

        );
          if($id_pembayaran)
        {
            $this->db->where('id_pembayaran', $id_pembayaran);
            $this->db->update('pembayaran', $data);
        }
        else
        {
            $this->db->insert('pembayaran', $data);
        }
         redirect('/page/pembayaran/'.$id_pasien) ;
    }

     function savetransaksi()
    {
       $id = $this->input->post('id');

        $data = array(
           'id_nilai' => $_POST['id_nilai'],
           'jml_penggunaan' => $_POST['jml_penggunaan'],
           'id_satuan'     => $_POST['id_satuan']

        );
          if($id)
        {
            $this->db->where('id', $id);
            $this->db->update('transaksi', $data);
        }
        else
        {
            $this->db->insert('transaksi', $data);
        }
        
    }


    function savestok()
    {
     $id = $this->input->post('id');
      $id_nilai = $this->input->post('id_nilai');
    $jml_penyetokan = $this->input->post('jml_penyetokan');
    $id_satuan = $this->input->post('id_satuan');
 
    
        $data = array(

           'id' => $id,
           'id_nilai' => $id_nilai,
           'jml_penyetokan' => $jml_penyetokan,
           'id_satuan' => $id_satuan

        );
         
            $this->db->insert('stok', $data);
        
        
    }

    function saveperiksadokter()
    {
       $id_pemeriksaan = $this->input->post('id_pemeriksaan');
       $id_pasien = $this->input->post('id_pasien');

        $data = array(
           'id_pemeriksaan' => $_POST['id_pemeriksaan'],
           'id_pasien' => $_POST['id_pasien'],
           'options' => $_POST['options']

        );
          if($id_pemeriksaan)
        {
            $this->db->where('id_pemeriksaan', $id_pemeriksaan);
            $this->db->update('pemeriksaan', $data);
        }
        else
        {
            $this->db->insert('pemeriksaan', $data);
        }
         redirect ('/page/pemeriksaanlab/' .$id_pasien) ;
        
    }

    function total_penjualan(){
      $query = $this->db->query(" SELECT pembayaran.harga, SUM(harga) as total FROM pembayaran GROUP BY id_pasien");
           
      return $query->result();
    }

     function total_penjualan2($id_pasien){
      $query = $this->db->query(" SELECT pembayaran.harga, SUM(harga) as total FROM pembayaran where id_pasien = '$id_pasien' ");
      return $query->result();
    }

    function get_pasiendokter()
  {
    $user = $this->db->from('pasien')
                     ->join('dokter','pasien.id_dokter=dokter.id_dokter','left')
                   //  ->where('dokter.id_dokter',$id_dokter)
                    ->get()
                     ->row();
        return $user;
  } 

  function get_data_farmasi()
  {
    $user = $this->db->from('pasien')
                            ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                            ->where('pasien.statuspasienid','farmasi')
                           ->get()
                           ->result();
        return $user;
  }
function get_obat($id_pasien)
  {
    $user = $this->db->from('obat')
                     ->join('pasien','obat.id_pasien=pasien.id_pasien')
                     ->where('obat.id_pasien',$id_pasien)
                     ->get()
                     ->result();
        return $user;
  } 


  function get_edit_obat($id_stokobat)
  {
    $user = $this->db->from('obat')
                     ->where('id_stokobat',$id_stokobat)
                     ->get()
                     ->row();
        return $user;
  } 
  function get_obatpasien($id_pasien)
  {
    $user = $this->db->from('obat')
                     ->join('pasien','obat.id_pasien=pasien.id_pasien','right')
                     ->where('obat.id_pasien',$id_pasien)
                     ->get()
                     ->result();
        return $user;
  } 

   function saveobat()
    {
       $id_stokobat = $this->input->post('id_stokobat');

        $data = array(
           'id_pasien' => $_POST['id_pasien'],
           'nama_obat' => $_POST['nama_obat'],
           'dosis' => $_POST['dosis'],
           'jumlah'     => $_POST['jumlah'],
           'harga'     => $_POST['harga']

        );
          if($id_stokobat)
        {
            $this->db->where('id_stokobat', $id_stokobat);
            $this->db->update('obat', $data);
        }
        else
        {
            $this->db->insert('obat', $data);
        }
        
    }

     function savenilai()
    {
       $id_nilai = $this->input->post('id_nilai');

        $data = array(
           'jenis' => $_POST['jenis'],
           'pilihan' => $_POST['pilihan'],
           'nama_brg' => $_POST['nama_brg'],
           'tglbeli' => $_POST['tglbeli'],
           'tglkadaluarsa' => $_POST['tglkadaluarsa']

        );
          if($id_nilai)
        {
            $this->db->where('id_nilai', $id_nilai);
            $this->db->update('nilai_normal', $data);
        }
        else
        {
            $this->db->insert('nilai_normal', $data);
        }
        
    }

    function get_data_nilai_bykode($jenis){
    $hsl=$this->db->query("SELECT * FROM nilai_normal WHERE jenis='$jenis'");
    if($hsl->num_rows()>0){
      foreach ($hsl->result() as $data) {
        $hasil=array(
          'jenis' => $data->jenis,
          'pilihan' => $data->pilihan,
          );
      }
    }
    return $hasil;
  }


 

}