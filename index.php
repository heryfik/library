<html>
<head>
  <title>Login E-Library</title>
  <link rel="stylesheet" href="dist/css/adminlte.min.css"> 
</head>
<body>
<br> <br>
	<div class="row justify-content-center"> 
        <div class="col-md-4 text-center"> 
            <div class="card card-primary">
				<!-- form-header -->
				<div class="card-header">
					<h3 class="text-center">FORM LOGIN</h3>
				</div>
              
			  <form method="POST" action="proses-login.php">
				<!-- form data -->
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Enter Username">
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
					
					<div>
						<button type="submit" class="btn btn-primary" name="login">SUBMIT</button>
					</div>
				</form>
				
            </div>
		</div>
	</div>
</body>
</html>
