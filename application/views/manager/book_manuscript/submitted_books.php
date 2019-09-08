<script type="text/javascript">
    function hello()
    {
      var status_id =document.getElementById("status_id").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("show").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>book_manuscript/getBooks/"+status_id,true); 
        xmlhttp.send();
    }
</script>

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
              <select name="status_id" class="form-control" onChange="hello();" id="status_id">
                <option value=""><?='Select an Option';?></option>
                <?php foreach ($status as $st) {?>
                  <option value="<?=$st->manuscript_status_id;?>"><?=$st->status_title;?></option>
                <?php } ?>
              </select>
              <br>
             
              
                 <div id="show"></div>
                  
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