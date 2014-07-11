<?php
	
class Order_Model extends CI_Model{
	public function select_order()
    {
		$query = $this->db->query("SELECT *
FROM order ");
		return $query->result();
	}
	}

?>