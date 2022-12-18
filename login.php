<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Login styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">


</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<div class="row pt-2">
						<div class="col">
							<h3>Sign In</h3>
						</div>
						<div class="col">
							<a style="text-decoration:none" href="index.php">
								<h3 class="text-right"> X </h3>
							</a>
						</div>
					</div>

				</div>
				<div class="card-body">
					<form action="check-login.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="username" required>
							<div class="invalid-feedback">Username is Invalid</div>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="password" name="password" class="form-control" placeholder="password" required>
							<div id="eye" class="input-group-text">
								<i class="far fa-eye" id="togglePassword"></i>
							</div>
							<div class="invalid-feedback">Password is Invalid</div>
						</div>
						<div class="form-group">
							<button type="submit" name="btn_submit">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="register.php">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery Plugins -->
	<script src="js/login.js"></script>
</body>
</html>