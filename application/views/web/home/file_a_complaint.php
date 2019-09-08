<div class="checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert_custom alert-secondary" role="alert">
						<span class="ti-bookmark"></span>We apologize that you are not satisfied with our service. To help us better understand your complaint, please provide further detail below:
					</div>
				</div>
			
			<div class="row">
				<div class="col-md-8">
					<h4>Customer Complaint</h4>
					<div class="billing_det_f">
						<?php if($this->session->flashdata('msg')): ?>
						    <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('msg'); ?></strong></div>
						<?php endif; ?>
						<?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
						<?php echo form_open('file-a-complaint');?>
						
							<div class="row">
								<div class="col-md-6">
									<label for="">First name <span>*</span></label> <br>
									<input class="form-control" type="text" name="complainant_fname"  value="<?=set_value('complainant_fname');?>"> 
								</div>
								<div class="col-md-6">
									<label for="">Last name <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="complainant_lname" required value="<?=set_value('complainant_lname');?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="">University/ Organization Name</label> <br>
									<input class="form-control mb-4" type="text" name="complainant_org"  value="<?=set_value('complainant_org');?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="">Country <span>*</span></label> <br>
									<div class="input-group mb-4">
										<select class="custom-select" id="inputGroupSelect01" required name="complainant_country">
											<option value="">Choose Country</option>
											<?php foreach ($countries as $country):?>
											<option value="<?=$country->country_id;?>"><?=$country->country_name;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<label for="">If you have an Incident Reference number, please enter it here</label> <br>
									<input class="form-control mb-2" type="text" name="complainant_reff"  value="<?=set_value('complainant_reff');?>">

									<label for="">What in particular has left you unsatisfied?</label> <br>
									<input class="form-control mb-4" type="text" name="complainant_particular"  value="<?=set_value('complainant_particular');?>">

									<label for="">District <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="complainant_district"  value="<?=set_value('complainant_district');?>">

									

									<label for="">Email address <span>*</span></label> <br>
									<input class="form-control mb-4" type="email" required name="complainant_email"  value="<?=set_value('complainant_email');?>">
									<label for="">We'll contact you by email. However, if you prefer to be contacted by telephone, please provide below including area code
</label> <br>
									<input class="form-control mb-4" type="text" name="complainant_areacode"  value="<?=set_value('complainant_areacode');?>">
								</div>
								<div class="col-md-12">

									<!-- <div class="collapse" id="ship_to_diff_form">
										<div class="row">
											<div class="col-md-6">
												<label for="">First name <span>*</span></label> <br>
												<input class="form-control" type="text">
											</div>
											<div class="col-md-6">
												<label for="">Last name <span>*</span></label> <br>
												<input class="form-control mb-4" type="text">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label for="">Company Name</label> <br>
												<input class="form-control mb-4" type="text">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label for="">Country <span>*</span></label> <br>
												<div class="input-group mb-4">
													<select class="custom-select" id="inputGroupSelect01">
														<option selected>Choose Country</option>
														<option value="1">One</option>
														<option value="2">Two</option>
														<option value="3">Three</option>
													</select>
												</div>
												<label for="">Street address</label> <br>
												<input class="form-control mb-2" type="text" placeholder="House number and street name">
												<input class="form-control mb-4" type="text" placeholder="Apartment, suite, unit etc. (optional)">
			
												<label for="">Town / City</label> <br>
												<input class="form-control mb-4" type="text">
			
												<label for="">District <span>*</span></label> <br>
												<input class="form-control mb-4" type="text">
			
												<label for="">Postcode / ZIP</label> <br>
												<input class="form-control mb-4" type="text">
											</div>
										</div>
									</div> -->

									<label for="">Describe Notes <span>*</span></label> <br>
									<textarea required name="complainant_description" class="form-control" placeholder="Notes about your complain, e.g. special notes for journal manuscript submission."> <?=set_value('complainant_description');?></textarea><br>
                       <p><button type="submit" class="btn-theme">Submit</button></p>
								</div>
								
							</div>
						<?php echo form_close();?>
					</div>
				</div>
				<div class="col-md-4">

					<div class="checkout-sidebar_bottom" id="rdo-main">

						<div data-toggle="collapse" data-target="#rdo1">
							<input type="radio" id="rdo11" name="rdo" checked="checked"> <label for="rdo11"><b>Direct it to Admin</b> </label>
						</div>
						<div id="rdo1" class="collapse show" aria-expanded="true" aria-labelledby="rdo1" data-parent="#rdo-main">
							<p>Place your complaint directly to the Admin.<br> Anup Kumar<br> Founder & CEO <br> Email: anup@seagullpublications.com</p>

						</div> 

						<div data-toggle="collapse" data-target="#rdo2">
							<input type="radio" id="rdo22" name="rdo"> <label for="rdo22"><b>Head Office</b> </label>
						</div>
						<div id="rdo2" class="collapse" aria-labelledby="rdo2" data-parent="#rdo-main">
							<p>BA-137/1, South Badda<br>Gulshan<br>Dhaka-1212<br>Email: admin@seagullpublications.com</p>
						</div> 

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

