<?php 
include('config.php');
if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($db,$_POST['uname']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$mobile=mysqli_real_escape_string($db,$_POST['mobile_no']);
	$date=mysqli_real_escape_string($db,$_POST['Date']);
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	$country=mysqli_real_escape_string($db,$_POST['country']);

	
	include('user.php');
 $a= new User();
	$a->SignUp($username,$email,$password,$mobile,$date,$gender,$country);
}	

?>






<!DOCTYPE html>
<html>
<head>
<style>
.container{
		width:500px;
		margin:auto;
	}
	
	input:not([type="button"]),select{
		width:380px;
		border-radius:2px;
		height:35px;
		margin-bottom:20px;
		outline:none;
		padding-left:15px;
		box-sizing:border-box;
		border:1px solid #aaa;
	}
	
	.content{
		padding:25px;
		box-sizing:border-box;
		margin-bottom:50px;
		text-align: center;
	}
	input[type="submit"]{
		height:35px;
		width:120px !important;
		background:#f5f5f5;
		border:1px solid #aaa;
		color:black !important;
		align:center;
	}
	input[type="submit"]:hover{
		background:#4caf50;
		border:1px solid #4caf50;
		color:white !important;
		align:center;
	}
	form{
		background:#f5f5f5;
		padding:20px;
		margin:  auto;
		margin-top: 30px;
		width: 420px;
		text-align:  left;
	}
	h3{
		border:1px solid #ccc;
		border-radius:3px;
		font-size:25px;
		background:#f9f9f9;
		text-align:center;
		display:  inline;
		padding:  10px 115px;
	}
</style>
<title>ResortBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale-1,maximum-scale-1" />
  <link rel="stylesheet" type="text/css" href="css/portfolio.css">
  <script type="text/javascript" src="js/jQuery-3.2.1.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body style="background-color:#669999">
<nav class="navbar navbar-light" style="background-color: #ffe6ff">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">ResortBD</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="main">
<div class="content">
<h3>Registration Here </h3>
 <form action="" method="post">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name"  /></br>
<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address"  /></br>
<b>Password:</b></br>
<input type="password" name="password" placeholder="Password" /></br>
<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="017******"  /></br>
<b>Date of Birth:</b></br>
<input type="Date" name="Date"  /></br>
<b>Gender:</b></br>
<select name="gender">
	<option>---Select gender---</option>
        <option>Male</option>
        <option>Famale</option>
        <option>Other</option>
		</select></br><br>
<b>Country:</b></br>
<select name="country">
<option>---Select Option---</option>
<option value="Bangladesh">Bangladesh</option>
<option value="India">India</option>
<option value="Iran">Iran</option>
<option value="China" >China</option>
</select></br>
</br>
<p style="padding-left:100px;"><input type="submit" name="submit"  style="height:30px;width:100px; color:green;" />
 <input type="reset" style="height:30px; width:100px; color:red;"/></p>
 <p style="text-align:right;"><b> Already a member??<a href="login.php" style="text-decoration:none;""> Login Here</b></a></p> 
  </div>
  </div>
  </form>
</body>
</html>