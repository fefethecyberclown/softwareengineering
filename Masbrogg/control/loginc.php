<?php

    $email = $_POST["email"];
    $password = $_POST["password"];
    $validate = 1;

    if(strlen($email)==0){
        $validate=0;
        $error='Email cannot be empty!';
    }else if(strlen($password)==0){
        $validate=0;
        $error='Password Cannot be Empty!';
    }
    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    if ($con->error){
        echo $con->error;
    }
    else{
        if($validate==1){
            $result = $con->query("SELECT * FROM users WHERE `email`='$email' AND `password`='$password'");
            if($result->num_rows == 1){
                $dataresult = $result->fetch_assoc();
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $dataresult["username"];
                $_SESSION["email"] = $dataresult["email"];
                $_SESSION["id"] = $dataresult["id"];
                $_SESSION["picture"] = $dataresult["picture"];
                header("Location: ../index.php");
                die();
            }else{
                $error ='Wrong Username and Pasword!';
                header("Location: ../loginregister.php?error=".$error);
            }
        }else{
            header("Location: ../loginregister.php?error=".$error);
        }
    }

?>