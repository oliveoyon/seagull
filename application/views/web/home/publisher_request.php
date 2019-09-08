<style>
	select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 10px);
}
</style>
	<div class="checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="login_f" id="login_f">
					<?php if($this->session->flashdata('pubreq')): ?>
                    <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('pubreq'); ?></strong></div>
	                <?php endif; ?>
	                <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
					<?php echo form_open();?>
						<p>Publisher Registration Form.</p>
						<div class="row">
							<div class="col-md-12">
								<label for="log_user">Publication Name<span>*</span></label>
								<input class="form-control" required type="text" name="publication_name" value="<?=set_value('publication_name');?>" id="log_user" placeholder="Publication Name">
							</div>
						
							<div class="col-md-6">
								<label for="log_user">Product <span>*</span></label>
								<select name="publisher_pdt_name" required id="log_user" class="form-control">
								    	<option value="">--Select One--</option>
									<option value="" <?=set_select('publisher_pdt_name', '', TRUE); ?>>--Select One--</option>
									<option value="Book" <?=set_select('publisher_pdt_name', 'Book'); ?> >Book</option>
									<option value="Journal" <?=set_select('publisher_pdt_name', 'Journal'); ?>>Journal</option>
									<option value="Both" <?=set_select('publisher_pdt_name', 'Both'); ?>>Both</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="log_user">Product Type <span>*</span></label>
								<select name="publisher_pdt_type" required id="log_user" class="form-control">
								    	<option value="">--Select One--</option>
									<option value="" <?=set_select('publisher_pdt_type', '', TRUE); ?>>--Select One--</option>
									<option value="Academic" <?=set_select('publisher_pdt_type', 'Academic'); ?> >Academic</option>
									<option value="Non Academic" <?=set_select('publisher_pdt_type', 'Non Academic'); ?>>Non Academic</option>
									<option value="Both" <?=set_select('publisher_pdt_type', 'Both'); ?>>Both</option>
								</select>
							</div>
								<div class="col-md-4">
								<label for="log_user">Title <span>*</span></label>
								<select name="publisher_title" required id="log_user" class="form-control">
									<option value="">--Select One--</option>
									<option value="" <?=set_select('publisher_title', '', TRUE); ?>>--Select One--</option>
									<option value="Dr." <?=set_select('publisher_title', 'Dr.'); ?> >Dr.</option>
									<option value="Mr." <?=set_select('publisher_title', 'Mr.'); ?>>Mr.</option>
									<option value="Miss" <?=set_select('publisher_title', 'Miss'); ?>>Miss</option>
									<option value="Mrs." <?=set_select('publisher_title', 'Mrs.'); ?>>Mrs.</option>
									<option value="Ms." <?=set_select('publisher_title', 'Ms.'); ?>>Ms.</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="log_user">First Name  <span>*</span></label>
								<input class="form-control" required type="text" name="publisher_fname" value="<?=set_value('publisher_fname');?>" id="log_user" placeholder="First Name">
							</div>
							<div class="col-md-4">
								<label for="log_user">Last Name  <span>*</span></label>
								<input class="form-control" required type="text" name="publisher_lname" value="<?=set_value('publisher_lname');?>" id="log_user" placeholder="Last Name">
							</div>
							<div class="col-md-6">
								<label for="log_user">Email  <span>*</span></label>
								<input class="form-control" required type="email" name="publisheremail" value="<?=set_value('publisheremail');?>" id="log_user" placeholder="Your Email">
							</div>
							<div class="col-md-6">
								<label for="log_user">Phone</label>
								<input class="form-control" required type="text" name="publisher_phone" value="<?=set_value('publisher_phone');?>" id="log_user" placeholder="Phone Number">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">Password <span>*</span></label>
								<input class="form-control" required type="password" name="publisher_password" id="log_user" placeholder="Password">
							</div>

							<div class="col-md-6">
								<label for="log_user">Confirm Password <span>*</span></label>
								<input class="form-control" required type="password" name="cpass" id="log_user" placeholder="Confirm Password">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">Role</label>
								<select name="publisher_role" required id="log_user" class="form-control">
									<option value="" <?=set_select('publisher_role', '', TRUE); ?>>--Select One--</option>
									<option value="CEO" <?=set_select('publisher_role', 'CEO', TRUE); ?>>CEO</option>
									<option value="CCO" <?=set_select('publisher_role', 'CCO', TRUE); ?>>CCO</option>
									<option value="MD" <?=set_select('publisher_role', 'MD', TRUE); ?>>MD</option>
									<option value="Manager" <?=set_select('publisher_role', 'Manager', TRUE); ?>>Manager</option>
									<option value="Sales Executive" <?=set_select('publisher_role', 'Sales Executive', TRUE); ?>>Sales Executive</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="log_user">Address <span>*</span></label>
								<input class="form-control" required type="text" name="publisher_address" value="<?=set_value('publisher_address');?>" id="log_user" placeholder="Address">
							</div>
							<div class="col-md-6">
								<label for="log_user">City <span>*</span></label>
								<input class="form-control" required type="text" name="publisher_city" value="<?=set_value('publisher_city');?>" id="log_user" placeholder="City">
							</div>
							<div class="col-md-6">
								<label for="log_user">Zip <span>*</span></label>
								<input class="form-control" type="text" name="publisher_zip" value="<?=set_value('publisher_zip');?>" id="log_user" placeholder="Zip Code">
							</div>
							<div class="col-md-6">
								<label for="log_user">Year of Established <span>*</span></label>
								<input class="form-control" required type="text" name="publisher_year" value="<?=set_value('publisher_year');?>" id="log_user" placeholder="Year in 4 Digit. EX: 2019">
							</div>
							<div class="col-md-6">
								<label for="log_user">Country  <span>*</span></label>
								<select class="custom-select" required id="inputGroupSelect01" required name="publisher_country">
									<option value=""<?=set_select('publisher_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('publisher_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<button type="submit" class="btn-theme">Submit</button>
							<?php echo form_close();?>
						</div><br>
				</div>
			</div>
		</div>
	</div>
</div>