

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
  <?php echo form_open_multipart('events/edit_events/'.$details->event_hash_id);?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('addeventmsg')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('addeventmsg'); ?></strong></div>
          <?php endif; ?>
          <?php if($this->session->flashdata('addeventmsgs')): ?>
              <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('addeventmsgs'); ?></strong></div>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Event Title</label>
                <input type="text" name="event_title" class="form-control" required value="<?=$details->event_title;?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Event Location</label>
                <input type="text" name="event_location" class="form-control" required value="<?=$details->event_location;?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" name="event_short_description" class="form-control" required value="<?=$details->event_short_description;?>">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Event Description</label>
                <textarea name="event_description" class="form-control" id="" cols="30" rows="10"><?=$details->event_description;?></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Start Time</label>
                <input type="text" class="form-control pull-right" name="start_date1" id="datepicker">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="start_date2" class="form-control timepicker">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>End Time</label>
                <input type="text" name="end_date1" class="form-control pull-right datepicker1"  id="datepicker1">
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
                  <option value="1" <?=$details->event_status == 1 ? ' selected="selected"' : '';?>>Publish</option>
                  <option value="0" <?=$details->event_status == 0 ? ' selected="selected"' : '';?>>Unpublish</option>
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
          <input type="submit" value="Update" onclick="confirm('Are You Sure?');" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>

