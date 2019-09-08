

<section class="content-header">
  <h1>
    Member Management
    <small>Add New</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add Member</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('revadd')): ?>
              
                <script>
                Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '<?=$this->session->flashdata('revadd');?>',
                showConfirmButton: false,
                timer: 3000
              });
              </script>
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label>Member Name</label>
                <select name="table" id="" class="form-control">
                  <option value="">--Select Member--</option>
                  <option value="Editor">Editor</option>
                  <option value="Referee">Referee</option>
                  <option value="Advisor">Advisor</option>
                  <option value="Ethics Member">Ethics Member</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Member Name</label>
                <input class="form-control" id="inputEmail3" name="member_name" placeholder="Member Name" type="text" required value="<?=set_value('member_name');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Member Department</label>
                 <input class="form-control" id="inputEmail3" name="member_department" placeholder="Member Department" type="text" value="<?=set_value('member_department');?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Member Institution</label>
                <input class="form-control" id="inputEmail3" name="member_institution" placeholder="Member Institution" type="text" required value="<?=set_value('member_institution');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Member Email</label>
                <input type="email" name="member_email" class="form-control" placeholder="Member Email" required  value="<?=set_value('member_email');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Member Phone</label>
                <input class="form-control" id="inputEmail3" name="member_phone" placeholder="Member Phone" type="text" required value="<?=set_value('member_phone');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Member Password</label>
                <input class="form-control" id="inputEmail3" name="member_password" placeholder="Member Password" type="password" required value="<?=set_value('member_password');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" required required name="member_country">
                  <option value=""<?=set_select('member_country', '', TRUE); ?>>Choose Country</option>
                  <?php foreach ($countries as $country):?>
                  <option value="<?=$country->country_id;?>" <?=set_select('member_country', $country->country_id); ?>><?=$country->country_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

           
            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="member_status"  class="form-control">
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
          <input type="submit" value="Add Member" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


