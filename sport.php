<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Sport</title>

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
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
function initialize() {
	var mapProp = {
    center:new google.maps.LatLng(43.084435,-77.674594),
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	
	
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
                    <!-- Start subtitle-->Sport<!-- End Subtitle-->
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
                            <h2 id="Cobbs">Sport</h2>
                            </div>
                            
                            <div class="row">
                            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <figure>
                                    <img class="sm_img" width="90" src="img/tiger_banner.jpg" alt="Tiger Banner">
                                    <figcaption><a href="https://segd.org/sites/default/files/styles/large/public/unnamed.jpg?itok=VdeUq89O">Image Source</a></figcaption>
                                </figure>
                            </div>
                            </div>
                            
                            <!-- Marketplace Mall Description Start --> 
                            <div class="row ch_desc">
                            <h3>About Sport</h3>

                            <p>
                              Rochester Institute of the Technology provides a variety of sports. Everyone is opened to participate the sport whatever they want. They don't play only serious game if they are not very talented, but they also involve the imtramural game for a recreational time. Joining the sport will help everyone to maintain their healthy body. The sports can help to reduce the stress. If they don't want to play the sports, they still participate the sports as the fans. Because player need some spirits from the fans' supports, fans give the player a boost and they will win a game in  a high chance.
                            </p>

                            </div>
                            <!-- End Marketplace Mall Description  --> 


                        <!-- New Row for the Mall Information --> 
                        <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <h3>Popular five sports:</h3>

                            <ul>
                                <li>Hockey</li>
                                <li>Soccer</li>
                                <li>Basketball</li>
                                <li>Track and Field</li>
                                <li>Football</li>
                               
                            </ul>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <h3>Sport Information:</h3>

                            <ul>
                                <li>Phone: (585)-475-2614</li>
                                <li>Address: Clark Gymnasium | 51 Lomb Memorial Drive
 Rochester, N.Y. 14623-5603  </li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <h3>Methods of buying tickets</h3>

                            <ul>
                                <li>Hockey tickets at <a href="www.rithockey.com">www.rithockey.com. </a></li>
                                <li>Gene Polisseni Center Box Office Hours:</li>
									<ul>
										<li>Monday - Friday: 10 a.m. - 6 p.m.</li>
										<li>Saturday opens at 10 a.m. on game days only</li>
									</ul>
									
								 <li>Gordon Field House Box Office Hours:</li>
									<ul>
										<li>Tuesday and Thursday: 4 p.m. - 8 p.m.</li>
										<li>Saturday: 10 a.m. - 2 p.m.</li>
									</ul>
								
                            </ul>
                        </div>
                        </div>
                        <!-- End Mall Information Page --> 

                        
                            <div id="col-xs-12 col-lg-8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2913.9528360959175!2d-77.67855398425912!3d43.0844868970359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d14c603a147e55%3A0xbe7eb31ed5e22c03!2sRochester+Institute+of+Technology!5e0!3m2!1sen!2sus!4v1462819428923" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
                        
                        
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->

    <!-- Google Maps API --> 
 
</body>

</html>