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

  // Login - Admin
  public function admin_login()
  {
    $model_data['error'] = 0;
    if($this->input->post('username') && $this->input->post('password')) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      // Normal query for login
      // $admin_login_where = "adminuser_name =" . "'" . $this->db->escape($username) . "' AND " . "adminuser_pwd =" . "'" . $this->db->escape($password) . "' AND active_status = 1";
  		// $this->db->select('*');
  		// $this->db->from('admin_user');
  		// $this->db->where($admin_login_where);
  		// $this->db->limit(1);
  		// $admin_login_get = $this->db->get();

      //sql injection prevent sql query
      $sql = "SELECT * FROM admin_user WHERE adminuser_name = ? AND adminuser_pwd = ? AND active_status = ?";
      $admin_login_get = $this->db->query($sql, array($username, $password, 1));
      if($admin_login_get->num_rows() == 1) {
        $model_data['status'] = "login_success";
        $model_data['error'] = 2;
        $model_data['login_values'] = $admin_login_get->row_array();
      }
      else {
        $model_data['status'] = "Invalid Login Details";
        $model_data['error'] = 2;
      }
    }
    else {
      $model_data['status']= "failed";
      $model_data['error'] = 1;
    }
    return $model_data;
  }
}