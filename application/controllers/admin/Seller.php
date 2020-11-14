<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends Admin_Controller {

	function __construct(){
		parent::__construct();
	}

	public function add(){
		$data['small_title'] = "Add Seller";
		$this->template->load_admin("sellers/add" , $data);
	}
}
