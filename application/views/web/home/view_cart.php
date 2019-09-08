<div class="view_cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <?php if(empty($this->cart->contents())){echo "<a href='browse-products' class='btn-theme btn-theme-big mt-5'>Cart is Empty! Continue Shopping</a><br><br>";}else{?>
						<div class="table-responsive-md">
						   
							<table class="table table-bordered mb-0">
								<thead>
									<tr>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col">Product</th>
										<th scope="col">Price</th>
										<th scope="col">Quantity</th>
										<th scope="col">Total</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($this->cart->contents() as $key => $v) { 
						                $pdt=$this->Mdb->getDataRow('product',array('pdt_id'=>$v['id']));
						                $attributes = array('name' => $v['rowid']);
										echo form_open('cart-edit', $attributes);
						            ?>
									<tr>
										<th scope="row">
											<a href="<?=site_url('cart-delete/'.$v['rowid']);?>"><span class="ti-close"></span></a>
										</th>
										<td class="product_thumb">
											<a href="single_product.html">
												<img src="<?=base_url('uploads/products/'.$pdt->pdt_image);?>" alt="">
											</a>
										</td>
										<td><?=$v['name'];?></td>
										<td>$<?=$v['subtotal'];?></td>
										<td>
											<select  name="qty">
						                      <?php 
						                        for ($i=1; $i <=5 ; $i++) { ?>
						                        <option value="<?=$i;?>" <?php if($i==$v['qty']){echo "selected";}?>><?=$i;?></option>
						                        <?php } ?>
						                      
						                    </select>
										</td>
										<td>$<?=$v['price'] * $v['qty'];?></td>
										<input type="hidden" name="rowid" value="<?=$v['rowid'];?>">
										<td><button type="submit" class="btn-theme">Update Cart</button></td>
										
										<?php echo form_close();?>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
						<!-- <div class="table_bottom">
							<div class="row no-gutters">
								<div class="col-md-8">
									<form action="#">
										<input type="text" placeholder="Coupon code">
										<button type="submit" class="btn-theme">Apply Coupon</button>
									</form>
								</div>
								<div class="col-md-4 text-left text-sm-left text-md-right">
									<button type="submit" class="btn-theme">Update Cart</button>
								</div>
							</div>
						</div> -->
					

					<div class="cart_totals">
						<h2>Cart Total</h2>
						<div class="row no-gutters">
							<div class="col-sm-6"><b>Subtotal</b></div>
							<div class="col-sm-6">$<?=$this->cart->total();?></div>
						</div>
						<div class="row no-gutters">
							<div class="col-sm-6"><b>Shipping</b></div>
							<div class="col-sm-6">
								
									<input type="radio" id="r2" name="rr" checked> <label for="r2">Free shipping</label> <br>
									
									
								
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-sm-6"><b>Total</b></div>
							<div class="col-sm-6">$<?=$this->cart->total();?></div>
						</div>

						<a href="checkout" class="btn-theme btn-theme-big mt-5">Proceed to Checkout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="browse-products" class="btn-theme btn-theme-big mt-5">Continue Shopping</a>
					
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
