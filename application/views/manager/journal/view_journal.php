<section class="content-header">
      <h1>
        Journal Management
        <small>View Journal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Journal</li>
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
              <?php if($this->session->flashdata('deljrn')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('deljrn'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Journal Title</th>
                          <th>Editor in Chief</th>
                          <th>Impact Factor</th>
                          <th>Vollume</th>
                          <th>Issue</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($journals as $jrn){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$jrn->journal_title ;?></td>
                          <td><?=$jrn->journal_editor_chief ;?></td>
                          <th><?=$jrn->journal_impact_factor;?></th>
                          <th><?=$jrn->journal_curr_vol;?></th>
                          <th><?=$jrn->journal_curr_issue;?></th>
                          <td>
                            
                            <a href="<?=site_url('jrn/edit_journal/'.$jrn->journal_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('jrn/delete_journal/'.$jrn->journal_hash_id)?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            
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