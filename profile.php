<?php
session_start();

include('connection.php');

 
if (isset($_POST["logoutbutton"])) {
	unset($_SESSION['user_email']);
	session_destroy();
}

 if(isset($_SESSION['user_email'])){}else{
	 header('Location: http://localhost/trustmail/');
 }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_SESSION["user_email"]; ?> profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
<meta name="viewport" content="width=device-width, initial-scale=1">


<ul>
  <li><a class="active" href="profile.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#galldiv">About</a></li>
</ul>


<br></br>
<div class="dropdown" style="float:right;">
  <button class="dropbtn"><?php echo $_SESSION["user_email"]; ?></button>
  <div class="dropdown-content">
    <a href="#"><span class="glyphicon glyphicon-picture"></span> Update photo</a>
    <a href="#"><span class="glyphicon glyphicon-lock"></span> Change password</a>
    <a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
  </div>
</div>
<br>
    <div> 
		<form method='post'>
		<button class="logout" type="submit" name="logoutbutton">Log out</button>
		</form>
    </div>


<div>
<?php include('user/mychat.php'); ?>
</div>

<div>
<?php include('user/chatlist.php'); ?>
</div>

</body>
</html>