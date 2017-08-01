<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library(array('form_validation', 'session')); 
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
					'user_online_or_simple'=>'Online',
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
				if($_POST['email_id'] == 'sample21@gmail.com'){
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
				// print_r($form_data);
				// echo '</pre>';
				// exit();

				$data = array(
					'userdetail_id'=>'',
					'userdetail_profile_id'=>100,
					'user_email'=>$form_data['register_email'],
					'user_pwd'=>$form_data['reg_pass1'],
					'user_fname'=>$form_data['reg_name'],
					'user_gender'=>$form_data['gender'][0],					
					'user_age'=>'25',
					'user_dob'=>'2017-07-10',					
					'user_maritalstatus'=>$form_data['marital_status'][0],
					'user_registeredby'=>$form_data['register_by'][0]
				);
		  		$id_userdetails = $this->user_model->insert_registration('reg_userdetail',$data);

		  		$data_reg = array(
						'religionethnicity_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'rel_timeofbirth'=>'2017-07-10',
						'rel_mothertongue_id'=>$form_data['mother_tongue'][0],
						'rel_religion'=>$form_data['reg_religion'],
						'rel_caste'=>$form_data['gender'][0],					
						'rel_dhosham'=>$form_data['reg_Dhosham'],
						'rel_nakshathra_id'=>$form_data['nakshathra'][0],
						'rel_luknam_id'=>$form_data['luknam'][0],
						'rel_gothra'=>$form_data['reg_gothra'],
						'rel_zodiacsign_id'=>$form_data['zodiac_sign'][0]
				);
		  		$id_userreg = $this->user_model->insert_registration('reg_religion_ethnicity',$data_reg);

		  		$data_regedu = array(
						'educationoccupation_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'edu_education'=>$form_data['education'][0],
						'edu_educationdetails'=>$form_data['education_detail'],
						'edu_occupation'=>$form_data['occupation'][0],
						'edu_employedin'=>$form_data['employed_in'][0],					
						'edu_montlyincome'=>$form_data['reg_income'],
						'edu_occupationdetail'=>$form_data['employe_in_detail']	
				);
		  		$id_user_edu = $this->user_model->insert_registration('reg_education_occupation',$data_regedu);
		  		
		  		$data_reg_com = array(
						'communicationfamily_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'comm_residence'=>$form_data['resident'][0],
						'comm_current_countrycountry'=>$form_data['cur_country'][0],
						'comm_current_city'=>$form_data['reg_city'],
						'comm_current_district'=>$form_data['employed_in'][0],					
						'comm_communication_address'=>$form_data['comm_address'],
						'comm_phone_no'=>$form_data['reg_phone'],	
						'comm_mobile_no'=>$form_data['reg_mobile'],
						'comm_father_name'=>$form_data['reg_fname'],
						'comm_mother_name'=>$form_data['reg_mname'],
						'comm_father_employment'=>$form_data['reg_femployment'],
						'comm_mother_employment'=>$form_data['reg_memployment'],
						'comm_family_status'=>$form_data['family_status'][0],
						'comm_family_type'=>$form_data['family_type'][0],
						'comm_number_of_brothers_el'=>$form_data['reg_EBrother'],
						'comm_number_of_brothers_yo'=>$form_data['reg_YBrother'],
						'comm_number_of_brothers_el_mar'=>$form_data['reg_MEBrother'],
						'comm_number_of_brothers_yo_mar'=>$form_data['reg_MYBrother'],
						'comm_number_of_sisters_el'=>$form_data['reg_ESister'],
						'comm_number_of_sisters_yo'=>$form_data['reg_YSister'],
						'comm_number_of_sisters_el_mar'=>$form_data['reg_MESister'],
						'comm_number_of_sisters_yo_mar'=>$form_data['reg_MYSister'],
						'comm_about_family'=>$form_data['more_abt_family']
				);				
		  		$id_user_com = $this->user_model->insert_registration('reg_communication_family',$data_reg_com);

		  		$data_reg_phy = array(
						'physicalexpectation_id'=>'',
						'reg_user_id'=>$id_userdetails,
						'phy_height'=>$form_data['height_in_cms'][0],
						'phy_weight'=>$form_data['weight_in_kgs'][0],
						'phy_bodytype'=>$form_data['body_type'][0],
						'phy_complexion'=>$form_data['complexion'][0],					
						'phy_physicalstatus'=>$form_data['physical_status'][0],
						'phy_food'=>$form_data['food'][0],	
						'phy_yourpersonality'=>$form_data['personality'],
						'phy_searchage_from'=>$form_data['search_age_from'][0],
						'phy_searchage_to'=>$form_data['search_age_to'][0],
						'phy_searchmarital_status'=>'single',
						'phy_searchedu_status'=>$form_data['reg_Education'],
						'phy_expectationfood'=>2,
						'phy_expectationabout_lifepartner'=>$form_data['expectation']
				);
		  		$id_user_phy = $this->user_model->insert_registration('reg_physical_expectation',$data_reg_phy);
		  		$this->load->view('registration');

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
				$mother_tongue = $form_data['mother_tongue'][0];
				$education = $form_data['education'][0];
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
				$mar_status = $form_data['martial_status'][0];
				$mother_tongue = $form_data['mother_tongue'][0];
				// $education = $form_data['education_category'][0];
				$show_profile = $form_data['images'][0];

				$values = array('gender' => $gender, 'age_from' => $age_from, 'age_to' => $age_to, 'height_from'=>$height_from, 'height_to'=>$height_to, 'mar_status'=>$mar_status, 'mother_tongue'=>$mother_tongue, 'show_profile'=>$show_profile, 'country'=>$country, 'physical_status'=>$physical_status, );

				if(!empty($form_data['education_category'][0])){					
					$values['education_category'] = $form_data['education_category'][0];
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
				$data = $this->user_model->get_basicsearch($search_inputs, $per_page, $offset);	
			}elseif(!empty($search_quick)){
				$data = $this->user_model->get_quicksearch($search_quick, $per_page, $offset);				
			}elseif(!empty($search_dhosham)){
				$data = $this->user_model->get_dhoshamsearch($search_dhosham, $per_page, $offset);
			}elseif(!empty($advance_search)){
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

		if($this->input->post()){
			$form_data = $this->input->post();
			$config['upload_path'] = base_url().'uploads/userprofile/';        
        	$config['allowed_types'] = '*';
        	$config['max_filename'] = '255';
        	$config['encrypt_name'] = TRUE;
        	$config['max_size'] = '1024'; //1 MB
       		
       		// print_r($_FILES);
       		// exit();		
		    if (isset($_FILES['upload_post']['name'])) {
		        if (0 < $_FILES['upload_post']['error']) {
		            echo 'Error during file upload' . $_FILES['upload_post']['error'];
		        } else {
		        	echo 'in';
		            if (file_exists('uploads/userprofile' . $_FILES['upload_post']['name'])) {
		                echo 'File already exists : uploads/userprofile' . $_FILES['upload_post']['name'];
		            } else {
		                $this->load->library('upload', $config);
		                if (!$this->upload->do_upload('upload_post')) {
		                    echo $this->upload->display_errors();
		                } else {
		                    echo 'File successfully uploaded : uploads/userprofile' . $_FILES['upload_post']['name'];
		                }
		            }
		        }
		    } else {
		        echo 'Please choose a file';
		    }

		    // Insert Success-Queries //
			$data_success_stories = array(
						'successstories_id'=>'',
						'vallikodi_id'=>$form_data['vallikodi_id'],
						'email_id'=>$form_data['email_id'],
						'male_name'=>$form_data['bride_name'],
						'female_name'=>$form_data['groom_name'],
						'title'=>'Success Stories',					
						'image'=>'path',
						'description'=>$form_data['comment'],	
						'marriage_date'=>$form_data['mariage_date']
				);
		  		$success_stories = $this->user_model->insert_registration('success_stories',$data_success_stories);
		  		$data['success_stories'] = $success_stories;
		  		$data['success_msg'] = 'Data Inserted successfully';				
				$this->load->view('success-stories', $data);
		}else{
			$data['results'] = $this->user_model->get_success_stories();			
			$this->load->view('success-stories', $data);
		}	
	}
	public function vanniyar(){
		$this->load->view('vanniyar');
	}
	public function viewdetail(){
		//To get last value of the url after slash (instead of this we can use $this->uri->segment(3),but this is not working here only, in admin working well)
		preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);
		$id = $values[0];
		$data['results'] = $this->user_model->get_viewdetails_byid($id);
		$data['rasi'] = $this->user_model->getrasi_viewdetails_byid($id);		
		$data['amsham'] = $this->user_model->getamsham_viewdetails_byid($id);
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
		if(!empty($id)){
			$data_values = $this->user_model->customer_user_profile($id);
			$data['customeruser_values'] = $data_values['customeruser_values'];
			//Get Selection option data's for edit
			$data['selection_values'] = $this->user_model->customer_user_selectiondata();
			// echo "<pre>";
			// print_r($data['selection_values']);
			// echo "</pre>";
			$this->load->view('myedit',$data);
		}
		// $this->load->view('myedit');
	}
	public function newreg(){
		$this->load->view('newreg');
	}
}