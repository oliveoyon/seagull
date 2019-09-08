<?php 
$catname=$this->Mdb->getDataRow('product_category',array('pdt_cat_id'=>$product->pdt_cat_id));
$subcatname=$this->Mdb->getDataRow('product_subcategory',array('pdt_subcat_id'=>$product->pdt_subcat_id));
?>
<div class="shop">
        <div class="container">
        <?php if($this->session->flashdata('review')): ?>
        <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('review'); ?></strong></div>
      <?php endif; ?>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="product_sidebar">
                        <form action="" class="product_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Products.." aria-describedby="button-g">
                                <div class="input-group-append">
                                    <button class="btn btn-theme btn-theme-big" type="button" id="button-g">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="product_sidebar_widget">
                            <h2 class="widget_title">Product categories</h2>
                            <ul class="product_categories">
                                <?php foreach ($categories as $cat) {?>
                                <li><a href="<?=site_url('browse-products/'.$cat->pdt_cat_id)?>"><?=$cat->pdt_cat_name;?></a></li>
								<?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="single_product">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="zoom-gallery">
									<a class="zoom_image" href="<?=base_url('uploads/products/'.$product->pdt_image);?>">
										<img class="img-fluid" src="<?=base_url('uploads/products/'.$product->pdt_image);?>" alt="">
										<span class="ti-zoom-in"></span>
									</a>
								</div>
							</div>
							<div class="col-md-5">
								<h3 class="single_product_name"><?=$product->pdt_title;?></h3>
								<p class="single_product_price">
									<strike>$<?=$product->prev_price;?></strike>
									<span>$<?=$product->sale_price;?></span>
								</p>
								<p class="single_product_category">Categories: <a href="#"><?=$catname->pdt_cat_name;?></a></p>
								<p class="single_product_category">Sub Categories: <a href="#"><?=$subcatname->pdt_subcat_name;?></a></p>
								<p class="single_product_info"><?=$product->short_desc;?></p>
								<?php echo form_open('addtocart');?>
									<input type="number" class="qty" name="qty" value="1" min="1">
									<input type="hidden" name="id" value="<?=$product->pdt_id;?>">
					                <input type="hidden" name="price" value="<?=$product->sale_price;?>">
					                <input type="hidden" name="name" value="<?=$product->pdt_title;?>">
									<button type="submit" class="btn-theme">Add to Cart</button>
								<?php echo form_close();?>
							</div>
						</div>
					</div>
					<div class="product_tab">
						<ul class="nav nav_tab" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews (<?=count($review);?>)</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<p class="single_product_dec"><?=$product->pdt_desc;?></p>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<table class="table table-bordered">
									<?php if($product->pdt_editors){?><tr><td><b>Editor</b></td><td><?=$product->pdt_editors;?></td></tr><?php }?>
									<?php if($product->pdt_authors){?><tr><td><b>Author</b></td><td><?=$product->pdt_authors;?></td></tr><?php }?>
									<?php if($product->pdt_table_of_contents){?><tr><td><b>Table of Contents</b></td><td><?=$product->pdt_table_of_contents;?></td></tr><?php }?>
									<?php if($product->pdt_isbn){?><tr><td><b>ISBN</b></td><td><?=$product->pdt_isbn;?></td></tr><?php }?>
									<?php if($product->pdt_isbn_13){?><tr><td><b>ISBN13</b></td><td><?=$product->pdt_isbn_13;?></td></tr><?php }?>
									<?php if($product->pdt_e_isbn){?><tr><td><b>e-ISBN</b></td><td><?=$product->pdt_e_isbn;?></td></tr><?php }?>
									<?php if($product->pdt_issn){?><tr><td><b>ISSN</b></td><td><?=$product->pdt_issn;?></td></tr><?php }?>
									<?php if($product->pdt_e_issn){?><tr><td><b>e-ISSN</b></td><td><?=$product->pdt_e_issn;?></td></tr><?php }?>
									<?php if($product->pdt_imprint){?><tr><td><b>Imprint</b></td><td><?=$product->pdt_imprint;?></td></tr><?php }?>
									<?php if($product->pdt_cover_type){?><tr><td><b>Cover Type</b></td><td><?=$product->pdt_cover_type;?></td></tr><?php }?>
									<?php if($product->pdt_publication_date){?><tr><td><b>Publication Date</b></td><td><?=$product->pdt_publication_date;?></td></tr><?php }?>
									<?php if($product->pdt_edition_year){?><tr><td><b>Edition Year</b></td><td><?=$product->pdt_edition_year;?></td></tr><?php }?>
									<?php if($product->pdt_pages){?><tr><td><b>Pages</b></td><td><?=$product->pdt_pages;?></td></tr><?php }?>
									<?php if($product->pdt_language){?><tr><td><b>Language</b></td><td><?=$product->pdt_language;?></td></tr><?php }?>
									<?php if($product->pdt_setting){?><tr><td><b>Settings</b></td><td><?=$product->pdt_setting;?></td></tr><?php }?>
									<?php if($product->pdt_area_work){?><tr><td><b>Area of Work</b></td><td><?=$product->pdt_area_work;?></td></tr><?php }?>
									<?php if($product->pdt_copyright){?><tr><td><b>Copyright</b></td><td><?=$product->pdt_copyright;?></td></tr><?php }?>

									
								</table>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="tab_review">
									<?php foreach ($review as $rev) {?>
									<div class="tab_single_review">
										<img src="<?=base_url();?>assets/web/img/avater.jpg" alt="">
										<div class="review_desc">
											<p class="reviewer_name"><span><?=$rev->name;?> -</span> <?=date("jS F, Y", strtotime($rev->created_at));?> </p>
											<p class="review_text"><?=$rev->text;?></p>
										</div>
									</div>
									<?php } ?>
									
									<div class="add_review">
										<h4>Add a review</h4>

										<?php echo form_open('product_review');?>
											<div class="row">
												<div class="col-md-12">
													<label>Your Review</label>
													<textarea class="input_fild" placeholder="Message" name="text" required></textarea>
												</div>
												<div class="col-md-6">
													<label>Name *</label>
													<input class="input_fild" type="text" placeholder="Name" name="name" required>
												</div>
												<div class="col-md-6">
													<label>Email *</label>
													<input class="input_fild" type="email" placeholder="Email" name="email" required>
													<input type="hidden" name="pdt_id" value="<?=$product->pdt_id?>">
													<input type="hidden" name="pdt_hash_id" value="<?=$product->pdt_hash_id?>">
												</div>
												<div class="col-md-12">
													<button type="submit" class="btn-theme btn-theme-big">Submit Review</button>
												</div>
											</div>
										<?php echo form_close();?>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="related_products">
						<h2>Related Products</h2>
						<!--<div class="product_grid_items">
							<div class="row">
								<div class="col-md-4">
									<div class="product_grid_item">
										<a href="single_product.html">
											<img class="img-fluid" src="<?=base_url();?>assets/web/img/p2-300x300.jpg" alt="">
										</a>
										<div class="product_grid_item_body">
											<p class="product_name"><a href="single_product.html">Chinese light</a></p>
											<p class="product_price">£19.00</p>
											<a href="view_cart.html" class="btn-theme">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="product_grid_item">
										<a href="single_product.html">
											<img class="img-fluid" src="<?=base_url();?>assets/web/img/p3-300x300.jpg" alt="">
										</a>
										<div class="product_grid_item_body">
											<p class="product_name"><a href="single_product.html">Chinese light</a></p>
											<p class="product_price">£19.00</p>
											<a href="view_cart.html" class="btn-theme">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="product_grid_item">
										<a href="single_product.html">
											<img class="img-fluid" src="<?=base_url();?>assets/web/img/p6-300x300.jpg" alt="">
									</a>
									<div class="product_grid_item_body">
										<p class="product_name"><a href="single_product.html">Chinese light</a></p>
										<p class="product_price">£19.00</p>
										<a href="view_cart.html" class="btn-theme">Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>-->

                </div>
            </div>
        </div>
    	</div>
    </div>

