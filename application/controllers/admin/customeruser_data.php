<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/customeruser_data_model');
		$this->load->library('upload');
		$this->load->library("pagination");
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
			   			array('field'   => 'cus_email','label'   => 'Customer Email','rules'   => 'trim|xss_clean|max_length[50]|edit_unique[reg_userdetail.userdetail_id.user_email.'.$id.']' ),
			   			array('field'   => 'cus_regby','label'   => 'Registered By','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_fname','label'   => 'Customer Username','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_gender','label'   => 'Customer Gender','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_dob','label'   => 'Customer Date Of Birth','rules'   => 'trim|xss_clean|required|exact_length[10]' ),
			   			array('field'   => 'cus_marstatus','label'   => 'Marital Status','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_birthtime','label'   => 'Time of Birth','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_mothertongue','label'   => 'Mother Tongue','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_nakshathra','label'   => 'Nakshatra','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_zodiac','label'   => 'Zodiac Sign','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_education','label'   => 'Education','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_edudetail','label'   => 'Education Detail','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_occupation','label'   => 'Occupation','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_ocudetail','label'   => 'Occupation Detail','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_empin','label'   => 'Employed In','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_mobile','label'   => 'Mobile Number','rules'   => 'trim|xss_clean|required|exact_length[10]|numeric' ),
			   			array('field'   => 'cus_food','label'   => 'Customer Food','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_fathername','label'   => 'Customer Fathers Name','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_fatheremp','label'   => 'Customer Fathers Employment','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_mothername','label'   => 'Customer Mothers Name','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_motheremp','label'   => 'Customer Mothers Employment','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_familystatus','label'   => 'Family Status','rules'   => 'trim|xss_clean|required' ),
			   			array('field'   => 'cus_familytype','label'   => 'Family Type','rules'   => 'trim|xss_clean|required' ),
			   			);
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
		      		// print_r($_FILES['cus_profileimage']);
		      		$filesCount = (!empty($_FILES['cus_profileimage']['name'][0])) ? sizeof($_FILES['cus_profileimage']['name']) : 0;
					if(!empty($_FILES['cus_profileimage']['name'][0]) && $filesCount > 0){
							// echo "if";
							// echo $filesCount;
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
				// $data_ajax['customeruser_values'] = $data_values['customeruser_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				$result['status'] = $data['status'];
				$data_res = $this->customeruser_data_model->customer_user_profile($id);
				// print_r($data_res);
				$data_ajax['customeruser_values'] = $data_res['customeruser_values'];
				$data_ajax['selection_values'] = $this->customeruser_data_model->customer_user_selectiondata();

				//Sending mail and sms once profile activated with payment status
				$old_active_status =  $this->input->post('cus_profileoldactivestatus');
				$new_active_status =  $this->input->post('cus_profileactivestatus');
				$payment_status =  $this->input->post('cus_paymentactivestatus');
				if($old_active_status == 0 && $new_active_status == 1 && $payment_status == 1){
					$data_activation = array(
						'user_id' => $this->input->post('rid'),
						'user_email' => $this->input->post('cus_email'),
	                    'user_pwd' => $this->input->post('cus_password'),
	                    'user_fname' => $this->input->post('cus_fname'),
	                    'user_online_or_simple' => $this->input->post('cus_usertype'),
	                    'period_in_month' => $this->input->post('cus_period'),
	                    'startdate' => date('Y-m-d',strtotime($this->input->post('cus_paymentstartdate'))),
						'enddate' => date('Y-m-d',strtotime($this->input->post('cus_paymentenddate'))),
						'totalno_of_profile' => $this->input->post('cus_totprofile'),
						'payment_status' => $this->input->post('cus_paymentactivestatus'),
						'user_active_status' => $this->input->post('cus_profileactivestatus'),
						'comm_mobile_no' => $this->input->post('cus_mobile'),
					);
					//Email process
					$ci =& get_instance();	
					$ci->config->load('email', true);
					$emailsetup = $ci->config->item('email');
					$this->load->library('email', $emailsetup);
					$from_email = $emailsetup['smtp_user'];
					$this->email->initialize($emailsetup);
					$this->email->from($from_email, '');
	                $this->email->to($data_activation['user_email']);
	    			$this->email->subject('Profile Activated Confirmation');
	    			// $this->email->message("Your registered password is ".$user_values['admin_user_password']);
	    			$message = $this->load->view('admin/email_template/customeruser_profile_activation',$data_activation, TRUE);
	    			$this->email->message($message);
	    			$this->email->send();

	    			//SMS process
	    			$smsurl = 'http://dnd.blackholesolution.com/api/sendmsg.php';
					$fields = array(
					    'user'=> 'VALLIK',
					    'pass'=> 'abcd1234',
					    'sender'=> 'VALLIK',
					    'phone'=> $data_activation['comm_mobile_no'],
					    'text'=>"Your profile VM".$data_activation['user_id']."has been Activated. For further Details please check your mail. Thanks By Vallikodi Team",
					    'priority'=>'ndnd',
					    'stype'=>'normal'
					);
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $smsurl);
					curl_setopt($ch, CURLOPT_POST, count($fields));
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
					curl_exec($ch);
					curl_close($ch);

	    			// if($this->email->send())
	    			// {
	       //  			echo "Your email was sent.!";
	    			// }
	    			// else 
	    			// {
	       //  			echo "Your email was not sent.!";
	    			// }
	    		}

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
 //    public function customer_user_new(){
	// 	$profile_image = array();
	// 	$data_values = $this->customeruser_data_model->customer_user('init',$profile_image);
	// 	$data['customeruser_values'] = $data_values['customeruser_values'];
	// 	// // $data['mapped_data'] = $data_values['mapped_data'];
	// 	$this->load->view('admin/customer_user_new',$data);
	// }

	public function customer_user_new(){
		$config = array();
        $config["base_url"] = base_url() . "admin/customer_user_new";
        $config["total_rows"] = $this->customeruser_data_model->customeruser_record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['cur_tag_open'] = ' ';
        $config['cur_tag_close'] = '';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        // echo $this->uri->segment(3);
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //Find offset
        $per_page = $config["per_page"];
        preg_match("/[^\/]+$/", $this->uri->uri_string(), $values); 
        if(is_numeric($values[0])){ 
            $offset = (($values[0]-1)*$per_page); 
        }else{
            $offset = 0;
        }   
        // echo $page;
        $data["customeruser_values"] = $this->customeruser_data_model->fetch_customeruser($config["per_page"], $offset);
        // echo "offset".$offset;
        $data["links"] = $this->pagination->create_links();
        $data["offset"] = $offset;
        // if($this->input->post('ajax')) {
        //  $this->load->view('admin/customer_user_new',$data);
        // } 
        // else {
        // 	// echo "<pre>";
        // 	// print_r($data);
        // 	// echo "</pre>";
        //  $this->load->view('admin/customer_user_new',$data);
        // }
     //    echo "<pre>";
    	// print_r($data);
    	// echo "</pre>";
        $this->load->view('admin/customer_user_new',$data);
	}
}