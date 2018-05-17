<?php   
    
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_volunteer";

//connect to database
$connect = mysqli_connect($servername, $username, $password, $dbname);

$fn = $_POST["pwd"];
$uer = $_POST["uer"];
$edu = $_POST["nos"];
$age = $_POST["age"];
$loc = $_POST["loc"];
$gen = $_POST["gen"];
$mat = $_POST["mat"];
$eng = $_POST["eng"];
$pro = $_POST["pro"];




$sql = "INSERT INTO student_info (fullname) VALUES ('$fn');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$uer');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$edu');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$age');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$loc');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$gen');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$mat');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$eng');";
$sql = "INSERT INTO student_info (fullname) VALUES ('$pro');";

mysqli_query($connect, $sql);

		//sql statement to capture all data from a table
//		$sql = "SELECT * FROM student_info";
//
//		//query by connecting and adding sql statement
//		$result = mysqli_query($connect,$sql);
//		//print_r($result);
//		foreach($result as $row) {
//			//print_r($row);
//			echo "<tr><td>".$row['$Name']."</td><td>".$row['$User_name']."</td></tr>";
//            echo "<tr><td>".$row['$school']."</td><td>".$row['$education']."</td></tr>";
//           echo  "<tr><td>".$row['$age']."</td><td>".$row['$location']."</td></tr>";
//           echo "<tr><td>".$row['$gender']."</td><td>".$row['math']."</td></tr>";
//           echo "<tr><td>".$row['$english']."</td><td>".$row['programming']."</td></tr>";
//            echo "<tr><td>".$row['$password']."</td>";
//}




//$sql = "SELECT * FROM student_info;"
//$result = mysqli_query($connect,$sql) or die (mysqli_error()); 
//while ($row = mysqli_fetch_array($result)){    
//    $Name=$row['full name'];
//    $Username=$row['user_name'];
//    $school=$row['name of school'];
//    $education=$row['edcation level'];
//    $age=$row['age'];
//    $location=$row['location'];
//    $gender=$row['gender'];
//    $math=$row['math'];
//    $english=$row['english'];
//    $programming=$row['programming'];
//    $password=$row['password'];
//    
//    }


	//close the connection
		mysqli_close($connect); // Closing Connection
 ?>