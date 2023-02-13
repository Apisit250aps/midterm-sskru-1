<?php
session_start();
if(!isset($_POST['id'])) {
	exit;
}
include "config.php";
$key = $_POST['id'];
// การลบ Note ด้วย Key id ที่ถูกส่งจากฟอร์ม
if (mysqli_query($con, "DELETE FROM `note` WHERE id = '$key'")){
    header("Location:http://localhost/note/index.php");

}


?>