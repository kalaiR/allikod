<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  public function get_user_count(){
  	$result = $this->db->query("call GetUserCount()")->row_array();
  	return $result;
  }
}