
<section class="content-header">
  <h1>
    Ethics Member
    <small>Add New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add a Member</li>
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
                <label>Ethic Member Name</label>
                <input class="form-control" id="" name="Ethic Member_name" placeholder="Ethic Member Name" type="text" required value="<?=set_value('Ethic Member_name');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Ethic Member Department</label>
                 <input class="form-control" id="" name="Ethic Member_department" placeholder="Ethic Member Department" type="text" value="<?=set_value('Ethic Member_department');?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Ethic Member Institution</label>
                <input class="form-control" id="" name="Ethic Member_institution" placeholder="Ethic Member Institution" type="text" required value="<?=set_value('Ethic Member_institution');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Ethic Member Email</label>
                <input type="email" name="Ethic Member_email" class="form-control" placeholder="Ethic Member Email" required  value="<?=set_value('Ethic Member_email');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Ethic Member Phone</label>
                <input class="form-control" id="" name="Ethic Member_phone" placeholder="Ethic Member Phone" type="text" required value="<?=set_value('Ethic Member_phone');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" required required name="Ethic Member_country">
                  <option value=""<?=set_select('Ethic Member_country', '', TRUE); ?>>Choose Country</option>
                  <?php foreach ($countries as $country):?>
                  <option value="<?=$country->country_id;?>" <?=set_select('Ethic Member_country', $country->country_id); ?>><?=$country->country_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Ethic Member Password</label>
                <input class="form-control" id="" name="Ethic Member_password" placeholder="Ethic Member Password" type="password" required value="<?=set_value('Ethic Member_password');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" id="" name="Ethic Member_password" placeholder="Ethic Member Password" type="password" required value="<?=set_value('Ethic Member_password');?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="Ethic Member_status"  class="form-control">
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
          <input type="submit" value="Add Ethic Member" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


