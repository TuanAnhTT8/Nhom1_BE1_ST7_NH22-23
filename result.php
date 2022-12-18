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
                        $limit = 9;
                        $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;
                        $totalrecords = count($search);
						$url = $_SERVER['PHP_SELF'] . "&keyword=" . $keyword  ;

                        $get6ProductsSearch = $product->get6ProductsSearch($keyword, $currentpage, $limit);

                        $totalpage = ceil($totalrecords / $limit);
                        if ($currentpage > $totalpage) {
	                        $currentpage = $totalpage;
                        } else if ($currentpage < 1) {
	                        $currentpage = 1;
                        }

                        $start = ($currentpage - 1) * $limit;
                        ?>

						<!-- <?php if ($totalrecords == 0) { ?> -->
						<div class="col-md-12">
							<label>NO RESULTS FOUND</label>
						</div>

						<?php
	                        
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
							<?php echo $product->paginate($currentpage, $url, $totalrecords, $limit) ?>
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