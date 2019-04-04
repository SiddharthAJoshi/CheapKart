<!DOCTYPE html>
<?php
session_start();
include "dbconfig/dbconfig.php" ;
?>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/log1.css">
	<script type="text/javascript" src="js/log.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
</head>
<body onload="load1()">
	<div class="leftCont" style="background-image:url(img/logbag.jpg);">
		<div class="title">
			<h1>CheapKart.com</h1>
		</div>
        <div class="style">
        </div>
         <div class="style1">
        </div>
		<div class="bottomNav">
			<ul>
				<li><a><i class="fa fa-address-card-o" aria-hidden="true"></i>   About Us</a></li>
				<li><a><i class="fa fa-volume-control-phone" aria-hidden="true"></i>  Contact Us</a></li>
				<li><a>Terms</a></li>
				<li><a>Privacy</a></li>
			</ul>
		</div>
       

	</div>
	<div class="mainH">
		
			<div class="btn">
				<form action="log2.php" method="POST"><button class='logtab' onclick="reg()"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>SIGNUP</span></button></form>
			    <button class='signtab' onclick="log()"> <i class="fa fa-sign-in" aria-hidden="true"></i> <span>LOGIN</span></button>
			</div>
			<!-- LOGIN STARTS    -->	
			<div class="loginform" id="logitem">
				<div class="header">
					<h1>LOGIN.</h1>			
				</div>
				<center>
					<div class="imagePic">
						<img id="imge" src="img/usr-image.jpg">	<br>
						<div class="usrn">
							<?php 
								$us= $_SESSION['username'];
								echo 'Hello '.$us;
								$imge=$_SESSION['img'];
								echo "<script>document.getElementById('imge').src='$imge[0]';</script>";
							?>
						</div>
					</div><br><br><br>
					<form action="" method="POST">
						<div class="log"> 
							<input type="password" name='password' placeholder="Password"/ required><br><br><br><br><br>
							<input type="submit" value="LOGIN" name='logi-button' class="login-button"/ required>				
						</div>
						<?php
						if(isset($_POST['logi-button']))
							{
								$username=$_SESSION['username'];
								$password=$_POST['password'];
								$query="select * from user where uname='$username' AND password='$password'" ;
								$query_run=mysqli_query($con,$query);
								if(mysqli_num_rows($query_run)>0)
									{
      
										$_SESSION['username']=$username;
										$_SESSION['im']=$imge;
										header('location:after_log_home.php');


									}
								else
									{
										echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
				
									}	
		
						}

						?>
					</form>
				</center>
			</div>
			<!-- SIGNUP STARTS    -->	
			<div class="signinform" id="regitem">
				<div class="header">
					<h1>SIGNUP.</h1>			
				</div>
				<center>
					<form action="" method="POST">
						<div class="sign">
			   				<input type="text" name='username' placeholder="Username"/ required><br>    			
			    			<input type="text" name='email' placeholder="Email" / required>
			    			<br>    			
			    			<input type="password" name='password' placeholder="Password"/ required><br>    			
			    			<input type="password" name='cpassword'  placeholder="Re-Enter Password"/ required>
			    			<br>
			    			<label class="custom-file-upload">Upload Pic
			    				<input type="file" name="profile" placeholder="Choose Your Profile Image"/ required>
			    			</label><br> <br>

			    			<input type="submit" value="SIGNUP" name='signup-button' class="signup-button"/ required>
						</div>			
					</form>	
				</center>	
			</div>
		
	</div>
</body>
</html>