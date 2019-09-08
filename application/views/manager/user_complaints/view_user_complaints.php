<section class="content-header">
      <h1>
        User Complaints
        <small>View Complaints</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Complaints</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
      <div class="box box-info color-palette-box">
        <div class="box-header with-border">
          
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-4 col-md-12">
              <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('msg'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Complainant Name</th>
                          <th>Email</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($complaints as $complaint){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$complaint->complainant_fname.' '.$complaint->complainant_lname ;?></td>
                          <td><?=$complaint->complainant_email;?></td>
                          <td><?=$complaint->complainant_description;?></td>
                          <td>
                            
                            <a href="<?=site_url('manager/delete_complaints/'.$complaint->complaint_hash_id);?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            <a href="<?=site_url('manager/getComplaints/'.$complaint->complaint_hash_id);?>" class="btn-sm btn-flat btn-primary" data-toggle="modal" data-target="#myModal">View Detail</a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
          
            </div>
                
          </div>
         

        </div>
           
            
      </div>
       
        
    </section> 


    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>   