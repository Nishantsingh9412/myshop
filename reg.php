<!DOCTYPE html>
<html>
`	<head> 
		<meta charset="UTF-8">
		<meta name="description" content="Amazon">
		<meta name="keywords" content="Electronics,clothing,home accessories">
		<meta name="author" content="Nishant thakur">
		<meta name="viewport" content="width=device-width,initial-scale=1.0" >
		<title> AMAZON ONLINE SHOP </title>
		<link rel="stylesheet" type="text/css" href="reg.css">
	</head>
<body>
<!-- <h4 id="co"> AMAZON </h4> -->
	<header id="hd">
		<nav>
		
		<button><a href="index.php">HOME</a></button>
		<button><a href="about.php">ABOUT US </a></button>	
		<button><a href="cloth.php">FASHIONWARE </a></button>
		<button><a href="electronics.php"> ELECTRONICS </a></button>
		<button><a href="homea.php">ACCESSORIES </a></button>
		<button><a href="reg.php">REGISTER </a></button>
		<button><a href="log.php">LOGIN </a> </button>
		<button><a href="logout.php">LOGOUT </a> </button>
		</nav>
	</header>
	<div id="sidebar">
	<img src="images/amazon.jpg"> 
	<ul id="ula">			
		<li><button id="btn"> <a href="#"> SUBCATEGORIES </a> </button> </li>
		<li><button id="btn"> <a href="#">SHIRT</a></button> </li>
		<li><button id="btn"> <a href="#">PANTS</a></button> </li>
		<li><button id="btn"> <a href="#">SMARTPHONES</a></button> </li>
		<li><button id="btn"> <a href="#">OLED </a></button> </li>
		<li><button id="btn"> <a href="#"> ACCESSORIES</a></button>  </li>
	</ul>
	</div>
	
	<div id="midbar">   

	<center><br><br><br>
	<div class="form" > <button class="btnr"> <h4> REGISTRATION FORM  </h4> </button><br><br>
	<form method="POST" action="welcome.html" enctype="multi-form/data">
		<label>  <b>Name:</b>  </label><br><br>
		<input type="text" name="name" placeholder="  please enter your name" required>
		<br><br>
		<label>  <b>city:</b>  </label><br><br>
		<input type="text" name="name" placeholder="  please enter your name" required>
		<br><br>
		<label>  <b>pincode:</b>  </label><br><br>
		<input type="text" name="name" placeholder= "  please enter your name" required>
		<br><br>
		<label>  <b>mobile no:</b>  </label><br><br>
		<input type="text" name="name" placeholder="  please enter your name" required>
		<br><br>
		<label>  <b>password:</b>  </label><br><br>
		<input type="password" name="name" placeholder="  please enter your name" required>
		<br><br>
		<label>  <b>confirm password:</b>  </label><br><br>
		<input type="password" name="name" placeholder="  please enter your name" required>
		<br><br>

		<button type="submit" class="submit" > SUBMIT </button>
		<button class="cancel"> <a href="index.php">CANCEL </a></button>
		
		
	</form>
    
	 </div>  </center>
	 
	</div> 
	
	 <footer >
		<button style="float:right;margin-top:10px;"><a href="contact.php">CONTACT US </a></button>
		 <center><p> All Rights &reg Reserved &copy; AMAZON Pvt Ltd </p>
		 </center>
		
</footer>

</body>
</html>		
