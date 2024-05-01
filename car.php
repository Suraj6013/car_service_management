<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Information Form</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <header>
        <h1>Welcome to Car Service Management</h1>
    </header>

    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <!-- <li><a href="#">Appointments</a></li> -->
            <!-- <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li> -->
        </ul>
    </nav>
    <h1>Car Information Form</h1>

    <form action="car.php" method="POST">
        <label for="make">Car Make:</label>
        <input type="text" id="carm" name="carm" required>

        <label for="model">Car Model:</label>
        <input type="text" id="model" name="model" required>

        <label for="year">Car Year:</label>
        <input type="number" id="year" name="year" required>

        <label for="color">Car Color:</label>
        <input type="text" id="color" name="color" required>

        <label for="vin">VIN (Vehicle Identification Number):</label>
        <input type="text" id="vin" name="vin" required>

        <label for="mileage">Mileage:</label>
        <input type="number" id="mileage" name="mileage" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $carm = $_POST['carm'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $color = $_POST['color'];
        $vin = $_POST['vin'];
        $mileage = $_POST['mileage'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "test";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `car_info` (`car make`, `car model`, `Car Year`, `Car Color`, `VIN`, `mileage`) VALUES ('$carm', '$model', '$year', '$color', '$vin', '$mileage');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>
