<?php
class View_Controller extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('view_model','v_model',true);
	}
	 public function view_bangla_populer_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'view_controller/view_bangla_populer_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_popular_movies');
        $config['per_page'] = '10';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Popular Movies';
		$data['footer_area']='true';
		$data['results']=$this->v_model->select_bangla_populer_movie_by_movie_id();
		$data['results']=$this->v_model->selectProduct($config['per_page'], $this->uri->segment(3));
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
		$data['results'] = $this->v_model->get_search_result($keyword);
		$data['maincontent']=$this->load->view('view_bangla_popular_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		
	}
	public function no_result()
	{
		$data=array();
		$data['title']='No Result Founds';
		$data['maincontent']=$this->load->view('no_results','',true);
		$this->load->view('home',$data);
	}
	
	public function view_bangla_awarded_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'view_controller/view_bangla_awarded_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_awarded_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Awarded Movies';
		$data['footer_area']='true';
		$data['results']=$this->v_model->select_bangla_awarded_movie_by_movie_id();
		$data['results']=$this->v_model->selectProduct_($config['per_page'], $this->uri->segment(3));
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
		$data['results'] = $this->v_model->get_search_result_($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_awarded_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	public function view_bangla_latest_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'view_controller/view_bangla_latest_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_latest_released');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Latest Movies';
		$data['footer_area']='true';
		$data['results']=$this->v_model->select_bangla_latest_movie_by_movie_id();
		$data['results']=$this->v_model->selectProducts($config['per_page'], $this->uri->segment(3));
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
		$data['results'] = $this->v_model->get_search_results($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_latest_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
	
	 public function view_bangla_old_movies()
    {
		$data=array();
		
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'view_controller/view_bangla_old_movies/';

        $config['total_rows'] = $this->db->count_all('bangla_old_movies');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '# ';
        $config['full_tag_close'] = ' #';
        $this->pagination->initialize($config);

        //$this->load->model("admin_model");
        //$data['products'] = $this->admin_model->selectProduct($config['per_page'], $this->uri->segment(3));

   
		
		$data['title']='Bangla Old Movies';
		$data['footer_area']='true';
		$data['results']=$this->v_model->select_bangla_old_movie_by_movie_id();
		$data['results']=$this->v_model->selectProducts_($config['per_page'], $this->uri->segment(3));
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
		$data['results'] = $this->v_model->get_search_results_($keyword);
		
		$data['maincontent']=$this->load->view('view_bangla_old_movies_sresult',$data,true);
		$this->load->view('home',$data);
		
		//echo "<pre>";
		//print_r($result);
	}
}
?>