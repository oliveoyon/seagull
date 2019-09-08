    <style>
      
      .format-pre p {
  background: #49483e;
  color: #f7f7f7;
  padding: 10px;
  font-size: 14px;
  text-align: justify;
  text-justify: inter-word;
}
    </style>

    <section class="content-header">
      <h1>
        Papers
        <small>Accepted Paper Lists</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Accepted Paper</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Accepted Paper Lists</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered table-striped">
                
                <tr>
                  <th width="30%">Book Title</th>
                  <td><?=$stats[0]->title;?></td>
                </tr>
                  <tr>
                  <th>Area</th>
                  <td><?=$stats[0]->area_of_work;?></td>
                </tr>
                <tr>
                  <th>Author Name</th>
                  <td><?=$stats[0]->your_fname.' '.$stats[0]->your_lname;?></td>
                </tr>
                  <tr>
                  <th>Institution</th>
                  <td><?=$stats[0]->your_institution;?></td>
                </tr>
                  <tr>
                  <th>Email</th>
                  <td><?=$stats[0]->your_email;?></td>
                </tr>
              
                <tr>
                  <th>Reviewer Comment</th>
                  <td>
                    <ul style="margin: 0; padding: 0;">
                    <?php foreach($rev_comm as $revc){?>
                      <li style="display:inline; font-size: 12px;" class="label label-success bn" id="<?=$revc->reviewer_comments;?>"><em><b><?=$revc->reviewer_name;?></b></em> &nbsp;</li>
                     <?php }?> 
                     </ul>
                  </td> 
                </tr> 
                <tr>
                  <th>Editor Comment</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Internal Reviewer Comment</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Referee Comment</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Reviewer Deadline</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Assign a Member</th>
                  <td>
                    <select name="member_id[]" class="form-control select2" multiple="multiple" >
                    <?php foreach($members as $member){?>
                    <option value="<?=$member->member_id;?>"><?=$member->member_name.' ('.$member->member_type.')';?></option>
                  <?php } ?>
                  </select></td>
                </tr>
                
                <tr>
                  <th>Note</th>
                  <td><textarea name="" id="" cols="30" rows="10" class="form-control"></textarea></td>
                </tr>
                <tr>
                  <th>Action/Status</th>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>  


  <script>
$('.bn').click(function(){

  var str=$(this).attr('id');
         
Swal.fire({
  width: 600,
  html: '<p>' + str + '</p>',
  customClass: {
    popup: 'format-pre'
  }
});
 
})
</script> 

