<section class="content-header">
      <h1>
        My Books
        <small>Submitted Books</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">Submitted Books</li>
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
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Manuscript ID</th>
                          <th>Title</th>
                          <th>Keywords</th>
                          <th>Area</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php foreach ($books as $book) {?>


                        <tr>
                          <td><?=$book->manuscript_no;?></td>
                          <td><?=$book->title;?></td>
                          <td><?=$book->keyword;?></td>
                          <td><?=$book->area_of_work;?></td>
                          <td>Pending</td>
                          <td>
                            <span class="btn-sm btn-flat btn-success"><i class="fa fa-eye"></i> View</span>
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