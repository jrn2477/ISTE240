<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Track and Field</title>

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
                    <!-- Start subtitle-->Track and Field<!-- End Subtitle-->
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
                            <h2 id="Cobbs">Track and Field</h2>
                            </div>
                            
                            <div class="row">
                            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <figure>
                                    <img class="sm_img" width="90" src="img/Indoor-Field-House.jpg" alt="Track and Field indoor">
                                    <figcaption><a href="Indoor-Field-House.jpg">Image Source</a></figcaption>
                                </figure>
                            </div>
                            </div>
                            
                            <!-- Basketball Description Start --> 
                            <div class="row ch_desc">
                            <h3>Track and Field</h3>

                            <p>
You want to keep your body with good shape and have a good heart. RIT offers Track and

Field and you can join in Track and field as player. You possibly can be fast as Usain Bolt. It

locates in Varsity Game and Track Complex and it has many different events. You can select

your favorite events with your high track and field skills. If you are not a player, track and

field is free to enter the game.
                            </p>

                            </div>
                            <!-- End Basketball Description  --> 


                        <!-- New Row for the Basketball Information --> 
                        <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <h3>Activities</h3>

                            <ul>
                                <li>Division Track and Field team</li>
                               <li>Pratice: running</li>
                                    <li>Race</li>
                            </ul>
                        </div>



                        <div class="col-xs-12 col-lg-4">
                            <h3>Field House Indoor Track</h3>

                            <ul>
                                <li>Sunday: 12pm-11pm</li>
                                <li>Monday: 6AM–4PM; 6pm-11pm</li>
                                <li>Tuesday: 6AM–4PM; 6pm-11pm</li>
                                <li>Wednesday: 6AM–4PM; 6pm-11pm</li>
                                <li>Thursday: 6AM–4PM; 6pm-11pm</li>
                                <li>Friday: 6AM–4PM; 6pm-11pm</li>
                                <li>Saturday: Not Available</li>
                            </ul>
                        </div>
						
			                    <div class="col-xs-12 col-lg-4">
                            <h3>Hale-Andrews Student Life Center (SLC 3rd floor)</h3>

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
							<p>Free except POSTSEASON PLAY</p>
 
                        </div>
						
                        </div>
                        <!-- End Basketball Information Page --> 

							 <?php include "footer.php"; ?>
                        
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