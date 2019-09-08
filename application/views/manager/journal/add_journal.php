<script type="text/javascript">
    function hello()
    {
      var journal_cat_id =document.getElementById("journal_cat_id").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("set").style.display="none";
            document.getElementById("show").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>journal/fetchsubcat/"+journal_cat_id,true); 
        xmlhttp.send();
    }
</script>

<section class="content-header">
  <h1>
    Journal Management
    <small>Add News</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Home</a></li>
    <li class="active">Add Journal</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <?php echo form_open_multipart();?>
  <div class="box box-default">
        <div class="box-header with-border bg-info">
          <?php if($this->session->flashdata('addjrnmsg')): ?>
              <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('addjrnmsg'); ?></strong></div>
          <?php endif; ?>
          <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Category Name <span style="color:red">*</span></label>
                <select name="journal_cat_id" id="journal_cat_id" class="form-control" required onClick="hello();">
                  <option value="">--Select One--</option>
                  <?php foreach ($categories as $cat):?>
                  <option value="<?=$cat->journal_cat_id;?>" <?=set_select('journal_cat_id', $cat->journal_cat_id); ?>><?=$cat->journal_cat_title;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>SubCategory Name <span style="color:red">*</span></label>
                  <div>
                    <select class="form-control" id="set"><option value="">--Select One--</option></select>
                  </div>
                  <div id="show"></div>
               
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Title</label>
                <input type="text" name="journal_title" class="form-control" required value="<?=set_value('journal_title');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal ISSN Online</label>
                <input type="text" name="journal_issn_online" class="form-control"  value="<?=set_value('journal_issn_online');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Online Link</label>
                <input type="text" name="journal_online_link" class="form-control"  value="<?=set_value('journal_online_link');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal ISSN Print</label>
                <input type="text" name="journal_issn_print" class="form-control"  value="<?=set_value('journal_issn_print');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Impact Factor</label>
                <input type="text" name="journal_impact_factor" class="form-control"  value="<?=set_value('journal_impact_factor');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Indexing</label>
                <input type="text" name="journal_indexing" class="form-control"  value="<?=set_value('journal_indexing');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Scope</label>
                <input type="text" name="journal_scope" class="form-control"  value="<?=set_value('journal_scope');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Type</label>
                <input type="text" name="journal_type" class="form-control"  value="<?=set_value('journal_type');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Journal Subject</label>
                <input type="text" name="journal_subject" class="form-control"  value="<?=set_value('journal_subject');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor in Chief</label>
                <input type="text" name="journal_editor_chief" class="form-control"  value="<?=set_value('journal_editor_chief');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Current Volume</label>
                <input type="text" name="journal_curr_vol" class="form-control"  value="<?=set_value('journal_curr_vol');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Current Issue</label>
                <input type="text" name="journal_curr_issue" class="form-control"  value="<?=set_value('journal_curr_issue');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Website</label>
                <input type="text" name="journal_website" class="form-control"  value="<?=set_value('journal_website');?>">
              </div>
            </div>
            

            

            <div class="col-md-6">
              <div class="form-group">
                <label>Status <span style="color:red">*</span></label>
                <select name="journal_status" id="" class="form-control">
                  <option value="1">Publish</option>
                  <option value="0">Unpublish</option>
                </select>
              </div>
            </div>
          
            


            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Add Journal" onclick="confirm('Are You Sure?');" class="btn btn-success btn-flat">
        </div>
      </div>
   <?php echo form_close();?>
    </section>


