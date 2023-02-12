<?php

session_start();
if(!isset($_POST['name'])) {
	exit;
}
include "config.php";
$name= $_POST['name'];
$unit = intval($_POST['unit']);

if (mysqli_fetch_all(mysqli_query($con, "SELECT * FROM `cart` WHERE product_name = '$name'"))){
	if(mysqli_query($con, "UPDATE `cart` SET unit = unit+$unit WHERE product_name = '$name'")){
		header("Location:http://localhost/comstore/index.php");
	}
}
else {
	
$sql = "INSERT INTO `cart`(`product_name`, `unit`) VALUES ('$name','$unit')";
	if(@mysqli_query($con, $sql)){
		header("Location:http://localhost/comstore/index.php");
	}

}
mysqli_close($link);
?>
