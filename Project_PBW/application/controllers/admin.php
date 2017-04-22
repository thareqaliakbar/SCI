<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_db');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}
	
	function insertBarang(){
      $Barang = array(
        'code_barang'     => $this->input->post('kd'),
        'asal_daerah'    => $this->input->post('peng'),
        'nama_barang'   => $this->input->post('nb'),
		'kategori'   => $this->input->post('terbit'),
		'image_barang'   => $this->input->post('pen')
		);

      $result = $this->m_db->insertMBarang('tb_barang', $Barang);
	  
	  if(!$result){
		  echo "<script>alert('gagal');</script>";
	  }

      $this->index();
    }
}