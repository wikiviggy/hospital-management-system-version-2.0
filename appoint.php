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
    $sql="SELECT patient_id FROM patient ";
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

            $name=$_POST['name'];
            $age=$_POST['age'];
            $newid=count($array)+1;
            $contact=$_POST['number'];
            $problem=$_POST['problem'];
            $email=$_POST['email'];
             $sql= mysqli_query($conn,"INSERT INTO patient VALUES('$name',$age,'$contact','$problem','$email',$newid)");
             $conn->close();
 ?>
