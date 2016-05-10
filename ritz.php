<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Ritz Sportszone</title>

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
                        
                        <h2>Ritz Sportszone</h2>

                        
                        <div class="foodpics">
							<img src="img/ritz.jpg">
							<img src="img/ritzpool.jpg">
						</div>

   <p><b>Location:</b> Student Alumni Union<br>
							<b>Hours:</b> Monday-Friday 11am-7pm<br>
							<b>Accepted Payment:</b> Food Debit, Tiger Bucks, Cash, Credit<br>
							<b>Website:</b>  <a href="https://www.rit.edu/sportszone/main.php?page=latest">https://www.rit.edu/sportszone/main.php?page=latest</a><br>
							<b>Facebook:</b> <a href="https://www.facebook.com/RITSportsZone">https://www.facebook.com/RITSportsZone</a><br>
							</p>
							
                         <h2>Not just a place to eat!!</h2>

                     
                        <p> The RITZ Sportzone a sports bar and restaurant located in the basement of the SAU directly below Brick City. They offer your typical sports bar cuisine including pizza, wraps, paninis, salads, tacos, pasta, wings, burgers and much more. Also if you are of age, you can grab a beer with your meal at the bar that serves bottled beer. The dining area has two levels with Several TV’s and a large projector screen that typically has ESPN playing, Since the RITZ is sports theme, the dining area is furnished with a sports theme including 
						pictures and memorabilia from RIT’s historic sports programs.</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /#page-content-wrapper -->
	 <?php include "footer.php"; ?>
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
