<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	<div class="events enevt_single">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cases_single_item_details">
						<div class="cases_single_item_details_img">
							<a href="#"><img class="img-fluid" src="<?=base_url('uploads/events/'.$event->event_image);?>" alt="Events"></a>
						</div>
						<div class="cases_single_item_details_content">

							<div class="event_top_info">
								<div class="event_time_info text-right">
									<h4>Start Time</h4>
									<p><?=date("jS F, Y G:ia", strtotime($event->event_start));?></p>
								</div>
								<div class="event_time_info text-left">
									<h4>Finish Time</h4>
									<p><?=date("jS F, Y G:ia", strtotime($event->event_end));?></p>
								</div>
								<p class="d-inline-block"><i class="fa fa-clock-o"></i> <?=$event->event_location;?> </p>
								<p class="d-inline-block ml-3"><i class="fa fa-money"></i> €125 - €495</p>
							</div>

							<h2 class="causes_single_title"><?=$event->event_title;?></h2>

							<p class="cases_info_text"><?=$event->event_description;?></p>
				<div class="col-lg-4 col-md-12">
					<?php $this->load->view('web/common/inc_news');?>
				</div>
			</div>
		</div>
	</div>