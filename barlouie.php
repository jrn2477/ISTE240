<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RITSportsZone</title>

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


            <!-- menu-button --> 
            <div class="container-fluid"> 
                <div class="col-12">
                    <div class="container-fluid">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                    </div>
                </div>
            <div>
            <!-- /menu-button --> 


            <div class="row">
                <div class="container-fluid"> 
                    <div class="col-12">
                        <h1>Fill your stomach with some delicious food</h1>

                        <h2>Bar Louie</h2>

                        <div class="foodpics">
							<img src="louiepic1.jpg">
							<img src="louiepic2.jpg">
						</div>
						
                        <p><b>Location:</b> 935 Jefferson Rd, Henrietta NY<br>
							<b>Hours:</b><br> 11am-2am EVERYDAY<br>
							<b>Phone:</b> 585-417-3610<br> 
							<b>Website: </b> <a href="www.barlouieamerica.com">www.barlouieamerica.com</a> <br>
							</p>
                        
                        <h2>Eat.Drink.Be Happy</h2>

                        <p>		Just recently opened, Bar Louie is a Bar and Grill on Jefferson Rd known for their bar scene and late nights. They pride themselves on staying open every night until 2am while still serving full menu and drinks. 
						Their menu isn’t large but offers your typical bar food including wings, wraps, finger foods, burgers, sandwiches and more. 
						Though Bar Louie is famous for their bar scene, the restaurant is family friendly during traditional service hours but when late night rolls around the scene changes to an adult setting and the bar area really lights up. 
						The crowd is typically younger to middle aged adults. </p>

                        

                        
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