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
                    
                    
                           <!--Beginning place introduction page -->
                            <section class="row">
                                <div class="container">
                                <h2 id="universitycommons">RIT Housing</h2>
                                    
                                    <div class="row col-12">
                                    <div class="container">
                                        
                                        <figure>
                                        
                                            <img class="sm_img" src="img/housing.jpg" alt="map">
                                            <figcaption><a href="https://www.rit.edu/emcs/admissions/tour/">Tour Control</a> </figcaption>
                                        </figure>
  
                                    </div>
                                    
                                    </div>
                                    
                                    <div class="desc">
                                          
                                    <h3>About</h3>
                                    
                                    <p>The Office for Residential provides assistance, education, and support to members of Rochester Institute of Technology (RIT) community who are seeking housing or residing off campus.</p>
                                        
                                    <p>RIT offers students the convenience of tour for suitable off campus housing opportunties. Students can also click the click in above "Tour Control" </p>
                                        
                                    <h3>What is like to live on campus?</h3>
                                        
                                    <p>Living on campus gives you easy access to the library, dining halls, classes, computer labs and other amenities. You don't have to deal with traffic—just roll out of bed and walk to class. You also have access to 24-hour emergency maintenance, security, and Residential Life staff on call. Additionally, RIT has its own bus stop connecting  Gleason Cirlce to the 24 Marketplace.</p>
                                        
                            <ul>
                                <li>University Commons</li>
                                <li>Global Village</li>
                                <li>Park Point and Province</li>
                                <li>RiverKnoll</li>
                           
                            </ul>
                                        
                                    </div>
                                    </div>
                    </section>
                        <!-- End place introduction page -->  
                            
                     
                            
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