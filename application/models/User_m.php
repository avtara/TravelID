<?php 

class User_m extends CI_Model{
	function gets()
	{

	}

	function get()
	{
		
	}

	function add($data)
	{
		$this->db->insert("user",$data);
	}

	function edit()
	{
		
	}

	function del()
	{
		
	}
}

?>