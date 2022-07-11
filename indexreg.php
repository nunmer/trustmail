<?php
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
$cpassword = mysqli_real_escape_string($link, $_REQUEST['cpassword']); 



	  
if ($password==$cpassword){
		$sql = "INSERT INTO user (user_id, email, password) VALUES 
		 ('','$email', '$password')";
		 if (mysqli_query($link, $sql)){
			 echo "<script>alert(\"Records added successfully. You may log in now!\");</script>";
			 header('Location: http://localhost/trustmail/index.php');
			 
		 } 
	}else{
			 echo "<script>alert(\"Пароли не совпадают!\");</script>";
		 }
	}
 
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TrustMail Registration</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="img/mail-icon.png" type="image/x-icon">
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Main page</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

 
    <div class="top"></div>
	
    <div id="login">
	<br><center><img class="logo" src="img/logo.png" alt="Nazarbaev Intelectual School" title="Nazarbaev Intelectual School"></center></br>
        <form  method="post">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" name="email" placeholder="Логин" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password" name="password" placeholder="Пароль" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><span class="fontawesome-lock"></span><input type="password" name="cpassword"  placeholder="Подтвердите пароль" required></p>    
  			  <p><input type="submit" name="registerbutton" value="Зарегистрироваться"></p>
			  
            </fieldset>
        </form>
		<p>Уже есть аккаунт? &nbsp;&nbsp;<a href="http://localhost/trustmail">Войти</a><span class="fontawesome-arrow-right"></span></p>
    </div>
</body>
</html>