<?php 
	/**
	* 
	*/
	class catmodel extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		public function catlist($table)
		{
			$sql="select * from $table";
			return $this->db->select($sql);
		}

		public function catid($table,$id)
		{
			$sql="select * from $table where id=:id";
			$data=array(":id"=>$id);
			return  $this->db->select($sql,$data);
		}

		public function insertcate($table,$data)
		{
			return  $this->db->insert($table,$data);
		}
		
		public function updatecate($table,$data,$id)
		{
			return  $this->db->update($table,$data,$id);
		}
		public  function delcate($table,$id)
		{
			return  $this->db->delete($table,$id);
		}
}
 ?>