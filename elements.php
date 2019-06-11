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
        <h1>Countries List</h1>  
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
            <p><a href="#" class="btn btn-outline btn-sm">I'm button</a></p>
          </div>
          
        </div>
        <div class="col-md-8 col-md-push-1" id="fh5co-content">
          
         
          <!-- Start Row -->
          <div class="row">
            <div class="col-md-12">
              
              <h2 class="fh5co-uppercase-heading-sm text-center">Fully Responsive Tabs</h2>
                
                <div class="fh5co-spacer fh5co-spacer-xs"></div>
                
                <!-- Start Center Tabs -->
                <div id="fh5co-tab-feature-center" class="fh5co-tab text-center">
                  <ul class="resp-tabs-list hor_1">
                    <li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
                    <li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
                    <li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
                  </ul>
                  <div class="resp-tabs-container hor_1">
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Aesthetic Design</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Branding &amp; Identity</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
                        </div>
                        <div class="col-md-6">
                          <p>In varius, ex ut tincidunt tempor, nunc nisi commodo quam, vel volutpat ex eros id tellus. Morbi cursus libero mi. In condimentum leo in libero volutpat rutrum. Ut pellentesque finibus lacus, sed imperdiet ex tincidunt vel. Proin et blandit nisl, dapibus faucibus urna. Praesent et nisi dictum, placerat purus eget, varius est. Suspendisse potenti. Curabitur blandit faucibus auctor.</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Online Shop</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Center Tabs -->

                <div class="fh5co-spacer fh5co-spacer-sm"></div>

                <!-- StartLeft Tabs -->
                <div id="fh5co-tab-feature" class="fh5co-tab">
                  <ul class="resp-tabs-list hor_1">
                    <li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
                    <li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
                    <li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
                  </ul>
                  <div class="resp-tabs-container hor_1">
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Aesthetic Design</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Branding &amp; Identity</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
                        </div>
                        <div class="col-md-6">
                          <p>In varius, ex ut tincidunt tempor, nunc nisi commodo quam, vel volutpat ex eros id tellus. Morbi cursus libero mi. In condimentum leo in libero volutpat rutrum. Ut pellentesque finibus lacus, sed imperdiet ex tincidunt vel. Proin et blandit nisl, dapibus faucibus urna. Praesent et nisi dictum, placerat purus eget, varius est. Suspendisse potenti. Curabitur blandit faucibus auctor.</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Online Shop</h2>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
                        </div>
                        <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Left Tabs -->

                <div class="fh5co-spacer fh5co-spacer-sm"></div>

                <!-- Start Vertical Menu Tabs -->
                <div id="fh5co-tab-feature-vertical" class="fh5co-tab">
                  <ul class="resp-tabs-list hor_1">
                    <li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
                    <li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
                    <li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
                  </ul>
                  <div class="resp-tabs-container hor_1">
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Aesthetic Design</h2>
                        </div>
                        <div class="col-md-12">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Branding &amp; Identity</h2>
                        </div>
                        <div class="col-md-12">
                          <p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="h3">Online Shop</h2>
                        </div>
                        <div class="col-md-12">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Vertical Menu Tabs -->

                <div class="fh5co-spacer fh5co-spacer-sm"></div>

                <div class="row fh5co-pricing-table-1">
                <div class="col-md-12">
                  <h2 class="fh5co-uppercase-heading-sm text-center">Responsive Pricing Table</h2>
                  <div class="fh5co-spacer fh5co-spacer-xs"></div>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-pricing-table-item">
                  <div class="fh5co-pricing-table-item-heading">
                    <p>Starter</p>
                    <h3><sup>$</sup>19<span>/month</span></h3>
                  </div>
                  <div class="fh5co-pricing-table-item-body">
                    <ul>
                      <li><strong>5</strong> users</li>
                      <li><strong>10</strong> projects</li>
                      <li><strong>10GB</strong> amount of space</li>
                      <li><strong>5</strong> e-mail accounts</li>
                    </ul>
                    <div class="fh5co-spacer  fh5co-spacer-xxs"></div>
                    <p><a href="#" class="btn btn-outline btn-block fh5co-no-margin-botton">Sign Up</a></p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-pricing-table-item">
                  <div class="fh5co-pricing-table-item-heading">
                    <p>Basic</p>
                    <h3><sup>$</sup>29<span>/month</span></h3>
                  </div>
                  <div class="fh5co-pricing-table-item-body">
                    <ul>
                      <li><strong>10</strong> users</li>
                      <li><strong>50</strong> projects</li>
                      <li><strong>50GB</strong> amount of space</li>
                      <li><strong>10</strong> e-mail accounts</li>
                    </ul>
                    <div class="fh5co-spacer  fh5co-spacer-xxs"></div>
                    <p><a href="#" class="btn btn-outline btn-block fh5co-no-margin-botton">Sign Up</a></p>
                  </div>
                </div>
                
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 fh5co-pricing-table-item fh5co-best-offer">
                  <div class="fh5co-pricing-table-item-heading">
                    <p>Pro</p>
                    <h3><sup>$</sup>49<span>/month</span></h3>
                  </div>
                  <div class="fh5co-pricing-table-item-body">
                    <ul>
                      <li><strong>100</strong> users</li>
                      <li><strong>Unlimitted</strong> projects</li>
                      <li><strong>1TB</strong> amount of space</li>
                      <li><strong>100</strong> e-mail accounts</li>
                    </ul>
                    <div class="fh5co-spacer  fh5co-spacer-xxs"></div>
                    <p><a href="#" class="btn btn-primary btn-block fh5co-no-margin-botton">Sign Up</a></p>
                  </div>
                </div>
              </div>

              <div class="fh5co-spacer fh5co-spacer-md"></div>


              <div class="row">

              <div class="col-md-6">
                <h2 class="fh5co-uppercase-heading-sm text-center">Progress Bars</h2>
              <div class="fh5co-spacer fh5co-spacer-xs"></div>
                <h3 class="h5 fh5co-no-margin-bottom">HTML5 / CSS3</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95% Complete (success)</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">jQuery</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%">
                    <span class="sr-only">89% Complete</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">Bootstrap</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
                    <span class="sr-only">88% Complete (warning)</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">Photoshop</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                    <span class="sr-only">76% Complete (danger)</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">Sublime Text 3</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span class="sr-only">90% Complete (danger)</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">Sass</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
                    <span class="sr-only">88% Complete (danger)</span>
                  </div>
                </div>
                <h3 class="h5 fh5co-no-margin-bottom">PHP</h3>
                <div class="progress">
                  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                    <span class="sr-only">97% Complete (danger)</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
              <h2 class="fh5co-uppercase-heading-sm text-center">Accordion</h2>
              <div class="fh5co-spacer fh5co-spacer-xs"></div>
              <div class="panel-group fh5co-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ">
                  <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h4 class="panel-title">
                      <a class="accordion-toggle">
                        Cnon cupidatat skateboard dolor 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4 class="panel-title">
                      
                      <a class="accordion-toggle">
                        Anim pariatur cliche reprehenderit 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4 class="panel-title">

                      <a class="accordion-toggle">Raw denim aesthetic synth</a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div class="fh5co-spacer fh5co-spacer-md"></div>
              
            <!-- Map -->
             <h2 class="fh5co-uppercase-heading-sm text-center">Google Map</h2>
                <div class="fh5co-spacer fh5co-spacer-sm"></div>
            <div id="map"></div>

            <div class="fh5co-spacer fh5co-spacer-md"></div>
            
            <!-- Start Heading -->
            <div class="row">
                <h2 class="fh5co-uppercase-heading-sm text-center">Lists &amp; Heading Level</h2>
                <div class="fh5co-spacer fh5co-spacer-sm"></div>
              <div class="col-md-12">
                <h1>Heading Level 1</h1>
                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5>
                <h6>Heading Level 6</h6>
              </div>

              <div class="fh5co-spacer fh5co-spacer-sm"></div>

              <div class="col-md-6">
                <h3>Unordered List</h3>
                <ul>
                  <li>Convallis ut dictum vel venenatis id turpis</li>
                  <li>Nam faucibus orci sit amet lorem lacinia</li>
                  <li>A blandit dui vulputate</li>
                  <li>Praesent finibus mi sed dignissim ullamcorper
                    <ul>
                      <li>A blandit dui vulputate</li>
                      <li>Sed dignissim ullamcorper</li>
                      <li>Vel venenatis id turpis</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h3>Ordered List</h3>
                <ol>
                  <li>Convallis ut dictum vel venenatis id turpis</li>
                  <li>Nam faucibus orci sit amet lorem lacinia</li>
                  <li>A blandit dui vulputate</li>
                  <li>Praesent finibus mi sed dignissim ullamcorper
                    <ol>
                      <li>A blandit dui vulputate</li>
                      <li>Sed dignissim ullamcorper</li>
                      <li>Vel venenatis id turpis</li>
                    </ol>
                  </li>
                </ol>
              </div>
            </div>
            <!-- End Heading -->

            <div class="fh5co-spacer fh5co-spacer-md"></div>
            
            <!-- Start Image Alignment -->
            <div class="row">
              <div class="col-md-12">
              <h2 class="fh5co-uppercase-heading-sm text-center">Image Alignment</h2>
              <div class="fh5co-spacer fh5co-spacer-xs"></div>

              <img src="images/small_image_2.jpg" alt="Images" class="fh5co-align-left img-responsive">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, asperiores, hic. Nihil, fugit. Illo maxime nemo minus magnam recusandae, ab culpa dignissimos velit. Consequatur voluptate, veniam ad ea asperiores sequi culpa, distinctio qui voluptates enim, fugit sint architecto rerum numquam deleniti incidunt ipsa omnis soluta similique quaerat deserunt provident repellendus excepturi! Alias natus dicta quasi hic obcaecati, pariatur eaque enim suscipit exercitationem quo libero eveniet aliquam repudiandae, nobis, quos tenetur ipsa quia eligendi expedita beatae laboriosam non molestias rem. Totam, aspernatur qui eos harum iusto reprehenderit corporis similique. Corporis delectus ullam earum sint in cum repellat laborum error et dolorum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ipsam, sint voluptas esse quaerat modi.</p>

              <img src="images/small_image_1.jpg" alt="Images" class="fh5co-align-right img-responsive">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, asperiores, hic. Nihil, fugit. Illo maxime nemo minus magnam recusandae, ab culpa dignissimos velit. Consequatur voluptate, veniam ad ea asperiores sequi culpa, distinctio qui voluptates enim, fugit sint architecto rerum numquam deleniti incidunt ipsa omnis soluta similique quaerat deserunt provident repellendus excepturi! Alias natus dicta quasi hic obcaecati, pariatur eaque enim suscipit exercitationem quo libero eveniet aliquam repudiandae, nobis, quos tenetur ipsa quia eligendi expedita beatae laboriosam non molestias rem. Totam, aspernatur qui eos harum iusto reprehenderit corporis similique. Corporis delectus ullam earum sint in cum repellat laborum error et dolorum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ipsam, sint voluptas esse quaerat modi, ex minus provident est consectetur facilis enim vitae, cupiditate.</p>
            </div>
            </div>

            <!-- End Image Alignment -->

            <div class="fh5co-spacer fh5co-spacer-md"></div>
            
            <!-- Start Buttons -->
            <div class="row">
              <div class="col-md-6">
                <a href="#" class="btn btn-primary btn-sm">Small</a>
                <a href="#" class="btn btn-outline btn-sm">Small</a> 
                <a href="#" class="btn btn-primary btn-md">Medium</a>
                <a href="#" class="btn btn-outline btn-md">Medium</a>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-primary btn-sm btn-block">Wide + Small</a>
                <a href="#" class="btn btn-outline btn-sm btn-block">Wide + Small</a> 
                <a href="#" class="btn btn-primary btn-md btn-block">Wide + Medium</a>
                <a href="#" class="btn btn-outline btn-md btn-block">Wide + Medium</a>

              </div>
              
            </div>

            <!-- End Buttons -->

          <div class="fh5co-spacer fh5co-spacer-md"></div>

          <!-- Start Form -->
          <div class="row">
            <div class="col-md-12">
              <h2 class="fh5co-uppercase-heading-sm text-center">Form</h2>
              <div class="fh5co-spacer fh5co-spacer-xs"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
              <form action="#" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="sr-only">Email</label>
                    <input placeholder="Name" id="name" type="text" class="form-control input-lg">
                  </div>  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input placeholder="Email" id="email" type="text" class="form-control input-lg">
                  </div>  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="gender" class="sr-only">Gender</label>
                    <select class="form-control input-lg" id="gender">
                      <option>--Gender--</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
                  </div>  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-md" value="Send">

                    <input type="reset" class="btn btn-outline btn-md" value="Reset">
                  </div>  
                </div>
                
                
              </form> 
            </div>
            
          </div>
          <!-- End Form -->

          <div class="fh5co-spacer fh5co-spacer-md"></div>


<!-- Start Pre Code -->
<h2 class="fh5co-uppercase-heading-sm text-center">Pre</h2>
<div class="fh5co-spacer fh5co-spacer-xs"></div>
<div class="col-md-12">
<pre><code>pre {
overflow: auto;
width: 500px;
}
pre:hover {
position: relative;
width: 700px;
z-index: 99;
}</code></pre>

<!-- End Pre Code -->
          
          <!-- Start Slider -->
          <div class="fh5co-spacer fh5co-spacer-md"></div>
            <h2 class="fh5co-uppercase-heading-sm text-center">Slider</h2>
            <div class="fh5co-spacer fh5co-spacer-xs"></div>

            <!-- <div class="row">
              <div class="col-md-12"> -->
                <div class="owl-carousel owl-carousel-fullwidth">
                    <div class="item"><img src="images/img_large_1.jpg" alt="image"></div>
                    <div class="item"><img src="images/img_large_2.jpg" alt="image"></div>
                    <div class="item"><img src="images/img_large_3.jpg" alt="image"></div>
                    <div class="item"><img src="images/img_large_4.jpg" alt="image"></div>
                    <div class="item"><img src="images/img_large_5.jpg" alt="image"></div>
                    <div class="item"><img src="images/img_large_6.jpg" alt="image"></div>
                 
                </div>
              <!-- </div>
            </div> -->

            <!-- End Slider -->

            <div class="fh5co-spacer fh5co-spacer-lg"></div>

            <!-- Start Slider Testimonial -->
            <h2 class="fh5co-uppercase-heading-sm text-center">Customer Says...</h2>
            <div class="fh5co-spacer fh5co-spacer-xs"></div>
            <div class="owl-carousel-fullwidth">
            <div class="item">
              <p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
            </div>
            <div class="item">
              <p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
            </div>
            <div class="item">
              <p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
            </div>
          </div>
           <!-- End Slider Testimonial -->




            </div>
            <!-- END col-md-12 -->

            <div class="fh5co-spacer fh5co-spacer-md"></div>
            
              
            
          </div>
          <!-- End row -->
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
