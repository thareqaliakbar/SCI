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
		$this->load->view('v_barang');
	}	
	
	function update(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_data', $tampil);
	}
	
	function penjual(){
		$this->load->view('v_penjual');
	}
	function lihat(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_customer', $tampil);
	}
	
	function insertBarang(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
 
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('image')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		}else{
			$url = base_url('/uploads/');
			$Barang = array(
			'code_barang'     => $this->input->post('kd'),
			'asal_daerah'    => $this->input->post('ad'),
			'nama_barang'   => $this->input->post('nb'),
			'kategori'   => $this->input->post('kate'),
			'keterangan'   => $this->input->post('ket'),
			'image' => $url.$this->upload->data('file_name')
			);
			
			$this->load->model('m_db');
			$this->m_db->insertModel('tb_barang', $Barang);

			$this->penjual();
		}
    }
	
	function insertPenjual(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000'; //in kb
 
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('image')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		}else{
			$url = base_url('/uploads/');
			$Toko = array(
			'toko_penjual'     => $this->input->post('nt'),
			'harga'    => $this->input->post('h'),
			'code_barang'   => $this->input->post('kd'),
			'image_penjual' => $url.$this->upload->data('file_name')
			);
			
			$this->m_db->insertModel('tb_penjual', $Toko);
 
			$this->penjual();
		}
	}
	
	public function view_barang(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_data', $tampil); 
	}
	  
	public function view_customer(){
		$tampil = array('data'=> $this->m_db->lihatA());
		$this->load->view('v_customer', $tampil); 
	}
	
	public function view_customer2(){
		$tampil = array('data'=> $this->m_db->lihatB());
		$this->load->view('v_customer2', $tampil); 
	}
	
	public function view_customer3(){
		$tampil = array('data'=> $this->m_db->lihatC());
		$this->load->view('v_customer3', $tampil); 
	}
	
	function daftarPenjual($cd){
    	$tampil = array('data'=> $this->m_db->lihatPenjual($cd));
		$this->load->view('v_daftarPenjual',$tampil);
    }
	
	public function delete_barang($id){
		$del = $this->m_db->delete_mhs($id);
		
		redirect('admin/view_barang/');		
	}
	
	function edit_barang($cd){
         /* $where = array('code_barang' => $cd);
          $data = $this->m_db->whereData('tb_barang', $where);

          $this->load->view('v_data');
          $this->load->view('edit_barang', array('data'=> $data[0]));*/
		$data['kd'] = $cd;
		$this->load->view('edit_barang',$data);
        }

        function action_edit_barang(){
		$cd    = $this->input->post('cd');
		$asal    = $this->input->post('ad');
		$nama  = $this->input->post('nb');
		$kategori  = $this->input->post('kate');
		$keterangan   = $this->input->post('ket');
          $Barang   = array(
			'nama_barang' => $nama,
			'asal_daerah' => $asal,
			'kategori' => $kategori,
			'keterangan' => $keterangan
          );
          $update = $this->m_db->updatebarang($cd, $Barang);

          if($update){
            redirect(base_url('index.php/admin/update'));
          }
        }
	
}