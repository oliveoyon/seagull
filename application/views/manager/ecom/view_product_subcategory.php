<section class="content-header">
      <h1>
        Product Management
        <small>View Subcategory</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View Subcategory</li>
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
                          <th>Category Name</th>
                          <th>Sub Category Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($subcategories as $category){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$category->pdt_cat_name ;?></td>
                           <td><?=$category->pdt_subcat_name ;?></td>
                          <td><?=$category->pdt_subcat_status == 1 ? 'Active' : 'Inactive';?></td>
                          <td>
                            
                            <a href="<?=site_url('product/edit_product_subcategory/'.$category->pdt_subcat_hash_id);?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('product/delete_product_subcategory/'.$category->pdt_subcat_hash_id);?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

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