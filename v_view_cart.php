
<<html>
<head>
	<title></title>


	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?php echo base_url(); ?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php echo base_url(); ?>assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>
<body>

</body>
</html>

<!-- EMPTY CART -->
					<div class="panel panel-default">
						<div class="panel-body">
							<strong>Shopping cart is empty!</strong><br />
							You have no items in your shopping cart.<br />
							Click <a href="index.html">here</a> to continue shopping. <br />
							<span class="label label-warning">this is just an empty cart example</span>
						</div>
					</div>
					<!-- /EMPTY CART -->



					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-9 col-sm-8">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="#">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCT NAME</span>
										<span class="remove_item size-13 bold"></span>
										<span class="total_price size-13 bold">TOTAL</span>
										<span class="qty size-13 bold">QUANTITY</span>
									</div>
									<!-- /cart header -->

									<!-- cart item -->
									<div class="item">
										<div class="cart_img pull-left width-100 padding-10 text-left"><img src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/100x100/p1.jpg" alt="" width="80" /></div>
										<a href="shop-single-left.html" class="product_name">
											<span>Man shirt XL</span>
											<small>Color: Brown, Size: XL</small>
										</a>
										<a href="#" class="remove_item"><i class="fa fa-times"></i></a>
										<div class="total_price">$<span>21.00</span></div>
										<div class="qty"><input type="number" value="1" name="qty" maxlength="3" max="999" min="1" /> &times; $21.00</div>
										<div class="clearfix"></div>
									</div>
									<!-- /cart item -->

									<!-- cart item -->
									<div class="item">
										<div class="cart_img pull-left width-100 padding-10 text-left"><img src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/100x100/p8.jpg" alt="" width="80" /></div>
										<a href="shop-single-left.html" class="product_name">
											<span>Great Black Shoes For Man and Only Man...</span>
											<small>Color: Black, Size: 8.5</small>
										</a>
										<a href="#" class="remove_item"><i class="fa fa-times"></i></a>
										<div class="total_price">$<span>32.56</span></div>
										<div class="qty"><input type="number" value="1" name="qty" maxlength="3" max="999" min="1" /> &times; $32.56</div>
										<div class="clearfix"></div>
									</div>
									<!-- /cart item -->

									<!-- cart item -->
									<div class="item">
										<div class="cart_img pull-left width-100 padding-10 text-left"><img src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/100x100/p13.jpg" alt="" width="80" /></div>
										<a href="shop-single-left.html" class="product_name">
											<span>Pink Lady Perfect Shoes</span>
											<small>Color: Pink, Size: 6.5</small>
										</a>
										<a href="#" class="remove_item"><i class="fa fa-times"></i></a>
										<div class="total_price">$<span>67.19</span></div>
										<div class="qty"><input type="number" value="1" name="qty" maxlength="3" max="999" min="1" /> &times; $67.19</div>
										<div class="clearfix"></div>
									</div>
									<!-- /cart item -->


									<!-- update cart -->
									<button class="btn btn-success margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-ok"></i> UPDATE CART</button>
									<button class="btn btn-danger margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-remove"></i> CLEAR CART</button>
									<!-- /update cart -->

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->

							</form>
							<!-- /CART -->

						</div>


						<!-- RIGHT -->
						<div class="col-lg-3 col-sm-4">

							<!-- TOGGLE -->
							<div class="toggle-transparent toggle-bordered-full clearfix">

								<div class="toggle nomargin-top">
									<label>Voucher</label>

									<div class="toggle-content">
										<p>Enter your discount coupon code.</p>

										<form action="#" method="post" class="nomargin">
											<input type="text" id="cart-code" name="cart-code" class="form-control text-center margin-bottom-10" placeholder="Voucher Code" required="required">
											<button class="btn btn-primary btn-block" type="submit">SUBMIT</button>
										</form>
									</div>
								</div>

								<div class="toggle">
									<label>Shipping tax calculator</label>

									<div class="toggle-content">
										<p>To get a shipping estimate, please enter your destination.</p>

										<form action="#" method="post" class="nomargin">
											<label>Country*</label>
											<select id="cart-tax-country" name="cart-tax-country" class="form-control pointer margin-bottom-20">
												<option value="1">United States</option>
												<option value="2">United Kingdom</option>
												<option value="2">...........</option>
												<!-- add all here -->
											</select>

											<label>State/Province</label>
											<select id="cart-tax-state" name="cart-tax-state" class="form-control pointer margin-bottom-20">
												<option value="1">Alabama</option>
												<option value="2">Alaska</option>
												<option value="2">...........</option>
												<!-- add all here -->
											</select>

											<label>Zip/Postal Code</label>
											<input type="text" id="cart-tax-postal" name="cart-tax-postal" class="form-control margin-bottom-20">

											<button class="btn btn-primary btn-block" type="submit">SUBMIT</button>
										</form>
									</div>
								</div>

							</div>
							<!-- /TOGGLE -->
							
							<div class="toggle-transparent toggle-bordered-full clearfix">
								<div class="toggle active">
									<div class="toggle-content">
										
										<span class="clearfix">
											<span class="pull-right">$120.75</span>
											<strong class="pull-left">Subtotal:</strong>
										</span>
										<span class="clearfix">
											<span class="pull-right">$0.00</span>
											<span class="pull-left">Discount:</span>
										</span>
										<span class="clearfix">
											<span class="pull-right">$0.00</span>
											<span class="pull-left">Shipping:</span>
										</span>

										<hr />

										<span class="clearfix">
											<span class="pull-right size-20">$120.75</span>
											<strong class="pull-left">TOTAL:</strong>
										</span>

										<hr />

										<a href="shop-checkout.html" class="btn btn-primary btn-lg btn-block size-15"><i class="fa fa-mail-forward"></i> Proceed to Checkout</a>
									</div>
								</div>
							</div>

						</div>

					</div>
					<!-- /CART -->
					
				</div>
			</section>
			<!-- /CART -->




			<!-- RECOMMENDED -->



			<section>
				<div class="container">

					<h2 class="owl-featured"><strong>Recommended</strong> for you:</h2>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>

						
						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
							
							

<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
						



						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url(); ?>assets/user/assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->
						




								
						
					</div>

				</div>
			</section>
			<!-- /RECOMMENDED -->



	<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>



<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo base_url(); ?>assets/user/assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/user/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/user/assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/user/assets/js/view/demo.shop.js"></script>