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

  public function get_success_stories_limit(){
      $condition = "sstories.active_status = 1 AND image !=''";
      $this->db->select('successstories_id,image,male_name,female_name');
      $this->db->from('success_stories AS sstories');
      $this->db->where($condition);      
      $this->db->order_by('sstories.successstories_id','desc');
      $this->db->limit(20);
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
  public function get_recent_profile(){
      $query = $this->db->query("select usr.userdetail_id, usr_img.images from reg_userdetail as usr 
        INNER JOIN user_images as usr_img on usr_img.reg_user_id = usr.userdetail_id where 
        usr.user_active_status =1 AND usr_img.images != '' ORDER BY usr.userdetail_id DESC limit 8")->result_array();
      return $query;
  }

  /** Basic search **/
  // public function get_basicsearch($values){     
  //     $condition = "usr.user_gender = ".$values['gender']." AND usr.user_age >= ".$values['age_from']." AND usr.user_age <= ".$values['age_to']." AND phy.phy_height >= ".$values['height_from']." AND phy.phy_height <= ".$values['height_to']." AND usr.user_maritalstatus = ".$values['mar_status']."";
  //     $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation');
  //     $join = $this->db->from('reg_userdetail AS usr INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
  //     INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id       
  //     INNER JOIN reg_education_occupation AS edu ON edu.reg_user_id = usr.userdetail_id');      
  //     $this->db->where($condition);      
  //     $this->db->order_by('usr.userdetail_id','desc');
  //     $query = $this->db->get()->result_array(); 
  //     // $this->db->last_query();
  //     // print_r($query);        
  //     return $query;
  // }

  //Changed by Kalai due to syntax error when empty data passed
  public function get_basicsearch($values){ 
      if(!empty($values)) { 
        // $condition = "usr.user_gender = '".$values['gender']."' AND usr.user_age >= '".$values['age_from']."' AND usr.user_age <= '".$values['age_to']."' AND phy.phy_height >= '".$values['height_from']."' AND phy.phy_height <= '".$values['height_to']."' AND usr.user_maritalstatus = '".$values['mar_status']."'";
        // $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation,img.images');
        // $join = $this->db->from('reg_userdetail AS usr INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
        // INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id       
        // INNER JOIN reg_education_occupation AS edu ON edu.reg_user_id = usr.userdetail_id
        // LEFT JOIN user_images AS img ON img.reg_user_id = usr.userdetail_id');  
        $condition = "usr.user_gender = '".$values['gender']."' AND usr.user_age >= '".$values['age_from']."' AND usr.user_age <= '".$values['age_to']."' AND phy.phy_height >= '".$values['height_from']."' AND phy.phy_height <= '".$values['height_to']."' AND usr.user_maritalstatus = '".$values['mar_status']."'";
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation');
        $join = $this->db->from('reg_userdetail AS usr INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
        INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id       
        INNER JOIN reg_education_occupation AS edu ON edu.reg_user_id = usr.userdetail_id');     
        $this->db->where($condition);      
        $this->db->order_by('usr.userdetail_id','desc');
        $query = $this->db->get()->result_array(); 
      }  
      // $this->db->last_query();
      // print_r($query);
      if(empty($query) || empty($values)){
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation');
        $join = $this->db->from('reg_userdetail AS usr INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
        INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id       
        INNER JOIN reg_education_occupation AS edu ON edu.reg_user_id = usr.userdetail_id');  
        $this->db->order_by('usr.userdetail_id','desc');
        $this->db->limit(100);
        $query = $this->db->get()->result_array();
      }
      return $query;
  }

  /** Search by Id **/
  public function get_datauserId($values){     
      $condition = "usr.userdetail_id = ".$values."";
      $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation');
      $join = $this->db->from('reg_userdetail AS usr INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
      INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id       
      INNER JOIN reg_education_occupation AS edu ON edu.reg_user_id = usr.userdetail_id');      
      $this->db->where($condition);      
      $this->db->order_by('usr.userdetail_id','desc');
      $query = $this->db->get()->result_array();          
      return $query;
  }
  public function get_viewdetails_byid($id){
      // View by id
      $condition = "usr.userdetail_id = ".$id."";
      $this->db->select('*,rb.name as registered_by_name,mt.name as mother_tongue_name,nak.name as nakshathra_name,ein.name as empin_name');
      $this->db->from('reg_userdetail usr');
      $this->db->join('reg_religion_ethnicity re','re.reg_user_id=usr.userdetail_id','left');
      $this->db->join('reg_education_occupation eo','eo.reg_user_id=usr.userdetail_id','left');
      $this->db->join('reg_communication_family cf','cf.reg_user_id=usr.userdetail_id','left');
      $this->db->join('reg_physical_expectation pe','pe.reg_user_id=usr.userdetail_id','left');
      $this->db->join('reg_image_horoscope ih','ih.reg_user_id=usr.userdetail_id','left');
      $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
      $this->db->join('user_images img','img.reg_user_id=usr.userdetail_id','left');
      $this->db->join('registered_by rb','rb.registeredby_id=usr.user_registeredby','left');
      $this->db->join('marital_category mc','mc.maritalcategory_id=usr.user_maritalstatus','left');
      $this->db->join('mother_tongue mt','mt.mothertongue_id=re.rel_mothertongue_id','left');
      $this->db->join('nakshathra nak','nak.nakshathra_id=re.rel_nakshathra_id','left');
      $this->db->join('luknam luk','luk.luknam_id=re.rel_luknam_id','left');
      $this->db->join('zodiac_sign zod','zod.zodiacsign_id=re.rel_zodiacsign_id','left');
      $this->db->join('education ed','ed.education_id=eo.edu_education','left');
      $this->db->join('occupation occ','occ.occupation_id=eo.edu_occupation','left');
      $this->db->join('employed_in ein','ein.employedin_id=eo.edu_employedin','left');
      $this->db->where($condition); 
      $query = $this->db->get()->row_array();
      return $query;
  }

  

}

/* End of file User_model.php */
/* Location: ./application/controllers/base.php */