<?php


session_start();

if($_SESSION["id"]!=true)
{
	header('location:home.php');
}


?>