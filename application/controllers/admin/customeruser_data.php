<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/customeruser_data_model');
	}
	//edit_unique is predefined function. To overwrite here to pass custom message while validation
	function edit_unique($value, $params) 
	{
		//get main CodeIgniter object
	    $CI =& get_instance();
	    //load database libraryd
	    $CI->load->database();    
	    $CI->form_validation->set_message('edit_unique', "Sorry, that %s is already being used.");
	    list($table, $id, $field, $current_id) = explode(".", $params);    
	    $query = $CI->db->select()->from($table)->where($field, $value)->limit(1)->get();    
	    if ($query->row() && $query->row()->$id != $current_id)
	    {
	        return FALSE;
	    }
	}
	public function customer_user(){
		$data_values = $this->customeruser_data_model->customer_user('init');
		$data['customeruser_values'] = $data_values['customeruser_values'];
		// // $data['mapped_data'] = $data_values['mapped_data'];
		$this->load->view('admin/customer_user',$data);
	}
	public function add_customer_user(){
		$this->load->view('admin/add_customer_user');
	}
	public function edit_customer_user(){
		if($_POST){
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
			   			array('field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[reg_userdetail.userdetail_id.user_email.'.$id.']' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[reg_userdetail.user_email]' ),);
				        
		      	}

		      	// Error
		      	else {
		      		$data['error'] = 1;
			        $data['status'] = "Something went wrong. Please try again with correct details ";	
			        $secure_error = 1;
		      	}
		      	if($secure_error == '') {
			   		$this->form_validation->set_rules($validation_rules);
			      	if ($this->form_validation->run() == FALSE) {   
				        foreach($validation_rules as $row){
				        	$field = $row['field']; // getting field name
				        	$error = form_error($field); // getting error for field name
				        	if($error){
				            	$data['error'] = 1;
				            	$data['status'] = strip_tags($error);
				            	break;
				          	}
				        }
			      	}
		      		else {
			    		$data_values = $this->customeruser_data_model->customer_user($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	if($data['error']==1) {
				$result['status'] = $data['status'];
				$result['error'] = $data['error'];	
				echo json_encode($result);
			}
			else if($data['error']==2) {
				$data_ajax['customeruser_values'] = $data_values['customeruser_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				$result['status'] = $data['status'];
				// $data_ajax['zodiac_data'] = $this->master_data_model->zodiac_sign('edit')['zodiac_data'];
				$data_res = $this->customeruser_data_model->customer_user_profile($id);
				$data_ajax['customeruser_values'] = $data_res['customeruser_values'];
				$data_ajax['selection_values'] = $this->customeruser_data_model->customer_user_selectiondata();
				$result['output'] = $this->load->view('admin/edit_customer_user',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else{
			$id = $this->uri->segment(3);
			$data_values = $this->customeruser_data_model->customer_user_profile($id);
			$data['customeruser_values'] = $data_values['customeruser_values'];
			//Get Selection option data's for edit
			$data['selection_values'] = $this->customeruser_data_model->customer_user_selectiondata();
			$this->load->view('admin/edit_customer_user',$data);
		}		
	}
	public function view_customer_user(){
		$id = $this->uri->segment(3);
		$data_values = $this->customeruser_data_model->customer_user_profile($id);
		$data['customeruser_values'] = $data_values['customeruser_values'];
		$data['rasi'] = $this->customeruser_data_model->getrasi_viewdetails_byid($id);		
		$data['amsham'] = $this->customeruser_data_model->getamsham_viewdetails_byid($id);
		$this->load->view('admin/view_customer_user',$data);
	}
	public function add_online_user(){
		$this->load->view('admin/add_online_user');
	}
	function cd_list() {
        $results = $this->customeruser_data_model->get_cd_list();
        echo json_encode($results);
    }
}