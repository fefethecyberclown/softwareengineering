<?php
    session_start();
    $userid = $_SESSION["id"];
    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    $con->query("DELETE FROM `transaction` WHERE userid = $userid");
    
    header("Location: ../Course.php");
?>