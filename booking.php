<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<section class="appointments">
    <h2>Book an Appointment</h2>
    <p>Schedule your car service appointment online for your convenience.</p>
    
    <form id="appointment-form" action="booking.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="date">Appointment Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Appointment Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="service">Select Service:</label>
        <select id="service" name="service" required>
            <option value="Full-service">Full Services</option>
            <option value="oil-change">Oil Change</option>
            <option value="paint">Paint</option>
            <option value="tire-rotation">Tire Change</option>
            <option value="brake-service">Brake Service</option>
            <!-- Add more service options here -->
        </select>

        <label for="comments">Additional Comments:</label>
        <textarea id="comments" name="comments" rows="4"></textarea>

        <input type="submit" value="Book Now">
    </form>
</section>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        $message = $_POST['message'];
        
      
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
        $sql = "INSERT INTO `book_car` ( `name`, `email`, `phone number`, `Appointment Date`, `Appointment Time`, `Service`, `message`) VALUES ( '$name', '$email', '$phone', current_timestamp(), 'current_timestamp()', '$service', '$message')";
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
