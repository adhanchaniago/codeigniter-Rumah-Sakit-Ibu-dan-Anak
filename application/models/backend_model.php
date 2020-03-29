<?php
/**
 * 
 */
class Backend_model extends CI_Model
{
	function get_user()
	{
		$user = $this->db->from('users')
                           ->get()
                           ->result();
        return $user;
	}

	function get_user_verif()
	{
		$user = $this->db->from('users_v')
                           ->get()
                           ->result();
        return $user;
	}

	function get_status($email)
	{
		$user = $this->db->from('users')
                           
                           ->where('email',$email)
                           ->get()
                           ->row();
        return $user;
	}

	function get_status2($email)
	{
		$user = $this->db->from('users_v')
                           
                           ->where('email_v',$email)
                           ->get()
                           ->row();
        return $user;
	}

	function get_status_user($email)
	{
		$user = $this->db->from('users_v')
                           
                           ->where('email_v',$email)
                           ->get()
                           ->row();
        return $user;
	}

	 function saveuser()
    {
       
       
        $data = array(
           'email_v' => $_POST['email_v'],
           'password_v' => $_POST['password_v'],
           'nama_v' => $_POST['nama_v'],
           'gender_v' => $_POST['gender_v'],
           'alamat_v' => $_POST['alamat_v']
            
        );
        
         
            //simpan baru
            $this->db->insert('users_v', $data);
        
    }

    function saveuser2()
    {
      $email = $this->input->post('email_v');

       
        $data = array(
           'email_v' => $_POST['email_v'],
           'password_v' => $_POST['password_v'],
           'nama_v' => $_POST['nama_v'],
           'gender_v' => $_POST['gender_v'],
           'alamat_v' => $_POST['alamat_v']
            
        );
           
            //simpan baru
            $this->db->insert('users_v', $data);
        
    }
    function saveuser3()
    {
     
       $email = $this->input->post('email_v');

        $data = array(
           'password_v' => $_POST['password_v'],
           'nama_v' => $_POST['nama_v'],
           'gender_v' => $_POST['gender_v'],
           'alamat_v' => $_POST['alamat_v']
            
        );
           
            if($email)
        {
            //simpan edit
            $this->db->where('email_v', $email);
            $this->db->update('users_v', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('users_v', $data);
        }
        
    }
}

?>