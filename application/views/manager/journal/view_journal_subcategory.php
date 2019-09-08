<section class="content-header">
      <h1>
        Journal Management
        <small>View Journals</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Journals</li>
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
              <?php if($this->session->flashdata('delcat')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('delcat'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Journal SubCategory</th>
                          <th>Journal Category</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($subcategories as $category){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$category->journal_subcat_title ;?></td>
                          <td><?=$category->journal_cat_title ;?></td>
                          <td><?=$category->journal_subcat_status == 1 ? 'Active' : 'Inactive';?></td>
                          <td>
                            
                            <a href="<?=site_url('journal/edit_journal_subcategory/'.$category->journal_subcat_hash_id);?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('journal/delete_journal_subcategory/'.$category->journal_subcat_hash_id);?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            
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