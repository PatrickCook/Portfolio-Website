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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Navigation -->
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
      <li class="sidebar-brand">
        <a href="#top" onclick=$("#menu-close").click();>Patrick Cook</a>
      </li>
      <li>
        <a href="#top" onclick=$("#menu-close").click();>Home</a>
      </li>
      <li>
        <a href="#about" onclick=$("#menu-close").click();>About</a>
      </li>
      <li>
        <a href="#services" onclick=$("#menu-close").click();>Skills</a>
      </li>
      <li>
        <a href="#portfolio" onclick=$("#menu-close").click();>Gallery</a>
      </li>
      <li>
        <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->

  <div class="header">
    <div id="top" class="text-vertical-center">
      <div class="container-bg">
        <h1>Patrick Cook</h1>
        <div class="push-down">
          <hr style="width:50vw;">
          <h3>A creative software developer who enjoys fusing beautiful interfaces with elegant back end code</h3>
        </div>
      </div>

    </div>
  </div>

  <section id="services" class="services">
    <div class="container">
      <div class="row text-center">
        <h2>Programming Skills</h2>
        <hr class="medium">
        <div class="col-sm-8 col-sm-offset-2">
          <img src="img/skill-chart.jpg" width="100%" height="100%"/>
        </div>
      </div>
    </div>
  </section>
  <!-- Services -->
  <section id="services" class="services bg-primary">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-10 col-lg-offset-1">
          <h2>What can I do for you?</h2>
          <hr class="medium">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="service-item">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-laptop fa-stack-1x text-primary"></i>
                </span>
                <h4>
                  <strong>Static Website Developement</strong>
                </h4>
                <p>Do you need a website that just sticks with little to low maintenance?</p>
                <a href="#portfolio" class="btn btn-light">See Static Websites</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-item">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-spinner fa-spin text-primary"></i>
                </span>
                <h4>
                  <strong>Dynamic Website Development</strong>
                </h4>
                <p>You need a beautiful database driven website that aims for scalability and simplicity.</p>
                <a href="#portfolio" class="btn btn-light">View Examples</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-item">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-cubes text-primary"></i>
                </span>
                <h4>
                  <strong>Low-level System Programming</strong>
                </h4>
                <p>I have completed low-level programming projects in C such as:
                  Disk Usage commandline utility, smake (remake of make utility),
                  Linear simulators and others!
                </p>
                <a href="#portfolio" class="btn btn-light">Use my utilities!</a>
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
          <hr class="small">
          <div class="row">
            <div class="col-md-6">
              <div class="portfolio-item">
                <a href="#">
                  <img class="img-portfolio img-responsive" src="img/my-porfolio.png">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="portfolio-item">
                <a href="#">
                  <img class="img-portfolio img-responsive" src="img/nla-website.jpg">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="portfolio-item">
                <a href="#">
                  <img class="img-portfolio img-responsive" src="img/psk-website.jpg">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="portfolio-item">
                <a href="#">
                  <img class="img-portfolio img-responsive" src="img/gallery-website.jpg">
                </a>
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
            <p class="text-muted">Copyright &copy; Patrick Cook 2014</p>
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
