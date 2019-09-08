

<section class="content-header">
  <h1>
    News Management
    <small>Add News</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add News</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('addnewsmsg')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('addnewsmsg'); ?></strong></div>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        <?php echo $error;?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            
            <div class="col-md-6">
              <div class="form-group">
                <label>News Category <span style="color:red">*</span></label>
                <select name="news_cat_id" id="" class="form-control">
                  <option value="">--Select a Category--</option>
                  <?php foreach($categories as $c){?>
                    <option value="<?=$c->news_cat_id;?>" <?=set_select('news_cat_id', $c->news_cat_id); ?>><?=$c->news_cat_name;?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>News Title</label>
                <input type="text" name="news_title" class="form-control" required value="<?=set_value('news_title');?>">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label>News Description</label>
                <textarea name="news_description" class="form-control" id="" cols="30" rows="10"></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Upload File</label>
                <input type="file" name="news_image" >
              </div>
            </div>

            

            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="news_status" id="" class="form-control">
                  <option value="1">Publish</option>
                  <option value="0">Unpublish</option>
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
          <input type="submit" value="Add News" onclick="confirm('Are You Sure?');" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>

