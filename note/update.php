<?php

include "config.php";
session_start();

$id = $_POST['id'];
$title = $_POST['title'];
$note = $_POST['note'];

// การอัพเดทค่า ใน database

if(@mysqli_query($con, "UPDATE `note` SET `title`='$title',`note`='$note' WHERE id = '$id'")){
    header("Location:http://localhost/note/index.php");
}


?>