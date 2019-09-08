

<section class="content-header">
  <h1>
    Event Management
    <small>Add event</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add event</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('addeventmsg')): ?>
              <script>
                Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '<?=$this->session->flashdata('addeventmsg')?>',
                showConfirmButton: false,
                timer: 1500
              })
              </script>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        <?php echo $error;?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Event Title</label>
                <input type="text" name="event_title" class="form-control" required value="<?=set_value('event_title');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Event Location</label>
                <input type="text" name="event_location" class="form-control" required value="<?=set_value('event_location');?>">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" name="event_short_description" class="form-control" required value="<?=set_value('event_short_description');?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Event Description</label>
                <textarea name="event_description" class="form-control" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Start Time</label>
                <input type="text" class="form-control pull-right" value="<?=date('m/d/Y');?>" name="start_date1" id="datepicker">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="start_date2" class="form-control timepicker">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>End Time</label>
                <input type="text" name="end_date1" class="form-control pull-right datepicker1" value="<?=date('m/d/Y');?>"  id="datepicker1">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>

                <input type="text" name="end_date2" class="form-control timepicker1">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Upload File</label>
                <input type="file" name="event_image" >
              </div>
            </div>

            

            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="event_status" id="" class="form-control">
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
          <input type="submit" value="Add event" onclick="confirm('Are You Sure?');" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>

