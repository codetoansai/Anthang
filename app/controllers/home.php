<?php 
	/**
	* 
	*/
	class home extends controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->load->view("home/modules/header");
			$this->load->view("home/modules/slibar");
			$this->load->view("home/index");
			$this->load->view("home/modules/footer");
		}


	}
 ?>