<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Henrietta Hots</title>

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
                    <!-- Start subtitle--><!-- End Subtitle-->
                    </h1>
                </div>
            </div>
            </div>
            <!-- End Header--> 


            <div class="row">
                <div class="container"> 
				
				  <div class="container-fluid"> 
                    <div class="row">
                    <div class="sec_menu col-12">
                        <ul>
                            <li class="sm_item"><a class="sec_menu_links"href="ritz.php">Ritz Sportszone</a></li>
                            <li class="sm_item"><a class="sec_menu_links"href="henriettahots.php">Henrietta Hots</a></li>
                            <li class="sm_item"><a class="sec_menu_links"href="labelseven.php">Label Seven</a></li>
							<li class="sm_item"><a class="sec_menu_links"href="stickylips.php">Sticky Lips</a></li>
						    <li class="sm_item"><a class="sec_menu_links"href="barlouie.php">Bar Louie</a></li>


                        </ul>
                    </div>
                    </div>
				
                    <div class="col-lg-10">
                        
                        <h2>Henrietta Hots</h2>

                        <div class="foodpics">
							<img src="img/hotspic1.jpg" alt="Henrietta Hots">
							<img src="img/hotspic2.jpg">
						</div>
						
                        <p><b>Location:</b> 3553 W Henrietta Rd, Henrietta NY<br>
							<b>Hours:</b> 10am-3am EVERYDAY<br>
							<b>Phone:</b> 585-424-4687<br> 
							<b>Yelp for menu: </b><a href="http://www.yelp.com/biz/henrietta-hots-rochester">Menu</a><br>
							</p>
                        
                        <h2>The Plate Spot</h2>

                        <p>			Anyone who spends anytime in Rochester has experience our famous Garbage plate. It doesn’t sound appetizing but most who try it agree that it is fact quite appetizing, especially after a long night. 
						The standard garbage consists of two cheeseburgers over a bed of home fries and mac salad topped with mustard, onions and ground beef meat hot sauce.
						By no means do you have to have it that way, there are many ways to create a garbage plate because every part can be replaced. 
						For example you could get with with chicken fingers instead of cheeseburgers or change up the toppings. One of the most popular spots around RIT to experience the garbage plate is Henrietta hots. 
						They cater to college students by staying open til 3am every day of the week. Henrietta hots is a small counter service restaurant that offers not only garbage plates but also your typical burger joint options.
						It’s a great place to stop by with some friends to grab a quick bite to eat or when it’s 2am and there’s a need to satisfy a late night food craving. </p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /#page-content-wrapper -->

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
