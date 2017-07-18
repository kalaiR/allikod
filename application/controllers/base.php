<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library(array('form_validation')); 
	}
	public function index(){
		$this->load->view('index');
	}
	public function basic_search(){
		$this->load->view('basic_search');
	}
	public function search(){
		// $gender = $this->input->post('gender');
		// $age_from = $this->input->post('age_from');
		// $age_to = $this->input->post('age_to');
		// $height_from = $this->input->post('height_from');
		// $height_to = $this->input->post('height_to');
		// $mar_status = $this->input->post('mar_status');
		// $data['search_results'] = $this->db->query("call BasicSearch(".$gender.",".$age_from.",".$height_from.",".$height_to.",".$mar_status.")")->result_array();
		// $this->load->view('search_results',$data);
		$this->load->view('search');
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
	public function registration(){
		if($this->input->post()){
			$form_data = $this->input->post();		  	
			$validation_rules = array(
  				array( 'field'  => 'reg_email','label'   => 'Register Email Id','rules' => 'trim|required|xss_clean|alpha_numeric_spaces|min_length[3]|max_length[50]' ),
			    array( 'field'   => 'reg_pass1','label'   => 'Premium Visible Days','rules'   => 'trim|required|xss_clean|regex_match[/^[0-9]{1,15}$/]' ),
		        array( 'field'   => 'reg_con_pass2','label'   => 'Premium Visible Status','rules'   => 'required|xss_clean|' ),
		        array( 'field'   => 'register_by','label'   => 'Admin Verification','rules'   => 'required|xss_clean|' ));
	   		$this->form_validation->set_rules($validation_rules);
			if ($this->form_validation->run() == FALSE) {   
		        foreach($validation_rules as $row){
					$field = $row['field'];         //getting field name
			        $error = form_error($field);    //getting error for field name
			        if($error){
			        	$data_values['status'] = strip_tags($error);
			            $data_values['error'] = 1;
			            break;
			        }
			    }
				$data['register'] = $data_values;
				$this->load->view('registration',$data);			    
		  	}else{
		  		$data = array(
					'userdetail_id'=>'',
					'userdetail_profile_id'=>1,
					'user_email'=>$form_data['reg_email'],
					'user_pwd'=>$form_data['reg_pass1'],
					'user_fname'=>$form_data['reg_con_pass2'],
					'user_gender'=>$form_data['gender'][0],					
					'user_age'=>'',
					'user_dob'=>'',
					'user_maritalstatus'=>$form_data['marital_status'][0],
					'user_registeredby'=>$form_data['register_by'][0]
				);
		  		$id_userdetails = $this->user_model->insert_registration('reg_userdetail',$data);
		  	}
		}else{
			$data['register'] = $this->user_model->get_registerid();						
			$this->load->view('registration', $data);
		}
	}
	public function search_result(){
		$this->load->view('search_result');
	}
	public function success_stories(){
		$this->load->view('success-stories');
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
	public function myedit(){
		$this->load->view('myedit');
	}
	

}