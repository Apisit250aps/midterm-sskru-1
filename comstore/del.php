<?php
session_start();
if(!isset($_POST['key'])) {
	exit;
}
include "config.php";
$key = $_POST['key'];

if (mysqli_query($con, "DELETE FROM `cart` WHERE product_name = '$key'")){
    header("Location:http://localhost/comstore/cart.php");

}


?>