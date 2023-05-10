<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Add min</h2>
		<form action="AddAdmin.php" method="POST">
			<div class="form-group">
				<label for="adminid">Admin ID:</label>
				<input type="number" class="form-control" id="adminid" placeholder="Enter Admin ID" name="adminid" required>
			</div>
			<div class="form-group">
				<label for="username">User Name:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
			</div>
			<div class="form-group">
				<label for="firstname">First Name:</label>
				<input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" required>
			</div>
			<div class="form-group">
				<label for="middlename">Middle Name:</label>
				<input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename">
			</div>
			<div class="form-group">
				<label for="lastname">Last Name:</label>
				<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
	</div>
</body>
</html>
