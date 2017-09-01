<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/customeruser_data_model');
		$this->load->library('upload');
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
		$profile_image = array();
		$data_values = $this->customeruser_data_model->customer_user('init',$profile_image);
		$data['customeruser_values'] = $data_values['customeruser_values'];
		// // $data['mapped_data'] = $data_values['mapped_data'];
		$this->load->view('admin/customer_user',$data);
	}
	public function add_customer_user(){
		$this->load->view('admin/add_customer_user');
	}
	public function edit_customer_user(){
		if($_POST){
			// print_r($_POST);
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
			   			array('field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|xss_clean|max_length[50]|edit_unique[reg_userdetail.userdetail_id.user_email.'.$id.']' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|xss_clean|max_length[50]|is_unique[reg_userdetail.user_email]' ),);
				        
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
					// echo "uploaded file";
					// print_r($_FILES['cus_profileimage']['name']);
		      		$profile_image = array();
					if(!empty($_FILES['cus_profileimage']['name'][0]) && $filesCount > 0){
							$filesCount = sizeof($_FILES['cus_profileimage']['name']);
							// echo "if";
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
								$config['file_name'] = "new_".$_FILES['cus_profileimage']['name'][$i];
								// $config['thumbfile_name'] = "th_".$_FILES['cus_profileimage']['name'][$i];
								// $config['max_size']  = '1000';
								// $config['max_width'] = '450';
								// $config['max_height'] = '600';

								$this->upload->initialize($config);
								if($this->upload->do_upload('userFile')){
								    $uploadData = $this->upload->data();
								    // print_r($uploadData);
								    array_push($profile_image,USER_PROFILE_PATH.$uploadData['file_name']);
									$profile_image[$i] = str_replace("new_","",$uploadData['file_name']);
									//thumbnail code creation
									$userprofile_logo_thumb['image_library'] = 'gd2';						
									$userprofile_logo_thumb['source_image'] = FCPATH.USER_PROFILE_PATH.$uploadData['file_name'];
									$userprofile_logo_thumb['create_thumb'] = FALSE;						
									$userprofile_logo_thumb['maintain_ratio'] = TRUE;
									$userprofile_logo_thumb['width']  = 260;
									$userprofile_logo_thumb['height']  = 260;
									$userprofile_logo_thumb['new_image'] = "th_".$profile_image[$i];
									$this->load->library('image_lib');
									$this->image_lib->initialize($userprofile_logo_thumb);
									// Resize operation
									if (!$this->image_lib->resize()){
				                		$data['status'] = strip_tags($this->image_lib->display_errors()); 
									}
									$this->image_lib->clear();
								}else{
									$data['error'] = 1;
									$data['status'] = $this->upload->display_errors();
								    // array_push($product_image,'');
								    $profile_image[$i] = '';
								    break;
								}
							}
							// //Remove old image
							// $cus_image = $this->user_model->get_customer_images($id); 
							// print_r($cus_image);
							// foreach ($cus_image as $value) {
							// 	// echo FCPATH.USER_PROFILE_PATH.$value['images'];
							// 	if($value['images']!='defalt_male.png' && $value['images']!='defalt_female.png')
							// 		@unlink(FCPATH.USER_PROFILE_PATH.$value['images']);
							// }
							// print_r($profile_image);
						}
			    		$data_values = $this->customeruser_data_model->customer_user($action_post,$profile_image); 
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
				$data_ajax['customerid_status'] = TRUE;
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
			$data['customerid_status'] = TRUE;
			$id = $this->uri->segment(3);
			if(is_numeric($id)){
				$data_values = $this->customeruser_data_model->customer_user_profile($id);
				$data['customeruser_values'] = $data_values['customeruser_values'];
				// echo "<pre>";
				// print_r($data['customeruser_values']);
				// echo "</pre>";
				//Get Selection option data's for edit
				$data['selection_values'] = $this->customeruser_data_model->customer_user_selectiondata();
			}
			if(empty($data_values['customeruser_values']))
				$data['customerid_status'] = FALSE;		
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
    public function customer_user_new(){
		$data_values = $this->customeruser_data_model->customer_user('init');
		$data['customeruser_values'] = $data_values['customeruser_values'];
		// // $data['mapped_data'] = $data_values['mapped_data'];
		$this->load->view('admin/customer_user',$data);
	}
}