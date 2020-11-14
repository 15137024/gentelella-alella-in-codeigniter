<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['site_title'] = "Inventory Management";
		$this->load->view('login/login' , $data);
	}
}
