<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Label Seven</title>

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
                        
                        <h2>Label Seven Eatery and Bar</h2>

                        
                        <div class="foodpics">
							<img src="img/labelpic1.jpg">
							<img src="img/labelpic2.jpg">
						</div>

   <p><b>Location:</b> 50 State St, Pittsford NY<br>
							<b>Hours:</b> <br>Monday-Thursday 11am-10pm<br>
										  Firday & Saturday 11am-11pm<br>
										  Sunday 11am-3pm<br>
							<b>Phone:</b> 585-267-7500 <br>
							<b>Website:</b> <a href="www.labelseven.com">www.labelseven.com</a> 
							</p>                        
                        <h2>Creations inspired from the Napa Valley Region</h2>

                      

                        <p>Located in the historic village of Pittsford on the Erie Canal, Label Seven is an upscale Napa Style Eatery and Bar. Prices for entrees range from $14 to $35.
						The Cuisine they offer is very diverse as they try to have an entree or two from the Major culinary area’s around the world. They are best known for their Chicken and Waffles dish along with other Asian, American, Mexican, Italian and French dishes. The Desserts are unique and the selection is constantly changing. If the weather is nice, you can sit at their outdoor patio on the Erie Canal. The upstairs section includes a large bar area that  still serves the full menu. On Sunday’s, Label Seven offers a Brunch menu with popular breakfast dishes along with some of the regular menu’s entree
						plus brunch drinks specials including bottomless mimosas.</p>
                        
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
