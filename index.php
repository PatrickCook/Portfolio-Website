<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Patrick Cook</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>

	<!-- Navigation -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
			<li class="sidebar-brand">
				<a href="#top" onclick=$( "#menu-close").click();>Patrick Cook</a>
			</li>
			<li>
				<a href="#top" onclick=$( "#menu-close").click();>Home</a>
			</li>
			<li>
				<a href="#aboutme" onclick=$( "#menu-close").click();>About</a>
			</li>
			<li>
				<a href="#skills" onclick=$( "#menu-close").click();>Skills</a>
			</li>
			<li>
				<a href="#portfolio" onclick=$( "#menu-close").click();>Projects</a>
			</li>
			<li>
				<a href="#gallery" onclick=$( "#menu-close").click();>Gallery</a>
			</li>
			<li>
				<a href="#contact" onclick=$( "#menu-close").click();>Contact</a>
			</li>
		</ul>
	</nav>

	<!-- Header -->

	<div class="header">
		<div id="top">
			<div class="title-container">
				<h1>Patrick Cook</h1>
			</div>
			<div class="title-subtitle">
				Full Stack Software Engineer and iOS Developer
			</div>
			<div class="title-description">
				<ul>
					<li>805.207.0953</li>
					<li><strong>MBA, BS Computer Science</strong></li>
					<li>pcook01@calpoly.edu</li>
				</ul>
			</div>
		</div>
	</div>
	<section id="aboutme" class="aboutme">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<center><img class="left-border" src="img/profile-img.png" width="250px" height="250px" />
					</center>
				</div>
				<div class="col-sm-3">
					<div class="left-border">
						<h4> &nbsp Education</h4>
					</div>
					<p>My name is <strong>Patrick Cook </strong> and I am pursuing my MBA and recently graduated with a <strong>Computer Science</strong> from Calpoly San Luis Obispo. <br><br> Major:
						<strong>MBA, BS Computer Science</strong><br> Standing:
						<strong> Graduate Student </strong><br> Expected to Graduate:<strong> 2019</strong><br> GPA: <strong>3.4</strong>
					</p>
				</div>
				<div class="col-sm-5">
					<div class="left-border">
						<h4> &nbsp A little bit about me</h4>
					</div>
					<p>I am a creative software developer who enjoys fusing beautiful interfaces with elegant back end code. My <strong>skills</strong> include:</p>
					<ul class="arrow-list">
						<li>Designing website interfaces</li>
						<li>Deploying full stack websites</li>
						<li>Developing scalable iOS applications with intuitive UIs</li>
						<li>Using Adobe Suite to design and create graphics</li>
						<li>Providing technical support </li>
					</ul>
				</div>

			</div>
	</section>
	<!-- Services -->
	<section id="skills" class="skills">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-10 col-lg-offset-1">
					<h2>What can I do for you?</h2>
					<hr class="medium">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fas fa-server"></i>
								</span>
								<h4>
									<strong>RESTful API Development</strong>
								</h4>
								<p>I have experience building APIs from the ground up. Whether it be data modeling, endpoint decisions or API authentication, I spend time thinking before doing.</p>
								<a href="#portfolio" class="btn btn-dark">See APIs</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fab fa-react fa-spin"></i>
								 </span>

								<h4>
								<strong>Dynamic Website Development</strong>
								</h4>

								<p>You need a beautiful database driven website that aims for scalability and simplicity. My website projects use Bootstrap for layout design, Javascript, and PHP for and database requests.</p>
								<a href="#portfolio" class="btn btn-dark">See Dynamic websites!</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-cubes"></i>
								 </span>
								<h4>
									<strong>iOS Application Development</strong>
							  	</h4>
								<p>
								 From gathering requirements, to prototyping, to development and testing, I bring attention to detail and
								 and eye for design to each step of the process!
								</p>
								<a href="#portfolio" class="btn btn-dark">See iOS applications!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio -->
	<section id="portfolio" class="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h2>My Work</h2>
					<hr class="medium">
					<div class="row">
						<div class="col-md-6">
							<h3>Queue It</h3>
							<div class="portfolio-item">
								<img class="img-portfolio img-responsive left-border" src="img/queueit.png">
								Swift, JQuery
							</div>
						</div>
						<div class="col-md-6">
							<h3>My Portfolio</h3>
							<div class="portfolio-item">
								<img class="img-portfolio img-responsive left-border" src="img/my-porfolio.png">
								HTML5, CSS3, JQuery
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Next Level Athletes iOS App</h3>
							<div class="portfolio-item">
	                		<img class="img-portfolio img-responsive left-border" src="img/nla-ios-screenshots.png">
								Swift, Javascript, PHP
							</div>
						</div>
						<div class="col-md-6">
							<h3>Next Level Athletes Web Application</h3>
							<div class="portfolio-item">
	                		<img class="img-portfolio img-responsive left-border" src="img/nla-website.jpg">
								HTML5, CSS3, Javascript, PHP
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Phi Sigma Kappa Website</h3>
							<div class="portfolio-item">
	                		<img class="img-portfolio img-responsive left-border" src="img/psk-website.jpg">
						 		HTML5, CSS3, Javascript, PHP
							</div>
						</div>
						<div class="col-md-6">
							<h3>EMR Tool</h3>
							<div class="portfolio-item">
								<img class="img-portfolio img-responsive left-border" src="img/emr-tool.jpg">
								Java
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Du (Disk Usage Utility)</h3>
							<div class="portfolio-item">
								<img class="img-portfolio img-responsive left-border" src="img/du.jpg">
								C
							</div>
						</div>
						<div class="col-md-6">
							<h3>Agar.io<small>In Progress... </small></h3>
							<div class="portfolio-item">
								<img class="img-portfolio img-responsive left-border" src="img/agario.jpg">
								Java
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer>
		<div id="contact" class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h4><strong>Patrick Cook</strong>
        </h4>
					<p>585 Cerro Romauldo Ave.
						<br>San Luis Obispo, CA 93405</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone fa-fw"></i> (805) 207-0953</li>
						<li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:pcook01@calpoly.edu">pcook01@calpoly.edu</a>
						</li>
					</ul>
					<br>
					<ul class="list-inline">
						<li>
							<a href="https://www.facebook.com/patrickcook28"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/patrick-cook-94338589?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
						</li>
					</ul>
					<p class="text-muted">Copyright &copy; Patrick Cook 2016</p>
				</div>
			</div>
		</div>
		<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script>
		// Closes the sidebar menu
		$("#menu-close").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});
		// Opens the sidebar menu
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});
		// Scrolls to the selected menu item on the page
		$(function() {
			$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		//#to-top button appears after scrolling
		var fixed = false;
		$(document).scroll(function() {
			if ($(this).scrollTop() > 250) {
				if (!fixed) {
					fixed = true;
					// $('#to-top').css({position:'fixed', display:'block'});
					$('#to-top').show("slow", function() {
						$('#to-top').css({
							position: 'fixed',
							display: 'block'
						});
					});
				}
			} else {
				if (fixed) {
					fixed = false;
					$('#to-top').hide("slow", function() {
						$('#to-top').css({
							display: 'none'
						});
					});
				}
			}
		});
	</script>

</body>

</html>
