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
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
	<header class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<img id="circles" class="img-responsive" src="circles.png">
			</div>  <!--end col -->
			<div class="col-sm-6">
				<h1 class="name">Jennifer Anton</h1>
				<h2 id="job">Full Stack Developer</h2>	
			</div>  <!--end col -->
		</div>  <!--end row -->
	</header>
	
	<!--NAVIGATION BAR
	============================================= -->
	<div class="navbar-wrapper">
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button id="hamburger" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> <!--navbar-header -->
						<div class="navbar-collapse collapse">
							<ul id="top" name="top" class="nav navbar-nav">
								<li class="navbarItem"><a href="#portfolio">Portfolio</a></li>
								<li class="navbarItem"><a href="#process">Process</a></li>
								<li class="navbarItem"><a href="#contact">Contact</a></li>	
							</ul> <!--nav -->
						</div> <!--navbar-collapse -->
					</div> <!--container -->
				</div> <!--navbar -->
			</div> <!--Navbar-wrapper -->
	
	<!--Banner
	============================================= -->
	<div class="banner" data-type="background" data-speed="5">
	
	
	</div> <!--banner -->
	
	<!--ABOUT ME
	============================================= -->
	<div id="main">
		<div class="container">
			<h2 class="label-header">About Me</h2>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
    				<img class="sample img-responsive .card-columns" id="jen" src="jen.jpg">
    			</div>  <!--end col -->
    			<div class="col-sm-8 col-xs-12">
					<p class="intro">Hi there! I’m Jennifer Anton, a fullstack web developer.</p>
					<p class="bio">Learning has always been a big part of what I do. I have recently graduated from the Flatiron School's online full-stack web development program and look forward to putting my new skills to work for you!</p>
				</div>  <!--end col -->
			</div>  <!--end row -->
		</div>  <!--end container -->
	</div>

	<!--PORTFOLIO SECTION
	============================================= -->
	<div name="portfolio" id="portfolio">
		<div class="container">
			<h2 class="label-header">Portfolio</h2>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-12">
					<a class="projects" id="hb" href="http://healthbuilders.org">
					<div class="sample" id="second"></div></a>
					
					<a class="projects" id="resume" href="Resume/index.html">
					<div class="sample" id="first"></div></a>
				</div>  <!--end col -->
				<div class="col-lg-3 col-md-4 col-xs-12">
					<a class="projects" id="globetrotters" href="https://globetrotters-sensei.herokuapp.com">
					<div class="sample" id="fifth"></div></a>
					
					<a class="projects" id="weather" href="weather/weather.php">
					<div class="sample" id="fourth"></div></a>
				</div>  <!--end col -->
				<div class="col-lg-3 col-md-4 col-xs-12">
					<a class="projects" id="library" href="https://cover-to-cover.herokuapp.com/#/">
					<div class="sample" id="seventh"></div></a>
					
					
					<a class="projects" id="library" href="https://classroom-library-sensei.herokuapp.com">
					<div class="sample" id="sixth"></div></a>
				</div>  <!--end col -->
				<div class="col-lg-3 col-md-4 col-xs-12">
					<a class="projects" id="game" href="mysql/index.php">
					<div class="sample" id="third"></div></a>
				</div>  <!--end col -->
			</div>  <!--end row -->
		</div>  <!--end container -->
	</div> <!--portfolio -->
	
	<!--PROCESS SECTION
	============================================= -->
	<div id="process">
		<h2 class="label-header">Process</h2>
		<div class="container process-container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12">
					<div class="processcontentwrapper"> <div class="processIcon">
						<i class="fa fa-question-circle fa-4x"></i></div></div>
				</div><!--end col -->
				<div class="col-lg-2 col-md-2 col-xs-12">
						<h3 class="process-title">Information Gathering</h3>	
				</div><!--end col -->
				<div class="col-lg-9 col-md-9 col-xs-12">
					<div class="processtext">
						<p>The first step is to gather information. This is where I gain an understanding of <span id="you">you</span> - what your goals and dreams are, and how the website can help you achieve these goals.  I will be asking a lot of questions during this phase to determine the purpose of the site, your target audience, and what kind of information the audience will be looking for.</p>
					</div>
       			</div><!--end col -->
       		</div><!--end row -->
       		<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12">
					<div class="processcontentwrapper"> <div class="processIcon">
						<i class="fa fa-pencil-square fa-4x"></i></div></div>
					</div><!--end col -->
					<div class="col-lg-2 col-md-2 col-xs-12">
						<h3 class="process-title">Planning</h3>
					</div><!--end col -->
					<div class="col-lg-9 col-md-9 col-xs-12">		
						<div class="processtext">
							<p>At this phase we will take the information gathered in phase one and develop a site map. We will need to determine whether you will incorporate a content management system, and what forms will be needed.</p>
						</div>
        			</div><!--end col -->
       		</div><!--end row -->
       		<div class="row">
       			<div class="col-lg-1 col-md-1 col-xs-12">
        			<div class="processcontentwrapper"> <div class="processIcon">
					<i class="fa fa-paint-brush fa-4x"></i></div></div>
				</div><!--end col -->
				<div class="col-lg-2 col-md-2 col-xs-12">
					<h3 class="process-title">Design</h3>
				</div><!--end col -->
				<div class="col-lg-9 col-md-9 col-xs-12">	
					<div class="processtext">
						<p>Now is the time to design the look and feel of your site.  The design will be based on your target audience and company logo. Your input will be needed throughout this phase to make sure that you are completely satisfied with the final site design.</p>
					</div>
        		</div><!--end col -->
       		</div><!--end row -->
       		<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12">
					<div class="processcontentwrapper"> <div class="processIcon">
						<i class="fa fa-code fa-4x"></i></div></div>
				</div><!--end col -->
				<div class="col-lg-2 col-md-2 col-xs-12">
					<h3 class="process-title">Development</h3>
				</div><!--end col -->
				<div class="col-lg-9 col-md-9 col-xs-12">	
					<div class="processtext">
						<p>It is at this phase that your website is created. The home page will be developed first, followed by interior pages. This is the point where we add interactive content forms, shopping carts, etc. </p>
					</div>
        		</div><!--end col -->
       		</div><!--end row -->
       		<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12">
					<div class="processcontentwrapper"> <div class="processIcon">
						<i class="fa fa-check-circle fa-4x"></i></div></div>
				</div><!--end col -->
				<div class="col-lg-2 col-md-2 col-xs-12">
					<h3 class="process-title">Testing and Delivery</h3>
				</div><!--end col -->
				<div class="col-lg-9 col-md-9 col-xs-12">
					<div class="processtext">
						<p>At this point we will test the website to make sure that there is complete functionality of forms, scripts are working properly, and that the site is compatible between browsers. The files will be uploaded to your server. Domain name and web hosting services are available if needed. </p>
					</div>
        		</div><!--end col -->
       		</div><!--end row -->
       		<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12">
					<div class="processcontentwrapper"> <div class="processIcon">
						<i class="fa fa-wrench fa-4x"></i></div></div>
				</div><!--end col -->
				<div class="col-lg-2 col-md-2 col-xs-12">
					<h3 class="process-title">Maintenance</h3>
				</div><!--end col -->
				<div class="col-lg-9 col-md-9 col-xs-12">
					<div class="processtext">
						<p>I would be happy to continue working with you on updating your site in the future.  I can help with regular backups, Wordpress upgrades, additional plugin installation, etc.  </p>
					</div>
				</div><!--end col -->
       		</div><!--end row -->
        </div> <!--Process Container -->
	</div> <!--Process-->

	<!--CONTACT SECTION
	============================================= -->
	<div name="contact" id="contact">
    	<h2 class="label-header">Contact</h2>
    	<h4 class="contact-subheading">GET IN TOUCH</h4>
    	<ul class="social-contact">
    		<li class="social-media-icons">
    			<a class="social-link" href="https://www.facebook.com/developerjen/" target="_blank">
    			<i class="fa fa-facebook" aria-hidden="true"></i></a>
    		</li>
    		<li class="social-media-icons">
    			<a class="social-link"  href="https://twitter.com/jensensei" target="_blank">
    			<i class="fa fa-twitter" aria-hidden="true"></i></a>
    		</li>
    		<li class="social-media-icons">
    			<a class="social-link"  href="https://www.linkedin.com/in/jenniferanton" target="_blank">
    			<i class="fa fa-linkedin" aria-hidden="true"></i></a>
    		</li>
    		<li class="social-media-icons">
    			<a class="social-link"  href="http://www.jenniferanton.com" target="_blank">
    			<i class="fa fa-wordpress" aria-hidden="true"></i></a>
    		</li>
    	</ul> 	
	
	
	<!--FOOTER
	============================================= -->
	
	<footer>
		<div class="col-sm-3">
			<p>&copy; 2017 Jennifer Anton</p>
		</div> <!--col--> 
	</footer>
</div>
<!-- Latest compiled and minified JavaScript -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
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
