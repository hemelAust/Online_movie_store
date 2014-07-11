<?php
	
class Super_Admin_Model extends CI_Model{
		
	public function save_bangla_populer_movies($data){
		
			$this->db->insert('bangla_popular_movies',$data);
	}
			
	 public function selectProduct($per_page, $offset) {
       
	    $this->db->select('*');
        $this->db->from('bangla_popular_movies');  
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }	
	public function select_bangla_populer_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM  bangla_popular_movies');
		return $query->result();
    }
		
    public function delete_bangla_popular_movie_by_movie_id($p_id)
    { 	
        $this->db->where('p_id',$p_id);
        $this->db->delete('bangla_popular_movies'); 
    }
	public function select_bangla_popular_movie_by_movie_id($p_id)
	{
		$this->db->select('*');
        $this->db->from('bangla_popular_movies');
        $this->db->where('p_id',$p_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
	}
	public function update_bangla_popular_movie_info($data,$p_id)
	{
		 $this->db->where('p_id',$p_id);
        $this->db->update('bangla_popular_movies',$data);
	}
	
	public function save_bangla_awarded_movies($data){
			
			$this->db->insert('bangla_awarded_movies',$data);
	}
	
	public function select_bangla_awarded_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM   bangla_awarded_movies');
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
	
	 public function delete_bangla_awarded_movie_by_movie_id($am_id)
    { 	
        $this->db->where('am_id',$am_id);
        $this->db->delete('bangla_awarded_movies'); 
    }
	
	public function select_bangla_awarded_movie_by_movie_id_($am_id)
	{
		$this->db->select('*');
        $this->db->from('bangla_awarded_movies');
        $this->db->where('am_id',$am_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
	}
	
	public function update_bangla_awarded_movie_info($data,$am_id)
	{
		 $this->db->where('am_id',$am_id);
        $this->db->update('bangla_awarded_movies',$data);
	}
	
	public function save_bangla_latest_movies($data){
			
			$this->db->insert('bangla_latest_released',$data);
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
	
	 public function delete_bangla_latest_movie_by_movie_id($l_id)
    { 	
        $this->db->where('l_id',$l_id);
        $this->db->delete('bangla_latest_released'); 
    }
	
	public function select_bangla_latest_movie_by_movie_id_($l_id)
	{
		$this->db->select('*');
        $this->db->from('bangla_latest_released');
        $this->db->where('l_id',$l_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
	}
	public function update_bangla_latest_movie_info($data,$l_id)
	{
		 $this->db->where('l_id',$l_id);
        $this->db->update('bangla_latest_released',$data);
	}
	public function save_bangla_old_movies($data){
			
			$this->db->insert('bangla_old_movies',$data);
	}
	
	public function select_bangla_old_movie_by_movie_id()
    {
		$query = $this->db->query('SELECT * FROM  bangla_old_movies');
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
	 public function delete_bangla_old_movie_by_movie_id($b_o_id)
    { 	
        $this->db->where('b_o_id',$b_o_id);
        $this->db->delete('bangla_old_movies'); 
    }
	
	public function select_bangla_old_movie_by_movie_id_($b_o_id)
	{
		$this->db->select('*');
        $this->db->from('bangla_old_movies');
        $this->db->where('b_o_id',$b_o_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
	}
	
	public function update_bangla_old_movie_info($data,$b_o_id)
	{
		 $this->db->where('b_o_id',$b_o_id);
        $this->db->update('bangla_old_movies',$data);
	}
	
	
		
}
?>