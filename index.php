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
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
				<a href="#about" onclick=$( "#menu-close").click();>About</a>
			</li>
			<li>
				<a href="#services" onclick=$( "#menu-close").click();>Skills</a>
			</li>
			<li>
				<a href="#portfolio" onclick=$( "#menu-close").click();>Gallery</a>
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
				Front-end Website Developer
			</div>
			<div class="title-description">
				<ul>
					<li>805.207.0953</li>
					<li><strong>BS Computer Science</strong></li>
					<li>pcook01@calpoly.edu</li>
				</ul>
			</div>
		</div>
	</div>
	<section id="services" class="aboutme">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<center><img class="left-border" src="img/me.jpg" width="250px" height="250px"/>
					</center>
				</div>
				<div class="col-sm-3">
					<div class="left-border">
						<h4> &nbsp Education</h4>
				  </div>
					<p>My name is <strong>Patrick Cook </strong> and I am studying <strong>Computer Science</strong> at Calpoly San Luis Obispo. <br><br> Major:
						<strong>BS Computer Science</strong><br> Standing:
						<strong> Junior</strong><br> Expected to Graduate:<strong> 2018</strong><br> GPA: <strong>3.4</strong>
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
						<li>Developing utilities in C like smake, du, etc</li>
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
									<i class="fa fa-laptop fa-stack-1x"></i>
								</span>
								<h4>
									<strong>Static Website Development</strong>
								</h4>
								<p>Do you need a website that just sticks with little to no maintenance? I use Bootstrap 4 to layout and design my websites. This allows me to create a fluid design that isn't too clunky or stark, it's just right.</p>
								<a href="#portfolio" class="btn btn-dark">See Static Websites</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-spinner fa-spin"></i>
								 </span>

								<h4>
								<strong>Dynamic Website Development</strong>
								</h4>

								<p>You need a beautiful database driven website that aims for scalability and simplicity. My website projects use Bootstrap for layout design, Javascript, and PHP for and database requests.</p>
								<a href="#portfolio" class="btn btn-dark">View Examples</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-cubes"></i>
								 </span>
								<h4>
									<strong>Low-level System Programming</strong>
							  	</h4>
								<p>I have completed low-level programming projects in C such as: Disk Usage commandline utility, smake (remake of make utility), Linear simulators and others!
								</p>
								<a href="#portfolio" class="btn btn-dark">My Utilities!</a>
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
							<h3>My Portfolio</h3>
							<div class="portfolio-item">
								<a href="#">
                <img class="img-portfolio img-responsive left-border" src="img/my-porfolio.png">
              </a>
								HTML5, CSS3, JQuery
							</div>
						</div>
						<div class="col-md-6">
							<h3>Next Level Athletes <small>In Progress... </small></h3>
							<div class="portfolio-item">
								<a href="http://ec2-52-43-205-161.us-west-2.compute.amazonaws.com/index.php">
                <img class="img-portfolio img-responsive left-border" src="img/nla-website.jpg">
              </a>
								HTML5, CSS3, Javascript, PHP
							</div>
						</div>
						<div class="col-md-6">
							<h3>Phi Sigma Kappa Website <small>In Progress... </small></h3>
							<div class="portfolio-item">
								<a href="https://users.csc.calpoly.edu/~pcook01/pskslo/index.html">
                <img class="img-portfolio img-responsive left-border" src="img/psk-website.jpg">
              </a>
								HTML5, CSS3, Javascript, PHP
							</div>
						</div>
						<div class="col-md-6">
							<h3>My Recent Graphic Design Projects</h3>
							<div class="portfolio-item">
								<a href="#">
                <img class="img-portfolio img-responsive left-border" src="img/gallery-website.jpg">
              </a>
								Photoshop, After Effects, Adobe Illustrator
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="container">
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
					<hr class="small">
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
		$( "#menu-close" ).click( function ( e ) {
			e.preventDefault();
			$( "#sidebar-wrapper" ).toggleClass( "active" );
		} );
		// Opens the sidebar menu
		$( "#menu-toggle" ).click( function ( e ) {
			e.preventDefault();
			$( "#sidebar-wrapper" ).toggleClass( "active" );
		} );
		// Scrolls to the selected menu item on the page
		$( function () {
			$( 'a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])' ).click( function () {
				if ( location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) || location.hostname == this.hostname ) {
					var target = $( this.hash );
					target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
					if ( target.length ) {
						$( 'html,body' ).animate( {
							scrollTop: target.offset().top
						}, 1000 );
						return false;
					}
				}
			} );
		} );
		//#to-top button appears after scrolling
		var fixed = false;
		$( document ).scroll( function () {
			if ( $( this ).scrollTop() > 250 ) {
				if ( !fixed ) {
					fixed = true;
					// $('#to-top').css({position:'fixed', display:'block'});
					$( '#to-top' ).show( "slow", function () {
						$( '#to-top' ).css( {
							position: 'fixed',
							display: 'block'
						} );
					} );
				}
			} else {
				if ( fixed ) {
					fixed = false;
					$( '#to-top' ).hide( "slow", function () {
						$( '#to-top' ).css( {
							display: 'none'
						} );
					} );
				}
			}
		} );
	</script>

</body>

</html>
