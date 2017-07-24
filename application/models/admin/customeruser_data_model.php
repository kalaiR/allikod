<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_data_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  // zodiac_sign - Add Edit Delete View
  public function customer_user($status){
	  	// $model_data['status'] = 0;
	   //  $model_data['error'] = 0;

	   //  //To check whether the data is mapped with already or not
	   //  // $this->db->select('s.state_id');
	   //  // $this->db->from('tr_state s');
	   //  // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
	   //  // $this->db->group_by('d.district_state_id');
	   //  // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
	   //  // print_r($model_data['mapped_data']);

	    // Update data
	    if($status=='update') {
	      $res = $this->db->get_where('reg_userdetail', array('userdetail_id' => $this->input->post('rid')))->row_array();
	      if(is_numeric($this->input->post('rid')) && !empty($res))
	      { 
	        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
	          $user_update_data = array( 
	                                'name' => $this->input->post('cus_email'),
	                                'active_status' => $this->input->post('cus_password'),

	                                'name' => $this->input->post('cus_paymenttype'),
	                                'active_status' => $this->input->post('cus_period'),
	                                'name' => $this->input->post('cus_billnumber'),
	                                'name' => $this->input->post('cus_amount'),
	                                'active_status' => date('Y-m-d',strtotime($this->input->post('cus_paymentstartdate'))), 
	                                'name' => date('Y-m-d',strtotime($this->input->post('cus_paymentenddate'))), 
	                                'active_status' => $this->input->post('cus_paymentactivestatus'),
	                                'name' => $this->input->post('cus_profileactivestatus'),

	                                'active_status' => ($this->input->post('cus_regby')) ? $this->input->post('cus_regby') : NULL,
	                                'name' => $this->input->post('cus_fname'),
	                                'active_status' => $this->input->post('cus_gender'),
	                                'name' => date('Y-m-d',strtotime($this->input->post('cus_dob'))),
	                                'active_status' => $this->input->post('cus_marstatus'),
	                                'name' => ($this->input->post('cus_mothertongue')) ? $this->input->post('cus_mothertongue') : NULL,
	                                'active_status' => $this->input->post('cus_religion'),
	                                'name' => $this->input->post('cus_caste'),
	                                'active_status' => $this->input->post('cus_dosham'),
	                                'name' => ($this->input->post('cus_nakshathra')) ? $this->input->post('cus_nakshathra') : NULL,
	                                'active_status' => ($this->input->post('cus_lukhnam')) ? $this->input->post('cus_lukhnam') : NULL,
	                                'name' => $this->input->post('cus_gothra'),                               
	                                'active_status' => ($this->input->post('cus_zodiac')) ? $this->input->post('cus_zodiac') : NULL,

	                                'name' => ($this->input->post('cus_education')) ? $this->input->post('cus_education') : NULL,
	                                'active_status' => $this->input->post('cus_edudetail'),
	                                'name' => ($this->input->post('cus_occupation')) ? $this->input->post('cus_occupation') : NULL,
	                                'active_status' => ($this->input->post('cus_empin')) ? $this->input->post('cus_empin') : NULL,
	                                'name' => $this->input->post('cus_moninc'),
	                                'active_status' => $this->input->post('cus_resident'),
	                                'active_status' => ($this->input->post('cus_curcountry')) ? $this->input->post('cus_curcountry') : NULL,
	                                'name' => $this->input->post('cus_curcity'),
	                                'active_status' => $this->input->post('cus_curdistrict'),
	                                'active_status' => $this->input->post('cus_curaddress'),
	                                'active_status' => $this->input->post('cus_curphone'),
	                                'active_status' => $this->input->post('cus_curmobile'),

	                                'active_status' => $this->input->post('cus_heightcms'),
	                                'active_status' => $this->input->post('cus_weight'),
	                                'active_status' => $this->input->post('cus_bodytype'),
	                                'active_status' => $this->input->post('cus_complexion'),
	                                'active_status' => $this->input->post('cus_phystatus'),

	                                'active_status' => $this->input->post('cus_food'),
	                                'active_status' => $this->input->post('cus_fathername'),
	                                'active_status' => $this->input->post('cus_fatheremp'),
	                                'active_status' => $this->input->post('cus_mothername'),
	                                'active_status' => $this->input->post('cus_motheremp'),
	                                'active_status' => $this->input->post('cus_familystatus'),
	                                'active_status' => $this->input->post('cus_familytype'),
	                                'active_status' => $this->input->post('cus_broelder'),
	                                'active_status' => $this->input->post('cus_broyoung'),
	                                'active_status' => $this->input->post('cus_siselder'),
	                                'active_status' => $this->input->post('cus_sisyoung'),
	                                'active_status' => $this->input->post('cus_broeldermar'),
	                                'active_status' => $this->input->post('cus_broyoungmar'),
	                                'active_status' => $this->input->post('cus_siseldermar'),
	                                'active_status' => $this->input->post('cus_sisyoungmar'),
	                                'active_status' => $this->input->post('cus_abtfamily'),
	                                'active_status' => $this->input->post('cus_personality'),
	                                'active_status' => $this->input->post('cus_expect'),
	                                'active_status' => $this->input->post('cus_profileimage'),
	                              ); 
	        // }
	        // else {
	        //   $zodiac_update_data = array( 
	        //                         'name' => $this->input->post('s_name')
	        //                       );
	        // }
	        // $zodiac_update_where = '( zodiacsign_id="'.$this->input->post('rid').'")'; 
	        // $this->db->set($zodiac_update_data); 
	        // $this->db->where($zodiac_update_where);
	        // $this->db->update("zodiac_sign", $zodiac_update_data);
	        // echo $this->db->last_query(); 
	        $model_data['status'] = "Updated Successfully";
	        $model_data['error'] = 2;
	      }
	      else{
	        $model_data['error'] = 1;
	        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
	      }
	    }

	   //  // Save data
	   //  else if($status=='save') {
	   //    $zodiac_insert_data = array( 
	   //                          'name' => $this->input->post('zod_name'),
	   //                          'active_status' => $this->input->post('zod_status')
	   //                        );
	   //    $this->db->insert("zodiac_sign", $zodiac_insert_data);
	   //    $model_data['status'] = "Inserted Successfully";
	   //    $model_data['error'] = 2;
	   //  }

	   //  // Delete data
	   //  else if($status =='delete') {
	   //    if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
	   //      $zodiac_delete_where = '(zodiacsign_id="'.$this->input->post('rid').'")';
	   //      $this->db->delete("zodiac_sign", $zodiac_delete_where); 
	   //      $model_data['status'] = "Deleted Successfully";
	   //      $model_data['error'] = 2; 
	   //    }
	   //    else {
	   //      $model_data['error'] = 1;
	   //      $model_data['status'] = "Something went wrong. Please try again with correct details ";
	   //    }
	   //  }
	    // Get data by id to send edit page
	    else if($status =='edit') {
	        if($_POST)
	          $id = $this->input->post('rid');
	        else
	          $id = $this->uri->segment(3);
	        $model_data['customeruser_values'] = $this->customer_user_profile($id)['customeruser_values'];
	        return $model_data;
	    }  
	    // View
	    $this->db->select('*');
	    $this->db->from('reg_userdetail usr');
	    $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
	    $this->db->order_by('usr.userdetail_id desc');
	    $this->db->limit(500);
	    $model_data['customeruser_values'] = $this->db->get()->result_array();
	    // print_r($model_data['customeruser_values']);

	    return $model_data;
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
}
