<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="" width="250" height="250">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="products.php?type_id=1" class="cta-btn">Shop now <i
								class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="" width="250" height="250">
					</div>
					<div class="shop-body">
						<h3>Smartphones<br>Collection</h3>
						<a href="products.php?type_id=2" class="cta-btn">Shop now <i
								class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="" width="250" height="250">
					</div>
					<div class="shop-body">
						<h3>Smartphones<br>Collection</h3>
						<a href="products.php?type_id=5" class="cta-btn">Shop now <i
								class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
				</div>
			</div>
			<!-- /section title -->
			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">

								<?php foreach ($get5NewestProduct as $value):
                                ?>
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a
												href="product_detail.php?id=<?php echo $value['id'] ?>"><?php echo substr($value['name'], 0, 20) ?>...</a></h3>
										<h4 class="product-price"><?php echo number_format($value["price"]) ?> VND</h4>

									</div>
									<div class="add-to-cart">
										<form class="form-submit" action="cart.php" method="">
											<input type="hidden" name="url"
												value="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
											<input type="hidden" name="cid" value="<?php echo $value['id'] ?>">
											<input type="hidden" name="cname" value="<?php echo $value['name'] ?>">
											<input type="hidden" name="cprice" value="<?php echo $value['price'] ?>">
											<input type="hidden" name="cimg" value="<?php echo $value['image'] ?>">
											<button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
													class="fa fa-shopping-cart"></i>add to cart</button>
										</form>
									</div>
								</div>
								<!-- /product -->
								<?php
                                endforeach;
                                ?>

							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php
                            $getID = 0;
                            if (isset($_GET['type_id'])) {
	                            $getID = $_GET['type_id'];
                            }
                            ?>
							<li class="<?php if ($getID == 0)
	                            echo "active" ?>"><a href="index.php">Home</a></li>
							<?php
                            foreach ($getAllType as $value):
                            ?>
							<li class="<?php if ($getID == $value['type_id'])
		                            echo "active" ?>"><a href="products.php?type_id=<?php echo $value['type_id'] ?>">
									<?php echo $value['type_name'] ?>
								</a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<?php foreach ($get5NewestProduct as $value):
                                ?>
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value["price"]) ?> VND
											<br><del class="product-old-price"><?php echo number_format(($value["price"]) + 2000000) ?> VND</del>
										</h4>
									</div>
									<div class="add-to-cart">
										<form class="form-submit" action="cart.php" method="">
											<input type="hidden" class="url" name="url"
												value="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
											<input type="hidden" class="cid" name="cid"
												value="<?php echo $value['id'] ?>">
											<input type="hidden" class="cname" name="cname"
												value="<?php echo $value['name'] ?>">
											<input type="hidden" class="cprice" name="cprice"
												value="<?php echo $value['price'] ?>">
											<input type="hidden" class="cimg" name="cimg"
												value="<?php echo $value['image'] ?>">
											<button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
													class="fa fa-shopping-cart"></i>add to cart</button>
										</form>
									</div>
								</div>
								<?php endforeach; ?>
								<!-- /product -->

							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->