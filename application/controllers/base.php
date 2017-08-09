<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library(array('form_validation', 'session')); 
		$this->load->library('upload');
		session_start();
	}
	public function index(){
		if($this->input->post()){
			$form_data = $this->input->post();									
			// $userdetail_profile_id = ($form_data['userdetail_profile_id']) ? $form_data['userdetail_profile_id'] : NULL;
			$data = array(
					// 'userdetail_id'=>'',
					// 'userdetail_profile_id'=>NULL,
					'user_email'=>$form_data['reg_email2'],
					'user_pwd'=>$form_data['reg_pass2'],
					'user_fname'=>$form_data['reg_Name'],
					'user_gender'=>$form_data['gender'][0],					
					'user_age'=>$form_data['reg_age'],					
					'user_online_or_simple'=>'online',
					'user_registeredby'=>$form_data['register_by'][0]
				);
		  		$id_userdetails = $this->user_model->insert_registration('reg_userdetail',$data);
		  		$data_communication = array(
		  			// 'communicationfamily_id'=>'',
		  			'reg_user_id'=>$id_userdetails,	
		  			'comm_current_countrycountry'=>$form_data['country'][0],					
					'comm_mobile_no'=>$form_data['reg_Mobile']
				);	
		  		$this->user_model->insert_registration('reg_communication_family', $data_communication);
		  		$data_religion = array(
		  			// 'religionethnicity_id'=>'',
		  			'reg_user_id'=>$id_userdetails,			  			
					'rel_mothertongue_id'=>$form_data['mother_tongue'][0]
				);	
		  		$this->user_model->insert_registration('reg_religion_ethnicity', $data_religion);
		  		//Email Process
				// $ci =& get_instance();	
				// $ci->config->load('email', true);
				// $emailsetup = $ci->config->item('email');
				// $this->load->library('email', $emailsetup);
				// $from_email = $emailsetup['smtp_user'];
				// $this->email->initialize($emailsetup);
				// $this->email->from($from_email, '');
    //             $this->email->to($form_data['reg_email2']);
    // 			$this->email->subject('Registrations Process Completed');
    // 			// $this->email->message("Your registered password is ".$user_values['admin_user_password']);
    // 			$message = $this->load->view('email_template/registration', $data, TRUE);
    // 			$this->email->message($message);

    // 			if($this->email->send())
    // 			{
    //     			echo "Your email was sent.!";
    // 			}
    // 			else 
    // 			{
    //     			echo "Your email was not sent.!";
    // 			}

		  		redirect('registration/'.$id_userdetails);
		}else{
			$data['register'] = $this->user_model->get_registerid();
			$data['martial_status'] = $this->user_model->get_martialstatus();
			$data['success_stories'] = $this->user_model->get_success_stories_limit();
			$data['recent_profile'] = $this->user_model->get_recent_profile();
			// foreach ($data['recent_profile'] as $key => $value) {
			// 	if(($value['user_gender']!='1')&&(count($featured_images['female'])<4))){					
			// 		$featured_images['female'] = $value['images'];
			// 	}else{
			// 		$featured_images['male'] = $value['images'];
			// 	}
			// }

			$data['mother_tongue'] = $this->user_model->get_mothertongue();
			$data['country'] = $this->user_model->get_country();
			$this->load->view('index', $data);
		}
	}
	// public function login_ajax(){
	// 	if($this->input->post()){
	// 		$data_values = $this->user_model->user_login(); 
	// 		if($data_values['status']!=='login_success'){
	// 			$data['status'] = $data_values['status'];
	// 			$data['error'] = $data_values['error'];	
	// 			echo $data['status'];
	// 			redirect(base_url().'index');
	// 		}else{
	// 			// Session
	//         	$this->session->set_userdata("login_status",1);
 	//    	    	$this->session->set_userdata("login_session",$data_values['login_values']);
 	//    	    	$data['login_user'] = $data_values['login_values'];
	// 			$this->load->view('index', $data);
	// 		}
	// 	}
	// }

	public function register_mailcheck(){
		$data['status'] = '';
		if($this->input->post()){			
			$data_values = $this->user_model->checkmail(); 			
			if($data_values['cstatus']!='email_available'){
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];	
				echo $data['error'];
			}else{
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];	
				echo $data['error'];
			}
		}
	}

	//Changed the above login ajax function temporarily by kalai as per vinoth request(don't allow user to login,only one specified user can login for testing purporse)
	public function login_ajax(){
		$data['register'] = $this->user_model->get_registerid();
		$data['martial_status'] = $this->user_model->get_martialstatus();
		$data['success_stories'] = $this->user_model->get_success_stories_limit();
		$data['recent_profile'] = $this->user_model->get_recent_profile();
		$data['mother_tongue'] = $this->user_model->get_mothertongue();
		$data['country'] = $this->user_model->get_country();
		if($this->input->post()){
			$data_values = $this->user_model->user_login(); 
			if($data_values['status']!=='login_success'){
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];	
				echo $data['status'];
				redirect(base_url().'index');
			}else{
			if($_POST['email_id'] == 'sample21@gmail.com' || 'rajeswari.moto@gmail.com' || 'saranvishwaja@gmail.com' || 'kalasugumar1959@gmail.com' || 'mmappan@gmail.com' || 'komalsvrj@gmail.com' || 'mailtouthayan@gmail.com' || 'anbu21@gmail.com' || 'viji.matsat@gmail.com' || 'dhivya21@gmail.com' || 'sankari21@gmail.com'){
					// Session
		        	$this->session->set_userdata("login_status",1);
	    	    	$this->session->set_userdata("login_session",$data_values['login_values']);
	    	    	$data['login_user'] = $data_values['login_values'];
				}	
				$this->load->view('index', $data);
			}
		}
	}

	public function logout() {
  		$this->session->unset_userdata("login_status");
        $this->session->unset_userdata("login_session");
        redirect(base_url().'index');
  	}

	public function search(){
		$data['martial_status'] = $this->user_model->get_martialstatus();
		$data['mother_tongue'] = $this->user_model->get_mothertongue();	
		$data['education'] = $this->user_model->get_education();
		$data['education_category'] = $this->user_model->get_educationcategory();
		$data['country'] = $this->user_model->get_country();
		$data['occupation'] = $this->user_model->get_occupation();
		$data['occupation_category'] = $this->user_model->get_occupationcategory();
		$data['bodytype'] = $this->user_model->get_bodytype();
		$data['martial_status'] = $this->user_model->get_martialstatus();
		$data['mother_tongue'] = $this->user_model->get_mothertongue();
		$this->load->view('search', $data);
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function gallery(){
		$this->load->view('gallery');
	}
	public function payment(){
		$this->load->view('payment');
	}
	public function post_success(){
		$this->load->view('post');
	}

	public function upload_file(){

        //upload file
        $config['upload_path'] = base_url().'uploads/userprofile/';        
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

        print_r($_POST);
        exit();
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo 'File already exists : uploads/' . $_FILES['file']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    } else {
                        echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }
    }

	public function registration(){
		if($this->input->post()){
			$form_data = $this->input->post();
				// echo '<pre>';
				// print_r($_FILES);
				// print_r($form_data);
				// echo '<pre>';				
				// exit();
				$data = array(
					// 'userdetail_id'=>'',
					// 'userdetail_profile_id'=>100,
					'user_email'=>$form_data['register_email'],
					'user_pwd'=>$form_data['reg_pass1'],
					'user_fname'=>$form_data['reg_name'],
					'user_gender'=>$form_data['gender'][0],					
					'user_age'=>$form_data['user_age'],
					'user_dob'=>$form_data['dob'],
					'user_online_or_simple'=>'online',					
					'user_maritalstatus'=>$form_data['marital_status'][0],
					'user_registeredby'=>$form_data['register_by'][0]
				);
		  		$id_userdetails = $this->user_model->insert_registration('reg_userdetail',$data);		  		


		  		$data_reg = array(
						// 'religionethnicity_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'rel_timeofbirth'=>$form_data['reg_tim'],
						'rel_mothertongue_id'=>$form_data['mother_tongue'][0],
						'rel_nakshathra_id'=>$form_data['nakshathra'][0],
						'rel_zodiacsign_id'=>$form_data['zodiac_sign'][0]
				);
		  		if(!empty($form_data['reg_religion'])){
					$data_reg['rel_religion']= $form_data['reg_religion'];
				}
				if(!empty($form_data['reg_caste'])){
					$data_reg['rel_caste']= $form_data['reg_caste'];
				}
				if(!empty($form_data['reg_Dhosham'])){
					$data_reg['rel_dhosham']= $form_data['reg_Dhosham'];
				}
				if(!empty($form_data['reg_religion'])){
					$data_reg['rel_religion']= $form_data['reg_religion'];
				}
				if(!empty($form_data['luknam'][0])){
					$data_reg['rel_luknam_id']= $form_data['luknam'][0];
				}
				if(!empty($form_data['reg_gothra'])){
					$data_reg['rel_gothra']= $form_data['reg_gothra'];
				}
		  		$id_userreg = $this->user_model->insert_registration('reg_religion_ethnicity',$data_reg);


		  		$data_regedu = array(
						// 'educationoccupation_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'edu_education'=>$form_data['education'][0],
						'edu_educationdetails'=>$form_data['education_detail'],
						'edu_occupation'=>$form_data['occupation'][0],
						'edu_employedin'=>$form_data['employed_in'][0],					
						'edu_montlyincome'=>$form_data['reg_income'],
						'edu_occupationdetail'=>$form_data['occupationdetail']	
				);
		  		$id_user_edu = $this->user_model->insert_registration('reg_education_occupation',$data_regedu);

		  		
		  		$data_reg_com = array(
						// 'communicationfamily_id'=>'',
						'reg_user_id'=>$id_userdetails,						
						'comm_mobile_no'=>$form_data['reg_mobile'],
						'comm_father_name'=>$form_data['reg_fname'],
						'comm_mother_name'=>$form_data['reg_mname'],
						'comm_father_employment'=>$form_data['reg_femployment'],
						'comm_mother_employment'=>$form_data['reg_memployment'],
						'comm_family_status'=>$form_data['family_status'][0],
						'comm_family_type'=>$form_data['family_type'][0]
				);	

				if(!empty($form_data['resident'][0])){
					$data_reg_com['comm_residence']= $form_data['resident'][0];
				}

				if(!empty($form_data['cur_country'][0])){
					$data_reg_com['comm_current_countrycountry']= $form_data['cur_country'][0];
				}

				if(!empty($form_data['reg_city'])){
					$data_reg_com['comm_current_city']= $form_data['reg_city'];
				}

				if(!empty($form_data['reg_district'])){
					$data_reg_com['comm_current_district']= $form_data['reg_district'];
				}

				if(!empty($form_data['comm_address'])){
					$data_reg_com['comm_communication_address']= $form_data['comm_address'];
				}

				if(!empty($form_data['reg_phone'])){
					$data_reg_com['comm_phone_no']= $form_data['reg_phone'];
				}

				if(!empty($form_data['reg_EBrother'])){
					$data_reg_com['comm_number_of_brothers_el']= $form_data['reg_EBrother'];
				}

				if(!empty($form_data['reg_YBrother'])){
					$data_reg_com['comm_number_of_brothers_yo']= $form_data['reg_YBrother'];
				}

				if(!empty($form_data['reg_MEBrother'])){
					$data_reg_com['comm_number_of_brothers_el_mar']= $form_data['reg_MEBrother'];
				}

				if(!empty($form_data['reg_MYBrother'])){
					$data_reg_com['comm_number_of_brothers_yo_mar']= $form_data['reg_MYBrother'];
				}

				if(!empty($form_data['reg_ESister'])){
					$data_reg_com['comm_number_of_sisters_el']= $form_data['reg_ESister'];
				}

				if(!empty($form_data['reg_YSister'])){
					$data_reg_com['comm_number_of_sisters_yo']= $form_data['reg_YSister'];
				}

				if(!empty($form_data['reg_MESister'])){
					$data_reg_com['comm_number_of_sisters_el_mar']= $form_data['reg_MESister'];
				}

				if(!empty($form_data['reg_MYSister'])){
					$data_reg_com['comm_number_of_sisters_yo_mar']= $form_data['reg_MYSister'];
				}

				if(!empty($form_data['more_abt_family'])){
					$data_reg_com['comm_about_family']= $form_data['more_abt_family'];
				}
						
				// 'comm_residence'=>$form_data['resident'][0],
				// 'comm_current_countrycountry'=>$form_data['cur_country'][0],
				// 'comm_current_city'=>$form_data['reg_city'],
				// 'comm_current_district'=>$form_data['reg_district'],					
				// 'comm_communication_address'=>$form_data['comm_address'],
				// 'comm_phone_no'=>$form_data['reg_phone'],
				// 'comm_number_of_brothers_el'=>$form_data['reg_EBrother'],
				// 'comm_number_of_brothers_yo'=>$form_data['reg_YBrother'],
				// 'comm_number_of_brothers_el_mar'=>$form_data['reg_MEBrother'],
				// 'comm_number_of_brothers_yo_mar'=>$form_data['reg_MYBrother'],
				// 'comm_number_of_sisters_el'=>$form_data['reg_ESister'],
				// 'comm_number_of_sisters_yo'=>$form_data['reg_YSister'],
				// 'comm_number_of_sisters_el_mar'=>$form_data['reg_MESister'],
				// 'comm_number_of_sisters_yo_mar'=>$form_data['reg_MYSister'],
				// 'comm_about_family'=>$form_data['more_abt_family']	
		  		$id_user_com = $this->user_model->insert_registration('reg_communication_family',$data_reg_com);


				$expected_education = array();
				if(!empty($form_data['reg_Education'])){
		  			$expected_education = $form_data['reg_Education'];
			  		foreach ($expected_education as $key => $value) {			  			
						$data_expected = array(
						'reg_user_id'=>$id_userdetails,						
						'education_id'=>$value
						);
			  			$reg_Education = $this->user_model->insert_registration('reg_selectededucation',$data_expected);
			  		}
		  		}

		  		$expected_maritalstatus = array();
		  		if(!empty($form_data['check_list'])){
			  		$expected_maritalstatus = $form_data['check_list'];
			  		foreach ($expected_maritalstatus as $key => $value) {
						$searchmarital_status = array(
						'reg_user_id'=>$id_userdetails,						
						'marital_category_id'=>$value
						);
			  			$phy_searchmarital_status = $this->user_model->insert_registration('reg_selectedmarital',$searchmarital_status);
			  		}
		  		}	

		  		$data_reg_phy = array(
						// 'physicalexpectation_id'=>'',
						'reg_user_id'=>$id_userdetails,						
						'phy_food'=>$form_data['food'][0],							
						'phy_searchage_from'=>$form_data['search_age_from'][0],
						'phy_searchage_to'=>$form_data['search_age_to'][0],
						'phy_searchmarital_status'=>'',
						'phy_searchedu_status'=>''
				);
		  		

				if(!empty($form_data['diet_veg'])){
					$data_reg_phy['phy_expectationfood']=$form_data['diet_veg'];	
				}elseif(!empty($form_data['diet_nonveg'])){
					$data_reg_phy['phy_expectationfood']=$form_data['diet_nonveg'];	
				}elseif(!empty($form_data['diet_egg'])){
					$data_reg_phy['phy_expectationfood']=$form_data['diet_egg'];	
				}


				if(!empty($form_data['height_in_cms'][0])){
					$data_reg_phy['phy_height']= $form_data['height_in_cms'][0];
				}
				if(!empty($form_data['weight_in_kgs'][0])){
					$data_reg_phy['phy_weight']= $form_data['weight_in_kgs'][0];
				}
				if(!empty($form_data['body_type'][0])){
					$data_reg_phy['phy_bodytype']= $form_data['body_type'][0];
				}
				if(!empty($form_data['complexion'][0])){
					$data_reg_phy['phy_complexion']= $form_data['complexion'][0];
				}
				if(!empty($form_data['physical_status'][0])){
					$data_reg_phy['phy_physicalstatus']= $form_data['physical_status'][0];
				}
				if(!empty($form_data['personality'])){
					$data_reg_phy['phy_yourpersonality']= $form_data['personality'];
				}
				if(!empty($form_data['expectation'])){
					$data_reg_phy['phy_expectationabout_lifepartner']= $form_data['expectation'];
				}

				// 'phy_height'=>$form_data['height_in_cms'][0],
				// 'phy_weight'=>$form_data['weight_in_kgs'][0],
				// 'phy_bodytype'=>$form_data['body_type'][0],
				// 'phy_complexion'=>$form_data['complexion'][0],					
				// 'phy_physicalstatus'=>$form_data['physical_status'][0],
				// 'phy_yourpersonality'=>$form_data['personality'],
				// 'phy_expectationabout_lifepartner'=>$form_data['expectation']

		  		$id_user_phy = $this->user_model->insert_registration('reg_physical_expectation',$data_reg_phy);
		  		

				if(!empty($_FILES['uploadedfile']['name']))
        		{	   	
        			$config['upload_path'] = FCPATH.USER_PROFILE_PATH; 
        			// FCPATH is the codeigniter default variable to get our application location path and ADMIN_MEDIA_PATH is the constant variable which is defined in constants.php file
			        $config['allowed_types'] = 'jpg|jpeg|png'; // Allowed tupes
			        $config['encrypt_name'] = TRUE; // Encrypted file name for security purpose
			        $personnal_logo['file_ext_tolower'] 	= TRUE;
			        $config['max_size']    = '20480'; // Maximum size - 1MB
			    	$config['max_width']  = '10240'; // Maximumm width - 1024px
			    	$config['max_height']  = '76800'; // Maximum height - 768px			    	
					$config['file_name'] = "th_".$_FILES["uploadedfile"]['name'];
			        $this->upload->initialize($config); // Initialize the configuration		
           			if($this->upload->do_upload('uploadedfile'))
            		{
                		$upload_data = $this->upload->data(); 
                		$_POST['uploadedfile'] = $upload_data['file_name']; 
                		$targetfile_details = $upload_data['file_name'];
                		$data['error'] = 0;
  	            	}else{
	                	$data['status'] = $this->upload->display_errors(); 
	                	$upload_error = 1;
	                	$data['error'] = 1;
                	}

                	if($data['error']!=1){	
						$data_images = array(
								// 'userimages_id'=>'',
								'reg_user_id'=>$id_userdetails,						
								'images'=>$targetfile_details
						);	
						$id_images = $this->user_model->insert_registration('user_images',$data_images);
					}
                }

                // Insert Horoscope // 
                if(!empty($form_data['result_horoscope_rasi'])) {
                	$tempData = html_entity_decode($form_data['result_horoscope_rasi']);
					$cleanData = json_decode($tempData);		
					foreach ($cleanData as $key => $value) {
						$data_horo[$value->key]= $value->value;
					}
				}	
				if(!empty($form_data['result_horoscope_rasi'])) {
					$tempData = html_entity_decode($form_data['result_horoscope_asham']);
					$cleanData = json_decode($tempData);		
					foreach ($cleanData as $key => $value) {
						$data_horo[$value->key]= $value->value;
					}
				}	
				$data_horo['reg_user_id'] = $id_userdetails;
				$id_images = $this->user_model->insert_registration('reg_image_horoscope',$data_horo);

				// //Email Process
				// 			$ci =& get_instance();	
				// 			$ci->config->load('email', true);
				// 			$emailsetup = $ci->config->item('email');
				// 			$this->load->library('email', $emailsetup);
				// 			$from_email = $emailsetup['smtp_user'];
				// 			$this->email->initialize($emailsetup);
				// 			$this->email->from($from_email, '');
				//             $this->email->to($user_values['admin_user_email']);
				// 			$this->email->subject('Get your forgotten Password');
				// 			// $this->email->message("Your registered password is ".$user_values['admin_user_password']);
				// 			$message = $this->load->view('email_template/registration', $user_values, TRUE);
				// 			$this->email->message($message);

				// 			if($this->email->send())
				// 			{
				//     			echo "Your email was sent.!";
				// 			}
				// 			else 
				// 			{
				//     			echo "Your email was not sent.!";
				// 			}		  					  		
		  		$this->load->view('registration',$data_reg_com);

		  	}else{
		  		preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);		  		
		  		if($values[0]){
		  			$data['registered_data'] = $this->user_model->get_registerdata($values[0]);		  							
		  		}
		  		$data['register'] = $this->user_model->get_registerid();		  							
		  		$data['martial_status'] = $this->user_model->get_martialstatus();
		  		$data['mother_tongue'] = $this->user_model->get_mothertongue();
		  		$data['nakshathra'] = $this->user_model->get_nakshathra();
		  		$data['luknam'] = $this->user_model->get_luknam();
		  		$data['zodiac'] = $this->user_model->get_zodiac();
		  		$data['education'] = $this->user_model->get_education();
		  		$data['occupation'] = $this->user_model->get_occupation();		  		
		  		$data['employed_in'] = $this->user_model->get_employedin();
		  		$data['country'] = $this->user_model->get_country();
		  		$data['familystatus'] = $this->user_model->get_familystatus();
		  		$data['familytype'] = $this->user_model->get_familytype();		  				  		
		  		$data['bodytype'] = $this->user_model->get_bodytype();
		  		$data['complexion'] = $this->user_model->get_complexion();		  		
		  		$data['food'] = $this->user_model->get_food();
				$this->load->view('registration',$data);
		  	}		
	}

	public function search_result(){	
		$per_page = 10;
		preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);				
		if($values[0]){	
			$offset = (($values[0]-1)*$per_page); 
		}else{
		 	$offset = 0;
		}	

		$search_inputs = array();
		$advance_search = array();	

		// echo '<pre>';
		// print_r($this->input->post());
		// echo '</pre>';
		// exit();

		if($this->input->post()){	
			$form_data = $this->input->post();			
			$this->session->unset_userdata("search_inputs");
			$this->session->unset_userdata("search_inputs_id");
			$this->session->unset_userdata("searchmanual_id");
			$this->session->unset_userdata("search_dhoshamid");	
			$this->session->unset_userdata("search_quick");	
			$this->session->unset_userdata("advance_search_sess");			

			if($form_data['search_type'] =='basicsearch'){
				// Basic Search //	
				$gender = $form_data['gender'][0];		
				$age_from = $form_data['search_age_from'][0];
				$age_to = $form_data['search_age_to'][0];
				$height_from = $form_data['height_in_cms'][0];		
				$height_to = $form_data['height_in_feets'][0];
				$mar_status = $form_data['marital_status'][0];				
				$mother_tongue = $form_data['mother_tongue'];
				$education = $form_data['education'];
				$show_profile = $form_data['images'][0];
				$values = array('gender' => $gender, 'age_from' => $age_from, 'age_to' => $age_to, 'height_from'=>$height_from, 'height_to'=>$height_to, 'mar_status'=>$mar_status, 'mother_tongue'=>$mother_tongue, 'education'=>$education, 'show_profile'=>$show_profile);				

				$data = $this->user_model->get_basicsearch($values, $per_page, $offset);
				$this->session->set_userdata('search_inputs',$values);

			}elseif($form_data['search_type'] =='advance_search'){
				// Search by Advance Search //				
				$gender = $form_data['gender'][0];	
				$country = $form_data['country'][0];
				// $occupation = $form_data['occupation'][0];	
				$physical_status = $form_data['phy_status'][0];					
				$age_from = $form_data['search_age_from'][0];
				$age_to = $form_data['search_age_to'][0];
				$height_from = $form_data['height_in_cms'][0];		
				$height_to = $form_data['height_in_feets'][0];
				$mar_status = $form_data['marital_status'][0];
				$mother_tongue = $form_data['mother_tongue'];
				// $education = $form_data['education_category'];
				$show_profile = $form_data['images'][0];

				$values = array('gender' => $gender, 'age_from' => $age_from, 'age_to' => $age_to, 'height_from'=>$height_from, 'height_to'=>$height_to, 'mar_status'=>$mar_status, 'mother_tongue'=>$mother_tongue, 'show_profile'=>$show_profile, 'country'=>$country, 'physical_status'=>$physical_status, );

				if(!empty($form_data['education'])){					
					$values['education_category'] = $form_data['education'];
				}

				if(!empty($form_data['occupation'][0])){
					$values['occupation_catagory'] = $form_data['occupation'][0];

				}
				$data = $this->user_model->get_advancesearch($values, $per_page, $offset);				
				$this->session->set_userdata('advance_search_sess',$values);				
				$advance_search = $this->session->userdata('advance_search_sess');
				
				
			}elseif($form_data['search_type'] =='search_id'){
				// Search by Vallikodi ID //
				$searchid = $form_data['searchby_id'];				
				$data = $this->user_model->get_datauserId($searchid, $per_page, $offset);
				$this->session->set_userdata('search_inputs_id',$searchid);
				$search_inputs_ids = $this->session->userdata('search_inputs_id');
			}elseif($form_data['search_type'] =='search_manual_type'){
				// Search by Manual ID //
				$searchmanual_id = $form_data['search_manual_id'];				
				$data = $this->user_model->get_datauser_manualId($searchmanual_id, $per_page, $offset);
				$this->session->set_userdata('searchmanual_id',$searchmanual_id);				
				$searchmanual_id = $this->session->userdata('searchmanual_id');
			}elseif($form_data['search_type'] =='search_dhosham'){
				// Search by Dhosham ID //
				$search_dhoshamid = $form_data['dhosham'][0];				
				$data = $this->user_model->get_dhoshamsearch($search_dhoshamid, $per_page, $offset);
				$this->session->set_userdata('search_dhoshamid',$search_dhoshamid);				
				$search_dhoshamid = $this->session->userdata('search_dhoshamid');
			}else{
				// Search by HomePage-QuickSearch //				
				$values = array('gender' => $form_data['gender'][0], 'age_from' => $form_data['search_age_from'][0], 'age_to' => $form_data['search_age_to'][0]);
				$data = $this->user_model->get_quicksearch($values, $per_page, $offset);				
				$this->session->set_userdata('search_quick',$values);
				$search_quick = $this->session->userdata('search_quick');					
			}
		}else{		
			// Pagination Session Data			
			$search_inputs = $this->session->userdata('search_inputs');
			$search_quick = $this->session->userdata('search_quick');
			$search_dhosham = $this->session->userdata('search_dhoshamid');
			$advance_search = $this->session->userdata('advance_search_sess');						

			if(!empty($search_inputs)){
				$session_data = $this->session->userdata('search_inputs');
				$session_data['offset'] = $values[0];
				$this->session->set_userdata("search_inputs", $session_data);
				$data = $this->user_model->get_basicsearch($search_inputs, $per_page, $offset);	
			}elseif(!empty($search_quick)){
				$session_data = $this->session->userdata('search_quick');
				$session_data['offset'] = $values[0];
				$this->session->set_userdata("search_quick", $session_data);
				$data = $this->user_model->get_quicksearch($search_quick, $per_page, $offset);				
			}elseif(!empty($search_dhosham)){				
				$session_data = $this->session->userdata('search_dhoshamid');				
				$this->session->set_userdata("search_dhoshamid", $session_data);
				if(is_array($session_data) && isset($session_data['offset'])) {
					preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);		
					echo 'offset====>'.$values[0]; 			
					$session_data['offset'] = $values[0];
				}				
				$data = $this->user_model->get_dhoshamsearch($search_dhosham, $per_page, $offset);
			}elseif(!empty($advance_search)){
				$session_data = $this->session->userdata('advance_search_sess');
				$session_data['offset'] = $values[0];
				$this->session->set_userdata("advance_search_sess", $session_data);
				$data = $this->user_model->get_advancesearch($advance_search, $per_page, $offset);
			}			
		}

		//pagination
		$this->load->library('pagination');

		// Pagination configuration
  		$config['base_url'] = base_url().'search_result';
		$config['per_page'] = $per_page;		
		if((isset($search_inputs_ids))||(isset($searchmanual_id)))
		{
		 	$config['total_rows'] = 1;
		}else{
			if(!empty($data['total_rows'])){
				$config['total_rows'] = $data['total_rows'];
			}
		}
		$config['uri_segment'] = 2;
		$config['num_links'] = 4;
		$config['use_page_numbers'] = TRUE;

    	// Custom Configuration
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		// Pagination Inititalization
		$this->pagination->initialize($config);

		// Navigation Links
		$pagination_links = $this->pagination->create_links();
		$data["links"] = $pagination_links;			
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit();
		$this->load->view('search_result',$data);
		
	}
	public function success_stories(){
		$per_page = 5;
		preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);		
		if($values[0]){	
			$offset = (($values[0]-1)*$per_page); 
		}else{
		 	$offset = 0;
		}	

		if($this->input->post()){
			$form_data = $this->input->post();
			if(!empty($_FILES['uploadedfile']['name'])){	   	
        			$config['upload_path'] = FCPATH.USER_SUCCESS_PATH; 
        			
        			// FCPATH is the codeigniter default variable to get our application location path and ADMIN_MEDIA_PATH is the constant variable which is defined in constants.php file
			        $config['allowed_types'] = 'jpg|jpeg|png'; // Allowed tupes
			        $config['encrypt_name'] = TRUE; // Encrypted file name for security purpose
			        $personnal_logo['file_ext_tolower'] 	= TRUE;
			        $config['max_size']    = '20480'; // Maximum size - 1MB
			    	$config['max_width']  = '10240'; // Maximumm width - 1024px
			    	$config['max_height']  = '76800'; // Maximum height - 768px			    	
			        $this->upload->initialize($config); // Initialize the configuration		
           			if($this->upload->do_upload('uploadedfile'))
            		{
                		$upload_data = $this->upload->data(); 
                		$_POST['uploadedfile'] = $upload_data['file_name']; 
                		$targetfile_details = $upload_data['file_name'];
                		$data['error'] = 0;
  	            	}else{
	                	$data['status'] = $this->upload->display_errors(); 
	                	$upload_error = 1;
	                	$data['error'] = 1;
                	}
                }

		    // Insert Success-Queries //
            if($data['error']!=1){	$images = $targetfile_details;	}else{	$images = ''; }
			if($form_data['vallikodi_id']){	$vallikodi_id = $form_data['vallikodi_id'];	}else{	$vallikodi_id = ''; }

			$data_success_stories = array(
						// 'successstories_id'=>'',
						'vallikodi_id'=>$vallikodi_id,
						'email_id'=>$form_data['email_id'],
						'male_name'=>$form_data['bride_name'],
						'female_name'=>$form_data['groom_name'],
						'title'=>'Success Stories',					
						'image'=>$images,
						'description'=>$form_data['comment'],	
						'marriage_date'=>$form_data['mariage_date']
				);
				// print_r($data_success_stories);				
				// exit();
				if($data['error']!=1){
			  		$success_stories = $this->user_model->insert_registration('success_stories', $data_success_stories);
			  		$data['success_stories'] = $success_stories;
			  		$data['success_msg'] = 'Data Inserted successfully';
		  		}
				redirect('success_stories/');
		}else{

			$data = $this->user_model->get_success_stories($per_page, $offset);

				//pagination
			$this->load->library('pagination');

			// Pagination configuration
	  		$config['base_url'] = base_url().'success_stories';
			$config['per_page'] = $per_page;		
			$config['total_rows'] = $data['total_rows'];
			$config['uri_segment'] = 2;
			$config['num_links'] = 4;
			$config['use_page_numbers'] = TRUE;

	    	// Custom Configuration
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			// Pagination Inititalization
			$this->pagination->initialize($config);

			// Navigation Links
			$pagination_links = $this->pagination->create_links();
			$data["links"] = $pagination_links;	

			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			
			$this->load->view('success-stories', $data);
		}	
	}
	public function vanniyar(){
		$this->load->view('vanniyar');
	}
	public function viewdetail(){
		//To get last value of the url after slash (instead of this we can use $this->uri->segment(3),but this is not working here only, in admin working well)
		$get_educationlist = array();

		preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);
		$id = $values[0];
		$data['results'] = $this->user_model->get_viewdetails_byid($id);
		$data['slider_images'] = $this->user_model->get_customer_images($id);
		$data['rasi'] = $this->user_model->getrasi_viewdetails_byid($id);		
		$data['amsham'] = $this->user_model->getamsham_viewdetails_byid($id);

		$data['eeducation'] = $this->user_model->get_selected_education($id);
		foreach($data['eeducation'] as $key => $value) {
			  $get_educationlist[] = $this->user_model->get_education($value['education_id']);			  
		}
		if(!empty($get_educationlist)){
			$data['expected_education']	 =  $get_educationlist;
		}
		
		$data['emaritalstatus'] = $this->user_model->get_selected_maritalstatus($id);
		foreach($data['emaritalstatus'] as $key => $value) {			  
			  $get_martial[] = $this->user_model->get_martialstatusbyId($value['marital_category_id']);
		}		
		if(!empty($get_martial)){		
			$data['expected_maritalstatus'] = $get_martial;
		}

		$this->load->view('viewdetail',$data);
	}
	public function myprofile(){
		// echo "test";
		// if(!empty($this->session->userdata("login_status"))){ 
        $login_session = $this->session->userdata("login_session");
        // print_r($login_session);
		$id = $login_session['userdetail_id'];
		if(!empty($id)){
			$data['results'] = $this->user_model->get_viewdetails_byid($id);
			$data['rasi'] = $this->user_model->getrasi_viewdetails_byid($id);		
			$data['amsham'] = $this->user_model->getamsham_viewdetails_byid($id);
			$this->load->view('myprofile',$data);
		}
	}
	public function mymatches(){
		$this->load->view('mymatches');
	}
	public function myedit(){
		//Get current login user id from session
		$login_session = $this->session->userdata("login_session");
		$id = $login_session['userdetail_id'];
		$profile_image = array();
		$data['error'] = 0;
		if($_POST){
	   		// Update data
	   		// $validation_rules = array(
   			// 	// array('field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[reg_userdetail.userdetail_id.user_email.'.$id.']' ),
   			// );
	   		// $this->form_validation->set_rules($validation_rules);
	  //     	if ($this->form_validation->run() == FALSE) {   
	  //     		echo "if";
		 //        foreach($validation_rules as $row){
		 //        	$field = $row['field']; // getting field name
		 //        	$error = form_error($field); // getting error for field name
		 //        	if($error){
		 //            	$data['error'] = 1;
		 //            	$data['status'] = strip_tags($error);
		 //            	break;
		 //          	}
		 //        }
	  //     	}
			$filesCount = sizeof($_FILES['cus_profileimage']['name']);
			if(!empty($_FILES['cus_profileimage']['name'][0]) && $filesCount > 0){
				for($i = 0; $i < $filesCount; $i++){
					// $profile_image = $_FILES['cus_profileimage']['name'];
					$_FILES['userFile']['name'] = $_FILES['cus_profileimage']['name'][$i];
	                $_FILES['userFile']['type'] = $_FILES['cus_profileimage']['type'][$i];
	                $_FILES['userFile']['tmp_name'] = $_FILES['cus_profileimage']['tmp_name'][$i];
	                // $_FILES['userFile']['error'] = $_FILES['cus_profileimage']['error'][$i];
	                $_FILES['userFile']['size'] = $_FILES['cus_profileimage']['size'][$i];
					// FCPATH is the codeigniter default variable to get our application location path and ADMIN_MEDIA_PATH is the constant variable which is defined in constants.php file
					$config['upload_path'] = FCPATH.USER_PROFILE_PATH; 
					$config['allowed_types'] = FILETYPE_ALLOWED;//FILETYPE_ALLOWED which is defined constantly in constants file
					$config['file_name'] = "th_".$_FILES['cus_profileimage']['name'][$i];
					// $config['max_size']  = '1000';
					// $config['max_width'] = '450';
					// $config['max_height'] = '600';

					$this->upload->initialize($config);
					if($this->upload->do_upload('userFile')){
					    $uploadData = $this->upload->data();
					    array_push($profile_image,USER_PROFILE_PATH.$uploadData['file_name']);
						$profile_image[$i] = str_replace("th_","",$uploadData['file_name']);
					}else{
						$data['error'] = 1;
						$data['status'] = $this->upload->display_errors();
					    // array_push($product_image,'');
					    $profile_image[$i] = '';
					    break;
					}
				}
				//Remove old image
				$cus_image = $this->user_model->get_customer_images($id); 
				// print_r($cus_image);
				foreach ($cus_image as $value) {
					// echo FCPATH.USER_PROFILE_PATH.$value['images'];
					@unlink(FCPATH.USER_PROFILE_PATH.$value['images']);
				}
			}
      		if($data['error'] != 1) {
	    		$data_values = $this->user_model->update_customer_user($id,$profile_image); 
	    		$data['error'] = $data_values['error'];
		        $data['status'] = $data_values['status'];	
      		}
	      	if($data['error']==1) {
				$result['status'] = $data['status'];
				$result['error'] = $data['error'];	
				echo json_encode($result);
			}
			else if($data['error']==2) {
				// $data_ajax['customeruser_values'] = $data_values['customeruser_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				$result['status'] = $data['status'];
				$data_res = $this->user_model->customer_user_profile($id);
				$data_ajax['customeruser_values'] = $data_res['customeruser_values'];
				$data_ajax['selection_values'] = $this->user_model->customer_user_selectiondata();
				$result['output'] = $this->load->view('myedit',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else{
			if(!empty($id)){
				$data_values = $this->user_model->customer_user_profile($id);
				$data['customeruser_values'] = $data_values['customeruser_values'];
				//store the multiple values of marital status
				$data['customeruser_multiple_marstatus_values'] = $data_values['customeruser_multiple_marstatus_values'];
				//store the multiple values of education
				$data['customeruser_multiple_edu_values'] = $data_values['customeruser_multiple_edu_values'];
				//Get Selection option data's for edit
				$data['selection_values'] = $this->user_model->customer_user_selectiondata();
				$data['rasi'] = $this->user_model->getrasi_viewdetails_byid($id);		
				$data['amsham'] = $this->user_model->getamsham_viewdetails_byid($id);
				// echo "<pre>";
				// print_r($data['selection_values']);
				// echo "</pre>";
				$this->load->view('myedit',$data);
			}
		}
		// $this->load->view('myedit');
	}
	public function newreg(){
		$this->load->view('newreg');
	}

	public function countprofile_viewed(){				
		if($this->input->post()){						
			$data_values = $this->user_model->countprofileviewed();
			if($data_values['status']!=='hide'){
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];								
			}else{
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];	
				
			}
			echo json_encode($data);	
		}

	}
	public function testemail(){
		// Email configuration
		$this->config->load('email', true);
		$emailsetup = $this->config->item('email');
		$this->load->library('email', $emailsetup);
		$to_email = "kalaiarasi@etekchnoservices.com";
		$subject = 'Test Email';
		$message = "Hello";
		$this->email->initialize($emailsetup);	
		$this->email->from($emailsetup['smtp_user'], 'Test');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		echo $this->email->send();
		echo $this->email->print_debugger();
		/* Check whether mail send or not*/
		if($this->email->send()) 
			echo "mail sent";
		else
			echo "mail not sent";
	}
}