<?php 
include('config.php');
if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($db,$_POST['uname']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$mobile=mysqli_real_escape_string($db,$_POST['mobile_no']);
	$check_in=mysqli_real_escape_string($db,$_POST['Date']);
	$check_out=mysqli_real_escape_string($db,$_POST['tata']);
	$adults=mysqli_real_escape_string($db,$_POST['adul']);
	$kids=mysqli_real_escape_string($db,$_POST['kid']);
	$room_type=mysqli_real_escape_string($db,$_POST['room']);
	$room_no=mysqli_real_escape_string($db,$_POST['rom']);
	$description=mysqli_real_escape_string($db,$_POST['des']);

	
	include('users.php');
 $a= new Users();
	$a->reservation($username,$email,$mobile,$check_in,$check_out,$adults,$kids,$room_type,$room_no,$description);
}	

include('useraccess.php');
?>



<head>
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

<div class="container">
<style>
	.container{
		width:100%;
		margin: auto;
	}
	.left, .middle, .right{
		width:30%;
		margin: 1%;
		float: left;
	}
	.middle{

	}
	
	.wrap{
		width: 93%;
    	margin-left: 16px;
	}

	h3{
		text-transform: uppercase;
		color:#444;
	}

	hr{
		border: 2px solid #ddd;
	}

	input:not([type="submit"]), select{
		height: 40px;
		width:360px;
		border:1px solid #ddd;
		border-radius: 2px;
		margin:10px 0px;
		box-shadow: inset 0px 1px 2px rgba(0,0,0,0.2);
		padding-left: 10px;
		outline: none;
	}
	.right:after{
		clear: both;
		content: "";
		display: table;
	}

	::-webkit-input-placeholder{
		color:#aaa;
	}

	textarea{
		width:95%;
		border:1px solid #ddd;
		border-radius: 2px;
		box-shadow: inset 0px 1px 2px rgba(0,0,0,0.2);
		outline: none;
		padding-left: 20px;
		box-sizing: border-box;

	}
	
	input[type="submit"]{
		height: 40px;
		width:95%;
		background: #fff;
		border:1px solid #4caf50;
		color:#4caf50;
		outline: none;
		border-radius: 3px;
	}

	input[type="submit"]:hover{
		background: #4caf50;
		color:white;
	}
	.desc{
		margin-bottom: 30px;
    	margin-left: 25px;
	}
</style>
<body>
<nav class="navbar navbar-light" style="background-color: #ffe6ff">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="userhome.php">ResortBD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="accommodation.php">ACCOMMODATION</a></li>
      <li><a href="reservation.php">RESERVATION</a></li>
	  <li><a href="review_rating.php">REVIEW</a></li>
	    <li><a href="api.php">API</a></li>
		 <li><a href="gallery.php">GALLERY</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
    </ul>
  </div>
</nav>

  <form action="" method="post" style="background-color:#669999">
  	<div class="container">
  		<div class="wrap">
	  		<h3>Make Reservation</h3>
	  		<hr>
  		</div>

		<div class="left">
				<b>Your Name</b><br>
				<input type="text" name="uname" placeholder="e.g. John" /><br/>
				<b>Email Address</b><br>
				<input type="Email" name="email" placeholder="e.g.mail@example.co" /><br/>
				<b>Phone Number</b><br>
				<input type="tel" name="mobile_no" placeholder="018******" /><br/>
		</div>
		
		<div class="middle">
			<b>Check in</b></br>
			<input type="date" name="Date" /></br>

			<b>Check out</b><br>
			<input type="date" name="tata"  /></br>

			<b>Adults</b><br>
			<input type="text" name="adul" placeholder="Number of adults"  /><br/>

		</div>
		
		<div class="right">
			<b>Kids</b></br>
			<input type="text" name="kid" placeholder="Number of kids"  /><br/>

			<b>Room Type</b><br/>
			<select name="room">
				<option>---Select type---</option>
					<option>Mude House</option>
					<option>Wood Cottage</option>
					<option>Twin Deluxe</option>
					<option>Duplexe Family Villa</option>
					<option>Couple Deluxe</option>
					<option>Tent</option>
					</select><br/>
					
			<b>Room NO</b><br>
			<select name="rom">
				    <option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					</select><br>
			</div>
		</div>

		<div class="desc wrap" style="width: 96%;margin-left:">
			<b>Description</b><br>
			<textarea cols="83" rows="11" name="des" ></textarea><br><br>
			<input type="submit" name="submit" value="Book Now" />
		</div>
	</div>
  </form>
  </body>



