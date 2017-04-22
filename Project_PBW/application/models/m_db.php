<?php
  /**
   *
   */
  class m_db extends CI_Model
  {

    function insertMBarang($table, $data){
      return $this->db->insert($table, $data);
    }
  }


 ?>
