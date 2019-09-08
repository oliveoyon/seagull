<section class="content-header">
      <h1>
        Event Management
        <small>View event</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
        <li class="active">View event</li>
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
              <?php if($this->session->flashdata('delevent')): ?>
                <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('delevent'); ?></strong></div>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                          <th>Sl No.</th>
                          <th>Image</th>
                          <th>Event Title</th>
                          <th>Short Description</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php $i=1; foreach($events as $event){?>
                        <tr id="abc">
                          <td><?=$i++;?></td>
                          <td><img width="50" src="<?=base_url('uploads/events/'.$event->event_image);?>" alt=""></td>
                          <td><?=$event->event_title ;?></td>
                          <td><?=substr($event->event_short_description, 0,50);?></td>
                          <td><?=substr($event->event_description, 0,50);?></td>
                          <td><?=$event->event_status == 1 ? '<span class="label label-success">Published</span>' : '<span class="label label-danger">Unpublished</span>';?></td>
                          <td>
                            <a href="<?=site_url('events/edit_events/'.$event->event_hash_id)?>" class="btn-sm btn-flat btn-primary">Edit</a>
                            <a href="#" id="<?=$event->event_id;?>"  class="btn-sm btn-flat btn-danger bn" ><i class="fa fa-trash"></i> Delete</a>
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







<script>
$('.bn').click(function(){
var hello = $(this).attr('id');
 
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    $.ajax({
            url: "<?=site_url('events/delete_eventss');?>",
            type: 'post',
            data: {
              "id": hello,
              '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'        
              },

            success: function () {
                swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              ),
               
             $('#abc').remove();
             
            },
            
        }); //ajax end
  }
})
 
})
</script>