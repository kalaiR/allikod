<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/admin_login_model');
		// $this->load->library('form_validation');		
	}
	public function index(){
		$this->load->view('admin/index');
	}	
	public function administration(){
		$this->load->view('admin/administration');
	}
	public function add_administration(){
		$this->load->view('admin/add_administration');
	}
	public function edit_administration(){
		$this->load->view('admin/edit_administration');
	}
	public function selling_admin(){
		$this->load->view('admin/selling_admin');
	}
	public function edit_selling_admin(){
		$this->load->view('admin/edit_selling_admin');
	}
	public function add_selling_admin(){
		$this->load->view('admin/add_selling_admin');
	}
	public function report(){
		$this->load->view('admin/report');
	}
	public function successful_story(){
		$this->load->view('admin/successful_story');
	}
	public function add_successful_story(){
		$this->load->view('admin/add_successful_story');
	}
	public function edit_successful_story(){
		$this->load->view('admin/edit_successful_story');
	}
	public function zodiac_sign(){
		$this->load->view('admin/zodiac_sign');
	}
	public function add_zodiac_sign(){
		$this->load->view('admin/add_zodiac_sign');
	}
	public function edit_zodiac_sign(){
		$this->load->view('admin/edit_zodiac_sign');
	}
	public function nakshathra(){
		$this->load->view('admin/nakshathra');
	}
	public function add_nakshathra(){
		$this->load->view('admin/add_nakshathra');
	}
	public function edit_nakshathra(){
		$this->load->view('admin/edit_nakshathra');
	}
	public function mother_tongue(){
		$this->load->view('admin/mother_tongue');
	}
	public function add_mother_tongue(){
		$this->load->view('admin/add_mother_tongue');
	}
	public function edit_mother_tongue(){
		$this->load->view('admin/edit_mother_tongue');
	}
	public function luknam(){
		$this->load->view('admin/luknam');
	}
	public function add_luknam(){
		$this->load->view('admin/add_luknam');
	}
	public function edit_luknam(){
		$this->load->view('admin/edit_luknam');
	}
	public function country(){
		$this->load->view('admin/country');
	}
	public function add_country(){
		$this->load->view('admin/add_country');
	}
	public function edit_country(){
		$this->load->view('admin/edit_country');
	}
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
	public function customer_user(){
		$this->load->view('admin/customer_user');
	}
	public function add_customer_user(){
		$this->load->view('admin/add_customer_user');
	}
	public function edit_customer_user(){
		$this->load->view('admin/edit_customer_user');
	}

}