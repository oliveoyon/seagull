<?php if($this->session->flashdata('fileadd')): ?>
  <script>
    Swal.fire({
    position: 'top-end',
    type: 'success',
    title: '<?=$this->session->flashdata('fileadd')?>',
    showConfirmButton: false,
    timer: 2500
  })
  </script>
<?php endif; ?>
<section class="content-header">
      <h1>
        My Files
        <small>Uploaded Files</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">Uploaded Files</li>
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
                          <th>Sl. No</th>
                          <th>File Title</th>
                          <th>File Type</th>
                          <th>File No.</th>
                          <th>Privacy</th>
                          <th>Manuscript</th>
                          <th>Download</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($papers as $p){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$p->file_name;?></td>
                          <td><?=$p->file_type;?></td>
                          <td><?=$p->file_no;?></td>
                          <td><?=$p->file_privacy;?></td>
                          <td><?=$p->manuscript_no;?></td>
                          <td>
                            <a href="<?=base_url('uploads/files/author_file/'.$p->file_name);?>"><span class="btn-sm btn-flat btn-success"><i class="fa fa-download"></i> Download</span></a>
                          </td>
                          <td>
                            <a href="<?=site_url('book_author/edit_file/'.$p->file_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>
                            <a onclick="confirm('Are you sure to delete');"  href="<?=site_url('book_author/delete_file/'.$p->file_hash_id)?>" id="<?=$p->file_hash_id;?>"  class="btn-sm btn-flat btn-danger bn" ><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>
                      <?php }?>
                      </tbody>
                    </table>
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