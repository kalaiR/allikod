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

   public function get_mothertongue(){
      $condition = "mother.active_status = 1";
      $this->db->select('*');
      $this->db->from('mother_tongue AS mother');
      $this->db->where($condition);      
      $this->db->order_by('mother.mothertongue_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_nakshathra(){
      $condition = "naks.active_status = 1";
      $this->db->select('*');
      $this->db->from('nakshathra AS naks');
      $this->db->where($condition);      
      $this->db->order_by('naks.nakshathra_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_luknam(){
      $condition = "luk.active_status = 1";
      $this->db->select('*');
      $this->db->from('luknam AS luk');
      $this->db->where($condition);      
      $this->db->order_by('luk.luknam_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_zodiac(){
      $condition = "zodi.active_status = 1";
      $this->db->select('*');
      $this->db->from('zodiac_sign AS zodi');
      $this->db->where($condition);      
      $this->db->order_by('zodi.zodiacsign_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }
  
  public function get_education(){
      $condition = "edu.active_status = 1";
      $this->db->select('*');
      $this->db->from('education AS edu');
      $this->db->where($condition);      
      $this->db->order_by('edu.education_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_occupation(){
      $condition = "occ.active_status = 1";
      $this->db->select('*');
      $this->db->from('occupation AS occ');
      $this->db->where($condition);      
      $this->db->order_by('occ.occupation_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_country(){
      $condition = "cou.active_status = 1";
      $this->db->select('*');
      $this->db->from('country AS cou');
      $this->db->where($condition);      
      $this->db->order_by('cou.country_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }
  
  public function get_employedin(){
      $condition = "emp.active_status = 1";
      $this->db->select('*');
      $this->db->from('employed_in AS emp');
      $this->db->where($condition);      
      $this->db->order_by('emp.employedin_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_familystatus(){
      $condition = "fstatus.active_status = 1";
      $this->db->select('*');
      $this->db->from('family_status AS fstatus');
      $this->db->where($condition);      
      $this->db->order_by('fstatus.familystatus_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_familytype(){
      $condition = "ftype.active_status = 1";
      $this->db->select('*');
      $this->db->from('family_type AS ftype');
      $this->db->where($condition);      
      $this->db->order_by('ftype.familytype_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_bodytype(){
      $condition = "btype.active_status = 1";
      $this->db->select('*');
      $this->db->from('body_type AS btype');
      $this->db->where($condition);      
      $this->db->order_by('btype.bodytype_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

   public function get_complexion(){
      $condition = "ctype.active_status = 1";
      $this->db->select('*');
      $this->db->from('complexion AS ctype');
      $this->db->where($condition);      
      $this->db->order_by('ctype.complexion_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_food(){
      $condition = "ftype.active_status = 1";
      $this->db->select('*');
      $this->db->from('food AS ftype');
      $this->db->where($condition);      
      $this->db->order_by('ftype.food_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

  public function get_success_stories(){
      $condition = "sstories.active_status = 1";
      $this->db->select('*');
      $this->db->from('success_stories AS sstories');
      $this->db->where($condition);      
      $this->db->order_by('sstories.successstories_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }
  
  function insert_registration($table1, $data1){
    $this->db->insert($table1, $data1);
    $id_table1    = $this->db->insert_id();
    return $id_table1;
  }

  function user_login(){
    $model_data['error'] = 0;
    if($this->input->post('email_id')) {
      $login_where = '(user_email="'.$this->input->post('email_id').'" and user_pwd="'.$this->input->post('password').'" and user_active_status=1)';
      $this->db->select('*');
      $userdata_get = $this->db->get_where('reg_userdetail',$login_where);      
        if($userdata_get->num_rows() == 1) {
          $model_data['status'] = "login_success";
          $model_data['login_values'] = $userdata_get->row_array();
        }
        else {
          $model_data['status'] = "Invalid Login Details";
        }
    }
    else {
      $model_data['status']= "failed";
      $model_data['error'] = 1;
    }
    return $model_data;
  }

}

/* End of file User_model.php */
/* Location: ./application/controllers/base.php */