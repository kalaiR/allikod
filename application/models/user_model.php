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
      $this->db->order_by('martial.maritalcategory_id','asc');
      $query = $this->db->get()->result_array();          
      return $query;
  }

   public function get_mothertongue($userid="", $motherid=""){       
      if($userid!=''){
        // UserId based mother tongue search    
        $condition = "mt.active_status = 1 And re.reg_user_id = ".$id."";
        $this->db->select('mt.name as mother_tongue_name');
        $this->db->from('reg_religion_ethnicity re');
        $this->db->join('reg_userdetail user','re.reg_user_id=user.userdetail_id','left');
        $this->db->join('mother_tongue mt','re.rel_mothertongue_id=mt.mothertongue_id','left');
        $this->db->where($condition);      
        $query = $this->db->get()->result_array(); 
      }elseif($motherid!=''){
        // Mother tongue Id based mother tongue search    
        $condition = "mother.active_status = 1 AND mother.mothertongue_id = ".$motherid."";  
        $this->db->select('*');
        $this->db->from('mother_tongue AS mother');
        $this->db->where($condition);      
        $this->db->order_by('mother.mothertongue_id','asc');
        $query = $this->db->get()->result_array();          
      }else{
        $condition = "mother.active_status = 1";  
        $this->db->select('*');
        $this->db->from('mother_tongue AS mother');
        $this->db->where($condition);      
        $this->db->order_by('mother.mothertongue_id','asc');
        $query = $this->db->get()->result_array();          
      }
      return $query;
  }

  public function get_nakshathra($naks_id=""){

      if($naks_id!=''){
        // get_nakshathra Id Id based search    
        $condition = "naks.active_status = 1 AND naks.nakshathra_id = ".$naks_id."";  
        $this->db->select('*');
        $this->db->from('nakshathra AS naks');
        $this->db->where($condition);      
        $this->db->order_by('naks.nakshathra_id','desc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "naks.active_status = 1";  
        $this->db->select('*');
        $this->db->from('nakshathra AS naks');
        $this->db->where($condition);      
        $this->db->order_by('naks.nakshathra_id','desc');
        $query = $this->db->get()->result_array();          
      }             
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
  
  public function get_education($edu_id=""){
      if($edu_id!=''){
        // Education Id Id based search    
        $condition = "edu.active_status = 1 AND edu.education_id = ".$edu_id."";  
        $this->db->select('*');
        $this->db->from('education AS edu');
        $this->db->where($condition);      
        $this->db->order_by('edu.education_id','asc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "edu.active_status = 1";  
        $this->db->select('*');
        $this->db->from('education AS edu');
        $this->db->where($condition);      
        $this->db->order_by('edu.education_id','asc');
        $query = $this->db->get()->result_array();          
      }
      return $query;
  }

  public function get_occupation($occ_id=""){
      if($occ_id!=''){
        // Occupation Id Id based search    
        $condition = "occ.active_status = 1 AND occ.occupation_id = ".$occ_id."";  
        $this->db->select('*');
        $this->db->from('occupation AS occ');
        $this->db->where($condition);      
        $this->db->order_by('occ.occupation_id','asc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "occ.active_status = 1";  
        $this->db->select('*');
        $this->db->from('occupation AS occ');
        $this->db->where($condition);      
        $this->db->order_by('occ.occupation_id','asc');
        $query = $this->db->get()->result_array();          
      }
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

  public function get_familystatus($family_statusid=""){
       if($family_statusid!=''){
        // Education Id Id based search    
        $condition = "fstatus.active_status = 1 AND fstatus.familystatus_id = ".$family_statusid."";  
        $this->db->select('*');
        $this->db->from('family_status AS fstatus');
        $this->db->where($condition);      
        $this->db->order_by('fstatus.familystatus_id','asc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "fstatus.active_status = 1";  
        $this->db->select('*');
        $this->db->from('family_status AS fstatus');
        $this->db->where($condition);      
        $this->db->order_by('fstatus.familystatus_id','asc');
        $query = $this->db->get()->result_array();          
      }
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
      $this->db->order_by('sstories.successstories_id','');
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
      $this->db->select('usr.*,pay.payment_status,pay.totalno_of_profile,pay.no_of_profiles_viewed');
      $this->db->join('reg_payment pay','pay.reg_user_id = usr.userdetail_id','inner');
      $userdata_get = $this->db->get_where('reg_userdetail as usr',$login_where);      
        if($userdata_get->num_rows()) {
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

   function checkmail(){
    $model_data['error'] = 0;
    if($this->input->post('email')) {
      $login_where = '(user_email="'.$this->input->post('email').'" and user_active_status=1)';
      $this->db->select('*');
      $userdata_get = $this->db->get_where('reg_userdetail as usr',$login_where);      
        if($userdata_get->num_rows()) {
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
      $query = $this->db->query("select usr.userdetail_id, usr_img.images, usr.user_gender from reg_userdetail as usr 
        INNER JOIN user_images as usr_img on usr_img.reg_user_id = usr.userdetail_id where 
        usr.user_active_status =1 AND usr_img.images != '' AND usr_img.images != 'defalt_male.png' AND usr_img.images != 'defalt_female.png' ORDER BY usr.userdetail_id DESC limit 9")->result_array();
      return $query;
  }

  //Changed by Kalai due to syntax error when empty data passed
  public function get_basicsearch($values, $limit, $start){ 
      if(!empty($values)) {
        if(!empty($values['show_profile'])) {
            if($values['show_profile'] =='with_photo'){
               $show_profile = '(img.images!="" AND img.images!="defalt_male.png" AND img.images!="defalt_female.png")';
             }elseif($values['show_profile'] =='without_photo') {
               $show_profile = '(img.images ="" OR img.images ="defalt_male.png" OR img.images="defalt_female.png")';              
             }else{
               $show_profile = '(img.images ="" OR img.images!="" OR img.images ="defalt_male.png" AND img.images="defalt_female.png")';
             }  
        }
        
        $catedu = $this->get_catgoryeducation($values['education']);
        $val =1;
        $like_where = "(";
        foreach ($catedu as $key => $value) {          
          if($val!= count($catedu)){
            $like_where .= 'edu.edu_education = "'.$value['education_id'].'" OR ';
          }else{
            $like_where .= 'edu.edu_education = "'.$value['education_id'].'"';
          }           
          $val++;          
        }  
        $like_where .= ")";  

        $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND phy.phy_height >="'.$values['height_from'].'"  AND phy.phy_height <= "'.$values['height_to'].'" AND usr.user_maritalstatus = "'.$values['mar_status'].'" AND usr.user_gender!=3 AND rel.rel_mothertongue_id = "'.$values['mother_tongue'].'" AND '.$like_where.' AND '.$show_profile.' AND usr.user_delete_status!=1)';
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_gender, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->limit($limit,$start);
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $query['results'] = $this->db->get()->result_array(); 
        // echo $this->db->last_query();

        $this->db->select('*');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $query['total_rows'] = $this->db->get()->num_rows();
      }  
      return $query;
  }

  // Home Page Quick search //
  public function get_quicksearch($values, $limit, $start){ 
      if(!empty($values)) {
        $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND usr.user_gender !=3 AND usr.user_delete_status!=1 AND (img.images!="" AND img.images!="defalt_male.png" AND img.images!="defalt_female.png"))';
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_gender, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->limit($limit,$start);
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $query['results'] = $this->db->get()->result_array();
        // echo $this->db->last_query();
        // Total rows
        $this->db->select('*');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $query['total_rows'] = $this->db->get()->num_rows();
        // echo $this->db->last_query();
      }  
      return $query;
  }


  /** Search by vallikodi Id **/
  public function get_datauserId($values, $limit, $start){     
        $user_where = '(usr.userdetail_id="'.$values.'" AND usr.user_delete_status!=1 AND usr.user_gender !=3)';
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->limit($limit,$start);
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $model_data['results'] = $this->db->get()->result_array();

    return $model_data;
  }

  /** Search by Manual Id **/
  public function get_datauser_manualId($values, $limit, $start){     

        $user_where = '(usr.userdetail_profile_id="'.$values.'" AND usr.user_delete_status!=1 AND usr.user_gender !=3)';        
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_gender, usr.user_active_status, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->limit($limit,$start);
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_profile_id','desc');
        $model_data['results'] = $this->db->get()->result_array();

        // // Total rows
        // $this->db->select('*');
        // $this->db->from('reg_userdetail usr');
        // $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        // $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        // $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        // $this->db->where($user_where);
        // $model_data['total_rows'] = $this->db->get()->num_rows();

    return $model_data;
  }
  public function get_viewdetails_byid($id){
      // View by id
      $condition = "usr.userdetail_id = ".$id."";     
      $this->db->select('*,rb.name as registered_by_name, pe.phy_searchedu_status as eduexpected, mt.name as mother_tongue_name,nak.name as nakshathra_name,ein.name as empin_name, zod.name as zodiac_name, famst.name as family_statusname, famtype.name as family_typename, bdy_type.typename as body_typename, comp.name as complexion_typename, fod.name as food_name, fode.name as phy_expectationfood_name, mc.marital_name as maritalname,luk.name as lukhnam_name');
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
      $this->db->join('family_status famst','famst.familystatus_id=cf.comm_family_status','left');
      $this->db->join('family_type famtype','famtype.familytype_id=cf.comm_family_type','left');
      $this->db->join('body_type bdy_type','bdy_type.bodytype_id=pe.phy_bodytype','left');
      $this->db->join('complexion comp','comp.complexion_id=pe.phy_complexion','left');
      $this->db->join('food fod','fod.food_id=pe.phy_food','left');
      $this->db->join('food fode','fode.food_id=pe.phy_expectationfood','left');
      $this->db->where($condition); 
      $query = $this->db->get()->row_array();
      //echo $this->db->last_query();
      return $query;
  } 

  /** Search by getrasi_viewdetails_by Id **/
  public function getrasi_viewdetails_byid($userid){
        if(!empty($userid)){
        $user_where = '(userdetail_id="'.$userid.'")';
        $this->db->select('horo.r_1,horo.r_2,horo.r_3,horo.r_4,horo.r_5,horo.r_6,horo.r_7,horo.r_8,horo.r_9,horo.r_10');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_image_horoscope horo','horo.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $model_data = $this->db->get()->row_array();
        return $model_data;
      }else{
        return;
      }
  }
  
  /** Search by getamsham_viewdetails_by Id **/
  public function getamsham_viewdetails_byid($userid){
    if(!empty($userid)){
        $user_where = '(userdetail_id="'.$userid.'")';
        $this->db->select('horo.a_1,horo.a_2,horo.a_3,horo.a_4,horo.a_5,horo.a_6,horo.a_7,horo.a_8,horo.a_9,horo.a_10');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_image_horoscope horo','horo.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $model_data = $this->db->get()->row_array();
        return $model_data;
      }else{
        return;
      }
  }
  public function get_registerdata($userid){
     if(!empty($userid)){
        $user_where = '(userdetail_id="'.$userid.'")';
        $this->db->select('usr.user_registeredby, usr.user_email, usr.user_pwd, usr.user_fname, usr.user_gender, usr.user_age, comm.comm_current_countrycountry, comm.comm_mobile_no, rel.rel_mothertongue_id');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_communication_family comm','comm.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('usr.userdetail_id','desc');
        $model_data = $this->db->get()->row_array();
        // echo $this->db->last_query();
        return $model_data;
     }else{
        return;
     }
 } 

 public function get_educationcategory($educat_id=""){
      if($educat_id!=''){
        // Education Id Id based search    
        $condition = "educat.active_status = 1 AND educat.educationcategory_id = ".$edu_id."";  
        $this->db->select('*');
        $this->db->from('education_category AS educat');
        $this->db->where($condition);      
        $this->db->order_by('educat.educationcategory_id','asc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "educat.active_status = 1";  
        $this->db->select('*');
        $this->db->from('education_category AS educat');
        $this->db->where($condition);      
        $this->db->order_by('educat.educationcategory_id','asc');
        $query = $this->db->get()->result_array();          
      }
      return $query;
  }

  public function get_catgoryeducation($catid){
     if(!empty($catid)){
        $user_where = '(cedu.educationcategory_id="'.$catid.'")';
        $this->db->select('*');
        $this->db->from('education_category cedu');
        $this->db->join('education edu','edu.edu_categoryid = cedu.educationcategory_id','left');
        $this->db->where($user_where);
        $this->db->order_by('cedu.educationcategory_id','desc');
        $model_data = $this->db->get()->result_array();
        //echo $this->db->last_query();
        return $model_data;
     }else{
        return;
     }
 }
 
   /** Search by dhoshamsearch Id **/
  public function get_dhoshamsearch($values, $limit, $start){ 

        if($values == 1){
          $dhosham_1 = "(rel.rel_dhosham LIKE '%nag%') or (rel.rel_dhosham LIKE 'n%g%') or(rel.rel_dhosham LIKE '%nak%')) and ((rel.rel_dhosham LIKE '%n%ga%')or (rel.rel_dhosham LIKE '%n%ka%')or (rel.rel_dhosham LIKE '%n%ha%') or (rel.rel_dhosham LIKE '%n%gha%') or (rel.rel_dhosham LIKE '%n%kha%') or (rel.rel_dhosham LIKE '%nah%') or (rel.rel_dhosham LIKE '%aga%') or (rel.rel_dhosham LIKE '%a%g%') or (rel.rel_dhosham LIKE '%na%ga%')";
        } 

        if($values == 2){
            $dhosham_1 = "(rel.rel_dhosham LIKE 's%v%')or(rel.rel_dhosham LIKE 'c%v%')or(rel.rel_dhosham LIKE '%se%v%')or(rel.rel_dhosham LIKE '%ce%v%')or(rel.rel_dhosham LIKE '%she%v%')or(rel.rel_dhosham LIKE '%che%v%')or(rel.rel_dhosham LIKE '%sha%v%')or(rel.rel_dhosham LIKE '%cha%v%')) and ((rel.rel_dhosham LIKE '%av%i%') or (rel.rel_dhosham LIKE '%ev%i%') or (rel.rel_dhosham LIKE '%ev%y%') or (rel.rel_dhosham LIKE '%av%y%') or (rel.rel_dhosham LIKE '%e%va%'))and ((rel.rel_dhosham LIKE '%vai%')or(rel.rel_dhosham LIKE '%vay%')or(rel.rel_dhosham LIKE '%vi%')or(rel.rel_dhosham LIKE '%vy%')or(rel.rel_dhosham LIKE '%va%')or(rel.rel_dhosham LIKE '%vha%')) and ((rel.rel_dhosham LIKE '%eva%')or(rel.rel_dhosham LIKE '%vva%')or(rel.rel_dhosham LIKE '%evv%')or(rel.rel_dhosham LIKE '%evva%')";
        }

        if($values == 3){
            $dhosham_1 = "(rel.rel_dhosham LIKE 'ra%')or(rel.rel_dhosham LIKE 'ka%')or(rel.rel_dhosham LIKE 'ke%')or(rel.rel_dhosham LIKE 'ga%')or(rel.rel_dhosham LIKE 'ge%')or(rel.rel_dhosham LIKE '%raag%u%')or(rel.rel_dhosham LIKE '%rag%u%')or(rel.rel_dhosham LIKE '%kaet%u%')or(rel.rel_dhosham LIKE '%ket%u%')or(rel.rel_dhosham LIKE '%kaed%u%')or(rel.rel_dhosham LIKE '%ked%u%')or(rel.rel_dhosham LIKE '%gaet%u%')or(rel.rel_dhosham LIKE '%get%u%')or(rel.rel_dhosham LIKE '%gaed%u%')or(rel.rel_dhosham LIKE '%ged%u%')) and ((rel.rel_dhosham LIKE '%r%ghu%')or (rel.rel_dhosham LIKE '%r%khu%')or (rel.rel_dhosham LIKE '%r%gu%')or(rel.rel_dhosham LIKE '%hu%')or(rel.rel_dhosham LIKE '%gu%')or(rel.rel_dhosham LIKE '%du%')or (rel.rel_dhosham LIKE '%r%ku%')or (rel.rel_dhosham LIKE '%k%thu%')or (rel.rel_dhosham LIKE '%k%tu%')or (`rel.rel_dhosham` LIKE '%k%du%')";
        }
        

      $user_where = '(rel.rel_dhosham='.$values.' AND usr.user_delete_status!=1 AND usr.user_gender !=3 AND '.$dhosham_1.')';
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_gender, usr.user_active_status, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, rel.rel_dhosham, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_religion_ethnicity rel');
        $this->db->join('reg_userdetail usr','usr.userdetail_id = rel.reg_user_id','inner'); 
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = rel.reg_user_id','inner');
        $this->db->join('user_images img','img.reg_user_id = rel.reg_user_id','inner');               
        $this->db->limit($limit,$start);
        $this->db->where($user_where);
        $this->db->order_by('rel.reg_user_id','desc');
        $model_data['results'] = $this->db->get()->result_array(); 
        // echo $this->db->last_query();  

         // Total rows
        $this->db->select('*');
        $this->db->from('reg_religion_ethnicity rel');
        $this->db->join('reg_userdetail usr','usr.userdetail_id = rel.reg_user_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = rel.reg_user_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = rel.reg_user_id','inner');
        $this->db->join('user_images img','img.reg_user_id = rel.reg_user_id','inner');
        $this->db->where($user_where);
        $this->db->order_by('rel.reg_user_id','desc');
        $model_data['total_rows'] = $this->db->get()->num_rows();         

    return $model_data;
  }

  // Get Occupation Category //
  public function get_occupationcategory($occcat_id=""){
      if($occcat_id!=''){
        // Education Id Id based search    
        $condition = "occ.active_status = 1 AND occ.occ_category_id = ".$occcat_id."";  
        $this->db->select('*');
        $this->db->from('occupation_category AS occ');
        $this->db->where($condition);      
        $this->db->order_by('occ.occ_category_id','asc');
        $query = $this->db->get()->row_array();          
      }else{
        $condition = "occ.active_status = 1";  
        $this->db->select('*');
        $this->db->from('occupation_category AS occ');
        $this->db->where($condition);      
        $this->db->order_by('occ.occ_category_id','asc');
        $query = $this->db->get()->result_array();          
      }
      return $query;
  }

  // select Occupation category based occupation //
  public function get_catgoryoccupation($catocc_id){
     if(!empty($catocc_id)){
        $user_where = '(occcat.occ_category_id="'.$catocc_id.'")';
        $this->db->select('*');
        $this->db->from('occupation_category occcat');
        $this->db->join('occupation occ','occ.occupation_catid = occcat.occ_category_id','left');
        $this->db->where($user_where);
        $this->db->order_by('occcat.occ_category_id','desc');
        $model_data = $this->db->get()->result_array();
        // echo $this->db->last_query();        
        return $model_data;
     }else{
        return;
     }
 } 

// Advance Search Query //
 public function get_advancesearch($values, $limit, $start){
  if(!empty($values)) {

        // With Photo - Without photo //
        if(!empty($values['show_profile'])) {
            if($values['show_profile'] =='with_photo'){
               $show_profile = '(img.images!="" AND img.images!="defalt_male.png" AND img.images!="defalt_female.png")';
            }elseif($values['show_profile'] =='without_photo') {
               $show_profile = '(img.images ="" OR img.images ="defalt_male.png" OR img.images="defalt_female.png")';
            }else{
               $show_profile = '(img.images ="" OR img.images!="" OR img.images ="defalt_male.png" AND img.images="defalt_female.png")';
            } 
        } 

        // With Education Category Based Education //
        if(!empty($values['education_category'])) {
          $catedu = $this->get_catgoryeducation($values['education_category']);
          $val =1;
          $like_where1 = "(";
            foreach ($catedu as $key => $value) {          
              if($val!= count($catedu)){
                $like_where1 .= 'edu.edu_education = "'.$value['education_id'].'" OR ';
              }else{
                $like_where1 .= 'edu.edu_education = "'.$value['education_id'].'"';
              }           
              $val++;          
            }  
          $like_where1 .= ")";          

          $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND phy.phy_height >="'.$values['height_from'].'"  AND phy.phy_height <= "'.$values['height_to'].'" AND usr.user_maritalstatus = "'.$values['mar_status'].'" AND usr.user_gender!=3 AND rel.rel_mothertongue_id = "'.$values['mother_tongue'].'" AND '.$show_profile.' AND '.$like_where1.' AND usr.user_delete_status!=1)';
        } 

        // With Occupation Category Based Occupation //
        if(!empty($values['occupation_catagory'])) {
          $cateocc = $this->get_catgoryoccupation($values['occupation_catagory']);                 
          $val =1;
          $like_where = "(";
            foreach ($cateocc as $key => $value) {          
              if($val!= count($cateocc)){
                $like_where .= 'edu.edu_occupation = "'.$value['occupation_id'].'" OR ';
              }else{
                $like_where .= 'edu.edu_occupation = "'.$value['occupation_id'].'"';
              }           
              $val++;          
            }  
          $like_where .= ")";  
          $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND phy.phy_height >="'.$values['height_from'].'"  AND phy.phy_height <= "'.$values['height_to'].'" AND usr.user_maritalstatus = "'.$values['mar_status'].'" AND usr.user_gender!=3 AND rel.rel_mothertongue_id = "'.$values['mother_tongue'].'" AND '.$show_profile.' AND '.$like_where.' AND usr.user_delete_status!=1)'; 
        }

        $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND phy.phy_height >="'.$values['height_from'].'"  AND phy.phy_height <= "'.$values['height_to'].'" AND usr.user_maritalstatus = "'.$values['mar_status'].'" AND usr.user_gender!=3 AND rel.rel_mothertongue_id = "'.$values['mother_tongue'].'" AND '.$show_profile.' AND usr.user_delete_status!=1)';

        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_gender, usr.user_dob, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->limit($limit,$start);        
        $this->db->where($user_where);       
        $this->db->order_by('usr.userdetail_id','desc');
        $query['results'] = $this->db->get()->result_array(); 
        // echo $this->db->last_query();
        // exit();

        $this->db->select('*');
        $this->db->from('reg_userdetail usr');
        $this->db->join('reg_religion_ethnicity rel','rel.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_physical_expectation phy','phy.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('reg_education_occupation edu','edu.reg_user_id = usr.userdetail_id','inner');
        $this->db->join('user_images img','img.reg_user_id = usr.userdetail_id','inner');
        $this->db->where($user_where);        
        $this->db->order_by('usr.userdetail_id','desc');
        $query['total_rows'] = $this->db->get()->num_rows();
        // echo $this->db->last_query();
      }  
      // print_r($query);
      // exit();

      return $query;

 }  

 public function customer_user_profile($id){
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
      $model_data['customeruser_values'] = $this->db->get()->row_array();
     //  echo $this->db->last_query();
     //  echo "<pre>";
      // print_r($model_data['customeruser_values']);
      // echo "</pre>";
      return $model_data;
  }
  public function customer_user_selectiondata(){
      $model_data['registeredby_values'] = $this->db->order_by('registeredby_id','asc')->get_where('registered_by',array('active_status'=>1))->result_array();
      $model_data['maritalstatus_values'] = $this->db->order_by('maritalcategory_id','asc')->get_where('marital_category',array('active_status'=>1))->result_array();
      $model_data['mothertongue_values'] = $this->db->order_by('mothertongue_id','asc')->get_where('mother_tongue',array('active_status'=>1))->result_array();
      $model_data['nakshathra_values'] = $this->db->order_by('nakshathra_id','asc')->get_where('nakshathra',array('active_status'=>1))->result_array();
      $model_data['luknam_values'] = $this->db->order_by('luknam_id','asc')->get_where('luknam',array('active_status'=>1))->result_array();
      $model_data['zodiac_values'] = $this->db->order_by('zodiacsign_id','asc')->get_where('zodiac_sign',array('active_status'=>1))->result_array();
      $model_data['employedin_values'] = $this->db->order_by('employedin_id','asc')->get_where('employed_in',array('active_status'=>1))->result_array();
      $model_data['country_values'] = $this->db->order_by('country_id','asc')->get_where('country',array('active_status'=>1))->result_array();
      $model_data['bodytype_values'] = $this->db->order_by('bodytype_id','asc')->get_where('body_type')->result_array();
      $model_data['complexion_values'] = $this->db->order_by('complexion_id','asc')->get_where('complexion',array('active_status'=>1))->result_array();
      $model_data['food_values'] = $this->db->order_by('food_id','asc')->get_where('food',array('active_status'=>1))->result_array();
      $model_data['familystatus_values'] = $this->db->order_by('familystatus_id','asc')->get_where('family_status',array('active_status'=>1))->result_array();
      $model_data['familytype_values'] = $this->db->order_by('familytype_id','asc')->get_where('family_type',array('active_status'=>1))->result_array();
      $model_data['height_values'] = $this->db->order_by('heightrelation_id','asc')->get_where('height_relation')->result_array();

      //Category and Subcategory values
      // $model_data['education_values'] = $this->db->order_by('education_id','asc')->get_where('education')->result_array();
      // $model_data['occupation_values'] = $this->db->order_by('occupation_id','asc')->get_where('occupation')->result_array();
      
      $condition = "edu.active_status = 1";
      $this->db->select('edu.education_id,edu.edu_name,edu_cat.cat_name,edu.edu_categoryid');
      $this->db->from('education edu');
      $this->db->join('education_category edu_cat','edu_cat.educationcategory_id=edu.edu_categoryid','inner');
      $this->db->where($condition);
      // $this->db->group_by('edu_cat.cat_name');
      $model_data['education_values'] = $this->db->get()->result_array();
      return $model_data;
  }

  public function update_customer_user($id){
      echo "update_customer_user";
      $res = $this->db->get_where('reg_userdetail', array('userdetail_id' => $id))->row_array();
      if(is_numeric($id) && !empty($res))
      { 
            $userdetail_update_data = array(
                              // 'user_email' => $this->input->post('cus_email'),
                              // 'user_pwd' => $this->input->post('cus_password'),
                              'user_fname' => $this->input->post('cus_fname'),
                              'user_gender' => $this->input->post('cus_gender'),
                              'user_dob' => date('Y-m-d',strtotime($this->input->post('cus_dob'))),
                              'user_age' => $this->input->post('cus_age'),
                              // 'user_active_status' => $this->input->post('cus_profileactivestatus'),
                              'user_maritalstatus' => $this->input->post('cus_marstatus'),
                              'user_registeredby' => ($this->input->post('cus_regby')) ? $this->input->post('cus_regby') : NULL,
                              );
            print_r($userdetail_update_data);
            $religion_ethnicity_update_data = array(
                    'rel_timeofbirth' => $this->input->post('cus_birthhours')."-".$this->input->post('cus_birthmins')."-".$this->input->post('cus_birthmer'),
                    'rel_mothertongue_id' => ($this->input->post('cus_mothertongue')) ? $this->input->post('cus_mothertongue') : NULL,
                    // 'rel_religion' => $this->input->post('cus_religion'),
                    // 'rel_caste' => $this->input->post('cus_caste'),
                    'rel_dhosham' => $this->input->post('cus_dosham'),
                    'rel_nakshathra_id' => ($this->input->post('cus_nakshathra')) ? $this->input->post('cus_nakshathra') : NULL,
                    'rel_luknam_id' => ($this->input->post('cus_lukhnam')) ? $this->input->post('cus_lukhnam') : NULL,
                    'rel_gothra' => $this->input->post('cus_gothra'),
                    'rel_zodiacsign_id' => ($this->input->post('cus_zodiac')) ? $this->input->post('cus_zodiac') : NULL,
                              );
            print_r($religion_ethnicity_update_data);
            $education_occupation_update_data = array(
                    'edu_education' => ($this->input->post('cus_education')) ? $this->input->post('cus_education') : NULL,
                    'edu_educationdetails' => $this->input->post('cus_edudetail'),
                    'edu_occupation' => ($this->input->post('cus_occupation')) ? $this->input->post('cus_occupation') : NULL,
                    'edu_employedin' => ($this->input->post('cus_empin')) ? $this->input->post('cus_empin') : NULL,
                    'edu_montlyincome' => $this->input->post('cus_moninc'),
                    'edu_occupationdetail' => $this->input->post('cus_ocudetail'),
                    );
            print_r($education_occupation_update_data);
            $communication_update_data = array(
                    'comm_residence' => $this->input->post('cus_resident'),
                    'comm_current_countrycountry' => ($this->input->post('cus_curcountry')) ? $this->input->post('cus_curcountry') : NULL,
                    'comm_current_city' => $this->input->post('cus_curcity'),
                    'comm_current_district' => $this->input->post('cus_curdistrict'),
                    'comm_communication_address' => $this->input->post('cus_address'),
                    'comm_phone_no' => $this->input->post('cus_phone'),
                    'comm_mobile_no' => $this->input->post('cus_mobile'),
                    'comm_father_name' => $this->input->post('cus_fathername'),
                    'comm_mother_name' => $this->input->post('cus_mothername'),
                    'comm_father_employment' => $this->input->post('cus_fatheremp'),
                    'comm_mother_employment' => $this->input->post('cus_motheremp'),
                    'comm_family_status' => $this->input->post('cus_familystatus'),
                    'comm_family_type' => $this->input->post('cus_familytype'),
                    'comm_number_of_brothers_el' => $this->input->post('cus_broelder'),
                    'comm_number_of_brothers_yo' => $this->input->post('cus_broyoung'),
                    'comm_number_of_brothers_el_mar' => $this->input->post('cus_broeldermar'),
                    'comm_number_of_brothers_yo_mar' => $this->input->post('cus_broyoungmar'),
                    'comm_number_of_sisters_el' => $this->input->post('cus_siselder'),
                    'comm_number_of_sisters_yo' => $this->input->post('cus_sisyoung'),
                    'comm_number_of_sisters_el_mar' => $this->input->post('cus_siseldermar'),
                    'comm_number_of_sisters_yo_mar' => $this->input->post('cus_sisyoungmar'),
                    'comm_about_family' => $this->input->post('cus_abtfamily'),
                    );
            print_r($communication_update_data);
            $physicalattributes_update_data = array(
                    'phy_height' => $this->input->post('cus_heightcms'),
                    'phy_weight' => $this->input->post('cus_weight'),
                    'phy_bodytype' => $this->input->post('cus_bodytype'),
                    'phy_complexion' => $this->input->post('cus_complexion'),
                    'phy_physicalstatus' => $this->input->post('cus_phystatus'),
                    'phy_food' => $this->input->post('cus_food'),
                    'phy_yourpersonality' => $this->input->post('cus_personality'),
                    'phy_expectationabout_lifepartner' => $this->input->post('cus_expect'),
            );
            $profileimage_update_data = array(
                        'images' => $this->input->post('cus_profileimage'), 
            );
            $userdetail_update_where = '(userdetail_id="'.$this->input->post('rid').'")'; 
            $this->db->set($userdetail_update_data); 
            $this->db->where($userdetail_update_where);
            $this->db->update("reg_userdetail", $userdetail_update_data);

            $communication_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
            $this->db->set($communication_update_data); 
            $this->db->where($communication_update_where);
            $this->db->update("reg_communication_family", $communication_update_data);

            $religion_ethnicity_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
            $this->db->set($religion_ethnicity_update_data); 
            $this->db->where($religion_ethnicity_update_where);
            $this->db->update("reg_religion_ethnicity", $religion_ethnicity_update_data);

            $education_occupation_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
            $this->db->set($education_occupation_update_data); 
            $this->db->where($education_occupation_update_where);
            $this->db->update("reg_education_occupation", $education_occupation_update_data);

            $physicalattributes_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
            $this->db->set($physicalattributes_update_data); 
            $this->db->where($physicalattributes_update_where);
            $this->db->update("reg_physical_expectation", $physicalattributes_update_data);

            // $profileimage_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
            // $this->db->set($profileimage_update_data); 
            // $this->db->where($profileimage_update_where);
            // $this->db->update("user_images", $profileimage_update_data);

            // echo $this->db->last_query(); 
            $model_data['status'] = "Updated Successfully";
            $model_data['error'] = 2;
      }
      else{
            $model_data['error'] = 1;
            $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
      return $model_data;
  }
  
}
/* End of file User_model.php */
/* Location: ./application/controllers/base.php */