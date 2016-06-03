<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html;charset=ansi">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>CasinoCoin Send</title>
</head>
</head>
<body>
<center>
<a href="index.html" id="logo"><img src="images/logo.png" alt=""/></a>
<p>Email sent please give us some time to respond!</p>
<h1>Back to <a href="http://CasinoCoin.org">CasinoCoin.org</a> or <a href="https://cccitypoker.com">Play</a> Some Poker!</h1></center>
<?php
	$email_to = "contact@casinocoin.org";/* CHANGE THIS WITH YOUR OWN EMAIL ADDRESS */
	$name = $_POST["name"];
	$email = $_POST["email"];
	$url = $_POST["url"];
	$message = $_POST["message"];
	$text = "Sender's Name: $name<br>
			 Sender's Email: $email<br>
			 Sender's Website: $url<br>		 
			 Sender's Message: $message";
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
	$headers .= "From: <$email>" . "\r\n";
	mail($email_to, "Message", $text, $headers);
?>
</body>
</html>