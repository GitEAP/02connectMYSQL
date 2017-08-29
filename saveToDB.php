<?php
//variables from the form
$name = $_POST[name];
$phone = $_POST[phone];
$email = $_POST[email];

$flavor = $_POST[flavor];

$blueberryTopping = $_POST[blueberry];
$blackberryTopping = $_POST[blackberry];
$mangoTopping = $_POST[mango];
$pineappleTopping = $_POST[pineapple];

$orderNow = $_POST[orderNow];
$payment = $_POST[payment];

//Build Email
$to = 'NBA_EAP@hotmail.com';
$subject = 'Yogurt Pre-Order';
$message = "$name has pre-ordered a frozen yogurt of $flavor with the following toppings:
Blueberries: $blueberryTopping, Blackberries: $blackberryTopping, Mango: $mangoTopping, Pineapple: $pineappleTopping. 
$name wants it $orderNow and will $payment.";

//Send Email
mail($to, $subject, $message, 'FROM:' . $email);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging whena phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Thanks for your Order</title>
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
			<li class="active"><a href="index.html">Pre-order</a></li>
		</ul>
	</div>
</div>
	
	
<main class="default">
<h1>Thank you for your order</h1>

<p>You will need your name (<?php echo $name; ?>) and email (<?php echo $email; ?>) at checkout.</p>
<p>Your <?php echo $flavor; ?> frozen yogurt will be prepared.</p>

<p>You will be returned to the pre-order page...</p>
</main>
	
	
<footer>
	<p>&copy; 2017 &bull; Erick Perez</p>
</footer>
	
	
</body>
</html>






