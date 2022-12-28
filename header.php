<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/manufacture.php";
require "model/protype.php";
require "model/cart.php";
require "model/user.php";

$product = new Product;
$manu = new Manufacture;
$type = new Protype;
$cart = new Cart;
$user = new User;

$get5NewestProduct = $product->get5NewestProducts();
$getAllProducts = $product->getAllProducts();
$getAllManu = $manu->getAllManufactures();
$getAllType = $type->getAllProtype();


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ElectroShop</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/cartview.css">
	<link rel="stylesheet" href="css/loading.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> ElectroShop@email.com</a></li>
					<li><a href="https://www.google.com/maps/place/1734 Stonecoal Road, Kermit,Virginia"><i
								class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>
				<!-- LOGIN -->
				<ul class="header-links pull-right">
					<?php if (isset($_SESSION["username"])) { ?>

					<li><a href="#"><i class="fa fa-user-o"></i>
							<?php echo $_SESSION["username"] ?>
						</a></li>
					<li><a href="logout.php">Log out</a></li>

					<?php } else { ?>
					<li><a href="login.php"><i class="fa fa-user-o"> Login</i></a></li>

					<?php } ?>
				</ul>
				<!-- /LOGIN -->
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" action="result.php">
								<input class="input-select" placeholder="Search here" name="keyword" value="<?php if (isset($_GET['keyword']))
	                                echo $_GET['keyword'] ?>">
								<button type="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Cart -->
							<div class="dropdown">
								<a href="cartview.php">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty" id="cart-item"><?php echo count($cart->getAllCart()); ?></div>
								</a>
							</div>
							<!-- /Cart -->

						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- container -->
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<?php
                    $getAllManu = $manu->getAllManufactures();
                    $getID = 0;
                    if (isset($_GET['manu_id'])) {
	                    $getID = $_GET['manu_id'];
                    }
                    ?>
					<li class="<?php if ($getID == 0)
	                    echo "active" ?>"><a href="index.php">Home</a></li>
					<?php
                    foreach ($getAllManu as $value):
                    ?>
					<li class="<?php if ($getID == $value['manu_id'])
		                    echo "active" ?>"><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
							<?php echo $value['manu_name'] ?>
						</a></li>
					<?php endforeach; ?>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->