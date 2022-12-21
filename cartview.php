<?php
include "header.php";
?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">My cart</h3>
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Home</a></li>
					<li class="active">viewcart</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- Cart item detail -->
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-6">
			<div class="cart-page">
				<table class="table-striped">
					<tr>
						<th>Number</th>
						<th>Image</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
					<?php
                    $grand_total = 0;
                    $stt = 1;
                    $product->getAllProducts();
                    foreach ($product as $values):
	                    $id = $value["id"];
	                    if (isset($_SESSION["cart"][$id])):
		                    $qty = $_SESSION["cart"][$id];
                    ?>
					<tr>

						<td>
							<?php echo $stt++ ?>
						</td>
						<input type="hidden" class="iid" value="<?php echo $values['id'] ?>">
						<td>
							<div class="cart-info">
								<img src="./img/<?php echo $values['img'] ?>" alt="">

							</div>
						</td>
						<td>
							<?php echo $values['name'] ?>
						</td>
						<td>
							<div>
								<small>$
									<?php echo number_format($values['price']) ?>
								</small>

							</div>
						</td>
						<input type="hidden" class="pprice" value="<?php echo $values['price'] ?>">
						<td><input type="number" min='1' class="form-control itemQty"
								value="<?php echo $values['qty'] ?>" style="width: 60px;"
								oninput="this.value = !!this.value && Math.abs(this.value) > 0 ? Math.abs(this.value) : 1">
						</td>
						<td>$
							<?php echo number_format($values['total_price']) ?>
						</td>
						<td><a href="cart.php?remove=<?php echo $values['id'] ?>"
								onclick="return confirm('Are you sure want to remove this item?');"><button
									class="btn btn-danger mx-2">Remove</button></a></td>
					</tr>
					<?php $grand_total += $values['total_price']; ?>
					<?php endif; endforeach; ?>
				</table>

			</div>
			<div class="total-price">
				<table>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td>Amount payable:</td>
						<td> $
							<?php echo number_format($grand_total); ?>
						</td>
					</tr>

					<tr>
						<td><a href="index.php" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Continue
								Shopping </a></td>
						<td><a class="btn btn-danger mx-2" <?php //nếu có username thì checkout ngược lại register 
                        if
                        ($grand_total > 1) {
	                        if (isset($_SESSION['username'])) {
		                        echo 'href="checkout.php"';
	                        } else {
		                        echo 'href="login.php"';
	                        }
                        } else {
	                        echo "disabled";
                        } ?>>Check out</a></td>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>
<!-- /Cart item detail -->

<?php include "footer.php"; ?>