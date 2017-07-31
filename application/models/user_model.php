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
  public function get_recent_profile(){
      $query = $this->db->query("select usr.userdetail_id, usr_img.images from reg_userdetail as usr 
        INNER JOIN user_images as usr_img on usr_img.reg_user_id = usr.userdetail_id where 
        usr.user_active_status =1 AND usr_img.images != '' ORDER BY usr.userdetail_id DESC limit 8")->result_array();
      return $query;
  }

  //Changed by Kalai due to syntax error when empty data passed
  public function get_basicsearch($values, $limit, $start){ 
      if(!empty($values)) {
        if(!empty($values['show_profile'])) {
            if($values['show_profile'] =='with_photo'){
               $show_profile = '(img.images!="" AND img.images!="defalt_male.jpg" AND img.images!="defalt_female.jpg")';
             }elseif($values['show_profile'] =='without_photo') {
               $show_profile = '(img.images ="" OR img.images ="defalt_male.jpg" OR img.images="defalt_female.jpg")';              
             }else{
               $show_profile = '(img.images ="" OR img.images!="" OR img.images ="defalt_male.jpg" AND img.images="defalt_female.jpg")';
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
        $user_where = '(usr.user_gender="'.$values['gender'].'" AND usr.user_age >= "'.$values['age_from'].'" AND usr.user_age <="'.$values['age_to'].'" AND usr.user_gender !=3 AND usr.user_delete_status!=1)';
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

        $user_where = '(rel.rel_dhosham='.$values.' AND usr.user_delete_status!=1 AND usr.user_gender !=3)';
        $this->db->select('usr.userdetail_id, usr.user_fname, usr.user_dob, usr.user_gender, usr.user_active_status, usr.user_age, rel.rel_nakshathra_id, rel.rel_religion, edu.edu_education, edu.edu_occupation, img.images');
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
  
}
/* End of file User_model.php */
/* Location: ./application/controllers/base.php */