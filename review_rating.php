<!DOCTYPE html>
<html>
  <head>
    <style>
	.rating > span:hover:before {
   content: "\2605";
   position: absolute;
}
.review{
	text-align:center;
background-color: #9fdfbf;
}

input[type=text]{
width:32%;
height:40px;
}
input:not([type="button"]){
		width:440px;
		border-radius:2px;
		height:35px;
		margin-bottom:20px;
		outline:none;
		padding-left:15px;
		box-sizing:border-box;
		border:1px solid #aaa;
	}
	</style>
	
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
	
	<div class="review">
	<h2>Review and Rating</h3>
<input type="text" name="uname" placeholder="your name" /></br><br>
<input type="text" name="title" placeholder="Title" /></br><br>
<div class="rating">
 	<b>Rating:</b>  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>
<br>
<form>
<textarea name = "comment" rows="15" cols="60" placeholder="Write your comment"></textarea>
</form>
<br>
<input type="submit" name="submit" style="">
<br>
</div>



	</body>
	</html>