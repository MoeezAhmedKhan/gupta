<?php

    require_once("connection.php");
    $Id = $_GET["id"];
    $delete = "DELETE FROM `skills` WHERE skill_id = '$Id'";
    mysqli_query($conn,$delete);
    header("location:manage_skills.php");

?>
