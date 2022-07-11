<?php
 if(isset($_POST['redirectButton'])){
	 header('Location: http://localhost/trustmail/');
 }
 
 $link = mysqli_connect("localhost", "root", "", "accountstrust");

if($link === true) {
	echo("success");
}
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST["contactbutton"])) {
	
	echo "Sanzhar kosyachnik";
	
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']); 
$message = mysqli_real_escape_string($link, $_REQUEST['message']); 

		$sql = "INSERT INTO contact (userid, fullname, email, phone, message) VALUES 
		 ('', '$fullname', '$email', '$phone','$message')";
		 if (mysqli_query($link, $sql)){
			 echo "Thank you for feedback";
		 } 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/contact.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-contact100">

		<div class="wrap-contact100">
			<form  method="POST">
			
			<input type="submit" name="redirectButton" class="contact100-form-btn" value="BACK">
			</form>
			
			<form class="contact100-form validate-form" method="POST">
			
			<span class="contact100-form-title">
					Share with your feedback
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="fullname" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<input type='submit' class="contact100-form-btn" name='contactbutton' aria-hidden="true" value="Send">
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
