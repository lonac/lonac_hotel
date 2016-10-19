
<?php
//check and validate the data to be fed

include('connecthotel.php');
if(isset($_POST['register']))
	{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname']; 
	$phonenumber=$_POST['phonenumber']; 
	//$gender=$_POST['gender'];
	$homeland=$_POST['homeland'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hotelname=$_POST['hotelname'];
	$region=$_POST['region'];
	$street=$_POST['city'];
	$desc=$_POST['desc'];
	$photo=$_POST['photo'];

	
	//check if the user exists already
	$checkuser="SELECT * FROM Hoteli where phonenumber='" .addslashes($phonenumber) ."'";
	$reslt=mysql_query($checkuser) or die (mysql_error());
	
	//start counting the number of rows
	$count=mysql_num_rows($reslt);
	if($count==1)
		{
			$msg='The PhoneNumber is already Registered';
			echo "<SCRIPT>
					alert('$msg');
					</SCRIPT>";
					include('registry.php');
		}
			else
			{
			//a query for adding the new user
			$query="INSERT INTO HOTELI (firstname,lastname,phonenumber,homeland,email,password,hotelname,region,street,description,photo) VALUES('$firstname','$lastname','$phonenumber','$homeland','$email','$password','$hotelname','$region','$street','$desc','$photo')";
			$rst=mysql_query($query) or die (mysql_error());
			//inform the user if has been registered or failed
			
			if(!$rst)
				{
				echo("failed to register");
				}
					else
						{
							header('location:profile.php');
						}	
			}
		

	}
?>