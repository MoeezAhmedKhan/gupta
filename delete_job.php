<?php

    require_once("connection.php");
    $Id = $_GET["id"];

    $select = "SELECT `cat_id`, `cat_name`, `cat_image` FROM `categories` WHERE cat_id = '$Id'";
    $run = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($run);
    unlink("upload/".$row['cat_image']);

    $delete = "DELETE FROM `categories` WHERE cat_id = '$Id'";
    mysqli_query($conn,$delete);
    header("location:manage_jobs.php");

?>
