<?php
include('connecthotel.php');
if (isset($_POST['login']))
	{
	$phno=$_POST['phone'];
	$password=$_POST['password'];
	
		if($phno=='' or $password=='')
			{
			 $message='Username and Password must be filled out';
			 echo "<SCRIPT>
				alert('$message');
				</SCRIPT>";
				include('lognav.php');
			}
		else
			{
				//check from the database if the person is present
				$query= "SELECT * FROM HOTELI where phonenumber='".addslashes($phno)."' AND password='".addslashes($password)."'";
				$reslt=mysql_query($query);
				
				//counting the rows now
				$count=mysql_num_rows($reslt);
				
					if($count==1){
						session_register("phonenumber");
						session_register("password");
						header('location:profile.php');
					}
				//if failed to login 
					else
					{ 
						$mess='Username or password incorrect';
						echo "<SCRIPT>
								alert('$mess');
							</SCRIPT>";
						include('lognav.php');
					}
			}

	}			

?>


		
