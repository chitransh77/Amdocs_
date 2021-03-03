<?php

include 'connection.php';

$id = $_GET['id'];
mysqli_select_db($con,'registration');

mysqli_query($con, " DELETE FROM `data`where connect='$id'");
mysqli_query($con, " DELETE FROM `user`where id='$id'");
header('location:display.php');

?>