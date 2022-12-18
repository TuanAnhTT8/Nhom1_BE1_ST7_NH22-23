<?php
if (isset($_GET['keyword'])) {
	include "header.php";
	$keyword = $_GET['keyword'];
	$search = $product->search($keyword);
} else {
	header("location: index.php");
}
?>

<body>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside Widget -->
					<!-- <div class="aside">
						<div class="section-title">
							<h4 class="title">Feature products</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div> -->

					<!-- product widget -->
					<!-- <div class="product-widget">
										<div class="product-img">
											<img src="./img/" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="product_detail.php?id=&type_id="> </a></h3>
											<h4 class="product-price">$</h4>
										</div>
									</div> -->
					<!-- /product widget -->

					<!-- </div>

						</div>
					</div> -->


					<!-- /aside Widget -->
				</div>
				<!-- /ASIDE -->

				<!-- STORE -->
				<div id="store" class="col-md-9">

					<!-- store products -->
					<ul class="breadcrumb-tree">
						<li class="active">Products:
							<?php echo count($search) . " (result)"; ?>
						</li>
					</ul>
					<!-- store products -->

					<!-- store products -->
					<div class="row">
						<?php
                        $perpage = 6;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $total = count($search);
                        $get6ProductsSearch = $product->get6ProductsSearch($keyword, $page, $perPage);

                        //
                        if ($total == 0) {
                        ?>
						<div class="col-md-12">
							<label>NO RESULTS FOUND</label>
						</div>

						<?php
	                        // 
                        } else {
	                        foreach ($get6ProductsSearch as $values): ?>
						<!-- product -->
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img">
									<img src="./img/<?php echo $values['image'] ?>" width="250" height="200" alt="">
									<div class="product-label">
									</div>
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a
											href="product-detail.php?id=<?php echo $values['id'] ?>">
											<?php echo $values['name'] ?>
										</a></h3>
									<h4 class="product-price">
										<?php echo $values['price'] ?> VND
									</h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<div class="add-to-cart">
									<form class="form-submit" action="action.php" method="">
										<button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
												class="fa fa-shopping-cart"></i>add to cart</button>
									</form>
								</div>
							</div>
						</div>
						<?php endforeach;
                        } ?>
						<!-- /product -->
					</div>
					<!-- /store products -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<ul class="store-pagination">
							<?php(isset($_GET['page'])) ? $currentPage = $_GET['page'] : $currentPage = 1; ?>
							<?php echo $product->paginate($currentPage, $url, $total, $perPage) ?>
						</ul>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	</div>

	<?php include "footer.php"; ?>