<!-- PHP Code for Car Information Form Submission -->
 
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $carm = $_POST['carm'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $color = $_POST['color'];
        $vin = $_POST['vin'];
        $mileage = $_POST['mileage'];
        $additionalInfo = $_POST['additional-info'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "booking";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `car` (`car make`, `car model`, `Car Year`, `Car Color`, `VIN`, `mileage`,`additional_info`) VALUES ('$carm', '$model', '$year', '$color', '$vin', '$mileage',' $additionalInfo');";
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
