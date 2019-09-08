<div class="causes">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php foreach ($events as $event):?>
					<div class="cases_item causes_item_list text-center">
						<div class="row no-gutters">
							<div class="col-md-4">
								<div class="cases_img">
									<a href="#"><img src="<?=base_url('uploads/events/'.$event->event_image);?>" alt="Events"></a>
								</div>
							</div>
							<div class="col-md-8">
								<div class="cases_content">
									<h3><a href="<?=site_url('event/event_details/'.$event->event_title_slug);?>" class="cases_link"><?=$event->event_title;?></a></h3>
		
									<div class="entry-date bg-theme">
										<span class="day">6</span>
										<span class="month">Sep</span>
									</div>
		
									<p class="cases_info_text"><?=$event->event_short_description;?></p>
									<div class="entry-meta-wrapper">
										<span class="info-time">
											<i class="fa fa-clock-o"></i> 06 September, 2019 09:00 am</span>
										<span class="events-venue-details"><i class="fa fa-map-marker"></i> <?=$event->event_location;?> </span>
									</div>
									<a href="<?=site_url('event/event-details/'.$event->event_title_slug);?>" class="btn-theme btn-theme-outline">Join Now</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
					<div class="row">
                        <div class="col-12 text-center mt-5">
                            <?=$pagination;?>
                            
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-12">
					<?php $this->load->view('web/common/inc_news');?>
				</div>
			</div>
		</div>
	</div>