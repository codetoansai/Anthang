<?php 
/**
* 
*/
class Model
{
	protected $db=array();

	function __construct()
	{
			$dns='mysql:dbname=shopAnThang;host=localhost';
	        $user='root';
	        $pass='';
			$this->db=new Database($dns,$user,$pass);
	}

}


 ?>