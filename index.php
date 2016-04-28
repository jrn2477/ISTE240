<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

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
                        <h1>Tiger's Explore</h1>

                        <h2>Introduction</h2>

                        
                        <img src="">

                        <p>RIT Students Explore is a website created to help students find things to do in and around RIT. From where to eat, to activities on the weekend, or during the week, date-night ideas and day-tips, this website is designed to be the go-to destination for members of the RIT community to find places to go, and things to do so that their experience while attending RIT is as rich and involved as it possibly can be. </p>
                        
                        <h2>Site Mission</h2>

                        <p>Tigers Explore is a designed to be a companion and guide to new people to the RIT community a resource to find things to do so that they may feel welcome and comfortable in the community as well as make the most of their experience at RIT.</p>

                        <h2>Site Vision</h2>

                        <p>Tigers Explore  site will serve as a “virtual” travel guide made-by-students for students to encourage exploration of all the unique places in the RIT community and a place where students can share their experiences to better connect with each other.</p>
                        
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
