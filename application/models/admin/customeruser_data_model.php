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

	   //  // Update data
	   //  if($status=='update') {
	   //    if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('zodiac_sign', array('zodiacsign_id' => $this->input->post('rid')))->row_array()))
	   //    { 
	   //      // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
	   //        $zodiac_update_data = array( 
	   //                              'name' => $this->input->post('zod_name'),
	   //                              'active_status' => $this->input->post('zod_status')
	   //                            ); 
	   //      // }
	   //      // else {
	   //      //   $zodiac_update_data = array( 
	   //      //                         'name' => $this->input->post('s_name')
	   //      //                       );
	   //      // }
	   //      $zodiac_update_where = '( zodiacsign_id="'.$this->input->post('rid').'")'; 
	   //      $this->db->set($zodiac_update_data); 
	   //      $this->db->where($zodiac_update_where);
	   //      $this->db->update("zodiac_sign", $zodiac_update_data);
	   //      // echo $this->db->last_query(); 
	   //      $model_data['status'] = "Updated Successfully";
	   //      $model_data['error'] = 2;
	   //    }
	   //    else{
	   //      $model_data['error'] = 1;
	   //      $model_data['status'] = "Something went wrong. You may entered incorrect ID";
	   //    }
	   //  }

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
	   //  // Get data by id to send edit page
	   //  else if($status =='edit') {
	   //      if($_POST)
	   //        $id = $this->input->post('rid');
	   //      else
	   //        $id = $this->uri->segment(3);
	   //      $model_data['zodiac_data'] = $this->db->get_where('zodiac_sign', array('zodiacsign_id' => $id ))->row_array();
	   //  }  
	    // View
	    $this->db->select('*');
	    $this->db->from('reg_userdetail usr');
	    $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
	    $this->db->order_by('usr.userdetail_id desc');
	    $model_data['customeruser_values'] = $this->db->get()->result_array();
	    // print_r($model_data['customeruser_values']);

	    return $model_data;
  }
  public function customer_user_profile($id){
  		// View by id
    	$this->db->select('*,rb.name as registered_by_name,mt.name as mother_tongue_name,nak.name as nakshathra_name,ein.name as empin_name');
	    $this->db->from('reg_userdetail usr');
	    $this->db->join('reg_religion_ethnicity re','re.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_education_occupation eo','eo.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_communication_family cf','cf.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_physical_expectation pe','pe.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_image_horoscope ih','ih.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('registered_by rb','rb.registeredby_id=usr.user_registeredby','left');
	    $this->db->join('marital_category mc','mc.maritalcategory_id=usr.user_maritalstatus','left');
	    $this->db->join('mother_tongue mt','mt.mothertongue_id=re.rel_mothertongue_id','left');
	    $this->db->join('nakshathra nak','nak.nakshathra_id=re.rel_nakshathra_id','left');
	    $this->db->join('luknam luk','luk.luknam_id=re.rel_luknam_id','left');
	    $this->db->join('zodiac_sign zod','zod.zodiacsign_id=re.rel_zodiacsign_id','left');
	    $this->db->join('education ed','ed.education_id=eo.edu_education','left');
	    $this->db->join('occupation occ','occ.occupation_id=eo.edu_occupation','left');
	    $this->db->join('employed_in ein','ein.employedin_id=eo.edu_employedin','left');
	    $model_data['customeruser_values'] = $this->db->get()->row_array();
	   //  echo "<pre>";
  		// print_r($model_data['customeruser_values']);
  		// echo "</pre>";
  		return $model_data;
  }
}
