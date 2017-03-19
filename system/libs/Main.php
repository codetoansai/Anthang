<?php 
	class Main{

			protected $controller="home";
			protected $method="index";
			protected $param=[];
			protected $path="app/controllers/";
			public function __construct()
			{
				$url=$this->parse_Url();
				// print_r($url);
				//kiểm tra xem file controller có tồn tại không ,nếu không tồn tại trả về controller mặc định
				if(file_exists($this->path.$url[0].'.php')){
					$this->controller=$url[0];
					unset($url[0]);
				}
				require_once $this->path.$this->controller.'.php';

				//kiêm tra xem trong controller có tồn tại method đó không
				//đây là tham sô thứ 2 truyền trên url
				 $this->controller=new $this->controller;
				 if(isset($url[1])){
				 	if(method_exists($this->controller,$url[1])){
				 		$this->method=$url[1];
				 		unset($url[1]);
				 	}

				 }
				 	$this->param=$url?array_values($url):[];
				 call_user_func_array([$this->controller,$this->method],$this->param);
			}
			public function parse_Url()
			{
				if(isset($_GET['url'])){
					//chuyển url về dạng mảng thep thứ tự:controller/method/param
					return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
				}
			}




	
		// public function __construct()
		// {
		// 	$url=isset($_GET['url']) ? $_GET['url']:null;
		// 	if($url!=null){
		// 		$url=rtrim($url,"/");
		// 		$url=explode("/",filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		// 	}
		// 	else{
		// 		unset($url);
		// 	}

		// 	// print_r($url);
		// 	if(isset($url[0])){
		// 		require_once 'app/controllers/'.$url[0].'.php';
		// 		$controller=new $url[0]();
		// 		if(isset($url[2])){
		// 			$controller->$url[1]($url[2]);
		// 		}
		// 		else{
		// 			if (isset($url[1])) {
		// 				$controller->$url[1]();
		// 			}
		// 		}
		// 	}
		// 	else{
		// 			require_once 'app/controllers/home.php';
		// 			$controller=new home();
		// 			$controller->index();
		// 	}

		// }

	}

 ?>