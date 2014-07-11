<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		
	
	}
	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('home_messege','',true);
		$this->load->view('home',$data);
	}
	public function sign_up()
	{
		$data=array();
		$data['title']='Sign Up';
		$data['maincontent']=$this->load->view('sign_up','',true);
		$this->load->view('home',$data);
		
	}
	public function login()
	{
		$data=array();	
		$data['title']='Login';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('login','',true);
		$this->load->view('home',$data);
		
	}
	public function bangla_movies()
	{
		$data=array();	
		$data['title']='Bangla Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('bangla_movies','',true);
		$this->load->view('home',$data);
	}
	
	public function hindhi_movies()
	{
		$data=array();	
		$data['title']='Hindi Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('hindhi_movies','',true);
		$this->load->view('home',$data);
	}
	
	public function english_movies()
	{
		$data=array();	
		$data['title']='English Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('english_movies','',true);
		$this->load->view('home',$data);
	}
	public function free_movie()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies_list','',true);
		$this->load->view('home',$data);
	}
	
	public function free_movie_watch()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies1','',true);
		$this->load->view('home',$data);
	}
	public function free_movie_watch2()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies2','',true);
		$this->load->view('home',$data);
	}
	public function free_movie_watch3()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies3','',true);
		$this->load->view('home',$data);
	}
	public function free_movie_watch4()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies4','',true);
		$this->load->view('home',$data);
	}
	public function free_movie_watch5()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies5','',true);
		$this->load->view('home',$data);
	}
	public function free_movie_watch6()
	{
		$data=array();	
		$data['title']='Free Online Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('free_online_movies6','',true);
		$this->load->view('home',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */