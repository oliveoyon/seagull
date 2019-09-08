<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php if(empty($title)){$titles=ucwords(str_replace("_", " ", $this->router->fetch_method()));}else{$titles=ucwords(preg_replace('~[\\\\_-]~', ' ',$title));}?>
    <title><?=$titles;?></title>
    <link rel="shortcut icon" href="<?=base_url('favicon.png');?>">
    <link rel="icon" href="demo_icon2.png" type="image/png" sizes="18x10">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans:400,600" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/font-awesome.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/slicknav.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/owl.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/animate.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/magnific-popup.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/web/css/main.css">

	<style>
		.blog_list_item .entry-title {
	margin: 0 0 30px;
	font-size: 15px;
	font-weight: 300;
}
	</style>
</head>

<body id="page_top">

	<div class="loader_container">
		<div class="loader_inner">
			<div class="loader">Loading...</div>
		</div>
	</div>
	
	<a class="go_top" href="#page_top"><i class="ti ti-angle-up"></i></a>

	<header>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="topmenu_links list-unstyled">
							<li><a href="<?=site_url('manuscript-tracking');?>"><i class="fa fa-cog"></i> Track Progress</a></li>
							<li><a href="<?=site_url('browse-products');?>"><i class="fa fa-shopping-cart"></i> Shop</a></li>
							<li><a href="<?=site_url('#');?>"><i class="fa fa-sign-in"></i> Sign In</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-social-inline list-unstyled float-right">
							<li class="social-item"><a target="_blank" href="https://www.facebook.com/seagull.publishers/"><i class="fa fa-facebook"></i></a></li>
							<li class="social-item"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="social-item"><a target="_blank" href="https://www.linkedin.com/company/seagullpublications"><i class="fa fa-linkedin"></i></a></li>
							<li class="social-item"><a target="_blank" href="https://www.youtube.com/channel/UCGCTiGHItcNRGbRnUlT-M8g/"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="header_middle">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo">
							<a href="https://seagullpublications.com">
								<img height="80" src="<?=base_url();?>assets/web/img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="header-contact-info float-right">
							<div class="header-contact-info-item">
								<div class="image">
									<img src="<?=base_url();?>assets/web/img/clock.png" alt="">
								</div>
								<div class="content">
									<div class="title text-theme">Monday - Saturday</div>
									<div class="desc">10 am to 06 pm</div>
								</div>
							</div>
							<div class="header-contact-info-item">
								<div class="image">
									<img src="<?=base_url();?>assets/web/img/smartphone.png" alt="">
								</div>
								<div class="content">
									<div class="title text-theme">Want to talk with us</div>
									<div class="desc">+88 01515636720</div>
								</div>
							</div>
							<div class="header-contact-info-item mr-0">
								<div class="image">
									<img src="<?=base_url();?>assets/web/img/envelope.png" alt="">
								</div>
								<div class="content">
									<div class="title text-theme">Send us Email</div>
									<div class="desc">info@seagullpublications.com</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="white_space"></div>
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<div class="col-7">
						<div class="sliknav"></div>

						<div class="logo_mobile">
							<a href="https://seagullpublications.com">
								<img src="<?=base_url();?>assets/web/img/logo.png" alt="logo">
							</a>
						</div>

						<ul id="menu" class="main_menu">
							
							<li class="topmenu">Our Services<i class="ti-angle-down"></i>
								<ul class="submenu">
							        <li><a href="<?=site_url('book-authors');?>">Book Publication</a></li> 
									<li><a href="<?=site_url('journal-authors');?>">Journal Publication</a></li>
									<li><a href="<?=site_url('conference-solution');?>">Conference Solution</a></li>
									<li><a href="<?=site_url('seagull-research-community');?>">Research Community</a></li> 
								</ul>

							<li class="topmenu">Submission Process <i class="ti-angle-down"></i>
								<ul class="submenu">
											<li><a href="<?=site_url('book-authors');?>">Book Submission</a></li>
											<li><a href="<?=site_url('journal-authors');?>">Journal Submission</a></li>
										</ul>
									</li>
	
							<li class="topmenu">Shops<i class="ti-angle-down"></i>
								<ul class="submenu">
								    <li><a href="<?=site_url('journal-list');?>">Journals List (A-Z)</a></li>
									<li><a href="<?=site_url('browse-products');?>">Books & Journals Shop</a></li>
									<li><a href="<?=site_url('e-services');?>">E-Services for Scholars</a></li>
								</ul>
							</li>
							<li class="topmenu">Platform<i class="ti-angle-down"></i>
								<ul class="submenu">
							        <li><a href="<?=site_url('author-services');?>">For Author</a></li> 
									<li><a href="<?=site_url('editor-services');?>">For Editor</a></li>
									<li><a href="<?=site_url('reviewer-services');?>">For Reviewer</a></li>
									<li><a href="<?=site_url('librarian-services');?>">For Librarian</a></li>
									<li><a href="<?=site_url('publisher-relations');?>">For Publisher</a></li>
									
								</ul>

							<li class="topmenu">Seagull<i class="ti-angle-down"></i>
								<ul class="submenu">
									<li><a href="<?=site_url('about-us');?>">About Us</a></li>
									<li><a href="<?=site_url('contact-us');?>">Contact Us</a></li>
									<li><a href="<?=site_url('blog/blog-list');?>">Latest Blogs</a></li>
									<li><a href="<?=site_url('event/event-list');?>">Latest Events</a></li>
									<li><a href="<?=site_url('gallery');?>">Gallery</a></li>
									<li><a href="<?=site_url('help-and-support');?>">Help & Support</a></li>
									<li><a href="<?=site_url('our-directors');?>">Our Directors</a></li>
									<li><a href="<?=site_url('meet-our-team');?>">Meet Our Team</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-5">
						<div class="float-right">
							<div class="cart d-inline-block">
								<a href="javascript:void(0)">
									<span class="text-skin cart-icon-top">
										<span class="count"> <?=$this->cart->total_items();?> </span>
										<img src="<?=base_url();?>assets/web/img/cart-top.png" alt="">
									</span>
								</a>
								<?php if($this->cart->total_items()){ ?>
								

								<div class="cart_list">
									<?php foreach ($this->cart->contents() as $key => $v) {
										$det=$this->Mdb->getDataRow('product',array('pdt_id'=>$v['id']));
									?>
									<div class="media widget-product">
										<div class="media-left">
											<a href="<?=site_url('product-detail/'.$det->pdt_hash_id);?>" class="image"><img src="<?=base_url('uploads/products/'.$det->pdt_image);?>" alt="" width="80" height="80"> </a>
										</div>
										<div>
											<p class="text-theme"><?=$v['qty'];?> x $<?=$v['price'];?></p>
											<h6 class="name">
												<a href="<?=site_url('product-detail/'.$det->pdt_hash_id);?>"><?=$v['name'];?></a>
											</h6>
										</div>
									</div>
									<hr>
									<?php } ?>
									<h6 class="text-theme mb-3"><b>Total : </b> $<?=$this->cart->total();?></h6>
									<p>
										<a href="<?=site_url('view-cart');?>" class="btn-theme bg-dark">View Cart <i class="ti-angle-right"></i></a>
										<a href="<?=site_url('checkout');?>" class="btn-theme">Checkout <i class="ti-angle-right"></i></a>
									</p>
								</div>
							<?php } else{?>
								<div class="cart_list">
									<p class="text-theme">
										<strong>Currently Empty:</strong>
										<span>$0.00</span>
									</p>
									<p><a href="<?=site_url('browse-products');?>" class="btn-theme">Continue shopping <i class="ti-angle-right"></i></a></p>
								</div>
							<?php } ?>
							</div>
	
							<div class="header-search d-inline-block">
								<span class="show-search">
									<i class="ti-search"></i>
								</span>
								<div class="header-search-form">
									<form action="#" method="get">
										<div class="input-group">
											<input placeholder="Search" name="s" class="header-search" type="text">
											<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-theme">
													<i class="fa fa-search"></i>
												</button>
											</span>
										</div>
										<input name="post_type" value="give_forms" class="post_type" type="hidden">
									</form>
								</div>
							</div>
	
							<div class="donate d-inline-block">
								<a href="<?=site_url('submit-manuscript');?>" class="btn-donate">Submit Manuscript</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>