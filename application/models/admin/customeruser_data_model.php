<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_data_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  // zodiac_sign - Add Edit Delete View
  public function customer_user($status,$profile_image){
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
	      $id = $this->input->post('rid');
	    	// echo $this->input->post('cus_dob');
	      $res = $this->db->get_where('reg_userdetail', array('userdetail_id' => $this->input->post('rid')))->row_array();
	      if(is_numeric($this->input->post('rid')) && !empty($res))
	      { 
	        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
	      	// Login Detials Update
	            	$userdetail_update_data = array(
	            					'user_email' => $this->input->post('cus_email'),
	                                'user_pwd' => $this->input->post('cus_password'),
	                                'user_fname' => $this->input->post('cus_fname'),
	                                'user_gender' => $this->input->post('cus_gender'),
	                                'user_dob' => date('Y-m-d',strtotime($this->input->post('cus_dob'))),
	                                'user_active_status' => $this->input->post('cus_profileactivestatus'),
	                                'user_maritalstatus' => ($this->input->post('cus_marstatus'))?$this->input->post('cus_marstatus'):NULL,
	                                'user_registeredby' => ($this->input->post('cus_regby')) ? $this->input->post('cus_regby') : NULL,
	                                'userdetail_profile_id' => ($this->input->post('cus_profileid')) ? $this->input->post('cus_profileid') : NULL,
	                                'userdetail_file_id' => ($this->input->post('cus_fileid')) ? $this->input->post('cus_fileid') : NULL,
	                                'user_online_or_simple' => $this->input->post('cus_usertype'),
	                                'user_featured_profile_status' => $this->input->post('cus_featuredactivestatus'),
	                                );
	            	// print_r($userdetail_update_data);
	            	$religion_ethnicity_update_data = array(
	            					// 'rel_timeofbirth' => $this->input->post('cus_birthhours')."-".$this->input->post('cus_birthmins')."-".$this->input->post('cus_birthmer'),
	            					'rel_timeofbirth' => $this->input->post('cus_birthtime'),
	            					'rel_mothertongue_id' => ($this->input->post('cus_mothertongue')) ? $this->input->post('cus_mothertongue') : NULL,
	            					// 'rel_religion' => $this->input->post('cus_religion'),
	            					// 'rel_caste' => $this->input->post('cus_caste'),
	            					'rel_dhosham' => ($this->input->post('cus_dosham')) ? $this->input->post('cus_dosham') : NULL,
	            					'rel_nakshathra_id' => ($this->input->post('cus_nakshathra')) ? $this->input->post('cus_nakshathra') : NULL,
	            					'rel_luknam_id' => ($this->input->post('cus_lukhnam')) ? $this->input->post('cus_lukhnam') : NULL,
	            					// 'rel_gothra' => "Sambu Maharishi Gothra",
	            					'rel_zodiacsign_id' => ($this->input->post('cus_zodiac')) ? $this->input->post('cus_zodiac') : NULL,
	                                );
	            	// print_r($religion_ethnicity_update_data);
	            	$education_occupation_update_data = array(
	            					'edu_education' => ($this->input->post('cus_education')) ? $this->input->post('cus_education') : NULL,
	            					'edu_educationdetails' => $this->input->post('cus_edudetail'),
	            					'edu_occupation' => ($this->input->post('cus_occupation')) ? $this->input->post('cus_occupation') : NULL,
	            					'edu_employedin' => ($this->input->post('cus_empin')) ? $this->input->post('cus_empin') : NULL,
	            					'edu_montlyincome' => $this->input->post('cus_moninc'),
	            					'edu_occupationdetail' => $this->input->post('cus_ocudetail'),
	            					);
	            	// print_r($education_occupation_update_data);
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
	            					'comm_family_status' => ($this->input->post('cus_familystatus'))?$this->input->post('cus_familystatus'):NULL,
	            					'comm_family_type' => ($this->input->post('cus_familytype'))?$this->input->post('cus_familytype'):NULL,
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
	            	// print_r($communication_update_data);
	                $physicalattributes_update_data = array(
	                				'phy_height' => $this->input->post('cus_heightcms'),
	                				'phy_feet' => $this->input->post('cus_heightfeets'),
	                                'phy_weight' => $this->input->post('cus_weight'),
	                                'phy_bodytype' => ($this->input->post('cus_bodytype'))?$this->input->post('cus_bodytype'):NULL,
	                                'phy_complexion' => ($this->input->post('cus_complexion'))?$this->input->post('cus_complexion'):NULL,
	                                'phy_physicalstatus' => $this->input->post('cus_phystatus'),
	                                'phy_food' => ($this->input->post('cus_food'))?$this->input->post('cus_food'):NULL,
	                                'phy_yourpersonality' => $this->input->post('cus_personality'),
	                                'phy_expectationabout_lifepartner' => $this->input->post('cus_expect'),
	                                );
	                // print_r($physicalattributes_update_data);
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

			$userdetail_update_where = '(userdetail_id="'.$this->input->post('rid').'")'; 
	        $this->db->set($userdetail_update_data); 
	        $this->db->where($userdetail_update_where);
	        $this->db->update("reg_userdetail", $userdetail_update_data);

	        $rel = $this->db->get_where('reg_religion_ethnicity', array('reg_user_id' => $this->input->post('rid')))->row_array();
	        if(!empty($rel)){
	        	$religion_ethnicity_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($religion_ethnicity_update_data); 
		        $this->db->where($religion_ethnicity_update_where);
		        $this->db->update("reg_religion_ethnicity", $religion_ethnicity_update_data);	
	        }
	        else{
	        	$religion_ethnicity_update_data['reg_user_id'] = $this->input->post('rid');
	        	$this->db->insert("reg_religion_ethnicity", $religion_ethnicity_update_data);
	        }
	        // $religion_ethnicity_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
	        // $this->db->set($religion_ethnicity_update_data); 
	        // $this->db->where($religion_ethnicity_update_where);
	        // $this->db->update("reg_religion_ethnicity", $religion_ethnicity_update_data);

	        // $education_occupation_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
	        // $this->db->set($education_occupation_update_data); 
	        // $this->db->where($education_occupation_update_where);
	        // $this->db->update("reg_education_occupation", $education_occupation_update_data);

	        $edu_ocu = $this->db->get_where('reg_education_occupation', array('reg_user_id' => $this->input->post('rid')))->row_array();
	        if(!empty($edu_ocu)){
	        	$education_occupation_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($education_occupation_update_data); 
		        $this->db->where($education_occupation_update_where);
		        $this->db->update("reg_education_occupation", $education_occupation_update_data);	
	        }
	        else{
	        	$education_occupation_update_data['reg_user_id'] = $this->input->post('rid');
	        	$this->db->insert("reg_education_occupation", $education_occupation_update_data);
	        }

	        $comm = $this->db->get_where('reg_communication_family', array('reg_user_id' => $this->input->post('rid')))->row_array();
	        if(!empty($comm)){
	        	$communication_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($communication_update_data); 
		        $this->db->where($communication_update_where);
		        $this->db->update("reg_communication_family", $communication_update_data);	
	        }
	        else{
	        	$communication_update_data['reg_user_id'] = $this->input->post('rid');
	        	$this->db->insert("reg_communication_family", $communication_update_data);
	        }
	        // echo $this->db->last_query();
	        $phy = $this->db->get_where('reg_physical_expectation', array('reg_user_id' => $this->input->post('rid')))->row_array();
	        if(!empty($phy)){
	        	$physicalattributes_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($physicalattributes_update_data); 
		        $this->db->where($physicalattributes_update_where);
		        $this->db->update("reg_physical_expectation", $physicalattributes_update_data);	
	        }
	        else{
	        	$physicalattributes_update_data['reg_user_id'] = $this->input->post('rid');
	        	$this->db->insert("reg_physical_expectation", $physicalattributes_update_data);
	        }
	        // echo $this->db->last_query();
			$paymentinitial_data = array(
				'reg_user_id' => $this->input->post('rid'),
				'payment_type' => $this->input->post('cus_paymenttype'),
				'bill_number' => $this->input->post('cus_billnumber'),
				'amount' => $this->input->post('cus_amount'),
				'period_in_month' => $this->input->post('cus_period'),
				'totalno_of_profile' => $this->input->post('cus_totprofile'),
				'payment_status' => $this->input->post('cus_paymentactivestatus'),
				'startdate' => date('Y-m-d',strtotime($this->input->post('cus_paymentstartdate'))),
				'enddate' => date('Y-m-d',strtotime($this->input->post('cus_paymentenddate'))),
            );
            // print_r($paymentinitial_data);

            $paymentrenewal_data = array(
            	'reg_user_id' => $this->input->post('rid'),
				'plan_id' => $this->input->post('cus_paymenttype'),
				'ren_bill_number' => $this->input->post('cus_billnumber'),
				'ren_amount' => $this->input->post('cus_amount'),
				'ren_period_in_month' => $this->input->post('cus_period'),
				'totalno_of_profile' => $this->input->post('cus_totprofile'),
				'active_status' => $this->input->post('cus_paymentactivestatus'),
				'starting_date' => date('Y-m-d',strtotime($this->input->post('cus_paymentstartdate'))),
				'ending_date' => date('Y-m-d',strtotime($this->input->post('cus_paymentenddate'))),
            );
            // print_r($paymentrenewal_data);
            // echo $this->input->post('payment_mode');
            // echo $this->input->post('cus_paymentmode');

			if(($this->input->post('payment_mode') == "not_paid") AND ($this->input->post('cus_paymentmode') == "initial")){
				// echo "if1";
				// print_r($paymentinitial_data);
				$payment = $this->db->get_where('reg_payment', array('reg_user_id' => $this->input->post('rid')))->row_array();
				if(!empty($payment)){
					$payment_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
			        $this->db->set($paymentinitial_data); 
			        $this->db->where($payment_update_where);
			        $this->db->update("reg_payment", $paymentinitial_data);
				}
				else{
					$paymentinitial_data['reg_user_id'] = $this->input->post('rid');
	        		$this->db->insert("reg_payment", $paymentinitial_data);
				}			
			}
			else if(($this->input->post('payment_mode') == "initial") AND ($this->input->post('cus_paymentmode') == "renewal")){
				// echo "if2";
				// print_r($paymentrenewal_data);
				$renewal = $this->db->get_where('renew_detail', array('reg_user_id' => $this->input->post('rid')))->row_array();
				if(!empty($renewal)){
					$renewal_update_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
			        $this->db->set($paymentrenewal_data); 
			        $this->db->where($renewal_update_where);
			        $this->db->update("renew_detail", $paymentrenewal_data);
				}
				else{
					$paymentrenewal_data['reg_user_id'] = $this->input->post('rid');
	        		$this->db->insert("renew_detail", $paymentrenewal_data);
				}	
				$this->db->insert("renew_detail", $paymentrenewal_data);
			}
			else if(($this->input->post('payment_mode') == "initial") AND ($this->input->post('cus_paymentmode') == "initial")){
				// echo "if3";
				// print_r($paymentinitial_data);
				$paymentinitial_data_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($paymentinitial_data); 
		        $this->db->where($paymentinitial_data_where);
		        $this->db->update("reg_payment", $paymentinitial_data);
			}
			else if(($this->input->post('payment_mode') == "renewal") AND ($this->input->post('cus_paymentmode') == "renewal")){
				// echo "if4";
				// print_r($paymentrenewal_data);
				$paymentrenewal_data_where = '(reg_user_id="'.$this->input->post('rid').'")'; 
		        $this->db->set($paymentrenewal_data); 
		        $this->db->where($paymentrenewal_data_where);
		        $this->db->update("renew_detail", $paymentrenewal_data);
			}

			if(!empty($this->input->post('removed_images'))){
              //Remove old image
              $removed_images = explode(",",$this->input->post('removed_images'));
              // print_r($removed_images);
              $cus_image = $this->get_customer_images($id); 
              $imagevalues = array();
              foreach ($cus_image as $key => $value) {
                  array_push($imagevalues, $value['userimages_id']);
              }
              // print_r($imagevalues);
              foreach ($imagevalues as $value) {
                if($value!='defalt_male.png' && $value!='defalt_female.png' && in_array($value, $removed_images)){
                    //remove images from folder
                    $image_delete_where = '(reg_user_id="'.$id.'" && userimages_id="'.$value.'")';
                    $this->db->select('images');
                    $imageselected = $this->db->get_where('user_images', $image_delete_where)->row_array();
                    @unlink(FCPATH.USER_PROFILE_PATH."th_".$imageselected['images']);
                    @unlink(FCPATH.USER_PROFILE_PATH."new_".$imageselected['images']);

                    //remvove images from database
                    $this->db->delete("user_images", $image_delete_where); 
                }
              }
            }
            if(!empty($profile_image)){
                // $image_delete_where = '(reg_user_id="'.$id.'")';
                // $this->db->delete("user_images", $image_delete_where); 
                foreach ($profile_image as $value)
                  $this->db->insert('user_images',array('reg_user_id' => $id,'images' =>$value));
            }

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
    	$this->db->select('*,rb.name as registered_by_name,mt.name as mother_tongue_name,nak.name as nakshathra_name,ein.name as empin_name,pay.*,ren.*,pay.totalno_of_profile as paytotprofile,ren.totalno_of_profile as rentotprofile,ren.active_status as renewalstatus,
    		group_concat(images) as images,group_concat(userimages_id) as images_id');
	    $this->db->from('reg_userdetail usr');
	    $this->db->join('reg_religion_ethnicity re','re.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_education_occupation eo','eo.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_communication_family cf','cf.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_physical_expectation pe','pe.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('reg_image_horoscope ih','ih.reg_user_id=usr.userdetail_id','left');
	    // $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
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
	    $this->db->join('reg_payment pay','pay.reg_user_id=usr.userdetail_id','left');
	    $this->db->join('renew_detail ren','ren.reg_user_id=usr.userdetail_id','left');
	    $this->db->where($condition); 
	    $model_data['customeruser_values'] = $this->db->get()->row_array();

	    $condition = "regedu.reg_user_id = ".$id."";
      	$this->db->select('regedu.*,edu.education_id,edu.edu_name');
      	$this->db->from('reg_selectededucation regedu');
      	$this->db->join('education edu','edu.education_id=regedu.education_id','inner');
      	$this->db->where($condition); 
      	$model_data['customeruser_multiple_edu_values'] = $this->db->get()->result_array();

      	$condition = "regmar.reg_user_id = ".$id."";
      	$this->db->select('mar.maritalcategory_id');
      	$this->db->from('reg_selectedmarital regmar');
      	$this->db->join('marital_category mar','mar.maritalcategory_id=regmar.marital_category_id','inner');
      	$this->db->where($condition); 
      	$model_data['customeruser_multiple_marstatus_values'] = $this->db->get()->result_array();

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
  		$model_data['dhosham_values'] = $this->db->order_by('dhosham_id','asc')->get_where('dhosham')->result_array();
  		$model_data['height_values']['cms'] = $this->db->order_by('heightrelation_id','asc')->get_where('height_relation')->result_array();
	      //To fetch height in feet
	      $this->db->select('*,group_concat(hrel.cms) as hcms');
	      $this->db->from('height_relation AS hrel');
	      $this->db->group_by('hrel.feet_value');
	      $this->db->order_by('hrel.heightrelation_id');
	      $model_data['height_values']['feet'] = $this->db->get()->result_array();
  		  //Education and Occuaption with category
	      $condition = "edu.active_status = 1";
	      $this->db->select('edu.education_id,edu.edu_name,edu_cat.cat_name,edu.edu_categoryid');
	      $this->db->from('education edu');
	      $this->db->join('education_category edu_cat','edu_cat.educationcategory_id=edu.edu_categoryid','inner');
	      $this->db->where($condition);
	      // $this->db->group_by('edu_cat.cat_name');
	      $model_data['education_values'] = $this->db->get()->result_array();
	      // echo "<pre>";
	      // print_r($model_data['education_values']);
	      // echo "</pre>";
	      $educategory = array();
	      foreach ($model_data['education_values'] as $val) {
	        $cat_name = $val['cat_name'];
	        $education_id = $val['education_id'];
	        $edu_name = $val['edu_name'];
	        $educategory[$cat_name][$education_id] = $edu_name;
	      }
	      // echo "<pre>";
	      // print_r($educategory);
	      // echo "</pre>";
	      $model_data['education_values'] = $educategory;

	      $condition = "occ.active_status = 1";
	      $this->db->select('occ.occupation_id,occ.occupation_name as occ_name,occ_cat.occupation_name as occ_cat,occ.occupation_catid');
	      $this->db->from('occupation occ');
	      $this->db->join('occupation_category occ_cat','occ_cat.occ_category_id=occ.occupation_catid','inner');
	      $this->db->where($condition);
	      $model_data['occupation_values'] = $this->db->get()->result_array();
	      // echo $this->db->last_query();
	      // echo "<pre>";
	      // print_r($model_data['occupation_values']);
	      // echo "</pre>";
	      $occupationcategory = array();
	      foreach ($model_data['occupation_values'] as $val) {
	        $cat_name = $val['occ_cat'];
	        $occupation_id = $val['occupation_id'];
	        $occ_name = $val['occ_name'];
	        $occupationcategory[$cat_name][$occupation_id] = $occ_name;
	      }
	      // echo "<pre>";
	      // print_r($occupationcategory);
	      // echo "</pre>";
	      $model_data['occupation_values'] = $occupationcategory;
  		return $model_data;
  }

  function get_cd_list() {
        /* Array of table columns which should be read and sent back to DataTables. Use a space where
         * you want to insert a non-database field (for example a counter or static image)
         */
        $aColumns = array(
            'userdetail_id',
            'user_email',
            'user_fname',
            'user_gender',
            'user_age',
            'user_dob',
            'user_active_status');

        /* Indexed column (used for fast and accurate table cardinality) */
        $sIndexColumn = "userdetail_id";

        /* Total data set length */
        $sQuery = "SELECT COUNT('" . $sIndexColumn . "') AS row_count
            FROM reg_userdetail";
        $rResultTotal = $this->db->query($sQuery);
        $aResultTotal = $rResultTotal->row();
        $iTotal = $aResultTotal->row_count;

        /*
         * Paging
         */
        $sLimit = "";
        $iDisplayStart = $this->input->get_post('start', true);
        $iDisplayLength = $this->input->get_post('length', true);
        if (isset($iDisplayStart) && $iDisplayLength != '-1') {
            $sLimit = "LIMIT " . intval($iDisplayStart) . ", " .
                    intval($iDisplayLength);
        }

        $uri_string = $_SERVER['QUERY_STRING'];
        if(!empty($uri_string)){
	        $uri_string = preg_replace("/%5B/", '[', $uri_string);
	        $uri_string = preg_replace("/%5D/", ']', $uri_string);

	        $get_param_array = explode("&", $uri_string);
	        $arr = array();
	        foreach ($get_param_array as $value) {
	            $v = $value;
	            $explode = explode("=", $v);
	            $arr[$explode[0]] = $explode[1];
	        }
	    }   
	    else{
	    	$uri_string = 1;
	    }
        $index_of_columns = strpos($uri_string, "columns", 1);
        $index_of_start = strpos($uri_string, "start");
        $uri_columns = substr($uri_string, 7, ($index_of_start - $index_of_columns - 1));
        $columns_array = explode("&", $uri_columns);
        $arr_columns = array();
        foreach ($columns_array as $value) {
            $v = $value;
            $explode = explode("=", $v);
            if (count($explode) == 2) {
                $arr_columns[$explode[0]] = $explode[1];
            } else {
                $arr_columns[$explode[0]] = '';
            }
        }

        /*
         * Ordering
         */
        if($uri_string !=1){
	        $sOrder = "ORDER BY ";
	        $sOrderIndex = $arr['order[0][column]'];
	        $sOrderDir = $arr['order[0][dir]'];
	        $bSortable_ = $arr_columns['columns[' . $sOrderIndex . '][orderable]'];
	        if ($bSortable_ == "true") {
	            $sOrder .= $aColumns[$sOrderIndex] .
	                    ($sOrderDir === 'asc' ? ' asc' : ' desc');
	        }
	    }

        /*
         * Filtering
         */
        if($uri_string !=1){
	        $sWhere = "";
	        $sSearchVal = $arr['search[value]'];
	        if (isset($sSearchVal) && $sSearchVal != '') {
	            $sWhere = "WHERE (";
	            for ($i = 0; $i < count($aColumns); $i++) {
	                $sWhere .= $aColumns[$i] . " LIKE '%" . $this->db->escape_like_str($sSearchVal) . "%' OR ";
	            }
	            $sWhere = substr_replace($sWhere, "", -3);
	            $sWhere .= ')';
	        }
	    }

	    if($uri_string !=1){
	        /* Individual column filtering */
	        $sSearchReg = $arr['search[regex]'];
	        for ($i = 0; $i < count($aColumns); $i++) {
	            $bSearchable_ = $arr['columns[' . $i . '][searchable]'];
	            if (isset($bSearchable_) && $bSearchable_ == "true" && $sSearchReg != 'false') {
	                $search_val = $arr['columns[' . $i . '][search][value]'];
	                if ($sWhere == "") {
	                    $sWhere = "WHERE ";
	                } else {
	                    $sWhere .= " AND ";
	                }
	                $sWhere .= $aColumns[$i] . " LIKE '%" . $this->db->escape_like_str($search_val) . "%' ";
	            }
	        }
	    }

	    if($uri_string ==1){
	    	$sWhere = '';
	    	$sOrder = '';
	    }

        /*
         * SQL queries
         * Get data to display
         */
        $sQuery = "SELECT SQL_CALC_FOUND_ROWS " . str_replace(" , ", " ", implode(", ", $aColumns)) . "
        FROM reg_userdetail
        $sWhere
        $sOrder
        $sLimit
        ";
        $rResult = $this->db->query($sQuery);
        print_r($rResult);

        /* Data set length after filtering */
        $sQuery = "SELECT FOUND_ROWS() AS length_count";
        $rResultFilterTotal = $this->db->query($sQuery);
        $aResultFilterTotal = $rResultFilterTotal->row();
        $iFilteredTotal = $aResultFilterTotal->length_count;

        /*
         * Output
         */
        $sEcho = $this->input->get_post('draw', true);
        $output = array(
            "draw" => intval($sEcho),
            "recordsTotal" => $iTotal,
            "recordsFiltered" => $iFilteredTotal,
            "data" => array()
        );

        foreach ($rResult->result_array() as $aRow) {
            $row = array();
            foreach ($aColumns as $col) {
                $row[] = $aRow[$col];
            }
            $output['data'][] = $row;
        }
        print_r($output);
        return $output;
    }
  /** getrasi_viewdetails_by Id **/
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
  
  /** getamsham_viewdetails_by Id **/
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
  public function get_customer_images($id){
    // $this->db->select('images');
    // $image_data = $this->db->get_where('user_images', array('reg_user_id' => $id ))->result();
    $this->db->select('userimages_id,images'); 
    $this->db->from('user_images');   
    $this->db->where('reg_user_id', $id);
    return $this->db->get()->result_array();
  }
  // function customeruser_record_count()
  // {
	 // return $this->db->count_all('reg_userdetail');
  // }
  public function fetch_customeruser($limit, $start) {
    // echo "limit".$limit;
    // echo "start".$start;
    	if($this->input->post('userstatus') and !empty($this->input->post('userstatus'))){
    		$userstatus = $this->input->post('userstatus');
    		if($userstatus == "active" || $userstatus == "inactive"){
	    		if($userstatus == "active")
	    			$userstatus_data = "1";
	    		else
	    			$userstatus_data = "0";
	    		$user_where['user_active_status'] = $userstatus_data;
    		}else{
    			$userstatus_data = "1";
    			$user_where['user_delete_status'] = $userstatus_data;;
    		}
    	}
    	if($this->input->post('usertype') and !empty($this->input->post('usertype'))){
    		$usertype = $this->input->post('usertype');
    		if($usertype == "waiting"){
    			$user_where['user_active_status'] = "0";
    		}else{
    			$user_where['user_online_or_simple'] = $usertype;
    		}   		
    	}
    	if($this->input->post('filtersearch')){
    		$cususer_id = trim($this->input->post('cususer_id'));	
			$cus_profileid = trim($this->input->post('cus_profileid'));
			$cus_fileid = trim($this->input->post('cus_fileid'));
			$cususer_name = trim($this->input->post('cususer_name'));
			$cus_gender = trim($this->input->post('cus_gender'));
			$cus_dob = trim($this->input->post('cus_dob'));		
			$cusage_from = trim($this->input->post('cusage_from'));	
			$cusage_to = trim($this->input->post('cusage_to'));	

			if(!empty($cususer_id))
				$user_where = '(userdetail_id="'.$cususer_id.'")';
			if(!empty($cus_profileid))
				$user_where = '(userdetail_profile_id="'.$cus_profileid.'")';
			if(!empty($cus_fileid))
				$user_where = '(userdetail_file_id="'.$cus_fileid.'")';
			// else{
			// 	$user_where = '((user_fname LIKE "%'.$cususer_name.'%" AND 
			// 					user_gender="'.$cus_gender.'") OR
			// 					user_dob="'.$cus_dob.'" OR 
			// 					(user_age>="'.$cusage_from.'" AND user_age<="'.$cusage_to.'")
			// 					)';
			// }
			if(!empty($cususer_name))
				$user_where = '(user_fname LIKE "%'.$cususer_name.'%")';
			if(!empty($cus_gender))
				$user_where = '(user_gender="'.$cus_gender.'")';
			if(!empty($cusage_from) AND !empty($cusage_to))
				$user_where = '(user_age>="'.$cusage_from.'" AND user_age<="'.$cusage_to.'")';
			if(!empty($cususer_name) AND !empty($cus_gender))
				$user_where = '(user_fname LIKE "%'.$cususer_name.'%" AND user_gender="'.$cus_gender.'")';
			
			
    	}
		   		    
        $this->db->select('*');
	    $this->db->from('reg_userdetail usr');
	    $this->db->join('reg_payment pm','pm.reg_user_id=usr.userdetail_id','left');
	    if(isset($user_where)){
	    	// print_r($user_where);
	    	$this->db->where($user_where);	    	
	    }    		    	
	    $this->db->order_by('usr.userdetail_id desc');
	    $this->db->limit($limit, $start);
	    $query['results'] = $this->db->get()->result_array();
	    // echo $this->db->last_query();
	    if(isset($user_where))
	    	$query['count'] =  $this->db->where($user_where)->from("reg_userdetail")->count_all_results();
	    else
	    	$query['count'] =  $this->db->count_all('reg_userdetail');
   		if (sizeof($query) > 0) {
        	return $query;
        }
        return false;
        
   }
}
