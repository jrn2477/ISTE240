<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Team 1">

        <title>Places to live</title>

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
                    <h1 id="top"><!-- Start Title--><b>Find somewhere to live in</b><!-- End Title-->
                    <!-- Start subtitle-->Rochester<!-- End Subtitle-->
                    </h1>
                </div>
            </div>
            </div>
            <!-- End Header--> 
            
            <div class="container">
            
                <div class="container-fluid"> 
                
                
                    <div class="row">
                        <div class="sec_menu col-12">
                            <ul>
                                <li class="sm_item"><a class="sec_menu_links"href="universitycommon.php">University Commons (UC) </a></li>
                                <li class="sm_item"><a class="sec_menu_links"href="globalvillage.php">Global Village (GL)</a></li>
                                <li class="sm_item"><a class="sec_menu_links"href="parkpoint.php">Province and Park Point</a></li>
                                <li class="sm_item"><a class="sec_menu_links"href="riverknoll.php">Riverknoll</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                           <!--Beginning University Commons -->
                            <section class="row">
                                <div class="container">
                                <h2 id="universitycommons">University Commons</h2>
                                    
                                    <div class="row col-12">
                                    <div class="container">
                                        
                                        <figure>
                                        
                                            <img class="sm_img" src="img/ucs.jpg" alt="global">
                                            <figcaption><a href="https://www.youtube.com/watch?v=Rk-l46PdDfw">Video Source</a> </figcaption>
                                        </figure>
  
                                    </div>
                                    
                                    </div>
                                    
                                    <div class="desc">
                                          
                                    <h3>Location: West side of campus</h3>
                                    
                                    <p>The complex is few minutes from the heart of campus and offers suite-style living. Each University Commons suite comes fully furnished with four private bedrooms. Two full bathroom, kitchen and laundry room. Also, they come fully furnished dishwashers, microwaves, and garbage disposals. For student’s safety, each UC building is only accessible by card access with a student ID to prevent from theft, and protect personal property. Each student has their personal bedroom features a personal alarm that directly notifies RIT Public Safety in the event of an emergency. UC offered Ethernet connection, Wi-Fi and cable services. Also, all utilities are included in the cost of rent, and all housing are smoke free.  
                                        
                                    </p>
                                    </div>
                                    </div>
                    </section>
                        <!-- End University Commons Description  -->  
                            
                        <div class="map" id="col-xs-12 col-lg-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d93247.20607908526!2d-77.7445380467666!3d43.0840169432164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89d14c5db1449f1f%3A0xae2a8a386181455e!2suniversity+commons+rit!3m2!1d43.084038299999996!2d-77.6744982!5e0!3m2!1sen!2sus!4v1462465825946" width="100%" height="275" frameborder="1" style="border:0; margin-top: 20px"; allowfullscreen></iframe>  
                        </div>
                            
                            <div class="rtt">
                                <a href="#top">Top of Page</a>
                            </div>

                        </div>
                    
                    </div>
                    
                </div>
                
            </div>
            <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </body>
    
</html>