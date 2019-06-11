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
  
  
  
  
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCSptjZwgP-0Dk6pA4FaUd7SQQs0O9u0U0"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">

var map;
var directionsDisplay = null;
var directionsService;
var polylinePath;
var nodes = [];
var prevNodes = [];
var markers = [];
var durations = [];
// Initializing the google maps by using the API Keys
function initializeMap() {
    // Map options
    var opts = {
        center: new google.maps.LatLng(20.5937, 78.9629),
        zoom: 6,
        streetViewControl: false,
        mapTypeControl: false,
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), opts);
    // Create map click event
    google.maps.event.addListener(map, 'click', function(event) {
        // Add destination (max 9)
        if (nodes.length >= 9) {
            alert('Max destinations added');
            return;
        }
        // If there are directions being shown, clear them
        clearDirections();
        
        // Add a node to map directly. We are not storing in the list or array
        marker = new google.maps.Marker({position: event.latLng, map: map});
        markers.push(marker);
        
        // Store node's lat and lng
        nodes.push(event.latLng);
        
        // Update destination count
        $('#destinations-count').html(nodes.length);
    });
    // Add "my location" button only for Finding my location purpose
    var myLocationDiv = document.createElement('div');
    new getMyLocation(myLocationDiv, map);
    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(myLocationDiv);
    
    function getMyLocation(myLocationDiv, map) {
        var myLocationBtn = document.createElement('button');
        myLocationBtn.innerHTML = 'My Location';
        myLocationBtn.className = 'large-btn';
        myLocationBtn.style.margin = '5px';
        myLocationBtn.style.opacity = '0.95';
        myLocationBtn.style.borderRadius = '3px';
        myLocationDiv.appendChild(myLocationBtn);
    
        google.maps.event.addDomListener(myLocationBtn, 'click', function() {
            navigator.geolocation.getCurrentPosition(function(success) {
                map.setCenter(new google.maps.LatLng(success.coords.latitude, success.coords.longitude));
                map.setZoom(12);
            });
        });
    }
}
// Get all durations depending on travel type
function getDurations(callback) {
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: nodes,
        destinations: nodes,
        travelMode: google.maps.TravelMode[$('#travel-type').val()],
        avoidHighways: parseInt($('#avoid-highways').val()) > 0 ? true : false,
        avoidTolls: false,
    }, function(distanceData) {
        // Create duration data array
        var nodeDistanceData;
        for (originNodeIndex in distanceData.rows) {
            nodeDistanceData = distanceData.rows[originNodeIndex].elements;
            durations[originNodeIndex] = [];
            for (destinationNodeIndex in nodeDistanceData) {
                if (durations[originNodeIndex][destinationNodeIndex] = nodeDistanceData[destinationNodeIndex].duration == undefined) {
                    alert('Error: couldn\'t get a trip duration from API');
                    return;
                }
                durations[originNodeIndex][destinationNodeIndex] = nodeDistanceData[destinationNodeIndex].duration.value;
            }
        }
        if (callback != undefined) {
            callback();
        }
    });
}
// Removes markers and temporary paths
function clearMapMarkers() {
    for (index in markers) {
        markers[index].setMap(null);
    }
    prevNodes = nodes;
    nodes = [];
    if (polylinePath != undefined) {
        polylinePath.setMap(null);
    }
    
    markers = [];
    
    $('#ga-buttons').show();
}
// Removes map directions
function clearDirections() {
    // If there are directions being shown, clear them
    if (directionsDisplay != null) {
        directionsDisplay.setMap(null);
        directionsDisplay = null;
    }
}
// Completely clears map
function clearMap() {
    clearMapMarkers();
    clearDirections();
    
    $('#destinations-count').html('0');
}
// Initial Google Maps
google.maps.event.addDomListener(window, 'load', initializeMap);
// Create listeners
$(document).ready(function() {
    $('#clear-map').click(clearMap);
    // Start GA
    $('#find-route').click(function() {    
        if (nodes.length < 2) {
            if (prevNodes.length >= 2) {
                nodes = prevNodes;
            } else {
                alert('Click on the map to select destination points');
                return;
            }
        }
        if (directionsDisplay != null) {
            directionsDisplay.setMap(null);
            directionsDisplay = null;
        }
        
        $('#ga-buttons').hide();
        // Get route durations
        getDurations(function(){
            $('.ga-info').show();
            // Get config and create initial GA population
            ga.getConfig();
            var pop = new ga.population();
            pop.initialize(nodes.length);
            var route = pop.getFittest().chromosome;
            ga.evolvePopulation(pop, function(update) {
                $('#generations-passed').html(update.generation);
                $('#best-time').html((update.population.getFittest().getDistance() / 60).toFixed(2) + 'Mins');
            
                // Get route coordinates
                var route = update.population.getFittest().chromosome;
                var routeCoordinates = [];
                for (index in route) {
                    routeCoordinates[index] = nodes[route[index]];
                }
                routeCoordinates[route.length] = nodes[route[0]];
                // Display temp. route
                if (polylinePath != undefined) {
                    polylinePath.setMap(null);
                }
                polylinePath = new google.maps.Polyline({
                    path: routeCoordinates,
                    strokeColor: "#0066ff",
                    strokeOpacity: 0.75,
                    strokeWeight: 2,
                });
                polylinePath.setMap(map);
            }, function(result) {
                // Get route
                route = result.population.getFittest().chromosome;
                // Add route to map
                directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();
                directionsDisplay.setMap(map);
                var waypts = [];
                for (var i = 1; i < route.length; i++) {
                    waypts.push({
                        location: nodes[route[i]],
                        stopover: true
                    });
                }
                
                // Add final route to map
                var request = {
                    origin: nodes[route[0]],
                    destination: nodes[route[0]],
                    waypoints: waypts,
                    travelMode: google.maps.TravelMode[$('#travel-type').val()],
                    avoidHighways: parseInt($('#avoid-highways').val()) > 0 ? true : false,
                    avoidTolls: false
                };
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                    clearMapMarkers();
                });
            });
        });
    });
});
// GA code
var ga = {
    // Default config
    "crossoverRate": 0.5,
    "mutationRate": 0.1,
    "populationSize": 50,
    "tournamentSize": 5,
    "elitism": true,
    "maxGenerations": 50,
    
    "tickerSpeed": 60,
    // Loads config from HTML inputs
    "getConfig": function() {
        ga.crossoverRate = parseFloat($('#crossover-rate').val());
        ga.mutationRate = parseFloat($('#mutation-rate').val());
        ga.populationSize = parseInt($('#population-size').val()) || 50;
        ga.elitism = parseInt($('#elitism').val()) || false;
        ga.maxGenerations = parseInt($('#maxGenerations').val()) || 50;
    },
    
    // Evolves given population
    "evolvePopulation": function(population, generationCallBack, completeCallBack) {        
        // Start evolution
        var generation = 1;
        var evolveInterval = setInterval(function() {
            if (generationCallBack != undefined) {
                generationCallBack({
                    population: population,
                    generation: generation,
                });
            }
            // Evolve population
            population = population.crossover();
            population.mutate();
            generation++;
            
            // If max generations passed
            if (generation > ga.maxGenerations) {
                // Stop looping
                clearInterval(evolveInterval);
                
                if (completeCallBack != undefined) {
                    completeCallBack({
                        population: population,
                        generation: generation,
                    });
                }
            }
        }, ga.tickerSpeed);
    },
    // Population class
    "population": function() {
        // Holds individuals of population
        this.individuals = [];
    
        // Initial population of random individuals with given chromosome length
        this.initialize = function(chromosomeLength) {
            this.individuals = [];
    
            for (var i = 0; i < ga.populationSize; i++) {
                var newIndividual = new ga.individual(chromosomeLength);
                newIndividual.initialize();
                this.individuals.push(newIndividual);
            }
        };
        
        // Mutates current population
        this.mutate = function() {
            var fittestIndex = this.getFittestIndex();
            for (index in this.individuals) {
                // Don't mutate if this is the elite individual and elitism is enabled 
                if (ga.elitism != true || index != fittestIndex) {
                    this.individuals[index].mutate();
                }
            }
        };
        // Applies crossover to current population and returns population of offspring
        this.crossover = function() {
            // Create offspring population
            var newPopulation = new ga.population();
            
            // Find fittest individual
            var fittestIndex = this.getFittestIndex();
            for (index in this.individuals) {
                // Add unchanged into next generation if this is the elite individual and elitism is enabled
                if (ga.elitism == true && index == fittestIndex) {
                    // Replicate individual
                    var eliteIndividual = new ga.individual(this.individuals[index].chromosomeLength);
                    eliteIndividual.setChromosome(this.individuals[index].chromosome.slice());
                    newPopulation.addIndividual(eliteIndividual);
                } else {
                    // Select mate
                    var parent = this.tournamentSelection();
                    // Apply crossover
                    this.individuals[index].crossover(parent, newPopulation);
                }
            }
            
            return newPopulation;
        };
        // Adds an individual to current population
        this.addIndividual = function(individual) {
            this.individuals.push(individual);
        };
        // Selects an individual with tournament selection
        this.tournamentSelection = function() {
            // Randomly order population
            for (var i = 0; i < this.individuals.length; i++) {
                var randomIndex = Math.floor(Math.random() * this.individuals.length);
                var tempIndividual = this.individuals[randomIndex];
                this.individuals[randomIndex] = this.individuals[i];
                this.individuals[i] = tempIndividual;
            }
            // Create tournament population and add individuals
            var tournamentPopulation = new ga.population();
            for (var i = 0; i < ga.tournamentSize; i++) {
                tournamentPopulation.addIndividual(this.individuals[i]);
            }
            return tournamentPopulation.getFittest();
        };
        
        // Return the fittest individual's population index
        this.getFittestIndex = function() {
            var fittestIndex = 0;
            // Loop over population looking for fittest
            for (var i = 1; i < this.individuals.length; i++) {
                if (this.individuals[i].calcFitness() > this.individuals[fittestIndex].calcFitness()) {
                    fittestIndex = i;
                }
            }
            return fittestIndex;
        };
        // Return fittest individual
        this.getFittest = function() {
            return this.individuals[this.getFittestIndex()];
        };
    },
    // Individual class
    "individual": function(chromosomeLength) {
        this.chromosomeLength = chromosomeLength;
        this.fitness = null;
        this.chromosome = [];
        // Initialize random individual
        this.initialize = function() {
            this.chromosome = [];
            // Generate random chromosome
            for (var i = 0; i < this.chromosomeLength; i++) {
                this.chromosome.push(i);
            }
            for (var i = 0; i < this.chromosomeLength; i++) {
                var randomIndex = Math.floor(Math.random() * this.chromosomeLength);
                var tempNode = this.chromosome[randomIndex];
                this.chromosome[randomIndex] = this.chromosome[i];
                this.chromosome[i] = tempNode;
            }
        };
        
        // Set individual's chromosome
        this.setChromosome = function(chromosome) {
            this.chromosome = chromosome;
        };
        
        // Mutate individual
        this.mutate = function() {
            this.fitness = null;
            
            // Loop over chromosome making random changes
            for (index in this.chromosome) {
                if (ga.mutationRate > Math.random()) {
                    var randomIndex = Math.floor(Math.random() * this.chromosomeLength);
                    var tempNode = this.chromosome[randomIndex];
                    this.chromosome[randomIndex] = this.chromosome[index];
                    this.chromosome[index] = tempNode;
                }
            }
        };
        
        // Returns individuals route distance
        this.getDistance = function() {
            var totalDistance = 0;
            for (index in this.chromosome) {
                var startNode = this.chromosome[index];
                var endNode = this.chromosome[0];
                if ((parseInt(index) + 1) < this.chromosome.length) {
                    endNode = this.chromosome[(parseInt(index) + 1)];
                }
                totalDistance += durations[startNode][endNode];
            }
            
            totalDistance += durations[startNode][endNode];
            
            return totalDistance;
        };
        // Calculates individuals fitness value
        this.calcFitness = function() {
            if (this.fitness != null) {
                return this.fitness;
            }
        
            var totalDistance = this.getDistance();
            this.fitness = 1 / totalDistance;
            return this.fitness;
        };
        // Applies crossover to current individual and mate, then adds it's offspring to given population
        this.crossover = function(individual, offspringPopulation) {
            var offspringChromosome = [];
            // Add a random amount of this individual's genetic information to offspring
            var startPos = Math.floor(this.chromosome.length * Math.random());
            var endPos = Math.floor(this.chromosome.length * Math.random());
            var i = startPos;
            while (i != endPos) {
                offspringChromosome[i] = individual.chromosome[i];
                i++
                if (i >= this.chromosome.length) {
                    i = 0;
                }
            }
            // Add any remaining genetic information from individual's mate
            for (parentIndex in individual.chromosome) {
                var node = individual.chromosome[parentIndex];
                var nodeFound = false;
                for (offspringIndex in offspringChromosome) {
                    if (offspringChromosome[offspringIndex] == node) {
                        nodeFound = true;
                        break;
                    }
                }
                if (nodeFound == false) {
                    for (var offspringIndex = 0; offspringIndex < individual.chromosome.length; offspringIndex++) {
                        if (offspringChromosome[offspringIndex] == undefined) {
                            offspringChromosome[offspringIndex] = node;
                            break;
                        }
                    }
                }
            }
            // Add chromosome to offspring and add offspring to population
            var offspring = new ga.individual(this.chromosomeLength);
            offspring.setChromosome(offspringChromosome);
            offspringPopulation.addIndividual(offspring);
        };
    },
};
</script>
  
</head>

<body class="fh5co-outer">
  <header id="fh5co-header" role="banner">
    
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header"> 
            <!-- Mobile Toggle Menu Button -->
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <a class="navbar-brand" href="../index.php">Pathfinder</a>
          </div>
          <div id="fh5co-navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../inside-page.php">Inside Website</a></li>
              <li><a href="../elements.php">Countries List</a></li>
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
<!--
  <div id="fh5co-hero" style="background-image: url(images/hero_2.jpg)">
    <a href="#fh5co-main" class="smoothscroll animated bounce fh5co-arrow"><i class="ti-angle-down"></i></a>
    <div class="overlay"></div>
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="text">
          <h1> <strong >BUILD</strong> a free HTML5 template <em>by</em> <strong>FREEHTML5.co</strong></h1>
        </div>
      </div>
    </div>
  </div>
-->
  <main role="main" id="fh5co-main">
    <section class="feature">
      <div class="container">
        
        <div class="row">
          <div class="col-md-4">
            <div class="feature-item">
             <!-- <div class="feature-icon"><i class="icon ti-mobile"></i></div>-->
              <div class="feature-text">
                <h3>Please select the destinations you want to visit</h3>
                <p></p>
              </div>
            </div>
          </div>
		  
		  <div>
  <div id="map-canvas" style="width:660px; height:560px;" align="center"></div>
  <div class="hr vpad"></div><br><br>
  <div align="center">
    <table>
        <tr>
            <td colspan="2"><b>Configuration</b></td>
        </tr>
        <tr>
            <td>Travel Mode: </td>
            <td>
                <select id="travel-type">
                    <option value="DRIVING">Car</option>
                    <option value="BICYCLING">Bicycle</option>
                    <option value="WALKING">Walking</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Avoid Highways: </td>
            <td>
                <select id="avoid-highways">
                    <option value="1">Enabled</option>
                    <option value="0" selected="selected">Disabled</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Population Size: </td>
            <td>
                <select id="population-size">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50" selected="selected">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mutation Rate: </td>
            <td>
                <select id="mutation-rate">
                    <option value="0.00">0.00</option>
                    <option value="0.05">0.01</option>
                    <option value="0.05">0.05</option>
                    <option value="0.1" selected="selected">0.1</option>
                    <option value="0.2">0.2</option>
                    <option value="0.4">0.4</option>
                    <option value="0.7">0.7</option>
                    <option value="1">1.0</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Crossover Rate: </td>
            <td>
                <select id="crossover-rate">
                    <option value="0.0">0.0</option>
                    <option value="0.1">0.1</option>
                    <option value="0.2">0.2</option>
                    <option value="0.3">0.3</option>
                    <option value="0.4">0.4</option>
                    <option value="0.5" selected="selected">0.5</option>
                    <option value="0.6">0.6</option>
                    <option value="0.7">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.9">0.9</option>
                    <option value="1">1.0</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Elitism: </td>
            <td>
                <select id="elitism">
                    <option value="1" selected="selected">Enabled</option>
                    <option value="0">Disabled</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Max Generations: </td>
            <td>
                <select id="generations">
                    <option value="20">20</option>
                    <option value="50" selected="selected">50</option>
                    <option value="100">100</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><b>Debug Info</b></td>
        </tr>
        <tr>
            <td><b>Destinations Count: </b></td>
            <td id="destinations-count">0</td>
        </tr>
        <tr class="ga-info" style="display:none;">
            <td><b>Generations:</b> </td><td id="generations-passed">0</td>
        </tr>
        <tr class="ga-info" style="display:none;">
            <td><b>Best Time:</b> </td><td id="best-time">?</td>
        </tr>
        <tr id="ga-buttons">
            <td colspan="2"><button id="find-route">Start</button> <button id="clear-map">Clear</button></td>
        </tr>
    </table>
  </div>
</div>
<!--<div class="col-md-4">
            <div class="feature-item">
              <div class="feature-icon"><i class="icon ti-heart"></i></div>
              <div class="feature-text">
                <h3>Crafted with Love</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis consequuntur nisi enim similique officiis sint, in sequi iste repellat.</p>
              </div>
            </div>
          </div>-->
          <!--<div class="col-md-4">
            <div class="feature-item">
              <div class="feature-icon"><i class="icon ti-mobile"></i></div>
              <div class="feature-text">
                <h3>Mobile First</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis consequuntur nisi enim similique officiis sint, in sequi iste repellat.</p>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </section>
    <!-- END .feature -->
  <!--
    <section class="grid-gallery">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="section-heading">Galleries</h2>
          </div>
        </div>

        <div class="row gallery-row">
          
          <div class="col-md-6 col-sm-6">
            <a href="images/img_1.jpg" class="img image-popup">
              <div class="overlay"></div>
              <div class="text">
                <h2>Project 1</h2>
              </div>
              <img src="images/img_1.jpg" alt="Image" class="img-responsive">
            </a>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="row first-row">
              <div class="col-md-6 col-sm-6">
                <a href="images/img_2.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 2</h2>
                  </div>
                  <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-6 col-sm-6">
                <a href="images/img_3.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 3</h2>
                  </div>
                  <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <a href="images/img_4.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 4</h2>
                  </div>
                  <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
              <div class="col-md-6 col-sm-6">
                <a href="images/img_5.jpg" class="img image-popup">
                  <div class="overlay"></div>
                  <div class="text">
                    <h2>Project 5</h2>
                  </div>
                  <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
        </div>-->
		
		<!-- Gallery Row -->
<!--
        <div class="row gallery-row">
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
        </div>
         -->
        <!-- Gallery Row -->
   <!--
        <div class="row">
          <div class="col-md-12 text-center">
            <div><a href="#" class="btn btn-primary">View Full Gallery</a></div>
          </div>
        </div>
        
       
        
      </div>
    </section>
       -->        
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
