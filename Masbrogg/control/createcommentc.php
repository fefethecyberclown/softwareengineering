<?php
    session_start();
    $userid = $_SESSION["id"];
    $comment = $_POST["comment"];

    if(strlen($comment)==0){
        header("Location: ../discussion.php");
    }else{
        $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
        $con->query("INSERT INTO `forum`(`userid`,`comment`) VALUES ('$userid','$comment')");
        header("Location: ../discussion.php");
    }
?>