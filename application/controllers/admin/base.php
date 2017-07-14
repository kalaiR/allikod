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
	public function country(){
		$this->load->view('admin/country');
	}
	public function administration(){
		$this->load->view('admin/administration');
	}

}