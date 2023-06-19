<?php
    if(@$_POST["course"]){
        $data = @$_POST["course"];
        session_start();
        $userid = $_SESSION["id"];
        $date = date('Y-m-d H:i:s');

        $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
        
        $check = $con->query("SELECT * FROM `transaction` WHERE userid = $userid");
        if($check){
            $con->query("DELETE FROM `transaction` WHERE userid = $userid");
        }
        $con->query("INSERT INTO `transaction`(`userid`, `courseid`, `datetime`) VALUES ($userid,$data,'$date')");
        
        header("Location: ../Course.php");
    }else{
        header("Location: ../enroll.php");
    }
?>