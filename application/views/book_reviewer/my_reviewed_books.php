<section class="content-header">
      <h1>
        Review Paper
        <small>Pendung Paper Lists</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">Pending Papers</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pendung Paper Lists</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Manuscript ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pending_lists as $list): ?>
                  <tr>
                    <td><?=$list->manuscript_no;?></td>
                    <td><?=$list->book_title;?></td>
                    <td><?=$list->your_fname.' '.$list->your_lname;?></td> 
                    <td><span style="background-color: <?=$list->color;?>" class="label"><?=$list->status_title;?></span></td>
                    <td><a href="<?=site_url('book_reviewer/view_my_reviewed_paper/'.$list->assign_hash_id);?>"><span class="btn-sm btn-flat btn-success"><i class="fa fa-eye"></i> Review This</span></a></td> 
                  </tr>
                  
                <?php endforeach ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
