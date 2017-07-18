<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customeruser_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/customeruser_data_model');
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
		$this->load->view('admin/edit_customer_user');
	}
	public function view_customer_user(){
		$this->load->view('admin/view_customer_user');
	}
	public function add_online_user(){
		$this->load->view('admin/add_online_user');
	}
}