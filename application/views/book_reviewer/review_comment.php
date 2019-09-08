
<section class="content-header">
  <h1>
    Review Paper
    <small>Review Paper</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Review Paper</li>
  </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-md-7">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read the Manuscript</h3>
              <embed src="<?=base_url('uploads/book_manuscript/'.$details[0]['manuscript_no'].'/'.$details[0]['manuscript_pdf']);?>" type="application/pdf" width="100%" height="500">
             
            </div>
            
           
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->


        <div class="col-md-5">
         <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Comments
                <small>Form of comments submission</small>
              </h3>
              <?php if($this->session->flashdata('comments')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('comments'); ?></strong></div>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <table class="table">
                <tr>
                  <td>Title</td>
                  <td><?=$details[0]['title'];?></td>
                </tr>
                <tr>
                  <td>Subtitle</td>
                  <td><?=$details[0]['subtitle'];?></td>
                </tr>
                <tr>
                  <td>Area</td>
                  <td><?=$details[0]['area_of_work'];?></td>
                </tr>
              </table>
              <?php echo form_open();?>
                    
                    <textarea name="reviewer_comments" id="editor1" cols="30" rows="2">
                      <?=$details[0]['reviewer_comments'];?>
                    </textarea>
                    
                    <input type="submit" value="Save" name="Save">
                    <input type="submit" value="Final Submit" name="Save">
                    
              <?php echo form_close();?>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>