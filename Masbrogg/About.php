<?php
    session_start();
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
                <?php if(@$_SESSION["loggedin"]){ ?>
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
                <?php } ?>
                <li class="navbuttons"  ><a href="Contact.php">CONTACT</a></li>
                <?php if(@$_SESSION["loggedin"]){ ?>
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
                <?php } ?>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="ShowMenu"></i>
    </nav>
<h1>About Us</h1>
</section>

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>Where Fundamentals is Created</h1>
            <p>We are sophomore students at Bina Nusantara University, majoring in Cyber Security.
            We develop a course for Valorant players, who want to expertise themself in Valorant.
            We also love to eat and sleep. Members:   
                <li>2540125024-Felysia Meytri</li>
                <li>2540123214-Rheinhard Salomo Putra Simon</li>
                <li>2501962126-Timothy Gilbert</li>
                <li>2540123100-Victor Benaya</li>
            </p>
            <a href="Contact.php" class="hero-btn red-btn">Hit us Up!</a>
        </div>
        <div class="about-col">
            <img src="images/squad.jpg">
        </div>
    </div>

</section>


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