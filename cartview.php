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
						<th></th>
					</tr>
					<?php $getAllCart = $cart->getAllCart();
                    $grand_total = 0;
                    $stt = 1;
                    foreach ($getAllCart as $values):
                    ?>
					<tr>

						<td>
							<?php echo $stt++ ?>
						</td>
						<input type="hidden" class="iid" value="<?php echo $values['id'] ?>">
						<td>
							<div class="cart-info">
								<img src="./img/<?php echo $values['product_img'] ?>" >

							</div>
						</td>
						<td>
							<?php echo $values['product_name'] ?>
						</td>
						<td>
							<div>
								<small>
									<?php echo number_format($values['product_price']) ?> VND
								</small>

							</div>
						</td>
						<td><?php echo $values['qty'] ?></td>
						<td><?php $total_price = $values['product_price'] * $values['qty'];
	                    echo number_format($total_price) ?> VND </td>
						<td><a href="cart.php?del&id=<?php echo $values['id'] ?>"
								onclick="return confirm('Are you sure want to remove this item?');"><button
									class="btn btn-danger mx-2">Remove</button></a></td>
					</tr>
					<?php $grand_total += ($total_price); ?>
					<?php endforeach; ?>
				</table>

			</div>
			<div class="total-price">
				<table>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td>Amount payable:</td>
						<td> <?php echo number_format($grand_total); ?> VND
						</td>
					</tr>

					<tr>
						<td><a href="index.php" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Continue
								Shopping </a></td>
						<td><a class="btn btn-danger mx-2" <?php //nếu có username thì checkout ngược lại register 
                        if
                        ($grand_total > 1) {
	                        if (isset($_SESSION['username'])) {
		                        //nếu đã login thì chuyển đến trang thanh toán
                        		echo 'href="#"';
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