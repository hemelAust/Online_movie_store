<?php
	
class User_Login_Model extends CI_Model{
	
	public function  save_members_info($data)
	{
		$this->db->insert('members',$data);
	}
	
	public function check_login_info($email_address,$password)
	{
		$this->db->select('*');
		$this->db->from('members');
		$this->db->where('email_address',$email_address);
		$this->db->where('password',md5($password));
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;
		
	}
	
	public function select_user_by_email_address($email_address)
		{
			$this->db->select('*');
			$this->db->from('members');
			$this->db->where('email_address',$email_address);
			$query_result=$this->db->get();
			$result=$query_result->row();
			return $result;
		}
	
	
	}
?>