<?php 
	/**
	* 
	*/
	class productmodel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function productlist($table)
		{
			$sql="select * from $table";
			return $this->db->select($sql);
		}

		public function productid($table,$id)
		{
			$sql="select * from $table where id=:id";
			$data=array(":id"=>$id);
			return  $this->db->select($sql,$data);
		}

		public function insertproduct($table,$data)
		{
			return  $this->db->insert($table,$data);
		}
		
		public function updateproduct($table,$data,$id)
		{
			return  $this->db->update($table,$data,$id);
		}
		public  function delproduct($table,$id)
		{
			return  $this->db->delete($table,$id);
		}
	}


 ?>