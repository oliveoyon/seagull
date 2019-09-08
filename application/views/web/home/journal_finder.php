<div class="news blog_single">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="top-info">
                             <?php if($this->session->flashdata('searchdata')){$data=$this->session->flashdata('searchdata');
                             foreach($data as $d){
                             ?>
                        
                        <div class="entry-title">
                            <a href="<?=$d->journal_website;?>"><?=$d->journal_title;?></a>
                        </div>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">ISSN Online:</span> <?=$d->journal_issn_online;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">ISSN Print:</span> <?=$d->journal_issn_print;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Impact Factor:</span> <?=$d->journal_impact_factor;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Indexing:</span> <?=$d->journal_indexing;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Scope:</span> <?=$d->journal_scope;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Editor in Chief:</span> <?=$d->journal_editor_chief;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Current Volume:</span> <?=$d->journal_curr_vol;?><br>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-theme">●</span> <span style="font-weight: bolder;">Current Issue:</span> <?=$d->journal_curr_issue;?><br><br><br>
                         <a href="<?=$d->journal_website;?>"  class="btn btn-success btn-flat btn-sm">View Website</a>
                    </div><?php }?>
                <?php }else{?>
                        <div class="entry-title">
                            <a href="#">No Data Found</a> <span style="font-weight: bolder;"></span>
                        </div>
                    </div>
                <?php }?>
                    <hr>
                    
                </div>
			</div>
		</div>
	</div>