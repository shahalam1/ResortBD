
<?php
include('useraccess.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>ResortBD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
	<script type="text/javascript" src="js/jQuery-3.2.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
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

	<!-- header section -->

	<!-- overlay on main content -->

	<div class="page-overlay">
	</div>	

	<div class="frame">
		<table>
			<tr>
				<td class="left-arrow">
					<img src="image/left-arrow.png" align="Left arrow">
				</td>
				<td class="right-arrow">
					<img src="image/right-arrow.png" align="Right arrow">
				</td>
			</tr>
		</table>
		<img id="main" src="" alt="">
	</div>

	<!-- Main Content -->

	<div id="t" class="container">
		<ul class="portfolio">
			<li>
				<img src="image/portfolio_image1.jpg" alt="Portfolio Image 1">
			</li>

			<li>
				<img src="image/portfolio_image2.jpg" alt="Portfolio Image 2">
			</li>

			<li>
				<img src="image/portfolio_image3.jpg" alt="Portfolio Image 3">	
			</li>

			<li>
				<img src="image/portfolio_image4.jpg" alt="Portfolio Image 4">
			</li>

			<li>
				<img src="image/portfolio_image6.jpg" alt="Portfolio Image 6">
			</li>

			<li>
				<img src="image/portfolio_image7.jpg" alt="Portfolio Image 7">
			</li>

			<li>
				<img src="image/portfolio_image8.jpg" alt="Portfolio Image 8">
			</li>

			<li>
				<img src="image/portfolio_image9.jpg" alt="Portfolio Image 9">
			</li>

			<li>
				<img src="image/portfolio_image10.jpg" alt="Portfolio Image 10">
			</li>

			<li>
				<img src="image/portfolio_image11.jpg" alt="Portfolio Image 11">
			</li>

			<li>
				<img src="image/portfolio_image12.jpg" alt="Portfolio Image 12">
			</li>

			<li>
				<img src="image/portfolio_image13.jpg" alt="Portfolio Image 13">	
			</li>

		</ul>
	</div> <!-- container end here -->


</body>

</html>