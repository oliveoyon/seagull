<?php if($this->session->flashdata('updateprofile')): ?>
  <script>
    Swal.fire({
    position: 'top-end',
    type: 'success',
    title: '<?=$this->session->flashdata('updateprofile')?>',
    showConfirmButton: false,
    timer: 2500
  })
  </script>
<?php endif; ?>


<section class="content-header">
  <h1>
    My Profile
    <small><?=$data->your_fname.' '.$data->your_lname;?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Update Profile</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
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
                <label>Department</label>
                 <input class="form-control" id="" name="your_department"  type="text" value="<?=$data->your_department;?>">
              </div>
            </div>
            

            <div class="col-md-6">
              <div class="form-group">
                <label>Institution</label>
                <input class="form-control" id="" name="your_institution" type="text" required value="<?=$data->your_institution;?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="your_email" class="form-control" placeholder="Input Email" required  value="<?=$data->your_email;?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input class="form-control" id="" name="your_phone" placeholder="Input Phone" type="text" required value="<?=$data->your_phone;?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Area of Expertise</label>
                <input class="form-control" id="" name="your_expertise" placeholder="Input Area of Expertise (Separated by comma)" type="text" required value="<?=$data->your_expertise;?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Bio</label>
                <input class="form-control" id="" name="your_bio" placeholder="Input Bio" type="text" required value="<?=$data->your_bio;?>">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>ORCiD</label>
                <input class="form-control" id="" name="your_orcid" placeholder="Input ORCiD" type="text" required value="<?=$data->your_orcid;?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="your_image" id="">
              </div>
            </div>

            

               


            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Update Profile" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


