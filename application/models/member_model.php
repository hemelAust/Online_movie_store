<?php
class Member_Model extends CI_Model {
	 public function select_bangla_populer_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM  bangla_popular_movies');
		return $query->result();
    }
	 public function selectProduct($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('bangla_popular_movies');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
	public function get_search_result($keyword)
	{
		
	  $query = $this->db->query('SELECT * FROM  bangla_popular_movies WHERE p_movie_name LIKE "%'.$keyword.'%"');
	  return $query->result();
	}
	public function  save_order_info($data)
	{
		$this->db->insert('order',$data);
	}
	
	 public function select_bangla_awarded_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM  bangla_awarded_movies');
		return $query->result();
    }
	
	 public function selectProduct_($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('bangla_awarded_movies');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
	
	public function get_search_result_($keyword)
	{
		
	  $query = $this->db->query('SELECT * FROM  bangla_awarded_movies WHERE a_movie_name LIKE "%'.$keyword.'%"');
	  return $query->result();
	}
	
	 public function select_bangla_latest_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM   bangla_latest_released');
		return $query->result();
    }
	
	 public function selectProducts($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('bangla_latest_released');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
	
	public function get_search_results($keyword)
	{
		
	  $query = $this->db->query('SELECT * FROM   bangla_latest_released WHERE l_m_name LIKE "%'.$keyword.'%"');
	  return $query->result();
	}
	
	 public function select_bangla_old_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM   bangla_old_movies');
		return $query->result();
    }
	
	 public function selectProducts_($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('bangla_old_movies');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
	
	public function get_search_results_($keyword)
	{
		
	  $query = $this->db->query('SELECT * FROM    bangla_old_movies  WHERE b_o_movie_name LIKE "%'.$keyword.'%"');
	  return $query->result();
	}
}
?>