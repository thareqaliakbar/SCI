<?php

  class m_db extends CI_Model
  {
	function __construct(){
		parent::__construct();
	}

    function insertModel($table, $data){
      return $this->db->insert($table, $data);
	  
    }
	
	function lihat(){
		$this->db->select('*');
		$this->db->from("tb_barang");
		$data = $this->db->get();
	   return $data->result();		   
	}
	
	function lihatA(){
		$this->db->select('*');
		$this->db->from("tb_barang");
		$this->db->where('kategori','Alat Musik');
		$data = $this->db->get();
	   return $data->result();		   
	}
	
	function lihatB(){
		$this->db->select('*');
		$this->db->from("tb_barang");
		$this->db->where('kategori','Batik');
		$data = $this->db->get();
	   return $data->result();		   
	}
	
	function lihatC(){
		$this->db->select('*');
		$this->db->from("tb_barang");
		$this->db->where('kategori','Pakaian Adat');
		$data = $this->db->get();
	   return $data->result();		   
	}
	
	function lihatPenjual($fk){
		$this->db->select("*");
		$this->db->from("tb_penjual as m");
		$this->db->join("tb_barang as b", "m.code_barang = b.code_barang");
		$this->db->where('m.code_barang',$fk);
		$this->db->order_by("harga","asc");
		$data=$this->db->get();
		//echo $this->db->last_query();
	   return $data->result();
	}
	
	function delete_mhs($id){
		$con= array("code_barang"=>$id);
		$this->db->delete('tb_barang',$con);	
	}
	
	function whereData($table, $where){
        $this->db->select('*');
        $this->db->where($where);
        $this->db->from($table);

        return $this->db->get()->result();
    }
	  
	function updatebarang($where, $table){
        $this->db->where('code_barang', $where);
        return $this->db->update('tb_barang', $table);
    }
	
  }

 ?>
