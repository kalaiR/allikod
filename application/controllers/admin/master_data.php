<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/master_data_model');
	}

	// Alpha with white space
 	public function alpha_dash_space($provider_job_title){
		if (! preg_match('/^[a-zA-Z\s]+$/', $provider_job_title)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	//edit_unique is predefined function. To overwrite here to pass custom message while validation
	function edit_unique($value, $params) 
	{
		//get main CodeIgniter object
	    $CI =& get_instance();
	    //load database library
	    $CI->load->database();    
	    $CI->form_validation->set_message('edit_unique', "Sorry, that %s is already being used.");
	    list($table, $id, $field, $current_id) = explode(".", $params);    
	    $query = $CI->db->select()->from($table)->where($field, $value)->limit(1)->get();    
	    if ($query->row() && $query->row()->$id != $current_id)
	    {
	        return FALSE;
	    }
	}

	/* ===========            zodiac_sign Controller Start       ============ */

	// zodiac_sign - Add Edit Delete View Functionality
	public function zodiac_sign(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'zod_name','label'   => 'Zodiac Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[zodiac_sign.zodiacsign_id.name.'.$id.']' ),
				        array( 'field'   => 'zod_status','label'   => 'Zodiac Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'zod_name','label'   => 'Zodiac Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[zodiac_sign.name]' ),
				        array( 'field'   => 'zod_status','label'   => 'Zodiac Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->zodiac_sign($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->zodiac_sign('delete'); 	
	      		$data['error'] = $data_values['error'];
			    $data['status'] = $data_values['status'];
	      	}
	      	else {
	      		$data['error'] = 1;
			    $data['status'] = "Something went wrong. Please try again with correct details ";	
	      	}

	      	if($data['error']==1) {
				$result['status'] = $data['status'];
				$result['error'] = $data['error'];	
				echo json_encode($result);
			}
			else if($data['error']==2) {
				$data_ajax['zodiac_values'] = $data_values['zodiac_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_zodiac_sign',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['zodiac_data'] = $this->master_data_model->zodiac_sign('edit')['zodiac_data'];
					$result['output'] = $this->load->view('admin/edit_zodiac_sign',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/zodiac_sign',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->zodiac_sign('init');
			$data['zodiac_values'] = $data_values['zodiac_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/zodiac_sign',$data);
		}
	}
	// zodiac_sign - Load add page
	public function add_zodiac_sign(){
		$this->load->view('admin/add_zodiac_sign');
	}
	// zodiac_sign - Load Edit page
	public function edit_zodiac_sign(){
		$status['zodiac_data'] = $this->master_data_model->zodiac_sign('edit')['zodiac_data'];
		$this->load->view('admin/edit_zodiac_sign',$status);
	}

	/* ===========            zodiac_sign Controller End       ============ */


	/* ===========            Nakshatra Controller Start       ============ */

	// zodiac_sign - Add Edit Delete View Functionality
	public function nakshathra(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'nak_name','label'   => 'Nakshathra Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[nakshathra.nakshathra_id.name.'.$id.']' ),
				        array( 'field'   => 'nak_status','label'   => 'Nakshathra Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'nak_name','label'   => 'Nakshathra Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[nakshathra.name]' ),
				        array( 'field'   => 'nak_status','label'   => 'Nakshathra Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->nakshathra($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->nakshathra('delete'); 	
	      		$data['error'] = $data_values['error'];
			    $data['status'] = $data_values['status'];
	      	}
	      	else {
	      		$data['error'] = 1;
			    $data['status'] = "Something went wrong. Please try again with correct details ";	
	      	}

	      	if($data['error']==1) {
				$result['status'] = $data['status'];
				$result['error'] = $data['error'];	
				echo json_encode($result);
			}
			else if($data['error']==2) {
				$data_ajax['nakshathra_values'] = $data_values['nakshathra_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_nakshathra',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['nakshathra_data'] = $this->master_data_model->nakshathra('edit')['nakshathra_data'];
					$result['output'] = $this->load->view('admin/edit_nakshathra',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/nakshathra',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->nakshathra('init');
			$data['nakshathra_values'] = $data_values['nakshathra_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/nakshathra',$data);
		}
	}
	// zodiac_sign - Load add page
	public function add_nakshathra(){
		$this->load->view('admin/add_nakshathra');
	}
	// zodiac_sign - Load Edit page
	public function edit_nakshathra(){
		$status['nakshathra_data'] = $this->master_data_model->nakshathra('edit')['nakshathra_data'];
		$this->load->view('admin/edit_nakshathra',$status);
	}

	/* ===========            zodiac_sign Controller End       ============ */

}
/* End of file Master_Data.php */ 
/* Location: ./application/controllers/Master_Data.php */
