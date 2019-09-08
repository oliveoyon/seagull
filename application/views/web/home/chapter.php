<div class="news blog_single">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <h4 class="entry-title"><?=$data->title;?></h4>
            <hr>
            <p><img src="<?=base_url('uploads/book_manuscript/'.$data->manuscript_no.'/'.$data->cover_image);?>" alt="" width="220" height="280" align="left">  &emsp;<span class="text-theme">● </span> <span style="font-weight: bolder;">Author:</span> Twinkle Prusty, Anup Kumar<br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Editor:</span> <?=$data->book_editor;?><br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">EISBN:</span> 9867176258927<br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Pages:</span> <?=$data->pages;?><br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">DOI:</span> <?=$data->manuscript_doi;?><br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Pubished Date:</span> <?= date("j F Y", strtotime($data->updated_at));?><br>  
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Publisher:</span> Seagull Publications<br>
               &emsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Copyright:</span> <?= date("Y", strtotime($data->updated_at));?>
               <br><br>
               &emsp;<a href="#"  class="btn btn-success btn-flat btn-sm">Download Preface</a>
               <a href="#"  class="btn btn-success btn-flat btn-sm">Access Full E-book</a>
               <br><br><br>
            <hr>
            <?php $i=1; foreach($chapters as $ch){?>
            <p style="text-align:justify;font-size:35px;">
               <a href="#"><?=$i++;?>. <?=$ch->chapter_title;?></a>
            </p>
            <p><strong>Author:<a target="_blank" href="#"><span class="text-theme"> </i> <?=$ch->author_name;?> <i class="fa fa-envelope" aria-hidden="true"></i></span></a></strong><br><strong>Editor:<a target="_blank" href="#"><span class="text-theme"> Abir Ahmed <i class="fa fa-envelope" aria-hidden="true"></i></span></a></strong></p>
            <br>
            <p class="meta text-muted">Pages <?=$ch->page_from;?>- <?=$ch->page_to;?> | Published online: <?= date("j F Y", strtotime($data->updated_at));?></P>
            <br>
            <p><strong>DOI: <a href="<?=$ch->doi;?>"><span class="text-theme"><i class="fa fa-external-link"></i> <?=$ch->doi;?></span></a></strong></p>
            <br>
            <p class="description"><?=$ch->description;?></p>
            <br>
            <p><a href="#"  class="btn btn-success btn-flat btn-sm">Get Access $<?=$ch->chapter_price;?> USD</a></p>
            <br><hr>
            <?php } ?>
         </div>
         <hr>
         <div class="col-lg-4 col-md-12">
            <div class="sidebar">
               <div class="sidebar_widget">
                  <h4 class="widget_title">Article Info</h4>
                  <ol class="sidebar_list_widget">
                     <li class="sidebar_list_widget_item">
                        <i class="fa fa-eye"> 13 Views</i>
                        <br><br>
                        <i class="fa fa-download"> 13 Downloads</i>
                        <br><br>
                        <i class="fa fa-quote-left" aria-hidden="true"> 15 Crossref Citation</i>
                        <br><br>
                        <i class="fa fa-quote-left" aria-hidden="true"> 215 Altmetric</i><br><br>
                        <i class="fa fa-file-export" aria-hidden="true"><strong><a target="_blank" href="#"><span class="text-theme"> Export Citation</span></a></strong></i>
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>