<?php
    //------insert.php------
     $servername = "localhost";
    $username = "root";
    $password = "mysql123";
    $dbname = "hospital";
    $array=[];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql="SELECT patient_id FROM feedback ";
    $result=mysqli_query($conn,$sql); 
    $i=0;
    if(mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)){
    $array[$i]=$row['patient_id'];
    $i++;
       }
    }
   else {
    echo "0 results";
   }

            $id=$_POST['id'];
            $feedback=$_POST['feedback'];
            $newid=count($array)+1;
             $sql= mysqli_query($conn,"INSERT INTO feedback VALUES($id,'$feedback')");
             $conn->close();
 ?>
