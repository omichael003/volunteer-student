<?php
//include ("volunteerDB.php");
include ("../front/header.php");

if(isset($_POST['submit']))
{
    $sql = "INSERT INTO volunteer_info (full name, user name, email, education level, location, gender, moblie, maths, english, programming, password)
    VALUES ('".$_POST["full name"]."','".$_POST["user name"]."','".$_POST["email"]."','".$_POST["education level"]."','".$_POST["location"]."','".$_POST[" gender"]."','".$_POST["moblie"]."','".$_POST["maths"]."','".$_POST["english"]."','".$_POST["programming"]."','".$_POST["password"]."')";

    $result = mysqli_query($connect,$sql);
}

//$query = mysqli_query($connect, "SELECT * FROM volunteer_info");


?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <style>
            * {
                font-family: sans-serif;
                text-align: center;
            }

        </style>
    </head>
    <div class="container">
        <div class=header_info>
            <h2>Volunteer Information</h2>
        </div>

        <div class="row">
            <div class="side_bar1">
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <p>
                        <h4>List of Centers in New York City</h4>
                    </p>
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

            </div>


            <div class="col-sm-4 col-md-6 col-lg-6">

                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="full name">Full Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="full name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Username:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user name" placeholder="Enter Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">Email Addresss:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">Education Level:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="education level" placeholder="Graduate or collage student">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">Location:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="location" placeholder="Enter your location">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">Gender:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="gender" placeholder="Enter male or female">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="moblie" placeholder="Enter your phone number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">COURSE:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="maths" placeholder="Maths tutor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">COURSE:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="english" placeholder="English tutor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="pwd">COURSE:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="programmer" placeholder=" programmer">
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
                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
                <p>
                    <h4>Some of our amazing turors</h4>
                </p>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
      <img src="../volunteer1.jpeg" alt="...">
    </a>
                    </div>
                    <p class="textpage">John is a fun person who has being teaching children how to read and write for 10 years now.</p>
                </div><br>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
      <img src="../volunteer2.jpeg" alt="...">
    </a>
                    </div>
                    <p class="textpage">Alex has being working as a programmer for 15 years and teaching for the 5 years.</p>
                </div><br>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
      <img src="../volunteer3.jpeg" alt="...">
    </a>
                    </div>
                    <p class="textpage">Doris is a High School maths teacher and best teacher of the year two years in a row.</p>
                </div>
            </div>

    </html>
    </div>

    <?php include("../front/footer.php"); ?>
