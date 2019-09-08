
					<div class="sidebar">
						<div class="sidebar_widget">
							<form action="#">
								<div class="input-group mb-3">
									<input type="text" class="form-control">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="ti-search"></i></button>
									</div>
								</div>
							</form>
						</div>
						<?php
							$newss=$this->Mdb->getDataDescLimit('news',array('news_status'=>1),'created_at',3);
						?>
						<div class="sidebar_widget">
							<h4 class="widget_title">Latest News Update</h4>

							<ol class="sidebar_list_widget">
								<?php foreach ($newss as $nw) {?>
								<li class="sidebar_list_widget_item">
									<a href="#">
										<div class="sidebar_img">
											<img width="80" src="<?=base_url('uploads/'.$nw->thumbnail);?>" alt="<?=$nw->news_title;?>">
										</div>
										<div class="sidebar_list_content">
											<h4><?=$nw->news_title;?></h4>
											<p><?=date("F d, Y", strtotime($nw->created_at)); ?></p>
										</div>
									</a>
								</li>
								<?php } ?>
								<li class="mb-5"><a href="#" class="view_all_event text-theme">View All News</a></li>
							</ol>
						</div>
					</div>
				