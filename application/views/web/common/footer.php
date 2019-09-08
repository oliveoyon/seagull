	<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_logo"><img src="<?=base_url();?>assets/web/img/logo-white.png" alt=""></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="footer_bottom_text">We offer you a suite of services that you have never experienced before. Our publication house will introduce you with a number of new ideas. Let's have a good journey with us.</p>
				</div>
				<div class="col-md-2">
					<ul class="footer_menu">
						<li><a href="<?=site_url('imprint');?>">Imprint</a></li>
						<li><a href="<?=site_url('src/src-member-registration');?>">Join SRC</a></li>
						<li><a href="<?=site_url('publisher-relation');?>">Publisher Relations</a></li>
						<li><a href="<?=site_url('help-and-support');?>">Help & Support</a></li>
						<li><a href="<?=site_url('award-and-certificate');?>">Certifications</a></li>
					</ul>
				</div>  
				<div class="col-md-2">
					<ul class="footer_menu">
						<li><a href="<?=site_url('about-us');?>">Who we are</a></li>
						<li><a href="<?=site_url('browse-products');?>">Shop</a></li>
						<li><a href="<?=site_url('event/event-list');?>">Events</a></li>
						<li><a href="<?=site_url('blog/blog-list');?>">Blogs</a></li>
						<li><a href="<?=site_url('about-us');?>">About Us</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul class="footer_menu">
						<li><a href="<?=site_url('contact-us');?>">Contact Us</a></li>
						<li><a href="<?=site_url('file-a-complaint');?>">Submit a Complaint</a></li>
						<li><a href="<?=site_url('request-service');?>">Request a Service</a></li>
						<li><a href="<?=site_url('terms-of-service');?>">Terms of Use</a></li>
						<li><a href="<?=site_url('privacy-policy');?>">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Copyright © <?=date('Y')?> <span class="text-theme">Seagull Publications</span> - All rights reserved</p>
				</div>
				<div class="col-md-6 text-right">
					<ul class="footer_social list-inline">
						<li class="list-inline-item"><a href="https://www.facebook.com/seagull.publishers/"><i class="fa fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/company/seagullpublications"><i class="fa fa-linkedin"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCGCTiGHItcNRGbRnUlT-M8g/"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	

	<script src="<?=base_url();?>assets/web/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/web/js/bootstrap.js"></script>
	<script src="<?=base_url();?>assets/web/js/slicknav.min.js"></script>
	<script src="<?=base_url();?>assets/web/js/owl.js"></script>
	<script src="<?=base_url();?>assets/web/js/plugins.js"></script>
	<script src="<?=base_url();?>assets/web/js/magnific-popup.min.js"></script>
	<script src="<?=base_url();?>assets/web/js/scripts.js"></script>
	
	<script src="<?=base_url();?>assets/common/js/section.js"></script>
	<script>
        // popup-video active
        $('.video_pop').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false
        });
    </script>
</body>

</html>