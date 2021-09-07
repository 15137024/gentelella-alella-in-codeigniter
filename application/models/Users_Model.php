<?php   

class Users_Model extends CI_Model
{


	function __construct(){
		parent::__construct();
	}
	public function login($username , $password){

		$this->db->group_start();
			$this->db->where("username" , $username);
			$this->db->or_where("email" , $username);
		$this->db->group_end();
		$this->db->where("password" , $password);
		$query = $this->db->get("users");
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return FALSE;
		}
	}

}