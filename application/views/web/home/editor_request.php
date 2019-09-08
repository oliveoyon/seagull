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
							<p>Editor Member Registration Form.</p>
						<div class="row">
							<div class="col-md-12">
								<label for="log_user">Journal <span>*</span></label>
								<select name="journal_id" id="log_user" class="form-control">
									<?php foreach($journals as $j){?>
									<option value="<?=$j->journal_id;?>" <?=set_select('journal_id', $j->journal_id); ?> ><?=$j->journal_title;?></option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-4">
								<label for="log_user">Title <span>*</span></label>
								<select name="editor_req_title" id="log_user" class="form-control">
									<option value="" <?=set_select('editor_req_title', '', TRUE); ?>>--Select One--</option>
									<option value="Dr." <?=set_select('editor_req_title', 'Dr.'); ?> >Dr.</option>
									<option value="Mr." <?=set_select('editor_req_title', 'Mr.'); ?>>Mr.</option>
									<option value="Miss" <?=set_select('editor_req_title', 'Miss'); ?>>Miss</option>
									<option value="Mrs." <?=set_select('editor_req_title', 'Mrs.'); ?>>Mrs.</option>
									<option value="Ms." <?=set_select('editor_req_title', 'Ms.'); ?>>Ms.</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="log_user">First Name  <span>*</span></label>
								<input class="form-control" type="text" name="editor_req_fname" id="log_user" placeholder="First Name" required value="<?=set_value('editor_req_fname');?>">
							</div>
							<div class="col-md-4">
								<label for="log_user">Last Name  <span>*</span></label>
								<input class="form-control" type="text" name="editor_req_lname" id="log_user" placeholder="Last Name" required value="<?=set_value('editor_req_lname');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Email  <span>*</span></label>
								<input class="form-control" type="email" name="editor_req_email" id="log_user" placeholder="Your Email" required value="<?=set_value('editor_req_email');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Phone</label>
								<input class="form-control" type="text" name="editor_req_phone" id="log_user" placeholder="Phone Number" value="<?=set_value('editor_req_phone');?>">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">University/Organization</label>
								<input class="form-control" type="text" name="editor_req_university" id="log_user" placeholder="University/Organization" value="<?=set_value('editor_req_university');?>">
							</div>

							<div class="col-md-6">
								<label for="log_user">Role</label>
								<input class="form-control" type="text" name="editor_req_role" id="log_user" placeholder="Role" value="<?=set_value('editor_req_role');?>">
							</div>
							
							<div class="col-md-6">
								<label for="log_user">Department</label>
								<input class="form-control" type="text" name="editor_req_department" id="log_user" placeholder="Department" value="<?=set_value('editor_req_department');?>">
							</div>
							<div class="col-md-6">
								<label for="log_user">Country  <span>*</span></label>
								<select class="custom-select" id="inputGroupSelect01" required name="editor_req_country">
									<option value=""<?=set_select('editor_req_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('editor_req_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="col-md-12">
								<label for="log_user">Upload CV</label>
								<input class="form-control" type="file" name="editor_req_cv" id="log_user">
							</div>
							<button type="submit" class="btn-theme">Submit</button>
							
						</div>
					   <br>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>