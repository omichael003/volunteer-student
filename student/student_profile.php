<?php

 include('../front/header.php'); 
//include("studentDB.php");
//{
//    $sql = "INSERT INTO users (username, password, email)
//    VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

    
//}
//$query = mysqli_query($connect, "SELECT * FROM student_info");
//
//while($row = mysqli_fetch_assoc($result))
//{
 //   print_r($row);
//}
 
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
	<style>
		*{
			font-family: sans-serif;
		}
	</style>
    </head>

<div class="container">

<div class=header_info ><h2>Student Information</h2></div>

<div class="row">
   
    <div class="col-sm-4 col-md-3 col-lg-3"><p><h4>List of Centers in New York City</h4></p>
    <ul class="list-group">
  <li class="list-group-item list-group-item-success">3 West 23, New York, 120223.<br>212-777-7788.</li>
  <li class="list-group-item list-group-item-success">50 East 34,New York. <br> 212-344-5000.</li>
  <li class="list-group-item list-group-item-success">345 John Rd, Broxn, 12345.<br>917-443-5580.</li>
  <li class="list-group-item list-group-item-success">353 Bronx blv, Bronx, 29479. <br>917-373-0963</li>
</ul>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-success">12 Main St. Brooklyn, 11234. <br>718-222-5555</a>
  <a href="#" class="list-group-item list-group-item-success">700 E 26 St. Brooklyn, 23455. <br> 718-333-3333</a>
  <a href="#" class="list-group-item list-group-item-success">34-45 York RD, Queens. 29874. <br> 718-826-3863.</a>
  <a href="#" class="list-group-item list-group-item-success">837 45 Ln. Queens, 34443.<br> 514-827-9763.</a>
</div>
    
    </div>

 <div class="col-sm-4 col-md-6 col-lg-6">
 <form class="form-horizontal" action="studentDB.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">Full Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pwd" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">User Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="uer" placeholder="Enter username">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Education Level:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="nos" placeholder="High school or collage student">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Age:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="age" placeholder="Enter your age">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Location:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="loc" placeholder="Enter location">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Gender:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="gen" placeholder="Male or Female">
    </div>
  </div>
   
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">COURSE:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="pro" placeholder="programming">
    </div>
 </div>
 <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">COURSE:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="mat" placeholder="Maths">
    </div>
 </div>
 <div class="form-group">
    <label class="control-label col-sm-2" class= require name="pwd">COURSE*</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="eng" placeholder="English">
    </div>
     </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name ="submit">Submit</button>
    </div>
  </div>
</form>
    </div>

<div class="col-sm-4 col-md-3 col-lg-3">
    <p><h4>Some of our amazing turors</h4></p>
    <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="../student1.jpeg" alt="...">
    </a>
  </div>
  Alex is a high school student and from a  low income home. He want to be an engineer in the future. 
</div><br>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="../student2.jpeg" alt="...">
    </a>
  </div>
  Mary is one of student in our center and she loves reading. She want to be a teacher after collage. 
    </div><br>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="../student3.jpeg" alt="...">
    </a>
  </div>
  Carl is loves playing video game and want to be computer programmer.
</div>
</div>

</div>
</div>

<?php include("../front/footer.php"); ?>