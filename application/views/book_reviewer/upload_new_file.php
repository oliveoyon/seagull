
<section class="content-header">
  <h1>
    My Files
    <small>Upload New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Upload File</li>
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
                <label>File Type <span style="color:red">*</span></label>
                <select name="reviewer_status"  class="form-control">
                      <option value="1">Figure</option>
                      <option value="0">Photo</option>
                      <option value="0">Document</option>
                    </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>File Name/Title</label>
                 <input class="form-control" id="" name="reviewer_department" placeholder="Input File Name" type="text" value="<?=set_value('reviewer_department');?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>File Number</label>
                <input class="form-control" id="" name="reviewer_institution" placeholder="Input Figure Number" type="text" required value="<?=set_value('reviewer_institution');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Privacy <span style="color:red">*</span></label>
                <select name="reviewer_status"  class="form-control">
                      <option value="1">Public</option>
                      <option value="0">Only Me</option>
                    </select>
              </div>
            </div>

             <div class="col-md-12">
              <div class="form-group">
                <label>File Description</label>
                <input type="text" name="file_description" class="form-control" placeholder="Input File Description" required  value="<?=set_value('reviewer_email');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Upload Complete File</label>
                <div class="col-sm-10">
                    <input type="file" name="pdt_image" id="">
                  </div>
              </div>
            </div>

            
            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Upload File" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


