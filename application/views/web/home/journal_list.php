
<div class="news blog_list">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
                    <div class="blog_list_item">
                        <h4 class="entry-title">
                            <a href="#">Seagull A to Z journal list and submission guidelines</a>
                        </h4>
                        <p class="description">Seagull as a new publication house it has a few journals and steps have been taken to launch journals in some important fields.</p>
                        <div class="info">
                            <p><span class="text-theme">A </span> |<span class="text-theme"> B</span> |<span class="text-theme"> C</span> |<span class="text-theme"> D</span> |<span class="text-theme"> E</span> |<span class="text-theme"> F</span> |<span class="text-theme"> G</span> |<span class="text-theme"> H</span> |<span class="text-theme"> <a href="#I">I</a></span> |<span class="text-theme"> J</span> |<span class="text-theme"> K</span> |<span class="text-theme"> L</span> |<span class="text-theme"> M</span> |<span class="text-theme"> N</span> |<span class="text-theme"> O</span> |<span class="text-theme"> P</span> |<span class="text-theme"> Q</span> |<span class="text-theme"> R</span> |<span class="text-theme"> S</span> |<span class="text-theme"> T</span> |<span class="text-theme"> U</span> |<span class="text-theme"> V</span> |<span class="text-theme"> W</span> |<span class="text-theme"> X</span> |<span class="text-theme">Y</span> |<span class="text-theme"> Z</span></p>

                        </div>
                    </div>
                    <hr class="blog_list_gap">
                    
                    <!-- <span id="I"></span> -->
                    
                    <div class="blog_list_item">
                        <!-- <h4 class="entry-title">
                            <a href="#">I</a>
                        </h4> -->
                        <div class="info">
                            <?php foreach ($journals as $jrn) {?>
                            <span class="text-theme">●</span> <a target="_blank" href="<?=$jrn->journal_website;?>"><?=$jrn->journal_title;?></a><br><br>
                            <?php } ?>
                        </div>
                    </div>
                    <hr class="blog_list_gap">
				</div>
				<div class="col-lg-4 col-md-12">
                  
						<div class="sidebar_widget">
							<h4 class="widget_title">Browse by Subject</h4>
							
							<ul class="sidebar_links">
								<?php foreach($subcat as $scat){?>
								<li><a href="<?=site_url('findjournal/'.$scat->journal_subcat_id);?>"><i class="ti-angle-right"></i> <?=$scat->journal_subcat_title;?></a></li>
								<?php } ?>
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>