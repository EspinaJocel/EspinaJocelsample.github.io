<?php include 'conn.php'; ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="assets/css/tiny-slider.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

	<title>BizEats</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.php">BizEats<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li><a class="nav-link" href="index.php">Home</a></li>
					<li class="active"><a class="nav-link" href="shop.php">Shop</a></li>
					<li><a class="nav-link" href="about.php">About Us</a></li>
				
					<li><a class="nav-link" href="contact.php">Contact us</a></li>
					<li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login">Login</a></li>

				</ul>


			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
						
							</div>
						</div>
					
					</div>
				</div>
			</div>
	<!-- End Hero Section -->



	<div id="portfolio" class="product-section">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->

				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<?php
				$get_product = mysqli_query($conn, "SELECT * FROM products WHERE availability ='Available'");
				while ($product = mysqli_fetch_array($get_product)) {


				?>
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#" data-bs-toggle="modal" data-bs-target="#notif">
							<img src="admin/assets/upload/<?php echo $product['image']; ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?php echo $product['name']; ?></h3>
							<strong class="product-price"> &#8369; <?php echo $product['price']; ?></strong>

							<span class="icon-cross" >
								<img src="assets/images/cross.svg"  class="img-fluid">
							</span>
							<div class="modal" id="notif" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content modal-xl">
									<div class="card-header"></div>
										<div class="modal-body h-50">
										<h3 class="fw-bold">Please Login First!</h3>
										<input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" value="Ok">
										</div>
									
									</div>
								</div>
							</div>

						</a>
					</div>
				<?php
				}
				?>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->

				<!-- End Column 3 -->

				<!-- Start Column 4 -->

				<!-- End Column 4 -->

				<!-- Start Column 2 -->

				<!-- End Column 2 -->

				<!-- Start Column 3 -->

				<!-- End Column 3 -->

				<!-- Start Column 4 -->

				<!-- End Column 4 -->

				<!-- Start Column 5 -->

				<!-- End Column 5 -->

			</div>
		</div>
	</div>




	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/tiny-slider.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Modal Admin -->
	<div class="modal fade" id="Admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">LOGIN as Admin</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-text"><i class="bi bi-envelope"></i></div>
							<input type="text" class="form-control" name="email" placeholder="Email" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-text"> <i class="bi bi-key"></i> </div>
							<input type="password" class="form-control" name="pass" placeholder="Enter Password" required id="passA" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						</div>

						<input type="checkbox" onclick="myFunction()"> Show Password
				</div>

				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary" value="Clear">
					<input type="submit" class="btn btn-primary" name="login" value="Login">
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("passA");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<!--Login-->
	<div class="modal fade" id=Login tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex justify-content-center">
					<button class="btn btn-success" onclick="location.href='#'" data-bs-toggle="modal" data-bs-target="#Student">STUDENT</button>
					<button class="btn btn-primary" onclick="location.href='#'" data-bs-toggle="modal" data-bs-target="#Admin">ADMIN</button>
					<button class="btn btn-secondary" onclick="location.href='#'" data-bs-toggle="modal" data-bs-target="#Reg">CREATE ACCOUNT</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Admin -->
	<div class="modal fade" id="Admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">LOGIN as Admin</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<form action="process.php" method="POST">

						<div class="input-group mb-3">
							<div class="input-group-text">
								<i class="bi bi-envelope-check-fill"></i>
							</div>
							<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-text">
								<i class="bi bi-key-fill"></i>
							</div>
							<input type="password" class="form-control" name="pass" required placeholder="Enter Password" id="passA" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one uppercase and lowercase letter, and at least 8 or more characters">
						</div>
						<input type="checkbox" onclick="myFunction()"> Show Password
						</p>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary" value="Clear">
					<input type="submit" class="btn btn-primary" name="login_admin" value="LOGIN">
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("passA");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
	<!--End of modal for admin-->

	<!--Modal for Login as Student-->
	<div class="modal fade" id="Student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">LOGIN as Student</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<form action="process.php" method="POST">

						<div class="input-group mb-3">
							<div class="input-group-text">
								<i class="bi bi-envelope-check-fill text-success"></i>
							</div>
							<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-text">
								<i class="bi bi-key-fill text-success"></i>
							</div>
							<input type="password" class="form-control" name="pass" required id="passA" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one uppercase and lowercase letter, and at least 8 or more characters">
						</div>
						<input type="checkbox" onclick="myFunction()"> Show Password
						</p>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary" value="Clear">
					<input type="submit" class="btn btn-primary" name="login_student" value="LOGIN">
				</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function myFunction() {
			var x = document.getElementById("passA");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
	<!--End of modal student login-->

	<!--Modal for Create Account-->
	<div class="modal fade" id="Reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<form action="process.php" method="POST">
						<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="idnumber" placeholder="ID Number">
							</div>
							<div class="col-12 mt-3">
								<input type="password" class="form-control" name="password" placeholder="Password" required id="passA" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one uppercase and lowercase letter, and at least 8 or more characters">
							</div>
						</div>
						<input type="checkbox" onclick="myFunction()"> Show Password
						<script>
							function myFunction() {
								var x = document.getElementById("passA");
								if (x.type === "password") {
									x.type = "text";
								} else {
									x.type = "password";
								}
							}
						</script>
						<div class="modal-footer">
							<input type="reset" class="btn btn-secondary" value="Clear">
							<input type="submit" class="btn btn-primary" name="reg" value="REGISTER">
					</form>
				</div>
			</div>
		</div>
	</div>
		<!--End of modal for creating account  -->




</body>

</html>