<?php

class Superadmin_model extends CI_Model
{

function get_data_admin()
  {
    $user = $this->db->from('administrator')
                     ->get()
                     ->result();
        return $user;
  }

  function get_admin($admin_id)
  {
    $user = $this->db->from('administrator')
                     ->where('admin_id',$admin_id)
                     ->get()
                     ->row();
        return $user;
  }

  function saveadmin()
    {
       $admin_id = $this->input->post('admin_id');
        $data = array(
           'username_admin' => $_POST['username_admin'],
           'nama_admin' => $_POST['nama_admin'],
           'alamat_admin' => $_POST['alamat_admin'],
           'jk_admin' => $_POST['jk_admin'],
           'password_admin' => $_POST['password_admin'],
           'level_admin' => $_POST['level_admin'],
           'keterangan' => $_POST['keterangan']
        );
          if($admin_id)
        {
            $this->db->where('admin_id', $admin_id);
            $this->db->update('administrator', $data);
        }
        else
        {
            $this->db->insert('administrator', $data);
        }
    }

        function get_data_dokter()
      {
        $user = $this->db->from('dokter')
                         ->get()
                         ->result();
            return $user;
      }

      function get_dokter($id_dokter)
      {
        $user = $this->db->from('dokter')
                         ->where('id_dokter',$id_dokter)
                         ->get()
                         ->row();
            return $user;
      }

      function savedokter()
      {
       $id_dokter = $this->input->post('id_dokter');
        $data = array(
           'username_dokter' => $_POST['username_dokter'],
           'nama_dokter' => $_POST['nama_dokter'],
           'alamat_dokter' => $_POST['alamat_dokter'],
           'jk_dokter' => $_POST['jk_dokter'],
           'password_dokter' => $_POST['password_dokter'],
           'level_dokter' => $_POST['level_dokter'],
           'keterangan' => $_POST['keterangan']
        );
          if($id_dokter)
        {
            $this->db->where('id_dokter', $id_dokter);
            $this->db->update('dokter', $data);
        }
        else
        {
            $this->db->insert('dokter', $data);
        }
      }

      function get_data_adminlab()
      {
        $user = $this->db->from('adminlab')
                         ->get()
                         ->result();
            return $user;
      }

      function get_adminlab($id_adminlab)
      {
        $user = $this->db->from('adminlab')
                         ->where('id_adminlab',$id_adminlab)
                         ->get()
                         ->row();
            return $user;
      }

      function saveadminlab()
      {
       $id_adminlab = $this->input->post('id_adminlab');
        $data = array(
           'username_adminlab' => $_POST['username_adminlab'],
           'nama_adminlab' => $_POST['nama_adminlab'],
           'alamat_adminlab' => $_POST['alamat_adminlab'],
           'jk_adminlab' => $_POST['jk_adminlab'],
           'password_adminlab' => $_POST['password_adminlab'],
           'level_adminlab' => $_POST['level_adminlab'],
           'keterangan' => $_POST['keterangan']
        );
          if($id_adminlab)
        {
            $this->db->where('id_adminlab', $id_adminlab);
            $this->db->update('adminlab', $data);
        }
        else
        {
            $this->db->insert('adminlab', $data);
        }
      }

      function get_data_kasir()
      {
        $user = $this->db->from('kasir')
                         ->get()
                         ->result();
            return $user;
      }

      function get_kasir($id_kasir)
      {
        $user = $this->db->from('kasir')
                         ->where('id_kasir',$id_kasir)
                         ->get()
                         ->row();
            return $user;
      }

      function savekasir()
      {
       $id_kasir = $this->input->post('id_kasir');
        $data = array(
           'username_kasir' => $_POST['username_kasir'],
           'nama_kasir' => $_POST['nama_kasir'],
           'alamat_kasir' => $_POST['alamat_kasir'],
           'jk_kasir' => $_POST['jk_kasir'],
           'password_kasir' => $_POST['password_kasir'],
           'level_kasir' => $_POST['level_kasir'],
           'keterangan' => $_POST['keterangan']
        );
          if($id_kasir)
        {
            $this->db->where('id_kasir', $id_kasir);
            $this->db->update('kasir', $data);
        }
        else
        {
            $this->db->insert('kasir', $data);
        }
      }

      function get_data_farmasi()
      {
        $user = $this->db->from('farmasi')
                         ->get()
                         ->result();
            return $user;
      }

      function get_farmasi($id_farmasi)
      {
        $user = $this->db->from('farmasi')
                         ->where('id_farmasi',$id_farmasi)
                         ->get()
                         ->row();
            return $user;
      }

      function savefarmasi()
      {
       $id_farmasi = $this->input->post('id_farmasi');
        $data = array(
           'username_farmasi' => $_POST['username_farmasi'],
           'nama_farmasi' => $_POST['nama_farmasi'],
           'alamat_farmasi' => $_POST['alamat_farmasi'],
           'jk_farmasi' => $_POST['jk_farmasi'],
           'password_farmasi' => $_POST['password_farmasi'],
           'level_farmasi' => $_POST['level_farmasi'],
           'keterangan' => $_POST['keterangan']
        );
          if($id_farmasi)
        {
            $this->db->where('id_farmasi', $id_farmasi);
            $this->db->update('farmasi', $data);
        }
        else
        {
            $this->db->insert('farmasi', $data);
        }
      }

      function get_data_pasien()
      {
        $user = $this->db->from('pasien')
                         ->join('statuspsien','pasien.statuspasienid=statuspsien.statuspasienid','left')
                         ->get()
                         ->result();
            return $user;
      }


 

}