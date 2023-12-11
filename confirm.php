<?php
//Active SESSION
session_start(); 
$name=$_SESSION['name']; /* OU BIEN==>   $name = (!empty($_SESSION['name'])) ? $_SESSION['name'] : '';    */
$myAvatar="images/".$_SESSION['avatar'];
//fin Active SESSION

//Active COOKIES
/* $name=$_COOKIE["user"];*/  /* OU BIEN==>   $name = (!empty($_COOKIE['user'])) ? $_COOKIE['user'] : ''; */
//fin Active COOKIES
 


/*  echo '<pre>';
  print_r($_COOKIE); 

  print_r($_SESSION); 
echo '</pre>'; */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Confirmation</title>
	
</head>

<body>

<p>Merci <?php echo $name?>, vos données ont bien été transmises.</p>
<img src='<?php echo $myAvatar ?>' alt='avatar' width="100px">
</body>
</html>