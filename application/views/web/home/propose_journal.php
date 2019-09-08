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
				<?php echo $error;?>
					<?php echo form_open_multipart();?>
							<p>Proposal for New Journal Launch</p>
						<div class="row">
							<div class="col-md-12">
								<label for="log_user">Journal <span>*</span></label>
							<input class="form-control" type="text" name="title" id="log_user" placeholder="New Journal Name" required value="<?=set_value('title');?>">
							</div>
							<div class="col-md-4">
								<label for="log_user">Title <span>*</span></label>
								<select name="title" id="log_user" class="form-control">
									<option value="" <?=set_select('title', '', TRUE); ?>>--Select One--</option>
									<option value="Dr." <?=set_select('title', 'Dr.'); ?> >Dr.</option>
									<option value="Mr." <?=set_select('title', 'Mr.'); ?>>Mr.</option>
									<option value="Miss" <?=set_select('title', 'Miss'); ?>>Miss</option>
									<option value="Mrs." <?=set_select('title', 'Mrs.'); ?>>Mrs.</option>
									<option value="Ms." <?=set_select('title', 'Ms.'); ?>>Ms.</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="log_user">First Name  <span>*</span></label>
								<input class="form-control" type="text" name="fname" id="log_user" placeholder="First Name" required value="<?=set_value('fname');?>">
							</div>
							<div class="col-md-4">
								<label for="log_user">Last Name  <span>*</span></label>
								<input class="form-control" type="text" name="lname" id="log_user" placeholder="Last Name" required value="<?=set_value('lname');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Open Access  <span>*</span></label>
								<select name="open_access" id="" class="form-control">
				                  <option value="Yes" <?=set_select('open_access', 'Yes'); ?>>Yes</option>
				                  <option value="No" <?=set_select('open_access', 'No'); ?>>No</option>
				                </select>
							</div>
							<div class="col-md-6">
								<label for="log_user">Why this Journal  <span>*</span></label>
								<input class="form-control" type="text" name="why_journal" id="log_user" placeholder="Why this Journal" required value="<?=set_value('why_journal');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Editor in Chief  <span>*</span></label>
								<input class="form-control" type="text" name="editor_in_chief" id="log_user" placeholder="Editor in Chief" required value="<?=set_value('editor_in_chief');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Editor<span>*</span></label>
								<input class="form-control" type="text" name="editor" id="log_user" placeholder="Editor" required value="<?=set_value('editor');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Email  <span>*</span></label>
								<input class="form-control" type="email" name="email" id="log_user" placeholder="Your Email" required value="<?=set_value('email');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Phone</label>
								<input class="form-control" type="text" name="phone" id="log_user" placeholder="Phone Number" value="<?=set_value('phone');?>">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">University/Organization</label>
								<input class="form-control" type="text" name="university" id="log_user" placeholder="University/Organization" value="<?=set_value('university');?>">
							</div>

							<div class="col-md-6">
								<label for="log_user">Role</label>
								<input class="form-control" type="text" name="role" id="log_user" placeholder="Role" value="<?=set_value('role');?>">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">Department</label>
								<input class="form-control" type="text" name="department" id="log_user" placeholder="Department" value="<?=set_value('department');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Country  <span>*</span></label>
								<select class="custom-select" id="inputGroupSelect01" required name="country">
									<option value=""<?=set_select('country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="col-md-12">
								<label for="log_user">Upload CV</label>
								<input class="form-control" type="file" name="cv" id="log_user">
							</div>
							<button type="submit" class="btn-theme">Submit</button>
							
						</div>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>