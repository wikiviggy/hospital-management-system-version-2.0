<?php
    //------insert.php------
     $servername = "localhost";
    $username = "root";
    $password = "mysql123";
    $dbname = "hospital";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 



            $name=$_POST['name'];
            $age=$_POST['age'];
            $contact=$_POST['number'];
       $sql= mysqli_query($conn," DELETE from  patient where contact='$contact' ");
       $conn->close();

?>
