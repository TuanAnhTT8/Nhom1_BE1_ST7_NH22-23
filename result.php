<?php
//search
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
							<?php echo count($search) . " (result)";
                            $totalrecords = count($search);
                            ?>

						</li>
					</ul>
					<!-- store products -->

					<!-- store products -->
					<div class="row">

						<?php if ($totalrecords == 0) { ?>
						<div class="col-md-12">
							<label>NO RESULTS FOUND</label>
						</div>

						<?php

                        } else { ?>
						<?php foreach ($search as $value): ?>
						<!-- product -->
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?>" width="250" height="200" alt="">
									<div class="product-label">
									</div>
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a
											href="product_detail.php?id=<?php echo $value['id'] ?>">
											<?php if (strlen($value['name']) > 10) {
			                        echo substr($value['name'], 0, 20) . '...';
		                        } else {
			                        echo $value['name'];
		                        } ?></a></h3>
									<h4 class="product-price">
										<?php echo number_format($value['price']) ?> VND
									</h4>
								</div>
								<div class="add-to-cart">
										<form class="form-submit" action="cart.php" method="">
											<input type="hidden" class="url" name="url"
												value="<?php echo $_SERVER['SCRIPT_NAME'] . "?keyword=" . $keyword?>">
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
						</div>
						<?php endforeach;
                        } ?>
						<!-- /product -->
					</div>
					<!-- /store products -->

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