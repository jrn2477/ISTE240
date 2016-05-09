<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 1
    ">

    <title>Hockey Ticket</title>

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
                    <!-- Start subtitle-->Men's Hockey Ticket<!-- End Subtitle-->
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
                            <h2 id="Cobbs">Hockey Ticket</h2>
                            </div>
                            
	<h2>Order Number of tickets</h2>


<form name="OrderForm" action="orderprocessHockey.php"  onsubmit="return validateForm();" method="post">

<p>Name:  <input type="text" name="customerName"  /></p>
<p>ID:  <input type="text"  name="customerID"  /></p>
<p> Check the kind of tickets you would like to order:<br />
<input type="radio" name = "public" value = "P"/>General<br />
<input type="radio" name = "public" value = "S"/>Staff/Faculty/Alumni<br />
<input type="radio" name = "public" value = "M" checked="true"/>Student<br />
<input type="radio" name = "public" value = "L"/>Youth(12 & Under)<br />
</p>

<label for="num">Number of tickets( Max to 36 tickets) : </label><input name="num" type="number" id="num" min="1" max="36" /> 


<p>

<input type="submit"  name="Submit"  value=" Send Form"  />

</p>
</form>

                        
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