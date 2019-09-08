<section class="content-header">
      <h1>
        Publisher Management
        <small>View Publisher</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Publisher</li>
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
              <?php if($this->session->flashdata('delpublisher')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('delpublisher'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Publication Name</th>
                          <th>Name</th>
                          <th>Product</th>
                          <th>Product Type</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($requests as $req){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$req->publication_name ;?></td>
                          <td><?=$req->publisher_title.' '.$req->publisher_fname.' '.$req->publisher_lname ;?></td>
                          <td><?=$req->publisher_pdt_name ;?></td>
                          <td><?=$req->publisher_pdt_type ;?></td>
                          <td><?=$req->publisher_phone ;?></td>
                          <td><?=$req->publisheremail ;?></td>
                          <td><?=$req->publisher_status == 1 ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">InActive</span>';?></td>
                          <td>
                            <a href="<?=site_url('manager/edit_publisher/'.$req->publisher_req_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('manager/delete_publisher/'.$req->publisher_req_hash_id)?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            
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