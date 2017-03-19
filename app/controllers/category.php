<?php 
	/**
	 * summary
	 */
	class admin extends controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function addCategory()
	    {
	    	$data=array();
			$table="category";
			$cat=$this->load->model("catmodel");
			$data['cat']=$cat->catlist($table);
	    	$this->load->view("admin/modules/header");
	    	$this->load->view("admin/category/add",$data);
	    	$this->load->view("admin/modules/footer");
	    }

	}
?>