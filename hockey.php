<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Hockey</title>

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
                    <h1 id="top"><!-- Start Title--><b>Tiger's </b><!-- End Title-->
                    <!-- Start subtitle-->Hockey<!-- End Subtitle-->
                    </h1>
                </div>
            </div>
            </div>
            <!-- End Header--> 

  <div class="container-fluid"> 
                    <div class="row">
                    <div class="sec_menu col-12">
     	 <?php include "sport_nav.php"; ?>
                    </div>
                    </div>



                        <div class="row">
                                                
                        <div class="row">
                        <div class="col-xs-12 col-lg-10">

                            <div class="row">
                            <h2 id="Cobbs">Hockey</h2>
                            </div>
                            
                            <div class="row">
                            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <figure>
                                    <img class="sm_img" width="90" src="img/hockey.jpg" alt="Hockey Stadium">
                                    <figcaption><a href="hockey.jpg">Image Source</a></figcaption>
                                </figure>
                            </div>
                            </div>
                            
                            <!-- Basketball Description Start --> 
                            <div class="row ch_desc">
                            <h3>Hockey</h3>

                            <p>
Hockey is number one sport in RIT. RIT hockey team is Division 1. Hockey game locates in

Gene Polisseni Center. It holds about 4,000 seats. A few methods of buying tickets are to go

online, call the University Arena Box Office at <a href="tel:585-475-4121">585-475-4121</a>, or in person at the Gordan Field

House Box Office or the Gene Polisseni Box Office. How much does the ticket cost to watch

RIT hockey game? Click the link above this paragraph and see the cost of ticket. Also, don’t

forget to bring coat because the temperature inside the arena is quite cold. If you are hardcore

RIT hockey fans, buy RIT hockey clothes at Gene Polisseni Center or Barnes and Noble store.
                            </p>

                            </div>
                            <!-- End Basketball Description  --> 


                        <!-- New Row for the Basketball Information --> 
                        <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <h3>Activities</h3>

                            <ul>
                               <li>Division I hockey team</li>
                               <li>Pratice</li>
                               <li>Race around the court</li>
							   <li>Imtramural Game</li>
                            </ul>
                        </div>

    

                        <div class="col-xs-12 col-lg-4">
                            <h3>Ice Arena (public skate)</h3>

                            <ul>
                                <li>Sunday: 13:15pm-4:45pm</li>
                                <li>Monday: 11:45AM–12:45PM</li>
                                <li>Tuesday: 11:45AM–12:45PM</li>
                                <li>Wednesday: 11:45AM–12:45PM</li>
                                <li>Thursday: 11:45AM–12:45PM</li>
                                <li>Friday: 11:45AM–12:45PM, 8pm - 10pm</li>
                                <li>Saturday: Not Available</li>
                            </ul>
                        </div>
						
			                    <div class="col-xs-12 col-lg-4">
                            <h3>Hockey Game Schedule </h3>

								<p><a href="https://www.rithockey.com/Online/default.asp">Check schedule on RIT website</a></p>
                        </div>
						
						     <div class="col-xs-12 col-lg-4">
                            <h3>Admission (Men's Hockey):</h3>
							<p>Season Tickets (General Admission) </p>
							<ul>
                                <li>General Public: $160</li>
                                <li>Staff/Faculty/Alumni: $140</li>
                                <li>Student: $65</li>
                                <li>Youth(12 & Under): $85</li>
                            </ul>
							<p>Single Tickets (General Admission, student): $5</p>
							</div>	
							
							<div class="col-xs-12 col-lg-4">
							<h3>Admission (Women's Hockey):</h3>
							<p>Season Tickets (General Admission) </p>
							<ul>
                                <li>General Public: $55</li>
                                <li>Staff/Faculty/Alumni: $45</li>
                                <li>Student: free</li>
                                <li>Youth(12 & Under): $35</li>
                            </ul>
							<p>Single Tickets (General Admission, student): free</p>
 
                        </div>
						<h1>Fun Activities<h1>
							<p><a href="ticket_order.php">Order Tickets</a></p>
                        </div>
                        <!-- End Basketball Information Page --> 
					
						<iframe width="560" height="315" src="https://www.youtube.com/embed/W9QL1uBac1M" frameborder="0" allowfullscreen></iframe>
                	 <?php include "footer.php"; ?>
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

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

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
  

</body>

</html>