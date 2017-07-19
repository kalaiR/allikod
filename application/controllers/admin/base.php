<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('admin/base_model');	
	}
	public function index(){
		if($_POST){
			$data['error']=0;
			$validation_rules = array(
	 					          	array(
	  			                        'field'   => 'username',
				                        'label'   => 'Username',
			    	                    'rules'   => 'trim|required|xss_clean|'
				                    ),
				                    array(
				                        'field'   => 'password',
			                            'label'   => 'Password',
			                            'rules'   => 'trim|required|xss_clean|'
			                        ),
			                    );
	  		$this->form_validation->set_rules($validation_rules);
	 	  	if ($this->form_validation->run() == FALSE) {   
			    foreach($validation_rules as $row){
			        $field = $row['field'];         //getting field name
			        $error = form_error($field);    //getting error for field name
				    if($error){
						$data['status'] = strip_tags($error);
						break;
			        }
			    }
	 	 	}
			else {
		   		$data_values = $this->base_model->admin_login(); 
		   		$data['status'] = $data_values['status'];
		   		$data['error'] = $data_values['error'];
			}
			if($data['error']==0 || $data['error'] == 2) {
				if($data['status']=='login_success') {
					$data['login_values'] = $data_values['login_values'];
					// Session
		        	$this->session->set_userdata("admin_login_status",1);
	    	    	$this->session->set_userdata("admin_login_session",$data['login_values']);
					if($this->input->post('remember_me')) {
						// Set cookie
						$cookie = array(
				        'name'   => 'vallikodi_name',
				        'value'  => $data['login_values']['adminuser_name'],
				        'expire' =>  time() + (60 * 24 * 60 * 60),
				        'domain' => '.localhost',
				        'path'   => '/',
				        'prefix' => 'main_',
				        );
				 		set_cookie($cookie);
				 	}
				}
				echo $data['status'];
			}
			else if($data['error']==1) {
				redirect(base_url().'main/admin_error');
			}
		}
		else{
			if(!empty($this->session->userdata("admin_login_status")))
			redirect(base_url().'admin/dashboard');
			$this->load->view('admin/login');
		}		
	}	
	// public function administration(){
	// 	$this->load->view('admin/administration');
	// }
	// public function add_administration(){
	// 	$this->load->view('admin/add_administration');
	// }
	// public function edit_administration(){
	// 	$this->load->view('admin/edit_administration');
	// }
	public function selling_admin(){
		$this->load->view('admin/selling_admin');
	}
	public function edit_selling_admin(){
		$this->load->view('admin/edit_selling_admin');
	}
	public function add_selling_admin(){
		$this->load->view('admin/add_selling_admin');
	}
	// public function report(){
	// 	$this->load->view('admin/report');
	// }
	// public function successful_story(){
	// 	$this->load->view('admin/successful_story');
	// }
	// public function add_successful_story(){
	// 	$this->load->view('admin/add_successful_story');
	// }
	// public function edit_successful_story(){
	// 	$this->load->view('admin/edit_successful_story');
	// }
	// public function zodiac_sign(){
	// 	$this->load->view('admin/zodiac_sign');
	// }
	// public function add_zodiac_sign(){
	// 	$this->load->view('admin/add_zodiac_sign');
	// }
	// public function edit_zodiac_sign(){
	// 	$this->load->view('admin/edit_zodiac_sign');
	// }
	// public function nakshathra(){
	// 	$this->load->view('admin/nakshathra');
	// }
	// public function add_nakshathra(){
	// 	$this->load->view('admin/add_nakshathra');
	// }
	// public function edit_nakshathra(){
	// 	$this->load->view('admin/edit_nakshathra');
	// }
	// public function mother_tongue(){
	// 	$this->load->view('admin/mother_tongue');
	// }
	// public function add_mother_tongue(){
	// 	$this->load->view('admin/add_mother_tongue');
	// }
	// public function edit_mother_tongue(){
	// 	$this->load->view('admin/edit_mother_tongue');
	// }
	// public function luknam(){
	// 	$this->load->view('admin/luknam');
	// }
	// public function add_luknam(){
	// 	$this->load->view('admin/add_luknam');
	// }
	// public function edit_luknam(){
	// 	$this->load->view('admin/edit_luknam');
	// }
	// public function country(){
	// 	$this->load->view('admin/country');
	// }
	// public function add_country(){
	// 	$this->load->view('admin/add_country');
	// }
	// public function edit_country(){
	// 	$this->load->view('admin/edit_country');
	// }
	public function education(){
		$this->load->view('admin/education');
	}
	public function add_education(){
		$this->load->view('admin/add_education');
	}
	public function edit_education(){
		$this->load->view('admin/edit_education');
	}
	public function occupation(){
		$this->load->view('admin/occupation');
	}
	public function add_occupation(){
		$this->load->view('admin/add_occupation');
	}
	public function edit_occupation(){
		$this->load->view('admin/edit_occupation');
	}
	// public function customer_user(){
	// 	$this->load->view('admin/customer_user');
	// }
	// public function add_customer_user(){
	// 	$this->load->view('admin/add_customer_user');
	// }
	// public function edit_customer_user(){
	// 	$this->load->view('admin/edit_customer_user');
	// }
	// public function view_customer_user(){
	// 	$this->load->view('admin/view_customer_user');
	// }
	// public function add_online_user(){
	// 	$this->load->view('admin/add_online_user');
	// }
	public function login(){
		$this->load->view('admin/login');
	}
	public function gallery_upload(){
		$this->load->view('admin/gallery_upload');
	}
	public function add_gallery(){
		$this->load->view('admin/add_gallery');
	}
	public function edit_gallery_upload(){
		$this->load->view('admin/edit_gallery_upload');
	}
	public function gallery_category(){
		$this->load->view('admin/gallery_category');
	}
	public function add_gallery_category(){
		$this->load->view('admin/add_gallery_category');
	}
	public function edit_gallery_category(){
		$this->load->view('admin/edit_gallery_category');
	}
	public function contact_gallery_upload(){
		$this->load->view('admin/contact_gallery_upload');
	}
	public function add_contact_gallery(){
		$this->load->view('admin/add_contact_gallery');
	}
	public function edit_contact_gallery(){
		$this->load->view('admin/edit_contact_gallery');
	}


    public function dashboard(){
    	//Functionality for dashboard page
		$data['user_results'] = $this->base_model->get_user_count();
		// print_r($data['user_results']);
		$this->load->view('admin/index',$data);
    }
    // Admin - Logout
  	public function admin_logout() {
  		$this->session->unset_userdata("admin_login_status");
        $this->session->unset_userdata("admin_login_session");
        redirect(base_url().'admin');
  	}

}