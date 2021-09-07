<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Records extends Admin_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['small_title'] = 'Contat Records';
		$data['contact_records'] = array();
		$this->template->load_admin('contact_records/list' , $data);
	}
	public function add(){
		if(!$this->input->post()){
			$data['small_title'] = "Add Contact Record";
			$this->template->load_admin("contact_records/add" , $data);
		}else{
			echo 'form is submitted put code.';
		}
	}
}
