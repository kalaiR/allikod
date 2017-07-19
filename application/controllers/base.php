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
			$data = array(
					'userdetail_id'=>'',
					'userdetail_profile_id'=>200,
					'user_email'=>$form_data['reg_email2'],
					'user_pwd'=>$form_data['reg_pass2'],
					'user_fname'=>$form_data['reg_Name'],
					'user_gender'=>$form_data['gender'][0],					
					'user_age'=>$form_data['reg_age'],
					'user_dob'=>$form_data['dob'],
					'user_maritalstatus'=>$form_data['marital_status'][0],
					'user_registeredby'=>$form_data['register_by'][0]
				);
		  		$id_userdetails = $this->user_model->insert_registration('reg_userdetail',$data);		  		
		  		redirect('registration/'.$id_userdetails);
		}else{
			$data['register'] = $this->user_model->get_registerid();
			$data['martial_status'] = $this->user_model->get_martialstatus();
			$this->load->view('index', $data);
		}
	}
	public function login_ajax(){
		if($this->input->post()){
			$data_values = $this->user_model->user_login(); 
			if($data_values['status']!=='login_success'){
				$data['status'] = $data_values['status'];
				$data['error'] = $data_values['error'];	
				echo $data['status'];
				redirect(base_url().'index');
			}else{
				// Session
	        	$this->session->set_userdata("login_status",1);
    	    	$this->session->set_userdata("login_session",$data_values['login_values']);
    	    	$data['login_user'] = $data_values['login_values'];
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
					'user_fname'=>$form_data['reg_con_pass2'],
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
		if($this->input->post()){	
			$form_data = $this->input->post();
			$gender = $form_data['gender'][0];		
			$age_from = $form_data['search_age_from'][0];
			$age_to = $form_data['search_age_to'][0];
			$height_from = $form_data['height_in_cms'][0];		
			$height_to = $form_data['height_in_feets'][0];
			$mar_status = $form_data['marital_status'][0];
			$data['search_results'] = $this->db->query("call BasicSearch(".$gender.",".$age_from.",".$height_from.",".$height_to.",".$mar_status.")")->result_array();
			$this->load->view('search_result',$data);
		}	
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
	public function full_view(){
		$this->load->view('view');
	}
	public function myprofile(){
		$this->load->view('myprofile');
	}
	public function mymatches(){
		$this->load->view('mymatches');
	}
	

}