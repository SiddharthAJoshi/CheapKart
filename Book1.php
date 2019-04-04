<!DOCTYPE html>
<?php
session_start();
include "dbconfig/dbconfig.php" ;
require 'C:\xampp\htdocs\PHPMailer-master\PHPMailerAutoload.php';
?>
<html>
<head>
	<title>Book1</title>
	<link rel="stylesheet" type="text/css" href="css/Book1.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="js/Book1.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body onload="load()">
	<div id="style"></div>
	<div id="mainHead">
		<div id="header">
			<h1><span>CheapKart.com</span></h1>
		</div>
		<div id="nav">
			<ul>
				<li id="cont"><a href="after_log_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li id="cont"><a onmouseover="mopen('drpdown1')" onmouseout="mclosetime()" href="#categ">Categories <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
					<div id="drpdown1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="#appliances"><i class="fa fa-plug" aria-hidden="true"></i> Appliances</a>
						<a href="#books"><i class="fa fa-book" aria-hidden="true"></i> Books</a>
						<a href="#electronics"><i class="fa fa-mobile" aria-hidden="true"></i> Electronics</a>
					</div>
				</li>
				<li id="cont"><a onmouseover="mopen('drpdown2')" onmouseout="mclosetime()" href="#deals">Deals <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
					<div id="drpdown2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="#sale1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> 10%-30% sale</a>
						<a href="#sale2"><i class="fa fa-hand-o-right" aria-hidden="true"></i> 50% sale</a>
						<a href="#sale3"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Season sale</a>
						<a href="#sale4"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Exchange offer</a>
					</div>
				</li>
				<li id="cont"><a href="#cart">Cart &nbsp<i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
				<li id="cont"><a href="#aboutus">About Us</a></li>
				<li id="usrLogged1"><a href="#img"><img id='imge' src="usr-image.png" onclick="divopen('drpdown3')" ></a>
					<div id="drpdown3">
						<form method="post">
						<button name="ss" type="submit" id="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
						<?php 
						if(isset($_POST['ss']))
						{
							session_destroy();
							header('location:log2.php');
						}
						?>
					</form>
					</div>
				</li>
				<?php $im=$_SESSION['im'];
				echo "<script>document.getElementById('imge').src='$im[0]';</script>";
				
				?>
				</li>
				<li id="usrLogged"><a href="#usr">Welcome <?php echo $_SESSION['username'] ; ?></a></li>
			</ul>
		</div>
	</div>
	<div id="prodCont">
		<div id="leftCont">
			<img id="imageP" src="img\images-books\book1.jpg">
			<?php 
							
							$imge=$_SESSION['img'];
							echo "<script>document.getElementById('imge').src='$imge[0]';</script>";
						?>
		</div>
		<div id="rightCont">
			<div id="R1">
				<div id="divHead">
					<h1>The Fragrance of Rose</h1>
				</div>
				<p id="bookDetail">&nbsp&nbsp&nbsp&nbspLanguage: English</p>
				<div id="custDiv">
					<div id="shop">
						<p id="bookDetail">Price: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8377 173</p>
						<p id="bookDetail">Availability: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn stock</p>
						<div class="line"></div><br><br>
						<button id="buy">Buy now</button><br>
						<button id="cart">Add to cart</button>	
					</div>
					<div id="comment">
						<p>Review this product :</p>
						 <form name="forim" method="post">
								<textarea id="sss" name='text_box' rows="5" cols="50"></textarea><br>
								<button type="Submit" onclick="seed()" id="subButt">Submit</button>     
       					
   							<?php
							    if(isset($_POST['text_box'])) { //only do file operations when appropriate
							        $a = $_POST['text_box'];
							        if($a!=null){
							        $username= $_SESSION['username'];
							        $myFile = 'reviews/'.$username.".txt";
							        $fh = fopen($myFile, 'w') or die("can't open file");
							        fwrite($fh, $a);
							        $q="INSERT INTO review VALUES(null,'$username','$a')";
							        $r=mysqli_query($con,$q);

							        echo '<script type="text/javascript"> alert("FeedBack Submitted");</script> ';
							        fclose($fh);							       
							        $mail = new PHPMailer;
                           			$mail->isSMTP();// Set mailer to use SMTP
                            		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                            		$mail->SMTPAuth = true;                               // Enable SMTP authentication
                            		$mail->Username = 'opinionmining2016@gmail.com';                 // SMTP username
                            		$mail->Password = 'opinionandsentiments';                           // SMTP password
                            		$mail->Port = 587; 
                            		$mail->setFrom('ankoojoshi1@gmail.com','CheapKart.com');
                            		$mail->addAddress('ankoojoshi1@gmail.com','$username');     // Add a recipient
                            		$mail->isHTML(true);                                  // Set email format to HTML
                            		$mail->Subject = 'Welcome Admin  ';
   									$mail->Body= $username.'  '.'has submitted a review';
                            		$mail->AltBody = '';
                            		if(!$mail->send()) 
                            		{
                              			echo 'Message could not be sent.';
                              			echo 'Mailer Error: ' . $mail->ErrorInfo;
                            		} 
                            		else 
                            		{  
                              			echo 'Message has been sent';
                            		}}
                            		else{
                            			echo '<script type="text/javascript"> alert("Please Do Not Submit Blank FeedBack");</script> ';

                            		}
							    }
							?>
						 </form>
					</div>
				</div>
			</div>
			<center><div class="line1"></div></center>
			<div id="R2">
				<div id="divHead">
					<h1>Book Summary</h1>
				</div>
				<p id="bookDetail">&nbsp&nbsp&nbsp&nbspAbout the Book: <i>The Fragrance OF Rose</i></p>
				<div id="divHead">
					<p id="bookDetail1">
						Rinita Bose is an ordinary middle class girl with extraordinary beauty and unmatched aspirations. While chasing her dreams, she comes face to face with harsh realities. Thats how she learns the valuable lesson what most men really want. In a twist of fate, she picks up enmity with a powerful man and flees the city. She switches careers and hides her identity behind the garb of Rose to make a place in Bollywood. She earns money, fame, adulation and success. But love eludes her. She witnesses the darkness of life in a drunkard father, a lecherous boss, a scheming producer and a friend who wants to take advantage. But then there are those that she can rely on in the worst of situations, her friends from childhood who stand by her through thick and thin. Those who dont judge her; just love her unconditionally. Will Rinita be able to find the love she craves for? Or will she be mercilessly crushed for The Fragrance of Rose.
					</p>
				</div>
			</div>
			<center><div class="line1"></div></center>
			<div id="R3">
				<div id="divHead">
					<h1>Comments</h1>
				</div>
				<!-- <p id="userkanaam">&nbsp&nbsp&nbsp&nbsp<img id="uimage" src="img/usr-image.png">&nbsp -->
				
				<?php 
				
				$e="select * from review";
				$v=mysqli_query($con,$e);
				$e=mysqli_num_rows($v);
				for($i=0;$i<$e;$i++)
				{	
					$rows=mysqli_fetch_array($v);
                    $q="select * from profileimages where username='$rows[1]'";
                    $temp=mysqli_query($con,$q);
                    $temp_arr=mysqli_fetch_array($temp);
					// echo "<p id=\"userkanaam\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>";
					// echo "";
					// echo '<br>';
					// 
					echo "<div id=\"commSec\">	<div id=\"uimage\"><img  src=\"".$temp_arr['imgloc']."\"></div><div id=\"userkanaam\"><p>".$temp_arr['username']."</p></div></div>";
					echo "<div id=\"reviews\"><p id=\"bookDetail1\">".$rows['review']."</p></div>";	
					echo "<br>"	;

				}
				

				 ?>
				
			</div>
		</div>
	</div>
</body>
</html>