<!doctype html>
<html>
<head>
	<title>Email with PHP</title>
	
	<meta charset = "utf-8" />
	<meta http-equiv = "Content-type" content = "text/html; charset = utf-8" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	
</head>

<body>

<div>

	<?php

		$emailTo = "jenanton01@yahoo.com";
		$emailTo = "jenanton01@gmail.com";
		$subject = "I hope this works!";
		$body = "I think you are great";
		$headers = "From: mail.developerjen.com";
		

$header.= "MIME-Version: 1.0\r\n";

$header.= "Content-Type: text/html; charset=utf-8\r\n";

$header.= "X-Priority: 1\r\n";
		
		mail($emailTo, $subject, $body, $headers);
		echo mail($emailTo, $subject, $body, $headers);

		
		

?>