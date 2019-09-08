<section class="content-header">
      <h1>
        User Message
        <small>View Messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Messages</li>
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($contacts as $contact){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$contact->name;?></td>
                          <td><?=$contact->email;?></td>
                          <td><?=$contact->subject;?></td>
                          <td><?=$contact->message;?></td>
                          <td>
                            
                            <a href="<?=site_url('manager/delete_user_message/'.$contact->contact_id);?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>
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