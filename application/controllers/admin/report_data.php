<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_Data extends CI_Controller {

	public function __construct()
	{
		  parent::__construct();		
		  $this->load->model('admin/report_data_model');
	}

	public function compareDate() {
		if(!empty($_POST['report_fromdate']) && !empty($_POST['report_todate'])){
			  $start = explode('/', $_POST['report_fromdate']);
		      $startDate = $start[2]."-".$start[0]."-".$start[1];
		      $end = explode('/', $_POST['report_todate']);
		      $endDate = $end[2]."-".$end[0]."-".$end[1];
			  if (strtotime($endDate) >= strtotime($startDate)){
			    return True;
			  }
			  else {
			    $this->form_validation->set_message('compareDate', '%s should be greater than From Date.');
			    return False;
			  }
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

	/* ===========            Report Controller Start       ============ */

	// Report - Functionality
	public function report(){
		if($_POST) {
			$validation_rules = array(
            	array( 'field'   => 'report_fromdate','label'   => 'From Date','rules'   => 'trim|required|xss_clean|callback_valid_date_required' ),
		        array( 'field'   => 'report_todate','label'   => 'To Date','rules'   => 'trim|required|xss_clean|callback_valid_date_required|callback_compareDate' ),
		    );
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
	    		$data['post_report_data'] = $this->report_data_model->report_usercount(); 	
	    		$data['error'] = 0;
	    		$data['status'] = "Please check the report below";
      		}
      		$this->load->view('admin/report',$data);
		}
		else{
			$data['report_data'] = $this->report_data_model->report_usercount();
			$this->load->view('admin/report',$data);
		}
		
	}

	/* ===========            Report Controller End       ============ */


}

