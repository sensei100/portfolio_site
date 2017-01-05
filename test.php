<?php
	
		if ($_POST["submit"]) {
			$result='<div class="alert alert-success">Form submitted</div>';
			
			if (!$_POST['name']) {
				$error.="<br />Please enter your name";
			}
			
			if (!$_POST['email']) {
				$error.="<br />Please enter your email address";
			}
				
			if (!$_POST['comment']) {
				$error.="<br />Please enter a comment";
			}
			
			if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
    			$error.="<br />Please enter a valid email address";
			} 
    			
			if ($error) {
				$result='<div class="alert" style="color: red"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
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
		
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="urf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--CSS Stylesheets -->
	<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
	<!--Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Andada' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'/>
	
	<!--FontAwesome Icons -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		
	<title> Jennifer Anton </title>
		
</head>

<body>

	<!--HEADER
	============================================= -->
	<header>
		<h1>Jennifer Anton</h1>
		<h2 id="job">Full Stack Developer</h2>
		
		<div class="large-circle"></div>
		<div class="small-circle"></div>
		<div class="medium-circle"></div>
	</header>
	
	<!--NAVIGATION BAR
	============================================= -->
	<div class="navigation">	
		<ul name="top" class="navbar">
			<li class="navbarItem"><a href="#portfolio">Portfolio</a></li>
			<li class="navbarItem"><a href="#process">Process</a></li>
			<li class="navbarItem"><a href="#contact">Contact</a></li>
		</ul>
	</div> <!--navigation -->
	
	<!--Banner
	============================================= -->
	<div class="banner">
	
	
	</div> <!--banner -->
	
	<!--ABOUT ME
	============================================= -->
	<div id="main">
    <img class="sample" id="jen" src="jen.jpg">
		<p class="intro">Hi there! I’m Jennifer Anton, a fullstack web developer.</p>
		<p class="bio">Learning has always been a big part of what I do. I have recently graduated from the Flatiron School's online full-stack web development program and look forward to putting my new skills to work for you!</p>
	</div>

	<!--PORTFOLIO SECTION
	============================================= -->
	<div name="portfolio" id="portfolio">
		<h2 class="label">Portfolio</h2>
			<a class="projects" id="resume" href="Resume/index.html">
			<div class="sample" id="first"></div></a>
	
			<a class="projects" id="hb" href="http://healthbuilders.org">
	 	 	<div class="sample" id="second"></div></a>
	  
	
			<a class="projects" id="game" href="mysql/index.php">
			<div class="sample" id="third"></div></a>
	
			<a class="projects" id="weather" href="weather/weather.php">
			<div class="sample" id="fourth"></div></a>

      		<a class="projects" id="globetrotters" href="https://globetrotters-sensei.herokuapp.com">
      		<div class="sample" id="fifth"></div></a>

      		<a class="projects" id="library" href="https://classroom-library-sensei.herokuapp.com">
      		<div class="sample" id="sixth"></div></a>
      		
      		<a class="projects" id="library" href="https://cover-to-cover.herokuapp.com/#/">
      		<div class="sample" id="seventh"></div></a>
	</div> <!--Main -->
	
	<!--PROCESS SECTION
	============================================= -->
	<div id="process">
		<h2 class="label">Process</h2>
		<div class = "processcontainer">
		
			<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-question-circle fa-4x"></i>
				<h3>Information Gathering</h3>
			</div>
            <div class="processtext">
            	<p>The first step is to gather information. This is where I gain an understanding of <span id="you">you</span> - what your goals and dreams are, and how the website can help you achieve these goals.  I will be asking a lot of questions during this phase to determine the purpose of the site, your target audience, and what kind of information the audience will be looking for.</p>
        	</div>
       
			<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-pencil-square fa-4x"></i>
				<h3>Planning</h3>
			</div>
            <div class="processtext">
            	<p>At this phase we will take the information gathered in phase one and develop a site map. We will need to determine whether you will incorporate a content management system, and what forms will be needed.</p>
        	</div>
        
        	<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-paint-brush fa-4x"></i>
				<h3>Design</h3>
			</div>
            <div class="processtext">
            	<p>Now is the time to design the look and feel of your site.  The design will be based on your target audience and company logo. Your input will be needed throughout this phase to make sure that you are completely satisfied with the final site design.</p>
        	</div>
        	
        	<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-code fa-4x"></i>
				<h3>Development</h3>
			</div>
            <div class="processtext">
            	<p>It is at this phase that your website is created. The home page will be developed first, followed by interior pages. This is the point where we add interactive content forms, shopping carts, etc. </p>
        	</div>
        	
        	<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-check-circle fa-4x"></i>
				<h3>Testing and Delivery</h3>
			</div>
            <div class="processtext">
            	<p>At this point we will test the website to make sure that there is complete functionality of forms, scripts are working properly, and that the site is compatible between browsers. The files will be uploaded to your server. Domain name and web hosting services are available if needed. </p>
        	</div>
        	
        	<div class="processcontentwrapper"> <div class="processIcon">
				<i class="fa fa-wrench fa-4x"></i>
				<h3>Maintenance</h3>
			</div>
            <div class="processtext">
            	<p>I would be happy to continue working with you on updating your site in the future.  I can help with regular backups, Wordpress upgrades, additional plugin installation, etc.  </p>
        	</div>
        </div> <!--Process Container -->
	</div> <!--Process-->

	<!--CONTACT SECTION
	============================================= -->
	<div name="contact" id="contact">
    	<h2 class="label">Contact</h2>
    
    	<div id="socialside">
    	</div>
 
    	<button id="show">Hire me!</button>
    	<iframe id="formSending"></iframe>
    	<div id="modal-container">
    	<section id="modal-box">
    	<button id="hide">x</button>
 	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
	
			<?php echo $result; ?>
			<h2 id="newsletter-header">Lets talk about how we can work together!</h2>
			<p class="lead">Please get in touch - I'll get back to you as soon as possible.</p>
			<form method="post">
				<div class="form-group">
					<label for="name">Your Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />
      			</div> <!--form-group-->
      			
      			<div class="form-group">
					<label for="email">Your Email:</label>
					<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>"  />
      			</div> <!--form-group-->
      			
      			<div class="form-group">
					<label for="comment">Your Comment:</label>
					<textarea name="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>
      			</div> <!--form-group-->
      			
      			<input type="submit" name="submit" data-background= "static" class="btn" value="Submit" />
      			
    		</form>
    		
    	</div> <!--col-->
    </div> <!--row-->
</div> <!--container-->
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="scripts.js" charset="utf-8"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75056426-1', 'auto');
  ga('send', 'pageview');

</script>

</body></html>
