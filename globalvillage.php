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
                            
                            <!--Beginning Global Village -->
                            <section class="row">
                                <div class="container">
                                <h2 id="global village">Global Village</h2>
                                    
                                    <div class="row col-12">
                                    <div class="container">
                                        
                                        <figure>
                                        
                                            <img class="sm_img" src="img/globalvillages.jpg" alt="global">
                                            <figcaption><a href="https://www.youtube.com/watch?v=AW_E_slpIEE">Video Source</a> </figcaption>
                                        </figure>
                                        
                                    </div>
                                    
                                    </div>
                                    
                                    <div class="desc">
                                         
                                    <h3>Location: Near by Cantina and and Grille</h3>
                                    
                                    <p>Global Village (GL) is the most luxury dorms on campus. It provides a state of the art global living experience and community. GL is the latest to the RIT housing. Each fully furnished suite contains four single bedrooms’ and one double bedroom along with a living room and two full bathrooms. If students are concern about the budgets, they can choose suites with kitchens or no kitchens. GL residents are the only can get accessible by card access with their student ID. All GL suites feature with high-speed internet and Ethernet connections. In addition, they provided with lounges, meeting spaces and free laundry facilities. GL is very convenience to walk certain places included HUB Print Center, Post Office, Global Village Cantina and Grille, The Market and Shear Global Salon.
                                        
                                    </p>
                                    </div>
                                    <!-- End Global Village Description  --> 
                                    
                                    <div class="map" id="col-xs-12 col-lg-8">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2913.997030431226!2d-77.68091033452065!3d43.08355777914489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d14c603a147e55%3A0xbe7eb31ed5e22c03!2sRochester+Institute+of+Technology!5e0!3m2!1sen!2sus!4v1462469254705" width="100%" height="275" frameborder="1" style="border:0" allowfullscreen></iframe> 
                                        
                                    </div>
                                    
                                    <div class="rtt">
                                        <a href="#top">Top of Page</a>
                                    </div>
                                    
                                </div>
                            
                            </section>
      
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