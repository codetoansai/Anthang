<?php 
/**
* 
*/
class Load
{
	
	public function __construct()
	{
		
	}
	public function view($filename,$data=false)
	{
		if ($data==true) {
			extract($data);
		}
		require_once 'app/views/'.$filename.'.php';
	}
	public function model($modelname)
	{
		require_once 'app/models/'.$modelname.'.php';
		return new $modelname();
	}
}

 ?>