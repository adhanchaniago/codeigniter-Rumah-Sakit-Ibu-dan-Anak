<?php
class Frontend extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('frontend_model');
	}

	function index(){
		$this->load->view('frontend/frontend');
	}

	function simpanregistrasi(){
        $this->frontend_model->saveregistrasi();
        redirect('frontend');
    }

}
?>