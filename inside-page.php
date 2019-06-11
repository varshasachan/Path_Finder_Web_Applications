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

  <div id="fh5co-page-title" style="background-image: url(images/hero_2.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="text">
        <h1>Inside Website</h1>  
      </div>
      
    </div>
  </div>

  <main role="main" id="fh5co-main">
    <div class="container">
      <div class="row">
        <div class="col-md-3" id="fh5co-sidebar">
          <div class="fh5co-side-block">
            <h3>Freebies</h3>
            <ul class="fh5co-links">
              <li><a href="http://freehtml5.co/work-free-html5-template-bootstrap/" target="_blank">Work</a></li>
              <li><a href="http://freehtml5.co/light-free-html5-template-bootstrap/" target="_blank">Light</a></li>
              <li><a href="http://freehtml5.co/relic-free-html5-template-using-bootstrap/" target="_blank">Relic</a></li>
              <li><a href="http://freehtml5.co/display-free-html5-template-using-bootstrap/" target="_blank">Display</a></li>
              <li><a href="http://freehtml5.co/sprint-free-html5-template-bootstrap/" target="_blank">Sprint</a></li>
            </ul>
          </div>
          <div class="fh5co-side-block">
            <h3>Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus non repellendus quam, ullam nesciunt nulla nisi doloribus quisquam impedit modi.</p>
          </div>
          
        </div>
        <div class="col-md-8 col-md-push-1" id="fh5co-content">

          <div class="row">
            <div class="col-md-12"><h2>High Quality Template</h2></div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur totam cumque quaerat, quos quia maxime corporis dignissimos tenetur natus consectetur repellat provident ipsa nam accusamus et labore sequi praesentium expedita nobis, dicta cum voluptate. Nam necessitatibus aliquid laboriosam, cum accusantium recusandae eveniet aspernatur blanditiis deserunt maxime adipisci natus praesentium obcaecati.</p>
            </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore autem deserunt minus molestiae omnis natus porro esse cumque nam facilis sed labore, doloribus earum voluptatem necessitatibus asperiores modi aspernatur veritatis.</p>
            </div>
          </div>
          <div class="fh5co-spacer fh5co-spacer-sm"></div>
          <p><img src="images/big_image.jpg" alt="Image" class="img-responsive"></p>
          <div class="fh5co-spacer fh5co-spacer-sm"></div>
          <div class="row">
            
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur totam cumque quaerat, quos quia maxime corporis dignissimos tenetur natus consectetur repellat provident ipsa nam accusamus et labore sequi praesentium expedita nobis, dicta cum voluptate. Nam necessitatibus aliquid laboriosam, cum accusantium recusandae eveniet aspernatur blanditiis deserunt maxime adipisci natus praesentium obcaecati.</p>
            </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore autem deserunt minus molestiae omnis natus porro esse cumque nam facilis sed labore, doloribus earum voluptatem necessitatibus asperiores modi aspernatur veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    
    
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="js/google_map.js"></script>


    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>
</html>
