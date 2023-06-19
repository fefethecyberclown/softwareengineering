<?php
    session_start();
    if(!@$_SESSION["loggedin"]){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant Web Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body style="background-color: #000000;">
    <section class="headerprof"></section>
    <div class="profilebox">
        <h1>Edit Profile</h1>
        <div class="profileboxcontent">
            <img id="output" src="images/profpic/<?=$_SESSION["picture"]?>" alt="profpic.jpg">
            <div class="profileboxinput">
                <form action="control/changeprofc.php" method="POST" enctype="multipart/form-data">
                    <label>Username</label><br>
                    <input type="text" name="newusername" class="changeusername" value="<?=$_SESSION["username"]?>"><br><br>
                    <label for="img" class="changeprofpic">Change Profile Picture</label>
                    <input type="file" accept="image/*" id="img" name="img" style="display:none" onchange="loadFile(event)">
                    <a class="profilebackbutton" href="index.php">Back</a>
                    <button class="profilesavebutton" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
