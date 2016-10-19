<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<title>Login</title>
	
	<!--link--->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

 </head>
	<body>
		<div class="container">
					<div class="row" style="margin-left:50px; margin-top:200px;">
						<form name="lognav" action="loghotel.php" method="POST">
						
								<div class="col-sm-offset-4 col-md-3">
											<div class="form-group">
												<p><h3>
													<button type="button" class="btn btn-primary btn-md btn-block">
													<span class="glyphicon glyphicon-user"></span> ACCOUNT LOGIN
													</button>	
												</h3></p>
												<p><input type="text" name="phone" class="form-control" placeholder="phone-number"></p>
												<p><input type="password" name="password" class="form-control" placeholder="password"></p>
												
											</div>
											
											<div class="form-group">	
												<p>
													<button type="submit" class="btn btn-primary btn-md btn-block" name="login">Login </button>
												</p>
												<p><a href="registry.php" class="btn btn-info btn-md btn-block" role="button">Create Account</a></p>
											
											</div>
											 <div class="form group">
												<p><li><center><a href=" #">Forgot password?</a></center></li></p>
											</div>
								</div>			
						</form>
					</div>	
 
		</div>
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>