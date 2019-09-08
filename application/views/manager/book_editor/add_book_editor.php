
<section class="content-header">
  <h1>
    Book Editor
    <small>Add New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add Book Editor</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('revadd')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('revadd'); ?></strong></div>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Name</label>
                <input class="form-control" id="" name="editor_name" placeholder="Editor Name" type="text" required value="<?=set_value('editor_name');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Department</label>
                 <input class="form-control" id="" name="editor_department" placeholder="Editor Department" type="text" value="<?=set_value('editor_department');?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Institution</label>
                <input class="form-control" id="" name="editor_institution" placeholder="Editor Institution" type="text" required value="<?=set_value('editor_institution');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Editor Email</label>
                <input type="email" name="editor_email" class="form-control" placeholder="Editor Email" required  value="<?=set_value('editor_email');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Phone</label>
                <input class="form-control" id="" name="editor_phone" placeholder="Editor Phone" type="text" required value="<?=set_value('editor_phone');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" required required name="editor_country">
                  <option value=""<?=set_select('editor_country', '', TRUE); ?>>Choose Country</option>
                  <?php foreach ($countries as $country):?>
                  <option value="<?=$country->country_id;?>" <?=set_select('editor_country', $country->country_id); ?>><?=$country->country_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Password</label>
                <input class="form-control" id="" name="editor_password" placeholder="Editor Password" type="password" required value="<?=set_value('editor_password');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" id="" name="editor_password" placeholder="Editor Password" type="password" required value="<?=set_value('editor_password');?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="editor_status"  class="form-control">
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
          <input type="submit" value="Add Editor" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


