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

$query = "SELECT * FROM reservations";
$result = mysqli_query($conn, $query);
$rowcount = mysqli_num_rows($result);
$query = "UPDATE reservations SET coverage=('$_POST[insurance]') WHERE reservation = ('$rowcount')";
mysqli_query($conn, $query) or die('Error updating customer info into database.');

$query = "UPDATE cars SET availability='N' WHERE serial_no IN (SELECT vin FROM reservations WHERE reservation = ('$rowcount'))";
mysqli_query($conn, $query) or die('Error updating customer info into database.');
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
    <link href="confirmation.css" rel="stylesheet">
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

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

	  <form class="form" action="index.php">
      	<div class="featurette">    
          	<h2 class="featurette-heading_1">Payment received!</h2>
          	<h4 class="payment">Confirmation will be sent to your e-mail shortly.</h4>
        </div>
      	<hr class="featurette-divider_1">
      	<div class="view_button" align="right">
          	<button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
      	</div>
      </form>
      
      <form class="form_summary">
        <h2 class="featurette-heading_2">Summary(Paid):</h2>
        <hr class="featurette-divider_2">
          
<?php
$query = "SELECT * FROM cars WHERE EXISTS (SELECT vin FROM reservations WHERE reservation = ('$rowcount'))";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$car = $row['price'];

?>

          <h4><?php echo "Car Selected:"; ?></h4>
          <p><?php echo 'Make: ' . $row['make'] . '<br />'. 'Year: '  . $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ';
                    ?>    
          </p>
        
<?php
$query = "SELECT * FROM insurance WHERE EXISTS (SELECT coverage FROM reservations WHERE reservation = ('$rowcount'))";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$ins = $row['price'];
?>  
        
        <h4><?php echo "Coverage Option Selected:"; ?></h4>
        <p><?php echo 'Option: ' . $row['coverage'] . '<br />'. ' Price: $' . $row['price'] . '<br />';  
                   echo 'Policy: ' . $row['policy'];
                    ?>    
        </p>
        
        <hr class="featurette-divider_3">
        
<?php
$query = "SELECT pickup_date, drop_date FROM reservations WHERE reservation = ('$rowcount')";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$pdate = $row['pickup_date'];
$rdate = $row['drop_date'];
$temp = explode("/", $pdate);
$start = array_values($temp)[0];
$temp = explode("/", $rdate);
$end = array_values($temp)[0];
$days = $end - $start;
$total = $car * $days + $ins;
$query = "UPDATE reservations SET sub_total=('$total') WHERE reservation = ('$rowcount')";
mysqli_query($conn, $query) or die('Error updating customer info into database.');
?>  
        
        <h4><?php echo "Total:"; ?></h4>
        <p align="right"><?php echo ' $ ' . $total; ?></p>

      </form>

      <!-- /END THE FEATURETTES -->
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#" style="color:white">Back to top</a></p>
        <p class="pull-left" style="color:white">&copy; 2017 ABA Inc. &middot; <a href="#" style="color:white">Privacy</a> &middot; <a href="#" style="color:white">Terms</a></p>
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
