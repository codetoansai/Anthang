	 <?php 
 		foreach ($pro as $key => $value) {

  	?>
<form class="form-horizontal addcate"  method="post" enctype="multipart/form-data" action="<?php echo BASE_URL ?>admin/postEditProduct/<?php echo $value['id']; ?>">
	<h3>Sửa sản phẩm</h3> 

	<p id='erro'></p>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Tên sản phẩm</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtname" id="txtname" placeholder="tên" value="<?php echo $value['tensp'] ?>">
	    </div>
	  </div>
	   <div class="form-group">
        <label class="col-sm-2 control-label col-sm-offset-3">Loại sản phẩm</label>
        <div class="col-sm-3 selectContainer">
            <select name="parent" id="parent"  class="form-control">
             <option value="0">Root</option>
          		 <?php 
                   functions::loadnav1($catlist,$str="--|",$value['loaisp']);
               ?>
            </select>
        </div>
    </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Trạng thái</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txttrangthai"  id="txttrangthai"  value="<?php echo $value['trangthai'] ?>" placeholder="trangthai">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Số lượng</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtsl" id="txtsl"   value="<?php echo $value['soluong'] ?>" placeholder="sl">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Giá</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtgia"  value="<?php echo $value['gia'] ?>" id="txtgia" placeholder="tên">
	    </div>
	  </div>

	  <div class="form-group">
		  <label for="" class="col-sm-offset-3 col-sm-2 control-label">Chọn ảnh</label>
		  <input type="file" class="col-sm-3" name="image1" id="image1"><br>
		  <img src="../../<?php echo $value['image'] ?>" alt="" width="100px">
 	  </div>
 	  <div class="form-group">
		  <label for="" class="col-sm-offset-3 col-sm-2 control-label">Chọn ảnh</label>
		  <input type="file" class="col-sm-3" name="image2" id="image2" ><br>
		   <img src="../../<?php echo $value['image1'] ?>" alt="" width="100px">
 	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-6 col-sm-6">
	      <button type="submit" class="btn btn-default" id="sb">Sửa</button>
	    </div>
	  </div>

</form>
	  <?php 
	}
 ?>