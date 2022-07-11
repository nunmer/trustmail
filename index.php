<?php
session_start();
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "accountstrust");

if($link === true) {
	echo("success");
}
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST["registerbutton"])) {
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']); 


		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		if ($row['password']==$password){
			$_SESSION['user_email']=$row['email'];
			$_SESSION['id']=$row['user_id'];
			//header('Location: http://www.example.com/');
		} else {			
			$invpass=1;
		}
}


if (isset($_POST["logoutbutton"])) {
	unset($_SESSION['user_email']);
}


 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrustMail</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="img/mail-icon.png" type="image/x-icon">
	<style>
	html {
  scroll-behavior: smooth;
}
	</style>
</head>
<body>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  top: 0;
  position: fixed;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<div id="navbar">
<ul>
  <li><a class="active" href="#top">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#gallery">About</a></li>
</ul>
</div>

<div id="login">
	<br><center><img class="logo" src="img/logo.png" alt="Nazarbaev Intelectual School" title="Nazarbaev Intelectual School"></center></br>
	<center><div 
	style="font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: red;">		
	<?php
		if ($_SESSION['user_email']=="") {
			
			if ($invpass==1){
				echo "Incorrect password or login";
			}
	?>	
	</div></center>
        <form  method="post">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" name="email" placeholder="Логин" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password" name="password" placeholder="Пароль" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
				<p><input type="submit" name="registerbutton" value="Log in"></p>
            </fieldset>
			  <p>Нет аккаунта? &nbsp; &nbsp;<a href="indexreg.php">Регистрация</a></p>
        </form>
</div>
	<?php
		} else {
			
	 header('Location: http://localhost/trustmail/profile.php');		
		
	?>

	
	<?php
		}		
		
	?>
	


<br><br><br>
	<div id="gallery" class="slideshow-container">

<div class="mySlides fade">
  <div class="text">Talking books</div>
  <div class="numbertext">1 / 4</div>
  <img src="img/gall1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="text">Forum Samgau</div>
  <div class="numbertext">2 / 4</div>
  <img src="img/gall2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="text">Forum Samgau</div>
  <div class="numbertext">3 / 4</div>
  <img src="img/gall3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="text">Geek day</div>
  <div class="numbertext">4 / 4</div>
  <img src="img/gall4.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>