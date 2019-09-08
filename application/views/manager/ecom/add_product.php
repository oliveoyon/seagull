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
    Product Management
    <small>Add News</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add Product</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('pdtadd')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('pdtadd'); ?></strong></div>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
              <?php echo @$error;?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Category Name <span style="color:red">*</span></label>
                <select name="pdt_cat_id" class="form-control" required  onChange="xyz();" id="pdt_cat_id">
                      <option value="">--Select--</option>
                      <?php foreach ($categories as $cat) {?>
                      <option value="<?=$cat->pdt_cat_id;?>"><?=$cat->pdt_cat_name;?></option>
                      <?php } ?>
                    </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>SubCategory Name <span style="color:red">*</span></label>
                  <div>
                    
                  </div>
                  <div id="show"></div>
                  
               
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Product Code</label>
                <input class="form-control" id="inputEmail3" name="pdt_code" placeholder="Product Code" type="text" value="<?=set_value('pdt_code');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Product Title</label>
                <input class="form-control" id="inputEmail3" name="pdt_title" required placeholder="Product Title" type="text" value="<?=set_value('pdt_title');?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Short Description</label>
                <textarea name="short_desc" class="form-control" cols="10" rows="3"><?=set_value('short_desc');?></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Product Description</label>
                <textarea name="pdt_desc" class="form-control" id="editor1" cols="10" rows="3"><?=set_value('pdt_desc');?></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Product Specification</label>
                 <textarea name="pdt_specification" class="form-control" id="editor2" cols="10" rows="3"><?=set_value('pdt_specification');?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Sale Price</label>
                <input class="form-control" id="inputEmail3" name="sale_price" placeholder="sale Price" type="text" required value="<?=set_value('sale_price');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Previous Price</label>
                 <input class="form-control" id="inputEmail3" name="prev_price" placeholder="previous Price" type="text" value="<?=set_value('prev_price');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <input class="form-control" id="inputEmail3" name="pdt_stock" placeholder="Quantity" type="text" required value="<?=set_value('pdt_stock');?>">
              </div>
            </div>
            
            
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Editor</label>
                <input type="text" name="pdt_editors" class="form-control"  value="<?=set_value('pdt_editors');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Author</label>
                <input type="text" name="pdt_authors" class="form-control"  value="<?=set_value('pdt_authors');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Table of Contents</label>
                <input type="text" name="pdt_table_of_contents" class="form-control"  value="<?=set_value('pdt_table_of_contents');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>ISBN</label>
                <input type="text" name="pdt_isbn" class="form-control"  value="<?=set_value('pdt_isbn');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ISBN 13</label>
                <input type="text" name="pdt_isbn_13" class="form-control"  value="<?=set_value('pdt_isbn_13');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>eISBN</label>
                <input type="text" name="pdt_e_isbn" class="form-control"  value="<?=set_value('pdt_e_isbn');?>">
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>ISSN</label>
                <input type="text" name="pdt_issn" class="form-control"  value="<?=set_value('pdt_issn');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>eISSN</label>
                <input type="text" name="pdt_e_issn" class="form-control"  value="<?=set_value('pdt_e_issn');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Imprint</label>
                <input type="text" name="pdt_imprint" class="form-control"  value="<?=set_value('pdt_imprint');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Cover Type</label>
                <input type="text" name="pdt_cover_type" class="form-control"  value="<?=set_value('pdt_cover_type');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Publication Date</label>
                <input type="text" name="pdt_publication_date" class="form-control"  value="<?=set_value('pdt_publication_date');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Edition Year</label>
                <input type="text" name="pdt_edition_year" class="form-control"  value="<?=set_value('pdt_edition_year');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pages</label>
                <input type="text" name="pdt_pages" class="form-control"  value="<?=set_value('pdt_pages');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Language</label>
                <input type="text" name="pdt_language" class="form-control"  value="<?=set_value('pdt_language');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Setting</label>
                <input type="text" name="pdt_setting" class="form-control"  value="<?=set_value('pdt_setting');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Area of Word</label>
                <input type="text" name="pdt_area_work" class="form-control"  value="<?=set_value('pdt_area_work');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Copyright</label>
                <input type="text" name="pdt_copyright" class="form-control"  value="<?=set_value('pdt_copyright');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="pdt_image" id="" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="pdt_status"  class="form-control">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                    </select>
              </div>
            </div>

          
            


            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Add Journal" onclick="confirm('Are You Sure?');" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


