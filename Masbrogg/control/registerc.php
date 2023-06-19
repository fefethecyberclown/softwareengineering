<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $picture = "default.jpg";
    $validate = 1;

    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    if(strlen($username)==0){
        $validate=0;
        $error='Username cannot be empty!';
    }else if(strlen($username)<5 || strlen($username)>15){
        $validate=0;
        $error='Username length must be 5-15 characters!';
    }else if(strlen($password)==0){
        $validate=0;
        $error='Password cannot be empty!';
    }else if(strlen($password)<8){
        $validate=0;
        $error='Password length must be atleast 8 characters!';
    }if ($con->error){
        echo $con->error;
    }else {
        if($validate==1){
            $result = $con->query("SELECT * FROM users WHERE `username`='$username'");
            if($result->num_rows == 1){
                $error ='Username has been taken!';
                $_POST["register"]=true;
                header("Location: ../loginregister.php?error=".$error.'?reg=1');
            }else{
                $con->query("INSERT INTO `users` (`id`,`username`, `email`, `password`, `picture`) VALUES (NULL,'$username', '$email', '$password', 'default.jpg');");
                header("Location: ../index.php");
            }
        }else{
            $_POST["register"]=true;
            header("Location: ../loginregister.php?error=".$error.'&reg=1');
        }
    }
?>
