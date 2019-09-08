
<section class="content-header">
  <h1>
    My Books
    <small>Submit New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Submit New</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('addmanuscript')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('addmanuscript'); ?></strong></div>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
          <?php echo $error;?>
          <?php echo $error1;?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            
            <div class="col-md-12">
              <div class="form-group">
                <label>Title</label>
                <input class="form-control" id="" name="title" placeholder="Book Title" type="text" required value="<?=set_value('title');?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Subtitle</label>
                 <input class="form-control" id="" name="subtitle" placeholder="Book Subtitle" type="text" value="<?=set_value('subtitle');?>">
              </div>
            </div>
            

            <div class="col-md-12">
              <div class="form-group">
                <label>Keywords</label>
                <input class="form-control" id="" name="keyword" placeholder="Keywords (Seperated by Semicolon)" type="text" required value="<?=set_value('keywords');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Area</label>
                <input type="text" name="area_of_work" class="form-control" placeholder="e.g: Human Psychology" required  value="<?=set_value('name');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Language</label>
                <input class="form-control" id="" name="language" placeholder="Language" type="text" required value="<?=set_value('language');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Number of Figures</label>
                <input class="form-control" id="" name="no_of_figure" placeholder="e.g: 15" type="" required value="<?=set_value('no_of_figure');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Deadline</label>
                <input class="form-control" id="" name="reviewer_deadline" placeholder="Reviewer Deadline" type="" required value="<?=set_value('reviewer_deadline');?>">
              </div>
            </div>
            <?php if($revs){?>
            <div class="col-md-12">
              <div class="form-group">
                <label>Select Reviewer</label>
                <select name="reviewer_id[]" class="form-control select2" multiple="multiple" >
                  <option value="">--Select One--</option>
                  <?php foreach($revs as $r){?>
                  <option value="<?=$r->reviewer_id?>"><?=$r->reviewer_name?></option>
                 <?php }?>
                </select>
              </div>
            </div>
          <?php } else{?>
<script>
  Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'Add reviewer first!',
  footer: '<a href="<?=site_url('book_author/add_reviewer')?>">Why do I have this issue?</a>'
})

</script>

          <?php }?>

            <div class="col-md-6">
              <div class="form-group">
                <label>Upload Complete PDF File</label>
                <div class="col-sm-10">
                    <input type="file" name="manuscript_pdf" id="">
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Upload Complete MS File</label>
                <div class="col-sm-10">
                    <input type="file" name="manuscript_doc" id="">
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
          <input type="submit" value="Submit" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


