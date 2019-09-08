
<section class="content-header">
  <h1>
    Reviewer Management
    <small>Add New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add Reviewer</li>
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
                <label>Reviewer Name</label>
                <input class="form-control" id="inputEmail3" name="reviewer_name" placeholder="Reviewer Name" type="text" required value="<?=set_value('reviewer_name');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Department</label>
                 <input class="form-control" id="inputEmail3" name="reviewer_department" placeholder="Reviewer Department" type="text" value="<?=set_value('reviewer_department');?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Institution</label>
                <input class="form-control" id="inputEmail3" name="reviewer_institution" placeholder="Reviewer Institution" type="text" required value="<?=set_value('reviewer_institution');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Email</label>
                <input type="email" name="reviewer_email" class="form-control" placeholder="Reviewer Email" required  value="<?=set_value('reviewer_email');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Phone</label>
                <input class="form-control" id="inputEmail3" name="reviewer_phone" placeholder="Reviewer Phone" type="text" required value="<?=set_value('reviewer_phone');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Reviewer Password</label>
                <input class="form-control" id="inputEmail3" name="reviewer_password" placeholder="Reviewer Password" type="password" required value="<?=set_value('reviewer_password');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" required required name="reviewer_country">
                  <option value=""<?=set_select('reviewer_country', '', TRUE); ?>>Choose Country</option>
                  <?php foreach ($countries as $country):?>
                  <option value="<?=$country->country_id;?>" <?=set_select('reviewer_country', $country->country_id); ?>><?=$country->country_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

           
            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="reviewer_status"  class="form-control">
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
          <input type="submit" value="Add Reviewer" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


