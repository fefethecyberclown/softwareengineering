<?php
    session_start();
    $userid = $_SESSION["id"];
    $username = $_SESSION["username"];
    $newusername = $_POST["newusername"];

    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    if(strlen($newusername)!=0){
        $_SESSION["username"] = $newusername;
        $picture = $_SESSION["picture"];
        if($picture!="default.jpg"){
            $extension = substr($picture,strlen($username));
            @rename("../images/profpic/".strtolower($username).$extension,"../images/profpic/".strtolower($newusername).$extension);
            $con->query("UPDATE `users` SET `picture`= '$newusername.$extension' WHERE `id` = '$userid'");
            $_SESSION["picture"] = $newusername.$extension;
        }
        $con->query("UPDATE `users` SET `username`= '$newusername' WHERE `id` = '$userid'");
        $username = $newusername;
    }

    if(!$_FILES["img"]["name"]==""){
        $picture = $_SESSION["picture"];
        $file = pathinfo($_FILES["img"]["name"]);
        $ext = $file["extension"];
        @unlink("../images/profpic/".$picture);
        $target = "../images/profpic/".strtolower($username).".".$ext;
        
        move_uploaded_file($_FILES["img"]['tmp_name'],$target);
        $picture = strtolower($username).".".$ext;
        $_SESSION["picture"] = $picture;
        $con->query("UPDATE `users` SET `picture`= '$picture' WHERE `id` = '$userid'");
    }
    header("Location: ../profile.php");
?>
