<!DOCTYPE html>
<html>
<head>
	<title>Book Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<a class="navbar-brand" href="#">Book Shop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./books.php">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./login.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<section class="hero">
			<div class="overlay"></div>
			<div class="container" style="margin-top:70px; margin-bottom:20px">
				<h1>Welcome to our Book Shop</h1>
				<p>Browse and buy your favorite books</p>
				<a href="./books.php" class="btn btn-primary">View all books</a>
			</div>
		</section>

		<section class="featured-books" >
			<div class="container">
				<h2>Best seller</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="./images/cheese.jpg" alt="Book 1">
							<div class="card-body">
								<h5 class="card-title">Who moved my cheese ?</h5>
								<p class="card-text">by Dr. Spencer Johnson</p>
								<div class="d-flex bd-highlight justify-content-between">
                                <a href="#" class="btn btn-primary">Buy Now</a>
                                <p> 15 Dinar</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="./images/mockingbird.jpg" alt="Book 2">
							<div class="card-body">
								<h5 class="card-title">To Kill a Mockingbird</h5>
								<p class="card-text">by Harper Lee</p>
								<div class="d-flex bd-highlight justify-content-between">
                                <a href="#" class="btn btn-primary">Buy Now</a>
                                <p> 25 Dinar</p>
</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="./images/pride.jpg" alt="Book 3">
							<div class="card-body">
								<h5 class="card-title">Pride and Prejudice</h5>
								<p class="card-text">by Jane Austen</p>
								<div class="d-flex bd-highlight justify-content-between">
                                <a href="#" class="btn btn-primary">Buy Now</a>
                                <p> 35 Dinar</p>
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</
</main>
<div style="margin-top:100px"/>
<!-- Footer -->
<footer class="bg-dark text-center text-light-start fixed-bottom">
  <div class="text-center p-3">
    <p class="text-light mb-0">© 2023 Copyright :
      <a href="#" class="text-light fw-bold">Sofien Ben Ktib</a>
    </p>
  </div>
</footer>


</body>