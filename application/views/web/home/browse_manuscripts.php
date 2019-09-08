 <div class="shop">
        <div class="container">
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
								<li><a href="<?=site_url('browse-products/'.$cat->pdt_cat_id)?>">eBooks</a></li>
							</ul>
						</div>
						  <div class="product_sidebar_widget">
							<h2 class="widget_title">Popular Product</h2>
							<div class="product_list_widget">
								
							</div>
						</div>
					</div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_list">
                        <div class="product_list_header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <form action="#" class="product_filter">
                                        <label for="sortBy">Sort By</label>
                                        <select id="sortBy">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-3">
                                    <div class="text-right">
                                        <ul class="product_layout list-unstyled">
                                            <li class="list-inline-item">
                                                <a class="active" href="#"><i class="fa fa-th"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="fa fa-th-list"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_grid_items">
                            <div class="row">
								<?php foreach ($manuscripts as $pdt):?>
								<div class="col-md-4">
									<div class="product_grid_item">
										<a href="<?=site_url('archives/ebook/'.$pdt->manuscript_no.'/'.url_title(strtolower($pdt->title)));?>">
											<img class="img-fluid" src="<?=base_url('uploads/book_manuscript/'.$pdt->manuscript_no.'/'.$pdt->cover_image);?>" alt="">
										</a>
										<div class="product_grid_item_body">
											<p class="product_name"><a href="<?=site_url('ebook/'.$pdt->manuscript_no.'/'.url_title(strtolower($pdt->title)));?>"><?=$pdt->title;?></a></p>
											<!-- <p class="product_price">$<?=$pdt->sale_price;?></p> -->
											<a href="<?=site_url('archives/ebook/'.$pdt->manuscript_no.'/'.url_title(strtolower($pdt->title)));?>" class="btn-theme">View Detail</a>
										</div>
									</div>
								</div>
								<?php endforeach;?>
							</div>

                            <div class="text-center">
                                 <?=$pagination;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>