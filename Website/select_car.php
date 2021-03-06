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
echo "Connected successfully";
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

    <title>Car Selection</title>

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
    <link href="select_car.css" rel="stylesheet">
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
              <a class="navbar-brand" href="index.html" style="color:white">Lux Rent</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="#">Home</a></li>-->
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Reservation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="new_res.html">New</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">View</li>
                    <li><a href="signin.html">Existing</a></li>
                  </ul>
                </li>
                <li><a href="signin.html" style="color:white">Login</a></li>
                <li><a href="signup.html" style="color:white">Sign-up</a></li>
                <li><a href="contact.html" style="color:white">Contact Us</a></li>
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
	  
	  <h1>Please select a vehicle from below:</h1>
	  
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <hr class="divider">
        <div class="col-lg-4">
        <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
       <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 123";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 124";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 125";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 131";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo =132";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 133";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 134";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 141";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 142";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 143";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 151";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 152";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 153";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 213";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 214";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 215";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 231";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 232";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 233";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 234";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 241";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 242";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 243";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 251";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 252";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 253";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 313";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 314";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 315";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 316";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 331";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 332";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 341";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 342";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 343";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 344";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 351";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 352";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 353";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="#">
            <a href="#" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE SerialNo = 354";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['Make']?></h2>
          <p><?php echo $row['Year'] .'<br />';  
                   echo 'MODEL: ' . $row['Model'] . ' TYPE: ' . $row['Type'] . ' COLOR: ' . $row['Color'] . ' SIZE: ' .$row['Capcity'];
                    ?>    
          </p>
        </div>
        <div class="view_button" href="insurance.html">
            <a href="insurance.html" class="btn btn-lg btn-primary btn-block">Select</a>
        </div>
        </div><!-- /.col-lg-4 -->
        <hr class="divider">
      </div><!-- /.row -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 ABA Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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
