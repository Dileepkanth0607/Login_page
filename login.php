<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<div class="login-box">
		
		<div class="row">
			
				<div class="col-lg-6 login-left">
				<h2>LOGIN FORM</h2>
				<form action="validation.php" method="post">
				<div class="form-group">
					<label> username </label>
					<input type="text" name="user" class="form-control">
						
				</div>

				<div class="form-group">
					<label> password </label>
					<input type=" password" name="password" class="form-control">
						
				</div>

					<button type="submit" class="btn btn-primary"> Login </button>
					
				</form>

			</div>


			<div class="col-lg-6 login-right">

				<h2>SIGNUP FORM</h2>
				<form action="registration.php" method="post">
				<div class="form-group">
					<label> username </label>
					<input type="text" name="user" class="form-control">
						
				</div>

				<div class="form-group">
					<label> password </label>
					<input type=" password" name="password" class="form-control">
						
				</div>

					<button type="submit" class="btn btn-primary"> Register </button>
				
				</form>
		
			</div>

		</div>	

	</div>

</div>

</body>
</html>