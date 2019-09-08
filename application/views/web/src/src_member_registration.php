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
				<?php if($this->session->flashdata('msg')): ?>
                    <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('msg'); ?></strong></div>
                <?php endif; ?>
                <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
					<?php echo form_open('src/src-member-registration');?>
							<p>SRC Member Registration Form.</p>
						<div class="row">
							<div class="col-md-4">
								<label for="log_user">Title <span>*</span></label>
								<select name="src_title" id="log_user" class="form-control">
									<option value="" <?=set_select('src_title', '', TRUE); ?>>--Select One--</option>
									<option value="Dr." <?=set_select('src_title', 'Dr.'); ?> >Dr.</option>
									<option value="Mr." <?=set_select('src_title', 'Mr.'); ?>>Mr.</option>
									<option value="Miss" <?=set_select('src_title', 'Miss'); ?>>Miss</option>
									<option value="Mrs." <?=set_select('src_title', 'Mrs.'); ?>>Mrs.</option>
									<option value="Ms." <?=set_select('src_title', 'Ms.'); ?>>Ms.</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="log_user">First Name  <span>*</span></label>
								<input class="form-control" type="text" name="src_fname" id="log_user" placeholder="First Name" required value="<?=set_value('src_fname');?>">
							</div>
							<div class="col-md-4">
								<label for="log_user">Last Name  <span>*</span></label>
								<input class="form-control" type="text" name="src_lname" id="log_user" placeholder="Last Name" required value="<?=set_value('src_lname');?>">
							</div>
							<div class="col-md-12">
								<label for="log_user">Email  <span>*</span></label>
								<input class="form-control" type="email" name="src_email" id="log_user" placeholder="Your Email" required value="<?=set_value('src_email');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Password  <span>*</span></label>
								<input class="form-control" type="password" name="src_password" id="log_user" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Confirm Password  <span>*</span></label>
								<input class="form-control" type="password" name="cpassword" id="log_user" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">University/Organization</label>
								<input class="form-control" type="text" name="src_university" id="log_user" placeholder="University/Organization" value="<?=set_value('src_university');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Job Title</label>
								<input class="form-control" type="text" name="src_job_title" id="log_user" placeholder="Job Title" value="<?=set_value('src_job_title');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Department</label>
								<input class="form-control" type="text" name="src_department" id="log_user" placeholder="Department" value="<?=set_value('src_department');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Country  <span>*</span></label>
								<select class="custom-select" id="inputGroupSelect01" required name="src_country">
									<option value=""<?=set_select('src_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('src_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<button type="submit" class="btn-theme">Submit</button><br>
							
						</div><br>
						<p>Already have an account? <span class="text-theme">Sign In</span></p>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>