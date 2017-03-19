<form class="form-horizontal addcate"  method="post" enctype="multipart/form-data" action="<?php echo BASE_URL ?>admin/postAddProduct">
	<h3>Thêm sản phẩm</h3> 
	<p id='erro'></p>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Tên sản phẩm</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtname" id="txtname" placeholder="tên">
	    </div>
	  </div>
	   <div class="form-group">
        <label class="col-sm-2 control-label col-sm-offset-3">Loại sản phẩm</label>
        <div class="col-sm-3 selectContainer">
            <select name="parent" id="parent"  class="form-control">
                 <?php 
              functions::loadnav($cat,0,$str="--|");
              ?>
            </select>
        </div>
    </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Trạng thái</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txttrangthai"  id="txttrangthai"  placeholder="trangthai">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Số lượng</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtsl" id="txtsl" placeholder="sl">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-offset-3 col-sm-2 control-label">Giá</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" name="txtgia" id="txtgia" placeholder="tên">
	    </div>
	  </div>

	  <div class="form-group">
		  <label for="" class="col-sm-offset-3 col-sm-2 control-label">Chọn ảnh</label>
		  <input type="file" class="col-sm-3" name="image1" id="image1">
 	  </div>
 	  <div class="form-group">
		  <label for="" class="col-sm-offset-3 col-sm-2 control-label">Chọn ảnh</label>
		  <input type="file" class="col-sm-3" name="image2" id="image2" >
 	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-6 col-sm-6">
	      <button type="submit" class="btn btn-default" id="sb">Add</button>
	    </div>
	  </div>
</form>