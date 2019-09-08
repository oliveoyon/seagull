<style>
	select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 10px);
}
</style>
<div class="checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert_custom alert-secondary" role="alert">
						<span class="ti-bookmark"></span>Returning customer?
						<p role="button" data-toggle="collapse" data-target="#login_f">Click here to login</p>
					</div>
					<div class="collapse login_f" id="login_f">
						<form action="#">
							<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
							<div class="row">
								<div class="col-md-6">
									<label for="log_user">Username or email <span>*</span></label>
									<input class="form-control" type="text" id="log_user" placeholder="Username or email">
								</div>
								<div class="col-md-6">
									<label for="log_user">Password  <span>*</span></label>
									<input class="form-control" type="text" id="log_user" placeholder="Password ">
								</div>
								<button type="submit" class="btn-theme">Login</button>
								<div class="remember_me">
									<input type="checkbox" id="rmbr_me"> <label for="rmbr_me">Remember Me</label>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<h4>Billing details</h4>
					<div class="billing_det_f">
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<label for="">First name <span>*</span></label> <br>
									<input class="form-control" type="text" name="biller_fname" id="log_user" placeholder="First Name" required value="<?=set_value('biller_fname');?>">
								</div>
								<div class="col-md-6">
									<label for="">Last name <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="biller_lname" id="log_user" placeholder="Last Name" required value="<?=set_value('biller_lname');?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="">Company Name</label> <br>
									<input class="form-control" type="text" name="biller_company" id="log_user" value="<?=set_value('biller_company');?>">
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-12">
									<label for="">Country <span>*</span></label> <br>
									<div class="input-group mb-4">
										<select class="custom-select" id="inputGroupSelect01" required name="biller_country">
									<option value=""<?=set_select('biller_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('biller_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
									</div>
									<label for="">Full address</label> <br>
									<input class="form-control mb-2" type="text" name="biller_address" id="log_user" placeholder="House number and street name" value="<?=set_value('biller_address');?>">
					               <br>
									<label for="">District/City <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="biller_city" id="log_user" required value="<?=set_value('biller_city');?>">

									<label for="">Postcode / ZIP</label> <br>
									<input class="form-control mb-4" type="text" name="biller_zip" id="log_user" required value="<?=set_value('biller_zip');?>">

									<label for="">Email address <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="biller_email" id="log_user" required value="<?=set_value('biller_email');?>">
                                    <div class="row">
								<div class="col-md-6">
									<label for="">Password <span>*</span></label> <br>
									<input class="form-control" type="password" name="biller_password" id="log_user" required>
								</div>
								<div class="col-md-6">
									<label for="">Confirm Password <span>*</span></label> <br>
									<input class="form-control mb-4" type="password" name="cpassword" id="log_user" required>
								</div>
							</div>
									<input type="checkbox" id="crt_acc">
									<label for="crt_acc">Create an account?</label> <br> <br>
									
								</div>
								<div class="col-md-12">
									<div role="button" data-toggle="collapse" data-target="#ship_to_diff_form">
										<input type="checkbox" id="ship_to_diff">
										<label for="ship_to_diff"><h3>Ship to a different address?</h3></label>
									</div><br> <br>

									<div class="collapse" id="ship_to_diff_form">
										<div class="row">
											<div class="col-md-6">
												<label for="">First name <span>*</span></label> <br>
									<input class="form-control" type="text" name="payee_fname" id="log_user" placeholder="First Name" required value="<?=set_value('payee_fname');?>">
								</div>
								<div class="col-md-6">
									<label for="">Last name <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="payee_lname" id="log_user" placeholder="Last Name" required value="<?=set_value('payee_lname');?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="">Company Name</label> <br>
									<input class="form-control" type="text" name="payee_company" id="log_user" value="<?=set_value('payee_company');?>">
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-12">
									<label for="">Country <span>*</span></label> <br>
									<div class="input-group mb-4">
										<select class="custom-select" id="inputGroupSelect01" required name="payee_country">
									<option value=""<?=set_select('payee_country', '', TRUE); ?>>Choose Country</option>
									<?php foreach ($countries as $country):?>
									<option value="<?=$country->country_id;?>" <?=set_select('payee_country', $country->country_id); ?>><?=$country->country_name;?></option>
									<?php endforeach;?>
								</select>
									</div>
									<label for="">Full address</label> <br>
									<input class="form-control mb-2" type="text" name="payee_address" id="log_user" placeholder="House number and street name" value="<?=set_value('payee_address');?>">
					               <br>
									<label for="">District/City <span>*</span></label> <br>
									<input class="form-control mb-4" type="text" name="payee_city" id="log_user" required value="<?=set_value('payee_city');?>">

									<label for="">Postcode / ZIP</label> <br>
									<input class="form-control mb-4" type="text" name="payee_zip" id="log_user" required value="<?=set_value('payee_zip');?>">
											</div>
										</div>
									</div>

									<label for="">Order notes <span>*</span></label> <br>
									<input class="form-control" type="text" name="order_notes" id="log_user" value="<?=set_value('order_notes');?>">

								</div>
							</div>
						</form>
					</div>
				</div>
				
				<div class="col-md-4 checkout_sidebar">
					<h4>Your Order</h4>
					<div class="row no-gutters">
						<div class="col-6">Product</div>
						<div class="col-6">Total</div>
					</div>
					<?php foreach ($this->cart->contents() as $key => $v) {
						$det=$this->Mdb->getDataRow('product',array('pdt_id'=>$v['id']));
					?>
					<div class="row no-gutters">
						<div class="col-6"><?=$v['name'];?>  × <?=$v['qty'];?></div>
						<div class="col-6">$<?=$this->cart->total();?></div>
					</div>
					<?php } ?>
					<div class="row no-gutters">
						<div class="col-6">Subtotal</div>
						<div class="col-6">$<?=$this->cart->total();?></div>
					</div>
					<div class="row no-gutters">
						<div class="col-6">Shipping</div>
						<div class="col-6">
							<form action="#">
								<input type="radio" id="r2" name="r" checked="checked"> <label for="r2">Free shipping</label> <br>
							</form>
						</div>
					</div>
					<div class="row no-gutters">
						<div class="col-6">Total</div>
						<div class="col-6">$<?=$this->cart->total();?></div>
					</div>

					<div class="checkout-sidebar_bottom" id="rdo-main">

						<div data-toggle="collapse" data-target="#rdo1">
							<input type="radio" id="rdo11" name="rdo" checked="checked"> <label for="rdo11"><b>Direct Bank Transfer</b> </label>
						</div>
						<div id="rdo1" class="collapse show" aria-expanded="true" aria-labelledby="rdo1" data-parent="#rdo-main">
							<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.<br> Bank Details will be found here</p>
						</div> 

						<div data-toggle="collapse" data-target="#rdo4">
							<input type="radio" id="rdo44" name="rdo"> <label for="rdo44"><b>Cards</b> <img src="img/AM_mc_vs_dc_ae.jpg" alt=""></label>
						</div>
						<div id="rdo4" class="collapse" aria-labelledby="rdo4" data-parent="#rdo-main">
							<a href="#">What is card payment?</a>
							<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
						</div> 
						<hr>
						<button type="submit" class="btn btn-theme btn-theme-big w-100">Proceed to Payment</button>
	                       </div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>