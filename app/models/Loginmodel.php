<?php 
	class Loginmodel extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		 public function checkLog($table,$name,$pass)
		{
			$sql="SELECT * FROM $table WHERE name=? AND pass=?";
			return $this->db->checkUser($sql,$name,$pass);
		}

		 public function getUserdata($table,$name,$pass)
		{
			$sql="SELECT * FROM $table WHERE name=? AND pass=?";
			return $this->db->selectUser($sql,$name,$pass);
		}
	}
 ?>