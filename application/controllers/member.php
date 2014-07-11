<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');
session_start();
class Member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model','m_model',true);
		$m_id=$this->session->userdata('m_id');
		if($m_id==NULL)
		{
			redirect("welcome/login","refresh");	
		}
	}
	public function index()
	{
		$data=array();
		$data['title']=$this->session->userdata('full_name');
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('after_login/welcome','',true);
		$this->load->view('home',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('m_id');	
		/*$this->session->unset_userdata('full_name');	
		$this->session->unset_userdata('login_status');	*/
		session_destroy();
        $data['exception']="You are Successfully Logged Out";
        $this->session->set_userdata($data);
        redirect("welcome/login","refresh");
		
	}
	public function bangla_movies()
	{
		$data=array();	
		$data['title']='Bangla Movies';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('bangla_movies','',true);
		$this->load->view('home',$data);
	}
	 public function view_bangla_populer_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'member/view_bangla_populer_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_popular_movies');
        $config['per_page'] = '10';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Popular Movies';
		$data['footer_area']='true';
		$data['results']=$this->m_model->select_bangla_populer_movie_by_movie_id();
		$data['results']=$this->m_model->selectProduct($config['per_page'], $this->uri->segment(3));
		$data['maincontent']=$this->load->view('view_bangla_popular_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('home',$data);
		
    }
	public function search_result()
    { 
		$data=array();
		$data['title']='Search Result For Bangla Popular Movies';
		$keyword = $this->input->post('keyword', true);
		$data['results'] = $this->m_model->get_search_result($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_popular_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	public function shipping_address()
	{
		$data=array();	
		$data['title']='Shipping Address';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('shipping_address','',true);
		$this->load->view('home',$data);
		
	}
	public function save_order_info()
	{
		$data=array();
		$data['m_id']=$this->session->userdata('m_id',true);
		$data['first_name']=$this->input->post('first_name',true);
		$data['last_name']=$this->input->post('last_name',true);
		$data['email_address']=$this->input->post('email_address',true);
		$data['phone_no']=$this->input->post('phone_no',true);
		$data['address']=$this->input->post('address',true);
		$data['country']=$this->input->post('country',true);
		$data['payment_method']=$payment_method=$this->input->post('payment_method');
		
		/*$this->m_model->save_order_info($data);
		redirect('member/order_confirmed_successfully');*/
		if($payment_method=='cash_on_delevery'){
			$this->m_model->save_order_info($data);
		redirect('member/order_confirmed_successfully');
			
			}
		if($payment_method=='paypal')
		{
			redirect('member/use_cash_on_delevery');
		}	
			
		
	}
	public function use_cash_on_delevery()
	{
		$data=array();
		$data['title']='Order Is Not Confirmed';
		$data['footer_area']='true';
		$data['maincontent']=$this->load->view('after_login/use_cash_on_delevery','',true);
		$this->load->view('home',$data);
	}
	
 	
	public function  order_confirmed_successfully()
	{
		$data=array();
		$data['title']='Confirm Order';
		$data['footer_area']='true';
		$data['maincontent']="Your Order Is Confirmed Successfully And We Will Provide Your Movie soon";
		$this->load->view('home',$data);
		
	}	
	
	 public function view_bangla_awarded_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'member/view_bangla_awarded_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_awarded_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Awarded Movies';
		$data['footer_area']='true';
		$data['results']=$this->m_model->select_bangla_awarded_movie_by_movie_id();
		$data['results']=$this->m_model->selectProduct_($config['per_page'], $this->uri->segment(3));
		$data['maincontent']=$this->load->view('view_bangla_awarded_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('home',$data);
		
    }
	public function search_result_()
    { 
		$data=array();
		$data['title']='Search Result For Bangla Awarded Movies';
		$keyword = $this->input->post('keyword', true);
		$data['results'] = $this->m_model->get_search_result_($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_popular_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	
	 public function view_bangla_latest_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'member/view_bangla_latest_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_latest_released');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Latest Movies';
		$data['footer_area']='true';
		$data['results']=$this->m_model->select_bangla_latest_movie_by_movie_id();
		$data['results']=$this->m_model->selectProducts($config['per_page'], $this->uri->segment(3));
		$data['maincontent']=$this->load->view('view_bangla_latest_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('home',$data);
		
    }
	public function search_results()
    { 
		$data=array();
		$data['title']='Search Result For Bangla Latest Movies';
		$keyword = $this->input->post('keyword', true);
		$data['results'] = $this->m_model->get_search_results($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_latest_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	
	 public function view_bangla_old_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'member/view_bangla_old_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_old_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Old Movies';
		$data['footer_area']='true';
		$data['results']=$this->m_model->select_bangla_old_movie_by_movie_id();
		$data['results']=$this->m_model->selectProducts_($config['per_page'], $this->uri->segment(3));
		$data['maincontent']=$this->load->view('view_bangla_old_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('home',$data);
		
    }
	public function search_results_()
    { 
		$data=array();
		$data['title']='Search Result For Bangla Old Movies';
		$keyword = $this->input->post('keyword', true);
		$data['results'] = $this->m_model->get_search_results_($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_old_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	
	public function hindhi_movies()
	{
		$data=array();	
		$data['title']='Hindhi Movies';
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

}
?>