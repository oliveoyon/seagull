
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
          <?php if($this->session->flashdata('fileadd')): ?>
              <script>
                Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '<?=$this->session->flashdata('fileadd')?>',
                showConfirmButton: false,
                timer: 2500
              })
              </script>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?> 
              <?php if($this->session->flashdata('uploaderror')): ?>
              <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('uploaderror'); ?></strong></div>
          <?php endif; ?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            
            <div class="col-md-6">
              <div class="form-group">
                <label>File Type <span style="color:red">*</span></label>
                <select name="file_type"  class="form-control">
                      <option value="Figure" <?=$data->file_type == "Figure" ? ' selected="selected"' : '';?>>Figure</option>
                      <option value="Photo" <?=$data->file_type == "Photo" ? ' selected="selected"' : '';?>>Photo</option>
                      <option value="Document" <?=$data->file_type == "Document" ? ' selected="selected"' : '';?>>Document</option>
                    </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Manuscript</label>
                 <select name="manuscript_no" id="" class="form-control">
                  
                  
                  <?php foreach ($papers as $p) { ?>
                     <option value="<?=$p->manuscript_no;?>"<?=$p->manuscript_no == $data->manuscript_no ? 'selected="selected"' : '';?>><?=$p->manuscript_no;?></option>
                  <?php } ?>
                  
                 </select>
              </div>
            </div>

            
            

            <div class="col-md-6">
              <div class="form-group">
                <label>File Number</label>
                <input class="form-control" id="" name="file_no" placeholder="Input Figure Number" type="text" required value="<?=$data->file_no;?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Privacy <span style="color:red">*</span></label>
                <select name="file_privacy"  class="form-control">
                      <option value="Public" <?=$data->file_privacy == "Public" ? ' selected="selected"' : '';?>>Public</option>
                      <option value="Only Me" <?=$data->file_privacy == "Only Me" ? ' selected="selected"' : '';?>>Only Me</option>
                    </select>
              </div>
            </div>

             <div class="col-md-12">
              <div class="form-group">
                <label>File Description</label>
                <input type="text" name="file_description" class="form-control" placeholder="Input File Description" required  value="<?=$data->file_description;?>">
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


