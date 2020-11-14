<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	var $ci;
	function __construct(){
		$this->ci =& get_instance();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function load_admin($view , $data = NULL){

		$data['main_content'] = $this->ci->load->view('admin/'.$view , $data , TRUE);
		$data['page_title'] = 'Inventory';
		$data['site_title'] = 'Inventory';
		$this->ci->parser->parse('admin/template' , $data);
	}
}
