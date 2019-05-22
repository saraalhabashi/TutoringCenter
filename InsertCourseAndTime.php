<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "TutoringCenter";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed");
  }


    if (isset($_POST['submit'])) { 
        
        $code = $_POST['code'];
        $time = $_POST['time'];
        

        // 2. Perform database query
        $query  = "INSERT INTO courses (code, time) VALUES ('$code','$time')";

        $result = mysqli_query($connection, $query);
		header("location:signup2.php");
        if ($result) {
            // Success
            // redirect_to("somepage.php");
			
            echo "Record Inserted!";
        } else {
            // Failure
            // $message = "Subject creation failed";
            die("Database query failed. " . mysqli_error($connection));
        }
    }

  // 5. Close database connection
  mysqli_close($connection);
?>