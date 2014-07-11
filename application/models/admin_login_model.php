<?php
	
class Admin_Login_Model extends CI_Model{
	
	public function check_login_info($email_address,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email_address',$email_address);
		$this->db->where('password',md5($password));
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;
		
	}
	
	
	}

?>