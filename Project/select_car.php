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

echo "Connected Successfully";

$query = "INSERT INTO customers (fname, lname, cnumber, dlicense, age, resident, gender) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[ccnumber]','$_POST[lnumber]','$_POST[age]','$_POST[resident]','$_POST[gender]')";
$result = mysqli_query($conn, $query) or die('Error inserting customer info into database.');

$query = "SELECT Count(*) FROM reservations";
$temp = mysqli_query($conn, $query);
$tem = mysqli_fetch_assoc($temp);
$tempp = ++array_values($tem)[0];
$q = "INSERT INTO reservations (reservation, location, pickup_date, drop_date, license) VALUES ('$tempp','$_POST[location]','$_POST[pdate]','$_POST[rdate]','$_POST[lnumber]')";
$result = mysqli_query($conn, $q) or die('Error inserting reservation info into database.');

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

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
	  
	  <h1>Please select a vehicle from below:</h1>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
        <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
       <?php
        $query = "SELECT * FROM cars WHERE serial_no = 123";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="123">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 124";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="124">">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 125";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="125">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
		<form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 131";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity']  . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="131">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no =132";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="132">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 133";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="133">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 134";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="134">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 141";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="141">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 142";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="142">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 143";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="143">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 151";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="151">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 152";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="152">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 153";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="153">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 213";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="213">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 214";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="214">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 215";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="215">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 231";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="231">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 232";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="232">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 233";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="233">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE serial_no = 234";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
       <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="234">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 241";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="241">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE serial_no = 242";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="242">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 243";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="243">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 251";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="251">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 252";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="252">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 253";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="253">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 313";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="313">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
        
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 314";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="314">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 315";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="315">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 316";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="316">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 331";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="331">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 332";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="332">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 341";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="341">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
         <?php
        $query = "SELECT * FROM cars WHERE serial_no = 342";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="342">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 343";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="343">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 344";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="344">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 351";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="351">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 352";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="352">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 353";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="353">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 354";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="354">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 421";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="421">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 422";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="422">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 423";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="423">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 424";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="424">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 425";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="425">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 426";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="426">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 427";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="427">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 521";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="521">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 522";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="522">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
        <form action="insurance.php" method="post">
        <div class="col-lg-4">
          <div style="display:inline-block;vertical-align:top;">
          <img class="img-circle" src="Images/cro1.jpg" alt="Generic placeholder image" width="140" height="140">
		</div>
  		<div class="description" style="display:inline-block;">
          <?php
        $query = "SELECT * FROM cars WHERE serial_no = 523";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        ?>
          <h2><?php echo $row['make']?></h2>
          <p><?php echo $row['year'] .'<br />';  
                   echo 'Model: ' . $row['model'] . '<br />' . ' Type: ' . $row['type'] . '<br />' . ' Color: ' . $row['color'] . '<br />' . ' Size: ' .$row['capacity'] . '<br />' . ' Price: $' . $row['price'] . ' / Day ' . '<br />' . ' Available: ' . $row['availability'];
                    ?>    
          </p>
        </div>
        <div class="view_button">
          <button name="vehicleid" class="btn btn-lg btn-primary btn-block" type="submit" value="523">Continue</button>
        </div>
        </div><!-- /.col-lg-4 -->
        </form>
        <hr class="divider">
<!--==================================================Separate!==================================================-->
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
