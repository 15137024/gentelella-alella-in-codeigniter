<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Users_Model" , "users_model");
	}

	public function index(){
		if($this->session->userdata("admin")){
			redirect(BASE_URL.'admin/Contact_records/');
		}
		$data['site_title'] = "Taxi Deepot CRM";
		$this->load->view('login/login' , $data);
	}
	public function login(){
		$user = $this->users_model->login($this->input->post("username") , md5($this->input->post("password")));
		if($user){
			$this->session->set_userdata("admin" , $user);
			redirect(BASE_URL.'admin/Contact_records' , 'refresh');
		}else{
			$this->session->set_flashdata('error', 'Login Failed. Email/Password incorrect.');
			redirect(BASE_URL.'User/');
		}
	}
	public function logout(){
		$this->session->unset_userdata('admin');
		$this->session->set_flashdata('success', 'Logout successfully.');
		redirect(BASE_URL.'User/');
	}
}
