<?php 
	/**
	 * summary
	 */
	class Database extends PDO
	{
	    /**
	     * summary
	     */
	    public function __construct($dns,$user,$pass)
	    {
	       
	       			 parent::__construct($dns,$user,$pass);
	    }

		public function select($sql,$data=array(),$fetchStyle=PDO::FETCH_ASSOC)
		{
					$stmt=$this->prepare($sql);
					foreach ($data as $key => $value) {
						$stmt->bindParam($key,$value,PDO::PARAM_INT);
					}
					$stmt->execute();
					return $stmt->fetchAll($fetchStyle);
		}

		public function insert($table,$data)
		{
			
					 $fields=array_keys($data);
		   			 $values=array_values($data);
		   			 $fieldlist=implode(',', $fields); 
		   			 $qs=str_repeat("?,",count($fields)-1);

		   			 $sql="INSERT INTO `".$table."` (".$fieldlist.") VALUES (${qs}?)";

		   			 $q = $this->prepare($sql);
		    		return $q->execute($values);
		}

		function update($table,$array,$id) 
		{
					$fields     =array_keys($array);
					$values     =array_values($array);
					$fieldlist  =implode(',', $fields); 
					$qs         =str_repeat("?,",count($fields)-1);
					$firstfield = true;
					
					$sql        = "UPDATE `".$table."` SET";
					for ($i     = 0; $i < count($fields); $i++) {
					if(!$firstfield) {
					$sql        .= ", ";   
					}
					$sql        .= " ".$fields[$i]."=?";
					$firstfield = false;
					}
					$sql        .= " WHERE `id` =?";
					
					$sth        = $this->prepare($sql);
					$values[]   = $id;
					return $sth->execute($values);
		}
		public  function delete($table,$id,$limit=1)
					{
						$sql="DELETE FROM $table WHERE id=$id LIMIT $limit";

						return $this->exec($sql);
						
					}


		public function checkUser($sql,$name,$pass)
		{
			$stmt=$this->prepare($sql);
			$stmt->execute(array($name,$pass));
			return $stmt->rowCount();
		}

		public function selectUser($sql,$name,$pass)
		{
			$stmt=$this->prepare($sql);
			$stmt->execute(array($name,$pass));
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}
 ?>