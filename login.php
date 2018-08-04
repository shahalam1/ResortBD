
<?php 

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	include('user.php');
    $a= new User();
	$a->verifyUser($email,$password);
}	

?>


<!DOCTYPE html>
<html>
<head>
<style>
.container{
		width:500px;
	}
	form{
		margin-top:30px;
	}
	input:not([type="button"]){
		width:420px;
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
		background:#f5f5f5;
		margin-top:30px;
		margin:  auto;
		width: 475px;
	}
	input[type="submit"]{
		height:35px;
		width:120px;
		background:#f5f5f5;
		border:1px solid #aaa;
		color:black !important;
	}
	input[type="submit"]:hover{
		background:#4caf50;
		border:1px solid #4caf50;
		color:white !important;
		
	}
	h1{
		border:1px solid #ccc;
		border-radius:3px;
		font-size:25px;
		background:#f9f9f9;
		display:  inline-block;
		padding: 15px 150px;
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


<center>
<h1>Login Here</h1>
</center>
<div class="content">
<form action="" method="post">
<b>User Email:</b></br>
<Input type="email"  name="email""/></br>
<b>Password:</b></br>
<Input type="password" name="password"/></br>
<input type="submit" name="submit" value="Log In"/>
<p>Not yet a member?<b><a href="registration.php" style="text-decoration:none;"">Sign up</b></a></p> 
</div>
</body>
</html>