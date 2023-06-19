<?php
    session_start();
    if(!@$_SESSION["loggedin"]){
        header("Location: ../index.php");
    }

    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    if ($con->error){
        echo $con->error;
    }else{
        $data = [];
        $result = $con->query("SELECT a.id AS `commentid`,userid,comment,username,email,picture FROM forum a JOIN users b ON a.userid = b.id");
        while($row = $result->fetch_assoc()) array_push($data, $row);
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
<body>
<section class="sub-header">
    <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="HideMenu"></i>
            <ul>
            <li class="navbuttons"><a href="index.php">HOME</a></li>
                <li class="navbuttons"><a href="About.php">ABOUT</a></li>
                <li class="navbuttons"><a href="Course.php">COURSE</a></li>
                <li class="navbuttons"><a href="Blog.php">BLOG</a></li>
                <div class="dropdown">
                    <button class="dropbtn">FEATURES</button>
                    <div class="dropdown-content">
                        <a href="discussion.php">Community Discussion</a>
                        <a href="crosshair.php">Crosshair Collection</a>
                        <a href="mapsnews.php">Maps & News</a>
                    </div>
                </div>
                <li class="navbuttons"  ><a href="Contact.php">CONTACT</a></li>
                <div class="profdropdown">
                    <div class="profbackground">
                        <div class="profbutton">
                            <span><?=@$_SESSION["username"]?></span>
                            <img src="images/profpic/<?=@$_SESSION["picture"]?>" alt="profpic.jpg">
                        </div>
                    </div>
                    <div class="profcontent">
                        <div class="profdropbutt">
                            <a href="profile.php">Edit Profile</a>
                        </div>
                        <div class="profdropbutt" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <a href="control/logoutc.php">Sign Out</a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="ShowMenu"></i>
    </nav>
    <h1>Discussion Forum</h1>
</section>

<section class="proplayer">
    <h1>What People Says</h1>
    <p></p>
    <?php 
    $i = 0;
    foreach($data as $d){
        if($i%2==0){ ?><div class="row"><?php } ?>
        <div class="proplayer-col">
            <img src="/images/profpic/<?=$d["picture"]?>">
            <div>
                <p>
                    <?=$d["comment"]?>
                </p>
                <h3><?=$d["username"]?></h3>
                <?php if($d["userid"] == $_SESSION["id"]){ ?>
                    <form action="control/deletecommentc.php" method="POST">
                        <input style="display:none;" type="input" name="deleteid" value="<?=$d["commentid"]?>">
                        <button class="deletecomment" type="submit">Delete</button>
                    </form>
                <?php } ?>
            </div>
        </div>
        <?php if($i%2==1){ ?></div><?php }
        $i += 1;
    } ?>

</section>

<div class="comment-box">
    <h3>Berikan Opinimu</h3>
    <form class="comment-form" action="control/createcommentc.php" method="POST">
        <textarea name="comment" rows="5" placeholder="Your Comment"></textarea><br>
        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
    </form>
</div>

<section class="footer">
    <h4>About Us</h4>
    <p>Enjoy our Valorant Website!</p>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-discord"></i>
        <i class="fab fa-youtube"></i>
    </div>
    <p>Made with <i class="far fa-heart"></i> by Masbro.gg</p>
</section>





<script>
    var navlinks = document.getElementById("navLinks");

    function ShowMenu(){
        navLinks.style.right = "0";
    }
    function HideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>
