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

                        <h2>Sticky Lips BBQ</h2>

                        <div class="foodpics">
							<img src="lipspic1.jpg">
							<img src="lipspic2.jpg">
						</div>
						
                        <p><b>Location:</b> 830 Jefferson Rd, Henrietta NY<br>
							<b>Hours:</b><br> Sunday-Wednesday 11am-10pm<br>
							Thursday 11am-11pm<br>
							Friday & Saturday 11am-12am<br>
							<b>Phone:</b> 585-292-5544<br> 
							<b>Website: </b> <a href="www.stickylipsbbq.com">www.stickylipsbbq.com</a> <br>
							</p>
                        
                        <h2>Smokin Good BBQ</h2>

                        <p>	Sticky Lips is a barbecue joint located on the restaurant packed strip of Jefferson Rd in henrietta that offers a large menu with classic BBQ favorites.
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