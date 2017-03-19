<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="table-responsive">
  		<table class="table table-bordered display" width="600px" id="table_id" data-page-length='5'>
  		<caption><h3>List Category</h3></caption>
  		<thead>
		<tr>
			<td>STT</td>
			<td>TênSP</td>
			<td>Trạng thái</td>
			<td>Số lượng</td>
			<td>Giá</td>
			<td>Ảnh 1</td>
			<td>Ảnh 2</td>
			<td>Action</td>
		</tr>
		</thead>
		<?php 
		$i=1;
		foreach ($pro as $value) {	
		 ?>
		 <tbody>
		 	<tr>
		 		<td><?php echo $i;?></td>
		 		<td><?php echo $value['tensp']; ?></td>
		 		<td><?php echo $value['trangthai']; ?></td>
		 		<td><?php echo $value['soluong']; ?></td>
		 		<td><?php echo $value['gia']; ?></td>
		 		<td><img src="../<?php echo $value['image']; ?>" alt="" height="100px" ></td>
		 		<td><img src="../<?php echo $value['image1']; ?>" alt="" height="100px" ></td>

		 		<td><a href="<?php echo BASE_URL?>admin/geteditProduct/<?php echo $value['id']; ?>">Edit</a>/<a href="<?php echo BASE_URL?>admin/delProduct/<?php echo $value['id']; ?>">Del</a></td>
		 	</tr>
		 </tbody>
		 <?php
		 $i++; 
			}
		  ?>
  </table>
		
	</div>
	<div class="back">
		<a href="<?php echo BASE_URL ?>admin/getAddProduct">Thêm sản phẩm</a>
	</div>
</div>
<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>