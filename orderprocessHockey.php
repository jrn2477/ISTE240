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
                    <!-- Start subtitle-->Hockey Ticket<!-- End Subtitle-->
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
                            
	<h2>Order number of tickets</h2>


<h2>Here is your tickets</h2>

<?php
//-----------------------------------------------------------
// Get the user's Information from the form
$custName = $_POST['customerName'] ;  
$custID = $_POST['customerID'] ;   
$public = $_POST['public'];
$num_of_tic = $_POST['num'];    
//-----------------------------------------------------------
// validate the customer ID for numerics
     if (empty($custID))
     {
          echo "<p>The ID is invalid.</p>";
          echo "<p><form action='orderformEX07.php'><input type=submit value='ok'></form></p>";          
     }
     else {
          if (!is_numeric($custID)) {
            echo "<p>Customer ID " . 
                    $custID . 
                    " is not a valid ID " .
                    " because it contains " .
                    " a non-numeric character.</p>";
            echo "<p><form action='orderformEX07.php'><input type=submit value='ok'></form></p>";  
        }
//-----------------------------------------------------------
// This code determines the number of tickets and cost of the ticket
			else {

      // create a switch statement for $public
      // possible values are 'P', 'S', 'M', and 'L'
      // always code a default case: give student ticket
        switch($public)
        {
            case 'P':
             $Cost = 12;
          
             break;
            case'S':
             $Cost = 10;
         
             break;
            case 'M':
             $Cost = 5;
  
             break;
            case'L':
             $Cost = 6;
      
             break; 
            default:
             $Cost = 10000000000000;
          
        
        }
                         
		


             
// Calculate Total Cost = the number of tickets * cost of the ticket
        
                $totalCost = $Cost * $num_of_tic;

// Print the receipt	
setlocale(LC_MONETARY, 'en_US');

			echo "<div id = 'receipt'>";
            echo "<br> Your here is tickets!";
            echo "<br>";
            echo "<br>Ticket Costs: " . $Cost;    
			echo "<br>Number of ticket: " . $num_of_tic;
            echo "<br>Total Cost of your order is: " . $totalCost; 
            echo "<br><br>Thank you for your order.";
            echo "</div>";      
				} //end of else
	} // end of else
?>

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