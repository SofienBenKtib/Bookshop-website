<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header bg-dark text-white">Signup</div>
					<div class="card-body">
						<form action="addUser.php" method="POST">
							<div class="form-group">
								<label for="firstName">First Name:</label>
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
							</div>
							<div class="form-group">
								<label for="lastName">Last Name:</label>
								<input type="text" class="form-control" id="lastName"  name="lastName" placeholder="Enter Last Name" required>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
