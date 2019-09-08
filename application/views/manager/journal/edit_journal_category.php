<section class="content-header">
      <h1>
        Journal Management
        <small>Edit Journal Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">Edit Journal Category</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('catmsg')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('catmsg'); ?></strong></div>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            
             <div class="col-md-6">
              <div class="form-group">
                <label>Categolry Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="journal_cat_title" required="" id="inputEmail3" placeholder="Categolry Name" value="<?=$data->journal_cat_title;?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="journal_cat_status" id="" class="form-control">
                  <option value="1" <?=$data->journal_cat_status == 1 ? ' selected="selected"' : '';?>>Active</option>
                  <option value="0" <?=$data->journal_cat_status == 0 ? ' selected="selected"' : '';?>>InActive</option>
                </select>
              </div>
            </div>

           
            
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Edit Categolry" class="btn btn-success btn-flat">
        </div>
      </div>
    <?php echo form_close();?>
    </section>

