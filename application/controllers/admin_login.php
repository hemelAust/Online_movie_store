<?php
if ( ! defined('BASEPATH')) 
	exit('No direct script access allowed');

class Admin_Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_login_model','al_model',true);
	}
	public function index()
	{
		$data=array();
		$data['title']='Admin Login';
		$this->load->view('admin/login',$data);	
	}
	public function check_login()
	{
		$email_address=$this->input->post('email_address',true);
		$password=$this->input->post('password',true);
		$result=$this->al_model->check_login_info($email_address,$password);
		/*echo '<pre>';
		print_r($result);
		exit();*/
		if($result)
		{
			redirect('super_admin');
		}
		else
		{
			$sdata=array();
			$sdata['exception']="<h3>Admin Email Or Password Invalid</h3>";
			$this->session->set_userdata($sdata);
			redirect('admin_login');	
		}
	}
}