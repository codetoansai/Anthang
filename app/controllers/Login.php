<?php 
	class Login extends controller
	{
		 public function __construct()
	    {
	        parent::__construct();
	      
	    }
	    public function Index()
	    {
	    	$this->getLogin();
	    }
	    public function getLogin()
	    {	
	    	 Session::init();
	    	 if(Session::get("login")==true){
	    	 	 header("Location:".BASE_URL."admin");
	    	 }
	    	 else{
	    	 	 $this->load->view("login/index");
	    	 }
	    	
	    }

	     public function postLogin()
	    {	
	    	 $table='user';
	    	 $name=$_POST['txtname'];
	    	 $pass=$_POST['txtpass'];
	    	 $loginmodel=$this->load->model('Loginmodel');
	    	 $count=$loginmodel->checkLog($table,$name,$pass);
	    	 if ($count>0) {
	    	 	 $result=$loginmodel->getUserdata($table,$name,$pass);
	    	 	 Session::init();
	    	 	 Session::set("login",true);
	    	 	 Session::set("username",$result[0]['name']);
	    	 	 header("Location:".BASE_URL."admin");

	    	 } else {
	    	 	header("Location:".BASE_URL."Login");
	    	 }
	    	 
	    }

	    public function logout()
	    {
	    	Session::init();
	    	Session::destroy();
	    	header("Location:".BASE_URL."Login");

	    }

	}

 ?>