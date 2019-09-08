<section class="content-header">
      <h1>
        Referee Board
        <small>View Referee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Referee</li>
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
              <?php if($this->session->flashdata('delrev')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('delrev'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Name</th>
                          <th>Institute</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Country</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($revs as $rev){?>
                        <tr>
                          <td><?=$i++;?></td>
                          
                          <td><?=$rev->referee_name ;?></td>
                          <td><?=$rev->referee_institution ;?></td>
                          <td><?=$rev->referee_phone ;?></td>
                          <td><?=$rev->referee_email ;?></td>
                          <td><?=$rev->country_name ;?></td>
                          <td>
                            <?php if($rev->referee_status == 1){?>
                            <span class="btn-sm btn-flat btn-success"><i class="fa fa-trash"></i> Active</span>
                            <?php } else{?>
                            <span class="btn-sm btn-flat btn-danger"><i class="fa fa-trash"></i> InActive</span>                            
                            <?php }?>
                          </td>
                          <td>
                            <?php if($rev->referee_status == 1){?>
                            <a href="<?=site_url('book_author/revtoggle/'.$rev->referee_hash_id.'/1');?>" onclick="return confirm('Are you sure?');">Deactivate</a>
                            <?php } else{?>
                            <a href="<?=site_url('book_author/revtoggle/'.$rev->referee_hash_id.'/0');?>" onclick="return confirm('Are you sure?');">Activate</a>
                            <?php }?>
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