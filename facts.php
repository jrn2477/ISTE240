<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Tigers Explore | Fun Facts</title>

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
                    <h1 id="top"><!-- Start Title--><b>Tiger's Explore </b><!-- End Title-->
                    <!-- Start subtitle-->Fun Facts<!-- End Subtitle-->
                    </h1>
                </div>
            </div>
            </div>
            <!-- End Header--> 


            <div class="container">
            
                <div class="container-fluid"> 

                        <div class="row">
                                                
                        <div class="row">
                        <div class="col-xs-12 col-lg-10">

                            <div class="row">
                            <h2 id="Cobbs">Interesting Facts About RIT</h2>
                            </div>
                            
                            <div class="row">
                            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <figure>
                                    <img class="sm_img" width="90%" src="img/tiger.jpg" alt="Spirit the Tiger Mascot">
                                    <figcaption><a href="https://library.rit.edu/depts/archives/spirit-loved-run-around-gym-halftime-basketball-games-and-fans-loved-it-too">Image Source</a></figcaption>
                                </figure>
                            </div>
                            </div>
                            
                            <!-- Facts Start --> 
                            <div class="row ch_desc">

                            <p>
                                We used to have a real tiger Mascot. When it died the RIT administration decided to preserve the pelt of the tiger. It now resides within the vault of the library. 
                            </p>
                            <p>
                                Did you know that RIT campus structure was originally designed for Arizona State University. As such it was designed to maximize wind flow through the campus in order to minimize the heat that the campus experienced during hot Arizona months.. Arizona State University opted not to use the design, while RIT decided to use it.
                            </p>
                            <p>
                                In addition to designing the campus design was to keep cool in hot summer months, the campus was modified in 1968 to be sectioned off in the case of an emergency.  As such the campus incorporates a modular design that in which sections of the campus could be cornered off by tanks in the case of a riot. 
                            </p>
                            <p>
                                There is one recorded riot in RIT’s campus history. This was on May 19th, 2004 (a sunday morning). It began as students launched beer bottles at a cops, which resulted in cops flinging pepper-spray grenades at the mob of students. The students then proceeded to throw the pepper spray grenades back at the police
                            </p>
                            <p>
                                RIT is frequently ranked in the bottom 10 schools in the nation for partying by Playboy Magazine. Meanwhile, WIRED™ magazine continually ranks RIT as one of the top 10 party schools in the nation.  
                            </p>
                            <p>
                                RIT has over 200 clubs. 
                            </p>
                            <p>
                                Before RIT was established, the land was once swamp
                            </p>

                            </div>
                            <!-- End Facts  -->  
                        
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
    <!-- Google Maps API --> 
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>

</body>

</html>