<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

<?php
session_start();
include("includes/db.php");

?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pathfinder | Website that predicts optimal path</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="A Website which finds and predicts the optimal path of destinations" />
    <meta name="Shubham Sharma" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Webfont -->
  <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
  <!-- Themify Icons -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Icomoon Icons -->
  <link rel="stylesheet" href="css/icomoon-icons.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Easy Responsive Tabs -->
  <link rel="stylesheet" href="css/easy-responsive-tabs.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

  
  <!-- FOR IE9 below -->
  <!--[if lte IE 9]>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body class="fh5co-outer">
  <header id="fh5co-header" role="banner">
    
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header"> 
            <!-- Mobile Toggle Menu Button -->
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <a class="navbar-brand" href="index.php">Pathfinder</a>
          </div>
          <div id="fh5co-navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="inside-page.php">Inside Website</a></li>
              <li><a href="elements.php">Countries List</a></li>
			  <?php 
					if(!isset($_SESSION['user_email'])){
					
					echo "<li><a href='user_login.php'>Login</a></li>";
					
					}
					else {
					echo "<li><a href='logout.php'>Logout</a></li>";
					}
					
					
					
					?>
			  <!--<li><a href="user_login.php">Login</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
			
			<?php 
					if(!isset($_SESSION['user_email'])){
					
					echo "<li><a href='#' class='btn btn-calltoaction btn-primary'>Welcome Guest!</a></li>";
					
					}
					else {
						
						
					echo "<li><a href='user/my_account.php' class='btn btn-calltoaction btn-primary'>Welcome".$_SESSION['user_email']."</a></li>";
					}
					
					
					
					?>
              <!--<li><a href="#" class="btn btn-calltoaction btn-primary">Get in touch</a></li>-->
            </ul>
          </div>
        </div>
      </nav>

  </header>

  <div id="fh5co-hero" style="background-image: url(images/hero_2.jpg)">
    <a href="#fh5co-main" class="smoothscroll animated bounce fh5co-arrow"><i class="ti-angle-down"></i></a>
    <div class="overlay"></div>
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="text">
          <h1> <strong >PATHFINDER</strong></h1>
		  <h2>A Website That Predicts Optimal Path of Set of Destinations</h2>
        </div>
      </div>
    </div>
  </div>

  <main role="main" id="fh5co-main">
    <section class="feature">
      <div class="container">
        
        <div class="row">
          <div class="col-md-4">
            <div class="feature-item">
              <div class="feature-icon"><i class="icon ti-mobile"></i></div>
              <div class="feature-text">
                <h3>How it predicts the optimal path?</h3>
                <!--<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Quidem reiciendis consequuntur nisi enim similique officiis sint, in sequi iste repellat.</p>
              -->
			  <ol>
			  <li>It takes the data set in two formats-<br>
               a)in the form of csv file.<br>
               b) extracting the data using Google distance matrix API.	</li>
              <li>It performs the Genetic Algorithm on the set of data.
			  </li>			   
			  <li>It predicts the output in the google maps which shows the optimal path for visiting the landmark points of country. We have cover different countries in our project.
			  </li>
			  </ol>
			  </div>
            </div>
          </div>
		  <div class="col-md-8 col-sm-6">
            <a href="images/sc_us.png" class="img image-popup">
              <div class="overlay"></div>
              <div class="text">
                <h2>Some screenshots of different generations of genetic algorithm of road trip in U.S</h2>
              </div>
              <img src="images/sc_us.png" alt="Image" class="img-responsive">
            </a>
          </div>
         
          
        </div>
      </div>
    </section>
    <!-- END .feature -->

    <section class="grid-gallery">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="section-heading">Projects</h2>
          </div>
        </div>

        <div class="row gallery-row">
          
          <div class="col-md-3 col-sm-6">
            <a href="index.php">
              <div class="overlay"></div>
              <div class="text">
                <h2>United States</h2>
              </div>
              <img src="images/usi.jpg" alt="Image" class="img-responsive">
            </a>
          </div>
		  <div class="col-md-3 col-sm-6">
            <a href="index.php">
              <div class="overlay"></div>
              <div class="text">
                <h2>Europe</h2>
              </div>
              <img src="images/eui.jpg" alt="Image" class="img-responsive">
            </a>
          </div>
		  <div class="col-md-3 col-sm-6">
            <a href="index.php" >
              <div class="overlay"></div>
              <div class="text">
                <h2>South America</h2>
              </div>
              <img src="images/x.jpg" alt="Image" class="img-responsive">
            </a>
          </div>
		  <div class="col-md-3 col-sm-6">
            <a href="index.php" >
              <div class="overlay"></div>
              <div class="text">
                <h2>Michigan</h2>
              </div>
              <img src="images/y.jpg" alt="Image" class="img-responsive">
            </a>
          </div>

          <!--<div class="col-md-3 col-sm-6">
            <div class="row first-row">
              <div class="col-md-3 col-sm-6">
                <a href="images/sc_us2.png" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Europe</h2>
                  </div>
                  <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="images/sc_us3.png" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>South America</h2>
                  </div>
                  <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <a href="images/sc_us4.png" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Michigan</h2>
                  </div>
                  <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="images/sc_us5.png" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 5</h2>
                  </div>
                  <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
          </div>-->
        </div>
		
		<!-- Gallery Row -->

       <!-- <div class="row gallery-row">
          <div class="col-md-6 col-sm-6">
            <div class="row first-row">
              <div class="col-md-6 col-sm-6">
                <a href="images/img_6.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 6</h2>
                  </div>
                  <img src="images/img_6.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-6 col-sm-6">
                <a href="images/img_7.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 7</h2>
                  </div>
                  <img src="images/img_7.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <a href="images/img_8.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 8</h2>
                  </div>
                  <img src="images/img_8.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-6 col-sm-6">
                <a href="images/img_9.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 9</h2>
                  </div>
                  <img src="images/img_9.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-sm-6">
            <a href="images/img_10.jpg" class="img image-popup">
              <div class="overlay"></div>
              <div class="text">
                <h2>Project 10</h2>
              </div>
              <img src="images/img_10.jpg" alt="Image" class="img-responsive">
            </a>
          </div>
        </div>  -->

        <!-- Gallery Row -->

        
        
       
        
      </div>
    </section>

  </main>

  <footer role="contentinfo" id="fh5co-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="footer-box border-bottom">
            <h3 class="footer-heading">About Us</h3>
            <p> This Web Application Shows the Optimal Path for Set of Nodes (Destinations) using Genetic Algorithm
			</p>
			</div>
          
            <h3 class="footer-heading">Subscribe</h3>
            <form action="#" class="form-subscribe">
              <div class="field">
                <input type="email" class="form-control" placeholder="hello@gmail.com">
                <button class="btn btn-primary">Subscribe</button>
              </div>
            </form>
            <div class="fh5co-spacer fh5co-spacer-sm"></div>
          
        </div>
        <!--<div class="col-md-3 col-sm-6">
          
            <h3 class="footer-heading">Recent Blog</h3>
            <ul class="footer-list">
              <li><a href="#">Nobis odio nulla autem aliquam vitae doloremque.</a></li>
              <li><a href="#">Consectetur adipisicing elit.</a></li>
              <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
            </ul>
          
        </div> -->
 

        <div class="visible-sm clearfix"></div>


        <div class="col-md-4 col-sm-6">
          
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-list">
              <li><a href="#"><abbr title="Road Trip in US">United States</abbr></a></li>
              <li><a href="#"><abbr title="Road Trip in Europe">Europe</abbr></a></li>
              <li><a href="#"><abbr title="Road Trip in South America">South America</abbr></a></li>
              <li><a href="#"><abbr title="Road Trip in Michigan">Michigan</abbr></a></li>
            </ul>
          
        </div>


        <div class="col-md-4 col-sm-6 clearfix">

          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="footer-box">
                <h3 class="footer-heading">Get in Touch</h3>
                <ul class="footer-list">
                  <li>Group Members</li>
				  <ol>
				  <li>Rahul Sant</li>
				  <li>Rahul Verma</li>
				  <li>Shubham Sharma</li>
				  </ol>
				  </ul>
                  <!--<li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>-->
				  
                  
                </ul>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            <p class="text-center"><small>&copy; 2017 B.Tech Project Work</small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Go To Top -->
    <a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>
    
      
    <!-- jQuery -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Easy Responsive Tabs -->
    <script src="js/easyResponsiveTabs.js"></script>
    <!-- FastClick for Mobile/Tablets -->
    <script src="js/fastclick.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>
</html>
