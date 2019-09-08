<div class="contact_us">
        <div class="container">
            <?php if($this->session->flashdata('msg')): ?>
                    <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('msg'); ?></strong></div>
                <?php endif; ?>
                <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
            <div class="row mb-5">

                <div class="col-lg-6">
                    <div class="mt-0 mb30" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82600.04928381216!2d90.37759436120811!3d23.80291464065464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1534406209100" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
					</div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="inner-contact">
                        <h3 class="title">Client Care</h3>
                        <p>US/Canada: 800-774-9473</p>
                        <p>International: 310-765-3200</p>
                        <p>Connect With Us</p>
                        <ul class="list-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="inner-contact">
                        <h3 class="title">US Office</h3>
                        <p>100 N. Sepulveda Boulevard</p>
                        <p>Suite 325</p>
                        <p>El Segundo, CA</p>
                        <p>90245</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="inner-contact">
                        <h3 class="title">Headquarter</h3>
                        <p>BA-137/1</p>
                        <p>South Badda, P.O. Box 1212</p>
                        <p>Gulshan, Dhaka</p>
                        <p>Bangladesh</p>
                    </div>
                    <div class="inner-contact bg-theme">
                        <p>Toll Free: 000-000-0000</p>
                        <p>Phone: 000-000-0000</p>
                        <p>Fax: 000-000-0000</p>
                    </div>
                </div>
			</div>
		</div>
		<div class="container">
			<div class="row mb-4">
				<div class="col text-center section_header">
					<h2>Never Hesitate to Reach Out</h2>
					<p class="text-theme">Contact us</p>
				</div>
			</div>
			<div class="contact_form">
				
                        <?php echo form_open('contact_us');?>
					<div class="row">
						<div class="col-md-4">
							<input class="input-fild" type="text" placeholder="Name*" name="name" required>
						</div>
						<div class="col-md-4">
							<input class="input-fild" type="email" placeholder="Email*" name="email" required>
						</div>
						<div class="col-md-4">
							<input class="input-fild" type="text" placeholder="Subject" name="subject">
						</div>
						<div class="col-md-12">
							<textarea class="input-fild" placeholder="Message*" name="message" required></textarea>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn-theme btn-theme-big">Submit</button>
						</div>
					</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>