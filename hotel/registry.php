
<!DOCTYPE>
<html>
<head>
		<style type="text/css">
			#footer{
			font-size: 90%;
			background-color:#a7cece;
			text-align: center;
			padding: 10px;
			line-height: normal;
			margin; 10px;
			margin-top: 70px;
			}
		
		</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<title>Hotel Registration</title>
	
	<!--link--->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
	
		<div class="container">
			<div class="page-header">
				<ul class="nav nav-tabs">
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Contacts</a></li>
								<li class="disabled"><a href="#">About</a></li>
								<li><a href="#">Galley</a></li>
								<li><a href="#">Video</a></li>							
				</ul>
				
			</div>
				<div class="row">
					<div class="col-xs-6 col-md-offset-2" style="background-color:#a7cece;">
						<p><h4><font color="red">Register for Free!</font></h4></p>
							<form class="form-horizontal" role="form" method="post" action="regnexthotel.php">
								<div class="form-group">
									<label for="firstname" class="col-sm-3 control-label">First Name</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" maxlength="20" name="firstname" placeholder="first-name" required="">
									</div>
								</div>
								
								<div class="form-group">
									<label for="lastname" class="col-sm-3 control-label">Last Name</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" maxlength="20" id="lastname" name="lastname" placeholder="last-name" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="Gender" class="col-sm-3 control-label">Gender</label>
										<div>
											<label class="checkbox-inline">
												<input type="checkbox" name="gender" id="inlinedcheckbox1" class="col-sm-4" value="male" checked/>Male
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="gender" id="inlinedcheckbox1" value="female" reduired="">Female
											</label>
										</div>
											
										
								</div>
								
								<div class="form-group">
									<label for="homeland" class="col-sm-3 control-label">HomeLand</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" maxlength="20" id="homeland" name="homeland" required="" placeholder="home-land">
										</div>
								</div>
								
								<div class="form-group">
									<label for="phonenumber" class="col-sm-3 control-label">Phone-Number*</label>
										<div class="col-sm-4">
											<input type="number" class="form-control"  maxlength="15" id="phonenumber" name="phonenumber" placeholder="phone-number" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="Email" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-4">
											<input type="email" class="form-control"  maxlength="20" name="email" id="email" placeholder="email" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="password" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-4">
											<input type="password" class="form-control" maxlength="40" name="password" id="password" placeholder="password" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="hotelname" class="col-sm-3 control-label">Hotel Name</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" maxlength="20" name="hotelname" id="hotelname" placeholder="hotel-name" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="Location_region" class="col-sm-3 control-label">Hotel Location(Region)</label>
										<div class="col-sm-4">
											<input type="text" class="form-control"  maxlength="30" name="region" id="hotel_location" placeholder="Region" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="Location_region" class="col-sm-3 control-label">Specific Hotel Location</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" maxlength="30" name="city" id="hotel_location_city" placeholder="District/City/Street" required="">
										</div>
								</div>
								
								<div class="form-group">
									<label for="Description" class="col-sm-3 control-label">Description</label>
										<textarea class="form-control"  maxlength="100" name="desc" rows="2"></textarea>
								</div>
								
								<div class="form-group">
									<label for="inputfile" class="col-sm-3 control-label">Photo upload</label>
									<div class="col-sm-4">
										<input type="file" name="photo" id="inputfile">
									</div>
								</div>
								<button name="register" type="submit" class="btn btn-info btn-md" align="right">Submit</button>
							</form>
					</div>			
					
					
					<div class="col-md-4">
					<p>Column for the adsense based on hotels</p>
					</div>
				</div>
					
					<div class="row">
						<footer>
							<div id="footer">
								<center>&copy; 2016 LonacRally Company.</center>	
							</div>
						</footer>
					</div>
		</div>
		
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>