<?php
		if ($_POST["submit"]) {
			$result='<div class="alert alert-success">Form submitted</div>';
			if (!$_POST['name']) {
				$error.="<br />Please enter your name";
			}
			if (!$_POST['email']) {
				$error.="<br />Please enter your email address";
			}	
			if (!$_POST['message']) {
				$error.="<br />Please write a message.";
			}
			if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
    			$error.="<br />Please enter a valid email address";
			} 	
			if ($error) {
				$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
			} else {
				 if (mail("jenanton01@gmail.com", "Comment from website!", "Name: ".$_POST['name']."
				Email: ".$_POST['email']."
				Comment: ".$_POST['comment'])) {
					$result='<div class="alert alert-success"><strong>Thank you! I\'ll be in touch.</div>';
				} else {
				$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
				}
			}
		}	
	?>