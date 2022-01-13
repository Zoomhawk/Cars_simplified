<?php
$insert=false;
 // Set connection variables
 $server = "localhost";
 $username = "root";
 $password = "";

     // Create a database connection
     $con = mysqli_connect($server, $username, $password);

     $name=$_POST['name'];
     $email=$_POST['email'];
     $feedback=$_POST['feedback'];

     $sql="INSERT INTO `cars_project`.`feedback` (`Email`, `Name`, `Feedback`) VALUES ('$email', '$name', '$feedback');";

     if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

?>