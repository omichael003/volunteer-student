
<?php
//include('login.php'); // Include Login Script
include('front/header.php');
if ((isset($_SESSION['username']) != '')) 
{
header('Location: home.php');
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
	<style>
		*{
			font-family: sans-serif;
            background-image:image("login_image.jpeg");
		}
        body {
   /*background-image: url("login_image.jpeg");  */
   /*background-color: #cccccc; */
}
        .page-header
        {
            text-align: center;
        }    
	</style>
    </head>
 <div container-fluid>
  <div class="page-header">
        <h1>WELCOME BACK! YOU ARE MAKING A DIFFERENCE</h1>
    </div>

<div class="loginBox">
<h3>Condinator Login</h3>
<form method="post" action="">
<label>Username:</label><br>
<input type="text" name="username" placeholder="username" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" />  <br><br>
<input type="submit" name="submit" value="Login" /> 
</form>
<!--<div class="error"><?php echo $error;?></div> -->
</div>
 
 <div class="row">
    <div class="col-md-8 col-sm-6">
     <img src="teacher.jpeg">
    </div> 
    <div col-md-4 col-sm-6>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
 </div>
</div>

<?php include('front/footer.php'); ?>


</html>