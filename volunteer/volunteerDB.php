<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_volunteer";

$connect = mysqli_connect($servername, $username, $password, $dbname);



$sql = "SELECT * FROM student_info;";
$result = mysqli_query($connect,$sql) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($result)){     
    $Name=$row['full name'];
    $Username=$row['user_name'];
    $emaill=$row['email'];
    $education=$row['edcation level'];
    $location=$row['location'];
    $gender=$row['gender'];
    $phone=$row['moblie'];
    $math=$row['math'];
    $english=$row['english'];
    $programming=$row['programming'];
    $password=$row['password'];
    
    }
?>