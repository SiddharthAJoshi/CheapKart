<!DOCTYPE html>
<?php
session_start();
include "dbconfig/dbconfig.php" ;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/after_log_home.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="js/after_log_home.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<title>ShopInCart</title>
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
						<button name="ss" type="submit" id="logout">Logout</button>
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
				<li id="usrLogged"><a href="#usr">Welcome <?php echo $_SESSION['username'] ; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- <div id="style"></div> -->
	<div id="mainContent">
		<div id="middleContent">
			<h2>Books</h2>
			<div class="books">
				<div class="item">
					<img src="img\images-books\book1.jpg" alt="Book1" >
					<p align="center">The Fragrance of Rose</p>
					<p align="center"></p>
					<p id="" align="center" title="Cart"><a href="Book1.php">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-books\book2.jpg" alt="book2" >
					<p align="center">One Indian Girl</p>
					<p align="center"></p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-books\book3.jpg" alt="book3" >
					<p align="center">The Modern Monk</p>
					<p align="center">&#8377 239</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-books\book4.jpg" alt="book4" >
					<p align="center">Fantastic Beasts and Where to Find Them</p>
					<p align="center">&#8377 349</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-books\book5.jpg" alt="book5" >
					<p align="center">The Immortals Of Meluha</p>
					<p align="center">&#8377 195</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
			</div>
			<br><br>
			<br>
			<div class='seperator'></div>
			<h2>Clothes</h2>
			<div class="clothes">
				<div class="item">
					<img src="img\images-clothes\cloth1.jpg" alt="cloth1" >
					<p align="center">U.S Polo Assgn.</p>
					<p align="center">&#8377 1899</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-clothes\cloth2.jpg" alt="cloth2" >
					<p align="center">Nike</p>
					<p align="center">&#8377 1695</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-clothes\cloth3.jpg" alt="cloth3" >
					<p align="center">Roadster</p>
					<p align="center">&#8377 1539</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-clothes\cloth4.jpg" alt="cloth4" >
					<p align="center">Moda Rapido</p>
					<p align="center">&#8377 1199</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-clothes\cloth5.jpg" alt="cloth5" >
					<p align="center">Puma</p>
					<p align="center">&#8377 1959</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
			</div>
			<br><br>
			<br>
			<div class='seperator'></div>
			<h2>Electronics</h2>
			<div class="electronics">
				<div class="item">
					<img src="img\images-electronics\elect1.jpg" alt="elect1" >
					<p align="center">SanDisk Cruzer Blade SDCZ50-016G-135 16GB USB 2.0 Pen Drive</p>
					<p align="center">&#8377 413</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-electronics\elect2.jpg" alt="elect2" >
					<p align="center">Sennheiser CX 180 Street II In-Ear Headphone (Black)</p>
					<p align="center">&#8377 849</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img ssrc="img\images-electronics\elect3.jpeg" alt="elect3" >
					<p align="center">WD Elements 1TB USB 3.0 Portable External Hard Drive (Black)</p>
					<p align="center">&#8377 4470</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-electronics\elect4.jpg" alt="elect4" >
					<p align="center">Fantastic Beasts and Where to Find Them</p>
					<p align="center">&#8377 349</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
				<div class="item">
					<img src="img\images-electronics\elect5.jpg" alt="elect5" >
					<p align="center">The Immortals Of Meluha</p>
					<p align="center">&#8377 195</p>
					<p id="" align="center" title="Cart"><a href="">Explore</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
