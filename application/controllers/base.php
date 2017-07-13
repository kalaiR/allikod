<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/admin_login_model');
		// $this->load->library('form_validation');		
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
		$this->load->view('registration');
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

}