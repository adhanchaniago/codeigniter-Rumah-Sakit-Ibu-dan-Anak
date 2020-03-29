
<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);


        $cek_superadmin=$this->login_model->auth_superadmin($username,$password);
        $cek_admin=$this->login_model->auth_admin($username,$password);
        $cek_dokter=$this->login_model->auth_dokter($username,$password);
        $cek_adminlab=$this->login_model->auth_adminlab($username,$password);
        $cek_kasir=$this->login_model->auth_kasir($username,$password);
        $cek_farmasi=$this->login_model->auth_farmasi($username,$password);

        if($cek_superadmin->num_rows() > 0){ 
						$data=$cek_superadmin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='5'){ //Akses superadmin
		            $this->session->set_userdata('akses','5');
		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['name']);
		            $this->session->set_userdata('ses_pass',$data['password']);
		            $this->session->set_userdata('ses_level',$data['level']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('superadmin');
		         }
        }

        if($cek_admin->num_rows() > 0){ 
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_admin']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['admin_id']);
		            $this->session->set_userdata('ses_user',$data['username_admin']);
		            $this->session->set_userdata('ses_nama',$data['nama_admin']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('page');
		         }
        }
        else if($cek_dokter->num_rows() > 0){ //jika login sebagai dokter
						$data=$cek_dokter->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_dokter']=='2'){ //Akses admin
		            $this->session->set_userdata('aksesdokter','2');
		            $this->session->set_userdata('ses_id',$data['id_dokter']);
		            $this->session->set_userdata('ses_user',$data['username_dokter']);
		            $this->session->set_userdata('ses_nama',$data['nama_dokter']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('page');
		         }
        }
        else if($cek_adminlab->num_rows() > 0){ 
						$data=$cek_adminlab->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_adminlab']=='1'){ 
		            $this->session->set_userdata('aksesadminlab','1');
		            $this->session->set_userdata('ses_id',$data['level_adminlab']);
		            $this->session->set_userdata('ses_user',$data['username_adminlab']);
		            $this->session->set_userdata('ses_nama',$data['nama_adminlab']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('page');
		         }
        }
         else if($cek_kasir->num_rows() > 0){ 
						$data=$cek_kasir->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_kasir']=='1'){ 
		            $this->session->set_userdata('akseskasir','1');
		            $this->session->set_userdata('ses_id',$data['id_kasir']);
		            $this->session->set_userdata('ses_user',$data['username_kasir']);
		            $this->session->set_userdata('ses_nama',$data['nama_kasir']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('page');
		         }
        }

        else if($cek_farmasi->num_rows() > 0){ 
						$data=$cek_farmasi->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_farmasi']=='1'){ 
		            $this->session->set_userdata('aksesfarmasi','1');
		            $this->session->set_userdata('ses_id',$data['id_farmasi']);
		            $this->session->set_userdata('ses_user',$data['username_farmasi']);
		            $this->session->set_userdata('ses_nama',$data['nama_farmasi']);
		            $this->session->set_userdata('ses_keterangan',$data['keterangan']);
		            redirect('page');
		         }
        }
        else{  	$url=base_url();
							 echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}

    }

    function logout(){ 
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
