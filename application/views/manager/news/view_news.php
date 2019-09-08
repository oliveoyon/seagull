<section class="content-header">
      <h1>
        News Management
        <small>View News</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View News</li>
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
              <?php if($this->session->flashdata('delnews')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('delnews'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Image</th>
                          <th>News Title</th>
                          <th>news Category Name</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($newses as $news){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><img width="50" src="<?=base_url('uploads/'.$news->thumbnail);?>" alt=""></td>
                          <td><?=$news->news_title ;?></td>
                          <td><?=$news->news_cat_name ;?></td>
                          <th><?=substr($news->news_description, 0,50);?></th>
                          <td><?=$news->news_status == 1 ? '<span class="label label-success">Published</span>' : '<span class="label label-danger">Unpublished</span>';?></td>
                          <td>
                            
                            <a href="<?=site_url('news/edit_news/'.$news->news_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>

                            <a href="<?=site_url('news/delete_news/'.$news->news_hash_id)?>" class="btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i> Delete</a>

                            
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