<script type="text/javascript" charset="utf-8" async defer>
  jQuery(document).ready(function() {

      $("#sb").click(function(){
          var name=$("#txtname").val();
         var par=$("#parent").val();
        $.post("<?php echo BASE_URL ?>admin/postaddcategory",{txtname:name,parent:par},function(data){
            $('#erro').html(data);
        });
      });

    });
</script>
<form class="form-horizontal addcate" method="post">
<h3>Thêm Danh mục</h3> 
         <p id="erro"></p>
   <div class="form-group">
        <label class="col-sm-2 control-label col-sm-offset-3">Danh mục cha</label>
        <div class="col-sm-3 selectContainer">
            <select name="parent" id="parent" class="form-control">
                <option value="0">--Root--</option> 
                 <?php 
              functions::loadnav($cat,0,$str="--|");
              ?>
            </select>
        </div>
    </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label col-sm-offset-3">Tên danh mục</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="txtname" name='txtname'  placeholder="ten danh muc">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-4">
      <button type="button" id="sb" class="btn btn-default">Thêm</button>
    </div>
  </div>
</form>
 