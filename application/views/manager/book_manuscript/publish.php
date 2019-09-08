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
      <?php echo form_open_multipart();?>
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
                  <td><?=$books->title;?></td>
                </tr>
                  <tr>
                  <th>Area</th>
                  <td><?=$books->area_of_work;?></td>
                </tr>
                <tr>
                  <th>Author Name</th>
                  <td><?=$data->your_fname.' '.$data->your_lname;?></td>
                </tr>
                  <tr>
                  <th>Institution</th>
                  <td><?=$data->your_institution;?></td>
                </tr>
                  <tr>
                  <th>Email</th>
                  <td><?=$data->your_email;?></td>
                </tr> 
                <tr>
                  <th>Manuscript Status</th>
                  <td><span class="label label-success">Accepted</span></td>
                </tr>
                <tr>
                  <th>Book Editor Name</th>
                  <td><input type="text" name="book_editor" required="" id=""></td>
                </tr>
                <tr>
                  <th>EISBN</th>
                  <td><input type="text" name="eisbn" required="" id=""></td>
                </tr>
                <tr>
                  <th>DOI</th>
                  <td><input type="text" name="manuscript_doi" required="" id=""></td>
                </tr>
                <tr>
                  <th>Pages</th>
                  <td><input type="text" name="pages" required="" id=""></td>
                </tr>
                <tr>
                  <th>Book Price</th>
                  <td><input type="number" name="price" required="" id=""></td>
                </tr>
                <tr>
                  <th>Upload Cover</th>
                  <td><input type="file" name="cover_image" required="" id=""></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>

  <section class="content ">
    
    <div class="optionBox">
      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Book Chapter</h3>
            </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Chapter Title</label>
                <input class="form-control" id="" name="chapter_title[]" placeholder="Chapter Title" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Description</label>
                <input class="form-control" id="" name="description[]" placeholder="Description" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Author Name</label>
                 <input class="form-control" id="" name="author_name[]" placeholder="Author Name" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Author Department</label>
                 <input class="form-control" id="" name="author_department[]" placeholder="Author Department" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Author Institution</label>
                 <input class="form-control" id="" name="author_institution[]" placeholder="Author Institution" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Author Email</label>
                 <input class="form-control" id="" name="author_email[]" placeholder="Author Email" type="text" required value="<?=set_value('');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Editor Name</label>
                 <input class="form-control" id="" name="editor_name[]" placeholder="Editor Name" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Department</label>
                 <input class="form-control" id="" name="editor_department[]" placeholder="Editor Department" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Institution</label>
                 <input class="form-control" id="" name="editor_institution[]" placeholder="Editor Institution" type="text" required value="<?=set_value('');?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Editor Email</label>
                 <input class="form-control" id="" name="editor_email[]" placeholder="Editor Email" type="text" required value="<?=set_value('');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Pages From</label>
                 <input class="form-control" id="" name="page_from[]" placeholder="Pages From" type="text" required value="<?=set_value('');?>">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Pages To</label>
                 <input class="form-control" id="" name="page_to[]" required placeholder="Pages To" type="text" value="<?=set_value('');?>">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>DOI</label>
                <input class="form-control" id="" name="doi[]" placeholder="Input DOI" type="text" required value="<?=set_value('');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Chapter Price</label>
                <input class="form-control" id="" name="chapter_price[]" placeholder="Price" type="text" required value="<?=set_value('');?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Upload</label>
                <input type="file" name="files[]" required="">
              </div>
            </div>

            

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
      </div>
      <div class="col-md-12 block"><span class="add btn btn-success btn-sm">+</span></div> 
      <br><br>
      <div class="box-footer">
          <input type="submit" value="Add New Chapter" class="btn btn-success btn-flat">
      </div> 
    </div>

     <?php echo form_close();?>     

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




 



<script>
$('.add').click(function() {
    $('.block:last').before('<div class="block"><div class="box box-success"><div class="box-header with-border"><h3 class="box-title">Book Chapter</h3></div><div class="box-body"><div class="row"><div class="col-md-6"><div class="form-group"><label>Chapter Title</label><input class="form-control" id="" name="chapter_title[]" placeholder="Chapter Title" type="text" required"></div></div><div class="col-md-6"><div class="form-group"><label>Description</label><input class="form-control" id="" name="description[]" placeholder="Description" type="text" required></div></div><div class="col-md-6"><div class="form-group"><label>Author Name</label><input class="form-control" id="" name="author_name[]" required placeholder="Author Name" type="text""></div></div><div class="col-md-6"><div class="form-group"><label>Author Department</label><input class="form-control" id="" name="author_department[]" placeholder="Author Department" type="text" required placeholder="Author Department"></div></div><div class="col-md-6"><div class="form-group"><label>Author Institution</label><input class="form-control" id="" name="author_institution[]" placeholder="Author Institution" type="text" required placeholder="Author Institution"></div></div><div class="col-md-6"><div class="form-group"><label>Author Email</label><input class="form-control" id="" name="author_email[]" placeholder="Author Email" type="text" required placeholder="Author Email"></div></div><div class="col-md-6"><div class="form-group"><label>Editor Name</label><input class="form-control" required id="" name="editor_name[]" placeholder="Editor Name" type="text""></div></div><div class="col-md-6"><div class="form-group"><label>Editor Department</label><input class="form-control" id="" name="editor_department[]" placeholder="Editor Department" type="text" required placeholder="Editor Department"></div></div><div class="col-md-6"><div class="form-group"><label>Editor Institution</label><input class="form-control" id="" name="editor_institution[]" placeholder="Editor Institution" type="text" required placeholder="Editor Institution"></div></div><div class="col-md-6"><div class="form-group"><label>Editor Email</label><input class="form-control" id="" name="editor_email[]" placeholder="Editor Email" type="text" required placeholder="Editor Email"></div></div><div class="col-md-6"><div class="form-group"><label>Pages From</label><input class="form-control" id="" name="page_from[]" required placeholder="Pages From" type="text""></div></div><div class="col-md-6"><div class="form-group"><label>Pages To</label><input class="form-control" id="" name="page_to[]" required placeholder="Pages To" type="text""></div></div><div class="col-md-6"><div class="form-group"><label>DOI</label><input class="form-control" id="" name="doi[]" placeholder="Input DOI" type="text" required"></div></div><div class="col-md-6"><div class="form-group"><label>Chapter Price</label><input class="form-control" id="" name="chapter_price[]" placeholder="Price" type="text" required ></div></div><div class="col-md-6"><div class="form-group"><label>Upload</label><input type="file" name="files[]" required=""></div></div></div></div><div class="box-footer"></div></div> <span class="remove bg-info"><input type="button" class="btnDel btn btn-sm btn-danger" value="Delete" /></span><br><br></div>');
});
$('.optionBox').on('click','.remove',function() {
    $(this).parent().remove();
});


</script>










