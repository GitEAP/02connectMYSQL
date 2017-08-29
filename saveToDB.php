<?php
//variables from the form
$name = $_POST[name];
$phone = $_POST[phone];
$email = $_POST[email];

$dropDown = $_POST[contactDropdown];
$contactMessage = $_POST[contactMessage];

//Build database connection with host, user, pass, database
$dbconnection = mysqli_connect('localhost', 'erickper_3760usr', 'OcaC)hJzA}Wd', 'erickper_3760') or die ('connection failed');


//build the querry
$queryDB = "INSERT INTO yogurt_inquires (name, phone, email, contact, message) VALUES ('$name', $phone,'$email','$dropDown','$contactMessage')";


//try and talk to the database
$result = mysqli_query($dbconnection, $queryDB) or die ('querry failed');

//we're done so hang up
mysqli_close($dbconnection);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging whena phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Thanks for your message</title>
<link href="styles/main.css" type="text/css" rel="stylesheet">
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet"> 
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta http-equiv="refresh" content="10; URL=index.html">
</head>
<body>
	

<div class="headerWrapper clearfix">
	<h1>Yogurt Fun</h1>
	<h2>Frozen Yogurt</h2>
	
	<div class="nav clearfix">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Flavors</a></li>
			<li><a href="#">Toppings</a></li>
			<li><a href="#">Location</a></li>
			<li><a href="#">Pre-order</a></li>
			<li class="active"><a href="index.html">Contact</a></li>
		</ul>
	</div>
</div>
	
	
<main class="default">
<h1>Thank you for your message. We will contact you with additional information.</h1>

<p>You will be returned to the contact us page...</p>
</main>
	
	
<footer>
	<p>&copy; 2017 &bull; Erick Perez</p>
</footer>
	
	
</body>
</html>






