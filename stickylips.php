<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Sticky Lips</title>

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
                        
                        <h2>Sticky Lips BBQ</h2>

                        
                        <div class="foodpics">
							<img src="img/lipspic1.jpg">
							<img src="img/lipspic2.jpg">
						</div>

   <p><b>Location:</b> 830 Jefferson Rd, Henrietta NY<br>
							<b>Hours:</b><br> Sunday-Wednesday 11am-10pm<br>
							Thursday 11am-11pm<br>
							Friday & Saturday 11am-12am<br>
							<b>Phone:</b> 585-292-5544<br> 
							<b>Website: </b> <a href="www.stickylipsbbq.com">www.stickylipsbbq.com</a> <br>
							</p>
							
                        <h2>Smokin Good BBQ</h2>

                     
                        <p>Sticky Lips is a barbecue joint located on the restaurant packed strip of Jefferson Rd in henrietta that offers a large menu with classic BBQ favorites.
						Known for their ribs and pulled pork, Sticky lips has become a rochester favorite over the past decade and continues to grow. The Henrietta location is multi-leveled including an enormous bar area along with live music most nights. The atmosphere is casual and the restaurant is covered with old fashioned pictures and antiques. The prices range from cheap to expensive depending on how much you are trying eat.
						It’s a cool experience going to Sticky Lips that everyone living in Rochester needs to try at least once. </p>
                        
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
