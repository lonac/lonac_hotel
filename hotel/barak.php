<!DOCTYPE>
<html>
<head>
		<style type="text/css">
			##container
			{
				position: absolute;
				top: 200px;
				left: 500px;
				width: 300px;
				bottom-border: 2px solid gray;
				text-align: centre;
			}
		</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<title>Hotel Manager Login</title>
	
	<!--link--->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
 </head>
	<body>
		<div class="container">
				<div class="row">
				</div>
					<form name="lognav" action="loghotel.php" method="POST">
						<div id="navigation">
										<div id="errorpos"> </div>
											<div class="form-group">
												<div class="col-md-12">
												<p><input type="text" name="phone" class="form-control" placeholder="phone-number" maxlength="10"></p>
												<p><input type="password" name="password" class="form-control" placeholder="password"></p>
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-md-12">
												<p>
													<button type="submit" class="btn btn-primary btn-md btn-block" name="login">Login </button>
												</p>
												<p><a href="registry.php" class="btn btn-info btn-md btn-block" role="button">Create Account</a></p>
												</div>
											</div>
											 <div class="form group">
												<p><li><center><a href=" ">Forgot password?</a></center></li></p>
											</div>
						</div>
					</form>
 
		</div>
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>