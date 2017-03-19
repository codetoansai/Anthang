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
	       Session::checkSession();
	    }
	    public function Index()
	    {
	    	$this->admin();
	    }
	    public function admin()
	    {		
	    	 $this->load->view("admin/modules/header");
	    	 $this->load->view("admin/index");
	    	 $this->load->view("admin/modules/footer");
	    }


	    // hiện ra form thêm catgory
	    public function getAddCategory()
	    {
	    	$data=array();
			$table="category";
			$cat=$this->load->model("catmodel");
			$data['cat']=$cat->catlist($table);
	    	$this->load->view("admin/modules/header");
	    	 $this->load->view("admin/category/add",$data);
	    	 $this->load->view("admin/modules/footer");
	    }


	    // thêm 1 category
	    public function postAddCategory()
	    {
	    	$table="category";
	    	$name=$_POST['txtname'];
	    	$slug=functions::slug($name,'-');
	    	$parent=$_POST['parent'];
	    	if ($name=="") {
	    		$erro="Bạn chưa nhập tên";
	    		echo $erro;
	    	} else {
	    		$data=array(
				'name'=>$name,
				'slug'=>$slug,
				'parent_id'=>$parent,
				);
			$cat=$this->load->model("catmodel");
			$result=$cat->insertcate($table,$data);
	

			if ($result==1) {
					$erro="Thêm thành công";
					echo $erro;
				}
			else{
					$erro="không thành công";
					echo $erro;
				}
	    	}
	    	

	    }

	    //hiện ta table danh sách catgory
	    //
	      public function listCategory()
	    {	 
	    	 $data=array();
			 $table="category";
			 $cat=$this->load->model("catmodel");
			 $data['cat']=$cat->catlist($table);
	    	 $this->load->view("admin/modules/header");
	    	 $this->load->view("admin/category/list",$data);
	    	 $this->load->view("admin/modules/footer");
	    }


	    public function geteditcategory($id)
	    {
	    	 $data=array();
			 $table="category";
			 $cat=$this->load->model("catmodel");
			 $data['cat']=$cat->catid($table,$id);
			 $data['catlist']=$cat->catlist($table);
	    	 $this->load->view("admin/modules/header");
	    	 $this->load->view("admin/category/edit",$data);
	    	 $this->load->view("admin/modules/footer");
	    }


	    public function posteditcategory($id)
	    {
	    	$table="category";
	    	$name=$_POST['txtname'];
	    	$slug=functions::slug($name,'-');
	    	$parent=$_POST['parent'];
	    	if ($name=="") {
	    		$erro="Bạn chưa nhập tên";
	    		echo $erro;
	    	} else {
	    		$data=array(
				'name'=>$name,
				'slug'=>$slug,
				'parent_id'=>$parent,
				);
			$cat=$this->load->model("catmodel");
			$result=$cat->updatecate($table,$data,$id);
	

			if ($result==1) {
					$erro="Sửa thành công";
					echo $erro;
				}
			else{
					$erro="Sửa không thành công";
					echo $erro;
				}
	    	}
	    	
	    }

	    	public function delcategory($id)
		{
				$table="category";
				$cat=$this->load->model("catmodel");
				$cat->delcate($table,$id);
				$this->listCategory();
		}


		// làm việc với product
		
		public function getAddProduct()
		{
			
				$data=array();
				$table="category";
				$cat=$this->load->model("catmodel");
				$data['cat']=$cat->catlist($table);
		    	$this->load->view("admin/modules/header");
		    	 $this->load->view("admin/products/add",$data);
		    	 $this->load->view("admin/modules/footer");
		}


		public function postAddProduct()
		{
				$mdata=array();
				$table="Product";
				$name=$_POST['txtname'];
				$loaisp=$_POST['parent'];
				$trangthai=$_POST['txttrangthai'];
				$soluong=$_POST['txtsl'];
				$gia=$_POST['txtgia'];
				$tenanh= $_FILES["image1"]["name"];
				$tenanhbig=$_FILES["image2"]["name"];
				
				if($name==""||$trangthai==""||$soluong==""||$gia==""||$tenanh==""||$tenanhbig==""){
				$mdata['msg']="Bạn cần nhập đầy đủ thông tin";
	    		
				}
				else{

				$time=date("Ymdhis");
				$tenanh=$time . $tenanh;
				$dich="uploads/" . $tenanh;
				copy($_FILES['image1']['tmp_name'],$dich);
				

				$tenanhbig=$time . $tenanhbig;
				$dich1="uploads/" . $tenanhbig;
				copy($_FILES['image2']['tmp_name'],$dich1);
				
				$data=array(
					'tensp'=>$name,
					'loaisp'=>$loaisp,
					'trangthai'=>$trangthai,
					'soluong'=>$soluong,
					'gia'=>$gia,
					'image'=>$dich,
					'image1'=>$dich1
					);
				$product=$this->load->model("productmodel");
				$result=$product->insertproduct($table,$data);
				if ($result==1) {
						$mdata['msg']="Thêm thành công";
						
					}
				else{
						$mdata['msg']="không thành công";
						
					}
		    	}
		    	header("Location:getListProduct");

				}


				public function getListProduct()
				{
					 $data=array();
					 $table="Product";
					 $pro=$this->load->model("productmodel");
					 $data['pro']=$pro->productlist($table);
			    	 $this->load->view("admin/modules/header");
			    	 $this->load->view("admin/products/list",$data);
			    	 $this->load->view("admin/modules/footer");
							
				}


			public function getEditProduct($id)
			{
					 $data=array();
			    	 $table="product";
					 $table1="category";
					 $pro=$this->load->model("productmodel");
					 $cat=$this->load->model("catmodel");

					 $data['pro']=$pro->productid($table,$id);
					 $data['catlist']=$cat->catlist($table1);
			    	 $this->load->view("admin/modules/header");
			    	 $this->load->view("admin/products/edit",$data);
			    	 $this->load->view("admin/modules/footer");
				
			}


			public function postEditProduct($id)
			{
				
				$mdata=array();
				$table="product";
				$name=$_POST['txtname'];
				$loaisp=$_POST['parent'];
				$trangthai=$_POST['txttrangthai'];
				$soluong=$_POST['txtsl'];
				$gia=$_POST['txtgia'];
				$tenanh= $_FILES["image1"]["name"];
				$tenanhbig=$_FILES["image2"]["name"];
				
				if($tenanh!="" && $tenanhbig !=""){

				$time=date("Ymdhis");
				$tenanh=$time . $tenanh;
				$dich="uploads/" . $tenanh;
				copy($_FILES['image1']['tmp_name'],$dich);
				

				$tenanhbig=$time . $tenanhbig;
				$dich1="uploads/" . $tenanhbig;
				copy($_FILES['image2']['tmp_name'],$dich1);
				

				$data=array(
					'tensp'=>$name,
					'loaisp'=>$loaisp,
					'trangthai'=>$trangthai,
					'soluong'=>$soluong,
					'gia'=>$gia,
					'image'=>$dich,
					'image1'=>$dich1
					);
				$product=$this->load->model("productmodel");
				$result=$product->updateproduct($table,$data,$id);
					header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
				}
				elseif($tenanh=="" && $tenanhbig =="") {
					$data=array(
					'tensp'=>$name,
					'loaisp'=>$loaisp,
					'trangthai'=>$trangthai,
					'soluong'=>$soluong,
					'gia'=>$gia,
					);
				$product=$this->load->model("productmodel");
				$result=$product->updateproduct($table,$data,$id);
					header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
				}
				elseif($tenanh=="" || $tenanhbig==""){

					if($tenanh==""){
						$time=date("Ymdhis");
						$tenanhbig=$time . $tenanhbig;
						$dich1="uploads/" . $tenanhbig;
						copy($_FILES['image2']['tmp_name'],$dich1);
						

						$data=array(
							'tensp'=>$name,
							'loaisp'=>$loaisp,
							'trangthai'=>$trangthai,
							'soluong'=>$soluong,
							'gia'=>$gia,
							'image1'=>$dich1
							);
						$product=$this->load->model("productmodel");
						$result=$product->updateproduct($table,$data,$id);
						header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
					}
					if($tenanhbig==""){
						$time=date("Ymdhis");
						$tenanh=$time . $tenanh;
						$dich="uploads/" . $tenanh;
						copy($_FILES['image1']['tmp_name'],$dich);
						$data=array(
						'tensp'=>$name,
						'loaisp'=>$loaisp,
						'trangthai'=>$trangthai,
						'soluong'=>$soluong,
						'gia'=>$gia,
						'image'=>$dich,
					
						);
						$product=$this->load->model("productmodel");
						$result=$product->updateproduct($table,$data,$id);
						header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
				}

				}
				else{
					header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
				}
				
				
			}

			public function delProduct($id)
			{
				$table="product";
				$pro=$this->load->model("productmodel");
				$pro->delproduct($table,$id);
				header("Location:http://localhost:7070/AnThangShop/admin/getListProduct");
			}
	 //    public  function index()
	 //    {
	 //    	$this->load->view("admin/products/add");
	 //    }
	 //    public function addproduct()
		// {

		// 	$table="cate";
		// 	$name=$_POST['txt_name'];
		// 	$title=$_POST['txt_title'];

		// 	$data=array(
		// 		'name'=>$name,
		// 		'title'=>$title
		// 		);
		// 	$cat=$this->load->model("catmodel");
		// 	$result=$cat->insertcate($table,$data);
		// 	$mdata=array();

		// 	if ($result==1) {
		// 			$mdata['msg']="Thêm thành công";
		// 		}
		// 	else{
		// 			$mdata['msg']="không thành công";
		// 		}
		// 	$this->load->view("admin/products/add",$mdata);
		// }


		// public function getupdate()
		// {
			
		// 	$table="cate";
		// 	$id=15;
		// 	$cat=$this->load->model("catmodel");
		// 	$data=array();
		// 	$data['catid']=$cat->catid($table,$id);

		// 	$this->load->view("admin/products/edit",$data);

		// }
		//  public function updateproduct()
		// {		$table="cate";

		// 		$id=$_POST['txt_id'];
		// 		$name=$_POST['txt_name'];
		// 		$title=$_POST['txt_title'];
		// 		$data=array(
		// 		'name'=> $name,
		// 		'title'=> $title
		// 		);
		// 		$cat=$this->load->model("catmodel");
		// 		$cat->updatecate($table,$data,$id);
		// }

		// public function delproduct()
		// {
		// 		$table="cate";
		// 		$id="id=19";
		// 		$cat=$this->load->model("catmodel");
		// 		$cat->delcate($table,$id);
		// }
	}

 ?>