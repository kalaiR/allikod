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

	//To check the entered date format is correct
	public function valid_date_required($date)
	{
		// echo substr_count($date, '/'); // 2
		if(!empty($date)){
			if(substr_count($date, '/') == 2){
		   		$date_split =  explode('/', $date);
		   		if(checkdate($date_split[0],$date_split[1],$date_split[2]) ) {
		      		return true;
		   		} else {
		     		$this->form_validation->set_message('valid_date_required','The %s is not valid it should match this dd/mm/yyyy format');
		        	return false;
		   		}
		   	}
		   	else{
		   		$this->form_validation->set_message('valid_date_required','The %s is not valid it should match this dd/mm/yyyy format');
		        return false;
		   	}
		}
		else{
        	return true;
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

	// nakshathra - Add Edit Delete View Functionality
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
	// nakshathra - Load add page
	public function add_nakshathra(){
		$this->load->view('admin/add_nakshathra');
	}
	// nakshathra - Load Edit page
	public function edit_nakshathra(){
		$status['nakshathra_data'] = $this->master_data_model->nakshathra('edit')['nakshathra_data'];
		$this->load->view('admin/edit_nakshathra',$status);
	}

	/* ===========            Nakshathra Controller End       ============ */

	/* ===========            Mother_tongue Controller Start       ============ */

	// mother_tongue - Add Edit Delete View Functionality
	public function mother_tongue(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'mt_name','label'   => 'Mothertongue Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[mother_tongue.mothertongue_id.name.'.$id.']' ),
				        array( 'field'   => 'mt_status','label'   => 'Mothertongue Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'mt_name','label'   => 'Mothertongue Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[mother_tongue.name]' ),
				        array( 'field'   => 'mt_status','label'   => 'Mothertongue Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->mother_tongue($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->mother_tongue('delete'); 	
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
				$data_ajax['mothertongue_values'] = $data_values['mothertongue_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_mother_tongue',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['mothertongue_data'] = $this->master_data_model->mother_tongue('edit')['mothertongue_data'];
					$result['output'] = $this->load->view('admin/edit_mother_tongue',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/mother_tongue',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->mother_tongue('init');
			$data['mothertongue_values'] = $data_values['mothertongue_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/mother_tongue',$data);
		}
	}
	// mother_tongue - Load add page
	public function add_mother_tongue(){
		$this->load->view('admin/add_mother_tongue');
	}
	// mother_tongue - Load Edit page
	public function edit_mother_tongue(){
		$status['mothertongue_data'] = $this->master_data_model->mother_tongue('edit')['mothertongue_data'];
		$this->load->view('admin/edit_mother_tongue',$status);
	}

	/* ===========            Mother_tongue Controller End       ============ */

	/* ===========            Luknam Controller Start       ============ */

	// luknam - Add Edit Delete View Functionality
	public function luknam(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'luk_name','label'   => 'Luknam Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[luknam.luknam_id.name.'.$id.']' ),
				        array( 'field'   => 'luk_status','label'   => 'Luknam Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'luk_name','label'   => 'Luknam Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[luknam.name]' ),
				        array( 'field'   => 'luk_status','label'   => 'Luknam Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->luknam($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->luknam('delete'); 	
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
				$data_ajax['luknam_values'] = $data_values['luknam_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_luknam',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['luknam_data'] = $this->master_data_model->luknam('edit')['luknam_data'];
					$result['output'] = $this->load->view('admin/edit_luknam',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/luknam',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->luknam('init');
			$data['luknam_values'] = $data_values['luknam_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/luknam',$data);
		}
	}
	// luknam - Load add page
	public function add_luknam(){
		$this->load->view('admin/add_luknam');
	}
	// luknam - Load Edit page
	public function edit_luknam(){
		$status['luknam_data'] = $this->master_data_model->luknam('edit')['luknam_data'];
		$this->load->view('admin/edit_luknam',$status);
	}

	/* ===========            Luknam Controller End       ============ */

	/* ===========            Country Controller Start       ============ */

	// country - Add Edit Delete View Functionality
	public function country(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'cou_name','label'   => 'Country Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[country.country_id.name.'.$id.']' ),
				        array( 'field'   => 'cou_status','label'   => 'Country Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'cou_name','label'   => 'Country Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[country.name]' ),
				        array( 'field'   => 'cou_status','label'   => 'Country Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->country($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->country('delete'); 	
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
				$data_ajax['country_values'] = $data_values['country_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_country',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['country_data'] = $this->master_data_model->country('edit')['country_data'];
					$result['output'] = $this->load->view('admin/edit_country',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/country',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->country('init');
			$data['country_values'] = $data_values['country_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/country',$data);
		}
	}
	// country - Load add page
	public function add_country(){
		$this->load->view('admin/add_country');
	}
	// country - Load Edit page
	public function edit_country(){
		$status['country_data'] = $this->master_data_model->country('edit')['country_data'];
		$this->load->view('admin/edit_country',$status);
	}

	/* ===========            Country Controller End       ============ */

	/* ===========            Success Stories Controller Start       ============ */

	// zodiac_sign - Add Edit Delete View Functionality
	public function successful_story(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
						array( 'field'   => 'suc_bridename','label'   => 'Bridename','rules'   => 'trim|required|xss_clean|max_length[50]' ),
		            	array( 'field'   => 'suc_groomname','label'   => 'Groomname','rules'   => 'trim|required|xss_clean|max_length[50]' ),
		            	array( 'field'   => 'suc_marriagedate','label'   => 'Marriage Date','rules'   => 'trim|required|xss_clean|callback_valid_date_required' ),
		            	array( 'field'   => 'suc_vallikodiid','label'   => 'Vallikodi ID of Bride or Groom','rules'   => 'trim|required|xss_clean' ),
		            	array( 'field'   => 'suc_description','label'   => 'Description','rules'   => 'trim|required|xss_clean|min_length[10]|max_length[150]' ),
		            	array( 'field'   => 'suc_couplephoto','label'   => 'Couple Photo','rules'   => 'trim|xss_clean'),
				        array( 'field'   => 'suc_status','label'   => 'Active Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'suc_bridename','label'   => 'Bridename','rules'   => 'trim|required|xss_clean|max_length[50]' ),
		            	array( 'field'   => 'suc_groomname','label'   => 'Groomname','rules'   => 'trim|required|xss_clean|max_length[50]' ),
		            	array( 'field'   => 'suc_marriagedate','label'   => 'Marriage Date','rules'   => 'trim|required|xss_clean|callback_valid_date_required' ),
		            	array( 'field'   => 'suc_vallikodiid','label'   => 'Vallikodi ID of Bride or Groom','rules'   => 'trim|required|xss_clean' ),
		            	array( 'field'   => 'suc_description','label'   => 'Description','rules'   => 'trim|required|xss_clean|min_length[10]|max_length[150]' ),
		            	array( 'field'   => 'suc_couplephoto','label'   => 'Couple Photo','rules'   => 'trim|xss_clean'),
				        array( 'field'   => 'suc_status','label'   => 'Active Status','rules'   => 'trim|required|xss_clean|' ),);
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
		      			// echo "else no other";
		      			// echo $_FILES['suc_couplephoto']['name'];
		      			//Check whether user upload picture
						if(!empty($_FILES['suc_couplephoto']['name'])){
							// echo "image uploaded";
							// echo $_FILES['category_image']['name'];
							$couplephoto = $_FILES['suc_couplephoto']['name'];
							// echo $couplephoto;
							// FCPATH is the codeigniter default variable to get our application location path and ADMIN_MEDIA_PATH is the constant variable which is defined in constants.php file
							$config['upload_path'] = FCPATH.ADMIN_UPLOAD_MEDIA_PATH; 
							$config['allowed_types'] = FILETYPE_ALLOWED;//FILETYPE_ALLOWED which is defined constantly in constants file
							$config['file_name'] = $_FILES['suc_couplephoto']['name'];
							$config['max_size']  = '1000000';
							$config['max_width'] = '300';
							$config['max_height'] = '300';

							$this->upload->initialize($config);
							if($this->upload->do_upload('suc_couplephoto')){
							    $uploadData = $this->upload->data();
							    $couplephoto = ADMIN_UPLOAD_MEDIA_PATH.$uploadData['file_name'];
							}else{
								$errors = $this->upload->display_errors();
								// echo $errors;
							    $couplephoto = '';
							    $data['error'] = 1;
							    $data['status'] = strip_tags($errors);
							}
						}
			    		$data_values = $this->master_data_model->successful_story($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->successful_story('delete'); 	
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
				$data_ajax['successtory_values'] = $data_values['successtory_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_successful_story',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['successtory_data'] = $this->master_data_model->successful_story('edit')['successtory_data'];
					$result['output'] = $this->load->view('admin/edit_successful_story',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/successful_story',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->successful_story('init');
			$data['successtory_values'] = $data_values['successtory_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/successful_story',$data);
		}
	}
	// zodiac_sign - Load add page
	public function add_successful_story(){
		$this->load->view('admin/add_successful_story');
	}
	// zodiac_sign - Load Edit page
	public function edit_successful_story(){
		$status['successtory_data'] = $this->master_data_model->successful_story('edit')['successtory_data'];
		$this->load->view('admin/edit_successful_story',$status);
	}

	/* ===========            Success Stories Controller End       ============ */

	/* ===========            Administration Controller Start       ============ */

	// administration - Add Edit Delete View Functionality
	public function administration(){
		if($_POST) {
			$secure_error = '';
			// Validate add and update data
		   	if($this->input->post('action')=='update' || $this->input->post('action')=='save') {
		   		// Update data
			   	if($this->input->post('action')=='update' && $this->input->post('rid')) {
			  		$id = $this->input->post('rid');
			  		$action_post = $this->input->post('action');
			   		$validation_rules = array(
				        array('field'   => 'adm_name','label'   => 'Admin Name','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[admin.admin_id.admin_username.'.$id.']' ),
				        array('field'   => 'adm_password','label'   => 'Admin Password','rules'   => 'trim|required|xss_clean|max_length[50]|edit_unique[admin.admin_id.admin_pwd.'.$id.']' ),
				        array( 'field'   => 'adm_type','label'   => 'Admin Type','rules'   => 'trim|required|xss_clean|' ),
				        array( 'field'   => 'adm_status','label'   => 'Admin Status','rules'   => 'trim|required|xss_clean|' ),);
			    }

			  	// Save data
		    	else if($this->input->post('action')=='save') {
		    		$action_post = $this->input->post('action');
		      		$validation_rules = array(
		            	array( 'field'   => 'adm_name','label'   => 'Admin Name','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[admin.admin_username]' ),
		            	array( 'field'   => 'adm_password','label'   => 'Admin Password','rules'   => 'trim|required|xss_clean|max_length[50]|is_unique[admin.admin_pwd]' ),
		            	array( 'field'   => 'adm_type','label'   => 'Admin Type','rules'   => 'trim|required|xss_clean|' ),
				        array( 'field'   => 'adm_status','label'   => 'Admin Status','rules'   => 'trim|required|xss_clean|' ),);
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
			    		$data_values = $this->master_data_model->administration($action_post); 
			    		$data['error'] = $data_values['error'];
				        $data['status'] = $data_values['status'];	
		      		}
		      	}
	      	}
	      	// Delete data
	    	else if($this->input->post('action')=='delete' && $this->input->post('rid')) {
	      		$data_values = $this->master_data_model->administration('delete'); 	
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
				$data_ajax['admin_values'] = $data_values['admin_values'];
				$data_ajax['status'] = $data['status'];
				// $data_ajax['mapped_data'] = $data_values['mapped_data'];
				$result['error'] = $data['error'];
				if($this->input->post('action') == 'save')
					$result['output'] = $this->load->view('admin/add_administration',$data_ajax,true);
				else if($this->input->post('action') == 'update'){
					$data_ajax['admin_data'] = $this->master_data_model->administration('edit')['admin_data'];
					$result['output'] = $this->load->view('admin/edit_administration',$data_ajax,true);
				}
				else
					$result['output'] = $this->load->view('admin/administration',$data_ajax,true);
				echo json_encode($result);
			}
		}
		else {
		    $data['status'] = 0;
	    	$data_values = $this->master_data_model->administration('init');
			$data['admin_values'] = $data_values['admin_values'];
			// $data['mapped_data'] = $data_values['mapped_data'];
			$this->load->view('admin/administration',$data);
		}
	}
	// administration - Load add page
	public function add_administration(){
		$this->load->view('admin/add_administration');
	}
	// administration - Load Edit page
	public function edit_administration(){
		$status['admin_data'] = $this->master_data_model->administration('edit')['admin_data'];
		$this->load->view('admin/edit_administration',$status);
	}

	/* ===========            Administration Controller End       ============ */
}
/* End of file Master_Data.php */ 
/* Location: ./application/controllers/Master_Data.php */
