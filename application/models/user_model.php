<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  /** get the register user-id **/
   public function get_registerid(){
      $condition = "reg.active_status = 1";
      $this->db->select('*');
      $this->db->from('registered_by AS reg');
      $this->db->where($condition);      
      $this->db->order_by('reg.registeredby_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_martialstatus(){
      $condition = "martial.active_status = 1";
      $this->db->select('*');
      $this->db->from('marital_category AS martial');
      $this->db->where($condition);      
      $this->db->order_by('martial.maritalcategory_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  function insert_registration($table1, $data1){
    $this->db->insert($table1, $data1);
    $id_table1    = $this->db->insert_id();

    // array_unshift($data2, array('id_pengguna'=>$id_table1));

    // $this->db->insert($table2, $data2);
    // $id_table2    = $this->db->insert_id();

    // $return_data  = array($table1 => $id_table1, $table2 => $id_table2);

    return $id_table1;
}

}

/* End of file User_model.php */
/* Location: ./application/controllers/base.php */