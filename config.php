<?php
$db=mysqli_connect("localhost","root","","resortbd");
if($db===false)
{
	die("Error: Could not connect. " .mysqli_connect_error());
}	
?>