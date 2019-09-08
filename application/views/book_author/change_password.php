
<section class="content-header">
  <h1>
    My Profile
    <small>Change Password</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Change Password</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('passchng')): ?>
              
              <script>
                Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '<?=$this->session->flashdata('passchng')?>',
                showConfirmButton: false,
                timer: 2500
              })
              </script>


              <?php endif; ?>

              <?php if($this->session->flashdata('err')): ?>
              
              <script>
                Swal.fire({
                position: 'top-end',
                type: 'error',
                title: '<?=$this->session->flashdata('err')?>',
                showConfirmButton: false,
                timer: 2500
              })
              </script>

              
              <?php endif; ?>
              <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label>Old Password</label>
                 <input class="form-control" id="" name="oldpass" placeholder="Input Old Password" type="password" >
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>New Password</label>
                <input class="form-control" id="" name="newpass" placeholder="New Password" type="password" required >
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" id="" name="confpass" placeholder="Confirm Password" type="password" required >
              </div>
            </div>
           
            
            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Change Password" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


