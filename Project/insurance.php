<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection 
$conn = mysqli_connect($servername, $username, $password,'car_rental');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Coonected Successfully";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Coverage</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="insurance.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="color:white">Lux Rent</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Reservation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="new_res.php">New</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">View</li>
                    <li><a href="signin.php">Existing</a></li>
                  </ul>
                </li>
                <li><a href="signin.php" style="color:white">Login</a></li>
                <li><a href="signup.php" style="color:white">Sign-up</a></li>
                <li><a href="contact.php" style="color:white">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<?php
	$query = "SELECT * FROM reservations";
	$result = mysqli_query($conn, $query);
	$rowcount = mysqli_num_rows($result);
    printf("Result set has %d rows.\n",$rowcount);
	$query = "UPDATE reservations SET vin=('$_POST[vehicleid]') WHERE reservation = ('$rowcount')";
	mysqli_query($conn, $query) or die('Error updating customer info into database.');
	?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

	  <form class="form" action="confirmation.php" method="post">
        <div class="row_featurette">
        	<img class="coverage_pic" src="Images/cartow.jpeg" width="500px" height="280px" alt="Generic placeholder image">
        	 <h2 class="featurette-heading_1">Coverage options:</h2>
		 	 <p class="options">Option 1. Full Coverage $800 </p>
		 	 <p class="options">Option 2. Collision $350 </p>
		 	 <p class="options">Option 3. Personal Accident $350 </p>
			 <p class="options">Option 4. Personal Effects Coverage $250 </p>
			 <p class="options">Option 5. Supplemental Liability $250 </p>
			 <p class="options">Option 0. No Coverage</p>
       	</div>
      	<div class="insurance" required>
          	<h4 class="form-insurance-heading" style="color:grey">Choose an option</h4>
          	<select name="insurance" class="insurance_dropdown" required>
            	<option value="None">Select below~</option>
            	<option value="0">0</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5</option>
		  	</select>
      	</div>
      	<hr class="featurette-divider_1">
      	<div class="view_button" align="right">
          	<button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
      	</div>
      </form>
      
      <div class="form_summary">
        <h2 class="featurette-heading_2">Car Selected:</h2>
        <hr class="featurette-divider_2">
        <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <p align="right">show detail of the selected car HERE</p>
          </div>
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p class="pull-left">&copy; 2017 ABA Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Others/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
