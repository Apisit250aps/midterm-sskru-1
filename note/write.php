<?php
include "config.php";
session_start();

$title = $_POST['title'];
$note = $_POST['note'];

// การเพิ่ม Note 
if (mysqli_query($con, "INSERT INTO `note` (`id`, `title`, `note`) VALUES (NULL, '$title', '$note')")){
    header("Location:http://localhost/note/index.php");
}
?>