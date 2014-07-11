<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class User_Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_login_model','ul_model',true);
		$m_id=$this->session->userdata('m_id');
		if($m_id!=NULL)
		{
			redirect("member","refresh");	
		}
		
	}
	
	public function save_member_info()
	{
		$data=array();
		$data['first_name']=$this->input->post('first_name',true);
		$data['last_name']=$this->input->post('last_name',true);
		$data['email_address']=$this->input->post('email_address',true);
		$data['password']=$this->input->post('password',true);
		$data['password']=  md5($data['password']);
		$data['confirm_password']=$this->input->post('confirm_password',true);
		$data['confirm_password']=  md5($data['confirm_password']);
		$data['dob']=$this->input->post('dob',true);
		$data['address']=$this->input->post('address',true);
		$data['gender']=$this->input->post('gender',true);	
		$result=$this->ul_model->select_user_by_email_address($data['email_address']);
		
		if($result){
		$data=array();
		$data['message']="User Already Registered,Please Enter a Valid Email Address!!";
		$this->session->set_userdata($data);
		redirect('welcome/sign_up');
		}
		else{
			
		$this->ul_model->save_members_info($data);
		redirect('user_login/save_member_info_successfully');
		}
		
	}
	public function save_member_info_successfully()
	{
		$data=array();
		$data['title']='Save Member Info Successfully';
		$data['footer_area']='true';
		$data['maincontent']="<h2>Save Member Info Successfully Now You Can Login & Buy Your Movies!!</h2>";
		$this->load->view('home',$data);
		
	}	
	 public function check_login()
    {
        $email_address=$this->input->post('email_address',true);
        $password=$this->input->post('password',true);
        $result=$this->ul_model->check_login_info($email_address,$password);
       	/*echo '<pre>';
        print_r($result);
        exit();*/
        $data=array();
        if($result)
        {
        	$data['full_name']=$result->first_name.' '.$result->last_name;
			$data['m_id']=$result->m_id;
			$data['login_status']=true;
			$this->session->set_userdata($data);
			redirect("member","refresh");
			
      
            
        }
        else{
            
            $data['exception']="User Email Or Password Invalide !";
            $this->session->set_userdata($data);
            redirect("welcome/login");
        }
        
    }
	
}


?>