<?php
if ( ! defined('BASEPATH')) 
	exit('No direct script access allowed');

class Super_Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('super_admin_model','sa_model',true);
		$this->load->model('order_model','o_model',true);
	}
	public function index()
	{
		$data[]=array();
		$data['title']='Admin Home';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/admin_home_message','',true);
		$this->load->view('admin/admin_home',$data);	
	}
	public function home_message(){
		
		$data=array();
		$data['title']='View All';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/admin_home_message','',true);
		$this->load->view('admin/admin_home',$data);
		
		}
	public function bangla_movies_list(){
		
		$data=array();
		$data['title']='Bangla Movie List';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/admin_bangla_movies_list','',true);
		$this->load->view('admin/admin_home',$data);
		
		}
	public function hindhi_movies_list(){
		
		$data=array();
		$data['title']='Hindhi Movie List';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/admin_hindhi_movies_list','',true);
		$this->load->view('admin/admin_home',$data);
		
		}
	public function english_movies_list(){
		
		$data=array();
		$data['title']='English Movie List';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/admin_english_movies_list','',true);
		$this->load->view('admin/admin_home',$data);
		
		}	
		
			
	public function bangla_populer_movie_list(){
		
		$data=array();
		$data['title']='Bangla Populer Movies';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/bangla_populer_movies','',true);
		$this->load->view('admin/admin_home',$data);
		
		}
	public function bangla_old_movie_list(){
		
		$data=array();
		$data['title']='Bangla Old Movies';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/bangla_old_movies','',true);
		$this->load->view('admin/admin_home',$data);
		
		}	
		public function bangla_awarded_movie_list(){
		
		$data=array();
		$data['title']='Bangla Awarded Movies';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/bangla_awarded_movies','',true);
		$this->load->view('admin/admin_home',$data);
		
		}	
		public function bangla_latest_movie_list(){
		
		$data=array();
		$data['title']='Bangla Latest Movies';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/bangla_latest_movies','',true);
		$this->load->view('admin/admin_home',$data);
		
		}
		public function bangla_upcoming_movie_list(){
		
		$data=array();
		$data['title']='Bangla Upcoming Movies';
		$data['footer_area']=true;
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/bangla_upcoming_movies','',true);
		$this->load->view('admin/admin_home',$data);
		
		}	
		
		public function save_bangla_pupular_movies()
		{
			$data=array();
			$data['p_movie_name']=$this->input->post('p_movie_name',true);
			$data['viewers_rating']=$this->input->post('viewers_rating',true);	
			$data['released_date']=$this->input->post('released_date',true);
			$this->sa_model->save_bangla_populer_movies($data);	
			redirect("super_admin/save_bangla_pupular_movies_successfully");
		}	
		public function save_bangla_pupular_movies_successfully()
		{
			$data=array();
			$data['title']='Bangla Populer Movie Inserted';
			$data['footer_area']=true;
			$data['admin_maincontent']="<h2>Bangla Populer Movie Inserted!!</h2>";	
			$this->load->view('admin/admin_home',$data);
		}	
		public function view_bangla_movies(){
			
			$data=array();
			$data['title']='View Bangla Movies';
			$data['footer_area']=true;
			$data['admin_maincontent']=$this->load->view('admin/bangla_movies/view_bangla_movies','',true);
			$this->load->view('admin/admin_home',$data);
			
			}	
		
	 public function view_bangla_populer_movies()
    	{
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_bangla_populer_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_popular_movies');
        $config['per_page'] = '4';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='View Bangla Popular Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->select_bangla_populer_movie_by_movie_id();
		$data['result']=$this->sa_model->selectProduct($config['per_page'], $this->uri->segment(3));
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/view_bangla_popular_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('admin/admin_home',$data);
		
    }		
	public function delete_bangla_popular_movie($p_id)
    {	
		$data=array();
		$data['title']='Delete Bangla Popular Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->delete_bangla_popular_movie_by_movie_id($p_id);
        //redirect("admin/delete_bangla_popular_movies");
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/delete_bangla_popular_movies_successfully',$data,true);
		$this->load->view('admin/admin_home',$data);
        
    }
	public function edit_bangla_popular_movie($p_id)
	{
		$data=array();
		$data['title']='Edit Bangla Popular Movies';
		$data['footer_area']=true;
        $data['result']=$this->sa_model->select_bangla_popular_movie_by_movie_id($p_id);
        $data['admin_maincontent']=$this->load->view('admin/bangla_movies/edit_bangla_popular_movies',$data,true);
		$this->load->view('admin/admin_home',$data);
	}
	public function update_bangla_popular_movies()
	{
		$p_id=$this->input->post('p_id',true);
        $data['p_movie_name']=$this->input->post('p_movie_name',true);
        $data['viewers_rating']=$this->input->post('viewers_rating',true);
        $data['released_date']=$this->input->post('released_date',true);
        $this->sa_model->update_bangla_popular_movie_info($data,$p_id);
        redirect("super_admin/popular_bangla_movies_updated_succesfully");
	}
	
	 public function popular_bangla_movies_updated_succesfully()
    {
        $data=array();
		$data['footer_area']=true;
        $data['admin_maincontent']="<h2>Updated Successfully !</h2>";
        $this->load->view('admin/admin_home',$data);
        
    }
	
	public function save_bangla_awarded_movies()
		{
			$data=array();
			$data['a_movie_name']=$this->input->post('a_movie_name',true);
			$data['awards_type']=$this->input->post('awards_type',true);	
			$data['year']=$this->input->post('year',true);
			$this->sa_model->save_bangla_awarded_movies($data);	
			redirect("super_admin/save_bangla_awarded_movies_successfully");
		}
	public function save_bangla_awarded_movies_successfully()
		{
			$data=array();
			$data['title']='Bangla Awarded Movie Inserted';
			$data['footer_area']=true;
			$data['admin_maincontent']="<h2>Bangla Awarded Movie Inserted!!</h2>";	
			$this->load->view('admin/admin_home',$data);
		}
		
	
	 public function view_bangla_awarded_movies()
    	
		{
		
		$data=array();
		 $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_bangla_awarded_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_awarded_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);
		
	
		$data['title']='View Bangla Awarded Movies';
		$data['result']=$this->sa_model->select_bangla_awarded_movie_by_movie_id();
		$data['result']=$this->sa_model->selectProduct_($config['per_page'], $this->uri->segment(3));
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/view_bangla_awarded_movies',$data,true);
		$this->load->view('admin/admin_home',$data);
		
    }

	public function delete_bangla_awarded_movie($am_id)
    {	
		$data=array();
		$data['title']='Delete Bangla Awarded Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->delete_bangla_awarded_movie_by_movie_id($am_id);
        //redirect("admin/delete_bangla_popular_movies");
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/delete_bangla_awarded_movies_successfully',$data,true);
		$this->load->view('admin/admin_home',$data);
        
    }
	
	public function edit_bangla_awarded_movie($am_id)
	{
		$data=array();
		$data['title']='Edit Bangla Awarded Movies';
		$data['footer_area']=true;
        $data['result']=$this->sa_model->select_bangla_awarded_movie_by_movie_id_($am_id);
        $data['admin_maincontent']=$this->load->view('admin/bangla_movies/edit_bangla_awarded_movies',$data,true);
		$this->load->view('admin/admin_home',$data);
	}
	
	public function update_bangla_awarded_movies()
	{
		$am_id=$this->input->post('am_id',true);
        $data['a_movie_name']=$this->input->post('a_movie_name',true);
        $data['awards_type']=$this->input->post('awards_type',true);
        $data['year']=$this->input->post('year',true);
        $this->sa_model->update_bangla_awarded_movie_info($data,$am_id);
        redirect("super_admin/awarded_bangla_movies_updated_succesfully");
	}
	 public function awarded_bangla_movies_updated_succesfully()
    {
        $data=array();
        $data['admin_maincontent']="<h2>Updated Successfully !</h2>";
        $this->load->view('admin/admin_home',$data);
        
    }
	
	public function save_bangla_latest_movies()
		{
			$data=array();
			$data['l_m_name']=$this->input->post('l_m_name',true);
			$data['director_name']=$this->input->post('director_name',true);	
			$data['released_date']=$this->input->post('released_date',true);
			$this->sa_model->save_bangla_latest_movies($data);	
			redirect("super_admin/save_bangla_latest_movies_successfully");
		}	
		public function save_bangla_latest_movies_successfully()
		{
			$data=array();
			$data['title']='Bangla Latest Movie Inserted';
			$data['footer_area']=true;
			$data['admin_maincontent']="<h2>Bangla Latest Movie Inserted!!</h2>";	
			$this->load->view('admin/admin_home',$data);
		}
		
	public function view_bangla_latest_movies()
    	{
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_bangla_latest_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_latest_released');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='View Bangla Latest Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->select_bangla_latest_movie_by_movie_id();
		$data['result']=$this->sa_model->selectProducts($config['per_page'], $this->uri->segment(3));
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/view_bangla_latest_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('admin/admin_home',$data);
		
    }	
	
	public function delete_bangla_latest_movie($l_id)
    {	
		$data=array();
		$data['title']='Delete Bangla Latest Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->delete_bangla_latest_movie_by_movie_id($l_id);
        //redirect("admin/delete_bangla_popular_movies");
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/delete_bangla_latest_movies_successfully',$data,true);
		$this->load->view('admin/admin_home',$data);
        
    }
	
	public function edit_bangla_latest_movie($l_id)
	{
		$data=array();
		$data['title']='Edit Bangla Latest Movies';
		$data['footer_area']=true;
        $data['result']=$this->sa_model->select_bangla_latest_movie_by_movie_id_($l_id);
        $data['admin_maincontent']=$this->load->view('admin/bangla_movies/edit_bangla_latest_movies',$data,true);
		$this->load->view('admin/admin_home',$data);
	}
	
	
	public function update_bangla_latest_movies()
	{
		$l_id=$this->input->post('l_id',true);
        $data['l_m_name']=$this->input->post('l_m_name',true);
        $data['director_name']=$this->input->post('director_name',true);
        $data['released_date']=$this->input->post('released_date',true);
        $this->sa_model->update_bangla_latest_movie_info($data,$l_id);
        redirect("super_admin/latest_bangla_movies_updated_succesfully");
	}
	 public function latest_bangla_movies_updated_succesfully()
    {
        $data=array();
		$data['title']='Updated Successfully';
		$data['footer_area']=true;
        $data['admin_maincontent']="<h2>Updated Successfully !</h2>";
        $this->load->view('admin/admin_home',$data);
        
    }
	public function save_bangla_old_movies()
		{
			$data=array();
			$data['b_o_movie_name']=$this->input->post('b_o_movie_name',true);
			$data['director_name']=$this->input->post('director_name',true);	
			$data['released_date']=$this->input->post('released_date',true);
			$this->sa_model->save_bangla_old_movies($data);	
			redirect("super_admin/save_bangla_old_movies_successfully");
		}
	public function save_bangla_old_movies_successfully()
		{
			$data=array();
			$data['title']='Bangla Old Movie Inserted';
			$data['footer_area']=true;
			$data['admin_maincontent']="<h2>Bangla Old Movie Inserted!!</h2>";	
			$this->load->view('admin/admin_home',$data);
		}	
	
	public function view_bangla_old_movies()
    	{
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_bangla_old_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_old_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='View Bangla Old Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->select_bangla_old_movie_by_movie_id();
		$data['result']=$this->sa_model->selectProducts_($config['per_page'], $this->uri->segment(3));
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/view_bangla_old_movies',$data,true);
		
		//print_r($data);
		//die();
		$this->load->view('admin/admin_home',$data);
		
    }	
	
	public function delete_bangla_old_movie($b_o_id)
    {	
		$data=array();
		$data['title']='Delete Bangla Old Movies';
		$data['footer_area']=true;
		$data['result']=$this->sa_model->delete_bangla_old_movie_by_movie_id($b_o_id);
        //redirect("admin/delete_bangla_popular_movies");
		$data['admin_maincontent']=$this->load->view('admin/bangla_movies/delete_bangla_old_movies_successfully',$data,true);
		$this->load->view('admin/admin_home',$data);
        
    }
	public function edit_bangla_old_movie($b_o_id)
	{
		$data=array();
		$data['title']='Edit Bangla Old Movies';
		$data['footer_area']=true;
        $data['result']=$this->sa_model->select_bangla_old_movie_by_movie_id_($b_o_id);
        $data['admin_maincontent']=$this->load->view('admin/bangla_movies/edit_bangla_old_movies',$data,true);
		$this->load->view('admin/admin_home',$data);
	}
	
	public function update_bangla_old_movies()
	{
		$b_o_id=$this->input->post('b_o_id',true);
        $data['b_o_movie_name']=$this->input->post('b_o_movie_name',true);
        $data['director_name']=$this->input->post('director_name',true);
        $data['released_date']=$this->input->post('released_date',true);
        $this->sa_model->update_bangla_old_movie_info($data,$b_o_id);
        redirect("super_admin/old_bangla_movies_updated_succesfully");
	}
	 public function old_bangla_movies_updated_succesfully()
    {
        $data=array();
		$data['title']='Updated Successfully';
		$data['footer_area']=true;
        $data['admin_maincontent']="<h2>Updated Successfully !</h2>";
        $this->load->view('admin/admin_home',$data);
        
    }
	public function bar_chart()
	{
		$data[]=array();
		$data['title']='Report';
		$data['footer_area']=true;
		$data['jan']='500';
		$data['feb']='1600';
		$data['mar']='2700';
		$data['app']='800';
		$data['admin_maincontent']=$this->load->view('admin/report/VerticalBarChart',$data,true);
		$this->load->view('admin/admin_home',$data);	
	}
	
	public function view_hindhi_movies(){
			
			$data=array();
			$data['title']='View Hindhi Movies';
			$data['footer_area']=true;
			$data['admin_maincontent']=$this->load->view('admin/hindhi_movies/view_hindhi_movies','',true);
			$this->load->view('admin/admin_home',$data);
			
	}
	
	public function view_english_movies(){
			
			$data=array();
			$data['title']='View English Movies';
			$data['footer_area']=true;
			$data['admin_maincontent']=$this->load->view('admin/english_movies/view_english_movies','',true);
			$this->load->view('admin/admin_home',$data);
			
	}

	public function order()
	{	
		$data=array();
		$data['title']='Order List';
		$data['footer_area']=true;
		$data['results']=$this->o_model->select_order();
		$data['admin_maincontent']=$this->load->view('admin/order',$data,true);
		$this->load->view('admin/admin_home',$data);
	}
	
	
	
	
}