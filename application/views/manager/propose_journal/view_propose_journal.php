<section class="content-header">
      <h1>
        Propose Journal
        <small>View Propose Journal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Propose Journal</li>
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
              <?php if($this->session->flashdata('deleditor')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('deleditor'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Journal Name</th>
                          <th>Name</th>
                          <th>Chief Editor Name</th>
                          <th>Editor Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>CV</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($requests as $req){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$this->Mdb->getJournal($req->journal_id);?></td>
                          <td><?=$req->title.' '.$req->fname.' '.$req->lname ;?></td>
                          <td><?=$req->editor_in_chief ;?></td>
                          <td><?=$req->editor ;?></td>
                          <td><?=$req->email ;?></td>
                          <td><?=$req->phone ;?></td>
                          <td><a href="<?=base_url('uploads/propose_journal/'.$req->cv);?>">View CV</a></td>
                          <td><?=$req->newjournal_status == 1 ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">InActive</span>';?></td>
                          <td>
                            
                            <a href="<?=site_url('manager/edit_propose_journal/'.$req->propose_journal_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('manager/delete_propose_journal/'.$req->propose_journal_hash_id)?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            
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