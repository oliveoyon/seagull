<style>.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 15px;
    cursor: pointer;
}</style>
      <!-- Direct Chat -->
        <div class="col-md-6">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Chat</h3>
<!-- 
              <ul class="list-inline">
                <?php  $revs=explode(" ",$data[0]->reviewer_id);
                  foreach ($revs as $rev) {
                    $rn=$this->Mdb->getData('book_reviewer',array('reviewer_id'=>$rev));
                ?>
                <li class="badge"><a href="<?=site_url('book_author/chat/');?>"><?php echo $rn[0]->reviewer_name;?></a></li>
                <?php } ?>
              </ul> -->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
              <?php foreach ($messages as $msg) {?>
                <?php if($msg->sender == 'Author'){?>
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?=$names['authorname'];?></span>
                    <span class="direct-chat-timestamp pull-right"><?=date("F j, Y, g:i a",strtotime($msg->created_at));?></span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <div class="direct-chat-text">
                    <?=$msg->comment_description;?>
                    <?php if($msg->files){?>
                    <a href="<?=base_url('uploads/book_manuscript/'.$msg->manuscript_no.'/chat_file/'.$msg->files);?>">&nbsp;&nbsp;<span style="color:white;"><i class="fa fa-paperclip" title="<?=$msg->files?>"></i></span></a>
                    <?php }?>
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
                <?php } ?>

                <?php if($msg->sender == 'Reviewer'){?>
                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right"><?=$names['reviwername'];?></span>
                    <span class="direct-chat-timestamp pull-left"><?=date("F j, Y, g:i a",strtotime($msg->created_at));?></span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <div class="direct-chat-text">
                    <?=$msg->comment_description;?>
                    <?php if($msg->files){?>
                    <a href="<?=base_url('uploads/book_manuscript/'.$msg->manuscript_no.'/chat_file/'.$msg->files);?>">&nbsp;&nbsp;<span style="color:white;"><i class="fa fa-paperclip" title="<?=$msg->files?>"></i></span></a>
                    <?php }?>
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
                <?php } ?>
                <?php } ?>
              </div>
              <!--/.direct-chat-messages-->
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <?php echo form_open_multipart();?>
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control" required>
                      <span class="input-group-addon">
                        <div class="image-upload">
                            <label for="file-input">
                                <img src="<?=site_url('assets/dashboard/img/attachment.jpg')?>"/>
                            </label>

                            <input id="file-input" type="file" name="file" />
                        </div>
                      </span>
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Send</button>
                      </span>
                </div>
              <?php echo form_close();?>
            </div>




            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div>
        <!-- /.col -->

        <script type="text/javascript">

       var objDiv = $(".direct-chat-messages");

       var h = objDiv.get(0).scrollHeight;

       objDiv.animate({scrollTop: h});

    </script>