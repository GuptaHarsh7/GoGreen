<?php
  if(!$_SESSION["admin"])
  {
  	$_SESSION["messagess"]="Please login to continue !";
  	header("Location:admin/login.php");
  }
?>
