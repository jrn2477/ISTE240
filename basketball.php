<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Basketball</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!-- Flamenco Font --> 
    <link href='https://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
    <!-- Volkorn Font --> 
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <!-- Custom Stylesheet --> 
    <link href="css/custom-style.css" rel="stylesheet" type="text/css">

</head>

<body>

 
    <div id="wrapper">
        
        <!-- Sidebar 
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">Tiger's Explore</a>
                </li>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Nightlife</a></li>
                <li><a href="#">Day Trips</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </div>
        /#sidebar-wrapper -->

        <?php 
            include "nav_menu.php"; 
        ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <!-- Header --> 
            <div class="row">
            <div class="container-fluid"> 
                <div class="container-fluid col-lg-1">
                    <!-- menu-button --> 
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </div><!-- /menu-button --> 
                <div class="11">
                    <!-- Site Title & Subtitle --> 
                    <h1 id="top"><!-- Start Title--><b>Tiger's </b><!-- End Title-->
                    <!-- Start subtitle-->Basketball<!-- End Subtitle-->
                    </h1>
                </div>
            </div>
            </div>
            <!-- End Header--> 

  <div class="container-fluid"> 
                    <div class="row">
                    <div class="sec_menu col-12">
	 <?php include "sport_nav.php"; ?>
                    </div>
                    </div>



                        <div class="row">
                                                
                        <div class="row">
                        <div class="col-xs-12 col-lg-10">

                            <div class="row">
                            <h2 id="Cobbs">Basketball</h2>
                            </div>
                            
                            <div class="row">
                            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <figure>
                                    <img class="sm_img" width="90" src="img/Indoor-Clark-Gym-Big.jpg" alt="Basketball in Clark Gym">
                                    <figcaption><a href="http://www.rit.edu/studentaffairs/criw/images/Indoor-Clark-Gym-Big.jpg">Image Source</a></figcaption>
                                </figure>
                            </div>
                            </div>
                            
                            <!-- Basketball Description Start --> 
                            <div class="row ch_desc">
                            <h3>Basketball</h3>

                            <p>
                               Of course, RIT has basketball for competitive game and intramural game. Basketball is the

							   most popular intramural game in RIT and people often play basketball daily. It locates Clark

							   Gym for competitive game only, but you can play intramural basketball game at Student Life

							   Center. You are fan of basketball and want to watch basketball game. It doesn’t cost and you

							   can watch basketball events.
                            </p>

                            </div>
                            <!-- End Basketball Description  --> 


                        <!-- New Row for the Basketball Information --> 
                        <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <h3>Activities</h3>

                            <ul>
                                <li>Scrimmage basketball</li>
                                <li>Dunking competition</li>
                                <li>perfect free throw</li>
                                <li>Shoot a ball from a half of court</li>
                                <li>Intramural tournament</li>
                                <li>USBWA Rochester Area Division II-III team</li>
                            </ul>
                        </div>



                        <div class="col-xs-12 col-lg-4">
                            <h3>Hale-Andrews Student Life Center (SLC)</h3>

                            <ul>
                                <li>Sunday: 10AM–11PM</li>
                                <li>Monday: 6AM–11PM</li>
                                <li>Tuesday: 6AM–11PM</li>
                                <li>Wednesday: 6AM–11PM</li>
                                <li>Thursday: 6AM–11PM</li>
                                <li>Friday: 6AM–11PM</li>
                                <li>Saturday: 8AM–11PM</li>
                            </ul>
                        </div>
						
						
						     <div class="col-xs-12 col-lg-4">
                            <h3>Admission:</h3>
							<p>Free except POSTSEASON PLAY AND Wendy's College Classic Tournaments</p>
 
                        </div>
						
                        </div>
                        <!-- End Basketball Information Page --> 

                  
                        
                        <div class="rtt">
                            <a href="#top">Top of Page</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /#page-content-wrapper -->
        </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <!-- Google Maps API --> 
 

</body>

</html>