<?php 
	class user extends controller{

		public function __construct()
		{
			  parent::__construct();
			  
		}
		public function add_user()
		{
			  $this->load->view("admin/modules/header");
	          $this->load->view("admin/user/add");
	          $this->load->view("admin/modules/footer");
		}
		
	}	
 ?>