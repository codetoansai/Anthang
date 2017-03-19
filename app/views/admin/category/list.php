<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="table-responsive">
  		<table class="table table-bordered" width="500px">
  		<caption><h3>List Category</h3></caption>
		<tr>
			<td><a href="#">STT</a></td>
			<td><a href="#">Tên danh mục</a></td>
			<td><a href="#">Parent_id</a></td>
			<td><a href="#">Action</a></td>
		</tr>
		<?php 
		$i=1;
			foreach ($cat as $value) {	
		 ?>
		 	<tr>
		 		<td><?php echo $i;?></td>
		 		<td><?php echo $value['name']; ?></td>
		 		<td><?php echo $value['parent_id']; ?></td>
		 		<td><a href="<?php echo BASE_URL?>admin/geteditcategory/<?php echo $value['id']; ?>">Edit</a>/<a href="<?php echo BASE_URL?>admin/delcategory/<?php echo $value['id']; ?>">Del</a></td>
		 	</tr>
		 <?php
		 $i++; 
			}
		  ?>
  </table>
		
	</div>
	<div class="back">
		<a href="<?php echo BASE_URL?>admin/getAddCategory">Thêm danh mục</a>
	</div>
</div>