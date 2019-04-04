<!DOCTYPE html>
<?php
session_start();
include "dbconfig/dbconfig.php" ;
require 'C:\xampp\htdocs\PHPMailer-master\PHPMailerAutoload.php';
?>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/log2.css">
	<script type="text/javascript" src="js/log.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
</head>
<body onload="load()">
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
				<button class='logtab' onclick="reg()"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>SIGNUP</span></button>
			    <button class='signtab' onclick="log()"> <i class="fa fa-sign-in" aria-hidden="true"></i> <span>LOGIN</span></button>
			</div>
			<!-- LOGIN STARTS    -->	
			<div class="loginform" id="logitem">
				<div class="header">
					<h1>LOGIN.</h1>			
				</div>
				<center>
					<div class="imagePic">
						<img id="imge" src="img/usr-image.jpg">	
					</div><br><br><br>
					<form name="foform" action method="POST">
						<div class="log"> 
							<input type="text" name='username' placeholder="Username"/ required><br><br><br>
							
							<button name='login-button' class="login-button" type="submit" / required > 
				            <span> NEXT </span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
						</div>
						<?php
					if(isset($_POST['login-button'])) 
						{
						$username=$_POST['username'];
						$query="select imgloc from profileimages where username='$username'";//username in image db and uname in user db

						$que="select * from profileimages where username='$username'";
         				$exec=mysqli_query($con,$query);
         				$exe=mysqli_query($con,$que);
         				echo "string";
         				if($exec && mysqli_num_rows($exe)>0){
         				$result=mysqli_fetch_row($exec);	
     					$_SESSION['username']=$username;
     					$_SESSION['img']=$result;

     					
     					header('location:log1.php');	
       					  }
       					  else 
       					  {
       					  	echo "<script>alert('User does not exist');</script>";
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
					<form  name="foform" action="log2.php" method="POST" enctype="multipart/form-data">
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
						<?php
						if(isset($_POST['signup-button']))
                  		{      
                     		$username=$_POST['username'];
                      		echo $username;
                      		$emailid=$_POST['email'];  
                      		$password=$_POST['password'];
                      		$cpassword=$_POST['cpassword'];
                      		$q="select * from user where username='$username'";
                      		$quer_run=mysqli_query($con,$q);

                      		if(mysqli_num_rows($quer_run)>0)
                        					{
                           						echo '<script>alert("username already exists")</script>';
                        					}
                        	else{
                      
                			if($password==$cpassword)
                  			{
                    		     					
                          		$query1= "INSERT INTO user(id,uname,emailid,password) VALUES(null,'$username','$emailid','$password')";
                            	$run=mysqli_query($con,$query1);
                            	if($run)
                              	{
                               		echo '<script>alert("Signin Ho gaya")</script>';
                              		$mail = new PHPMailer;
                           			$mail->isSMTP();// Set mailer to use SMTP
                            		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                            		$mail->SMTPAuth = true;                               // Enable SMTP authentication
                            		$mail->Username = 'opinionmining2016@gmail.com';                 // SMTP username
                            		$mail->Password = 'opinionandsentiments';                           // SMTP password
                            		$mail->Port = 587; 
                            		$mail->setFrom('ankoojoshi1@gmail.com','CheapKart.com');
                            		$mail->addAddress($emailid, $username);     // Add a recipient
                            		$mail->isHTML(true);                                  // Set email format to HTML
                            		$mail->Subject = 'Welcome   '.$username;
   									$mail->Body= 'Visit For Exciting offers exclusively at CheapKart.com '.'YOUR CREDENTIALS ARE USERNAME:  '.$username.'  Password:  '.$password.'  Do Not Share This With Any Body';
                            		$mail->AltBody = '';
                            		if(!$mail->send()) 
                            		{
                              			echo 'Message could not be sent.';
                              			echo 'Mailer Error: ' . $mail->ErrorInfo;
                            		} 
                            		else 
                            		{  
                              			echo 'Message has been sent';
                            		}

                              	}
                           
                         	}
                         }
                        }
                      
						?>
						<?php 
						
							if(isset($_FILES['profile']))
							{
								
									$name=$_FILES['profile']['name'];
									$type=explode('.', $name);
									$type=end($type);
									$username=$_POST['username'];
									echo $type.'<br>';
									$tmp=$_FILES['profile']['tmp_name'];
									$lowtype=strtolower($type);
										if($lowtype!='png'&&$lowtype!='jpg'&&$lowtype!='jpeg'&&$lowtype!='bmp')
										{
											echo "<script>alert('image type unsupported please check');</script>";
										}
										else
										{	
										$query="select * from user where uname= '$username'";
                    					$exec=mysqli_query($con,$query);
                      					
                        					
											$loc='images/'.$name;
											move_uploaded_file($tmp,$loc);
											$query="insert into profileimages values('','$username','$loc')";
											$exec=mysqli_query($con,$query);
											if($exec)
											{
											echo "<script>alert('image uploaded');</script>";
											}
											else
											{
												echo "<script>alert('error in image upload');</script>";
											}
										
										}
							}
						
						

					 ?>			
					</form>	
				</center>	
			</div>
		
	</div>
</body>
</html>