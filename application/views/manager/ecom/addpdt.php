<script type="text/javascript">
function xyz()
    {
      var pdt_cat_id =document.getElementById("pdt_cat_id").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("show").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>product/getsubcat/"+pdt_cat_id,true); 
        xmlhttp.send();
    }
</script>


    <section class="content-header">
      <h1>
        Add Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('manager/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Product</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <?php if($this->session->flashdata('pdtadd')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('pdtadd'); ?></strong></div>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action=""  enctype='multipart/form-data'>
            <?php
              $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
              );
            ?>
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                    <select name="pdt_cat_id" class="form-control" required  onChange="xyz();" id="pdt_cat_id">
                      <option value="">--Select--</option>
                      <?php foreach ($categories as $cat) {?>
                      <option value="<?=$cat->pdt_cat_id;?>"><?=$cat->pdt_cat_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SubCategory Name</label>
                  <div class="col-sm-10">
                    <div id="show"></div>
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Code</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="pdt_code" placeholder="Product Code" type="text" value="<?=set_value('pdt_code');?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="pdt_title" required placeholder="Product Title" type="text" value="<?=set_value('pdt_title');?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                  <div class="col-sm-10">
                    <textarea name="short_desc" class="form-control" cols="30" rows="3"><?=set_value('short_desc');?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>
                  <div class="col-sm-10">
                    <textarea name="pdt_desc" class="form-control" id="editor1" cols="30" rows="10"><?=set_value('pdt_desc');?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Specification</label>
                  <div class="col-sm-10">
                    <textarea name="pdt_specification" class="form-control" id="editor2" cols="30" rows="10"><?=set_value('pdt_specification');?></textarea>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Size</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="pdt_size" placeholder="Comma seperated like: small,large,medium" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Color</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="pdt_color" placeholder="Comma seperated like: red,green,blue" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Buy Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="buy_price" placeholder="Buy Price" type="text">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sale Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="sale_price" placeholder="sale Price" type="text" required value="<?=set_value('sale_price');?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Previous Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="prev_price" placeholder="previous Price" type="text" value="<?=set_value('prev_price');?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="pdt_stock" placeholder="Quantity" type="text" required value="<?=set_value('pdt_stock');?>">
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Youtube Link</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" name="youtube_link" placeholder="Youtube Link" type="text">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="pdt_image" id="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select name="pdt_status"  class="form-control">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               
                <input type="submit" class="btn btn-info pull-right" value="Insert">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>  