<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="../public/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../public/bootstrap/bootstrap.min.css">
   <script src="../public/js/jquery.js"></script>
   <script src="public/js/jquery.js"></script>
   <script src="../../public/js/jquery.js"></script>
   <script src="../public/js/myjquery.js"></script>
   <script src="public/js/myjquery.js"></script>
</head>
<body>
	<header class="container-fluid top">
		<div class="container">
			
		</div>
	</header>
	<!-- menu -->
	 <nav class="navbar navbar-inverse">
	 		<div class="container">
                    <div class="navbar-header">
                        <a href="" class="navbar-brand">AnThang</a>
                    </div>
 
                    <div class="navbar-collapse collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo BASE_URL ?>admin">Trang chủ</a></li>
                            <li><a href="<?php echo BASE_URL ?>admin/listcategory">Danh mục</a></li>
                            <li><a href="<?php echo BASE_URL ?>admin/getListProduct">Sản phẩm</a></li>
                            <li><a href="">Thống kê</a></li> 
                        </ul>
                           <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Xin chào <?php echo Session::get('username') ?></a></li>
                            <li><a href="<?php echo BASE_URL;?>Login/logout">Logout</a></li>
                        </ul>
                    </div>
            </div>
      </nav>
      <section>
      	
