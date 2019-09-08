<style>
	select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 10px);
}
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid #000;
  border-top: 5px solid hsla(0, 0%, 20%, 0.9);
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
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
		                <?php echo $error;?>
						<?php echo form_open_multipart();?>
						<p>Book Manuscript Submission.</p>
						<div class="row">
							<div class="col-md-6">
								<label for="log_user">Title<span>*</span></label>
								<input class="form-control" type="text" name="title" value="<?=set_value('title');?>" id="log_user" placeholder="Book Title" required>
							</div>
						
							<div class="col-md-6">
								<label for="log_user">Subtitle </label>
								<input class="form-control" type="text" name="subtitle" value="<?=set_value('subtitle');?>" id="log_user" placeholder="Book Subtitle" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Keywords </label>
								<input class="form-control" type="text" name="keyword" value="<?=set_value('keyword');?>" id="log_user" placeholder="Keywords" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Area of Work  <span>*</span></label>
								<input class="form-control" type="text" name="area_of_work" value="<?=set_value('area_of_work');?>" id="log_user" placeholder="Area of Work" required>
							</div>
							<div class="col-md-12">
								<label for="log_user">Primary Audiance<span>*</span></label>
								<input class="form-control" type="text" name="primary_audiance" value="<?=set_value('primary_audiance');?>" id="log_user" placeholder="Please indicate the most relevant target audience seperated by commas" required>
							</div>
							<div class="col-md-12">
								<label for="log_user">Program/Level<span>*</span> <span  data-tooltip="If the book could be used for a course please provide details, including program and level."><i class="fa fa-info-circle" style="color:green;font-style:italic"></i></span></label>
								<input class="form-control" type="text" name="program_level" value="<?=set_value('program_level');?>" id="log_user" placeholder="Program and Level" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">First Name  <span>*</span></label>
								<input class="form-control" type="text" name="your_fname" value="<?=set_value('your_fname');?>" id="log_user" placeholder="First Name" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Last Name  <span>*</span></label>
								<input class="form-control" type="text" name="your_lname" value="<?=set_value('your_lname');?>" id="log_user" placeholder="Last Name" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Institution  <span>*</span></label>
								<input class="form-control" type="text" name="your_institution" value="<?=set_value('your_institution');?>" id="log_user" placeholder="Institution" required>
							</div>
							    <div class="col-md-6">
								<label for="log_user">Department  <span>*</span></label>
								<input class="form-control" type="text" name="your_department" value="<?=set_value('your_department');?>" id="log_user" placeholder="Department" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Email  <span>*</span></label>
								<input class="form-control" type="email" name="your_email" id="log_user" placeholder="Your Email" required>
							</div>
							
							<div class="col-md-6">
								<label for="log_user">Password <span>*</span></label>
								<input class="form-control" type="password" name="your_password" id="log_user" placeholder="Password" required>
							</div>

							<div class="col-md-6">
								<label for="log_user">Confirm Password <span>*</span></label>
								<input class="form-control" type="password" name="your_cpassword" id="log_user" placeholder="Confirm Password" required>
							</div>
							<div class="col-md-6">
								<label for="log_user">Country  <span>*</span></label>
								<select class="custom-select" required id="inputGroupSelect01" required name="your_country">
									<option value=""<?=set_select('your_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('your_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="col-md-12">
								<label for="log_user">Upload File<span>*</span> <span  data-tooltip="Upload Your Filled Book Submission Form"><i class="fa fa-info-circle" style="color:green;font-style:italic"></i></span></label>
								<input class="form-control" type="file" name="book_submission_form" id="log_user">
							</div>
							<button type="submit" class="btn-theme">Submit</button>
						<?php echo form_close();?>	
						</div><br>
						<p>Already approved for submission? <span class="text-theme">Sign In</span></p>
				</div>
			</div>
		</div>
	</div>
</div>