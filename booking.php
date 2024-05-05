<!-- PHP Code for Form Submission -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        $message = $_POST['Message'];
        
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
            // SQL query to be executed 
            $sql = "INSERT INTO `book` ( `name`, `email`, `phone_number`, `Appointment Date`, `Appointment Time`, `Service`, `Message`) VALUES ( '$name', '$email', '  $phone', '$date', '$time', ' $service ', '$message ');";
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
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvenience caused!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>';
            }
        }
    }
?>