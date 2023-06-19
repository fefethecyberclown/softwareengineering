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
<h1>Our Courses</h1>
</section>

<section class="course">
    <a href="enroll.php" class="hero-btn2">ENROLL TO OUR COURSES</a>
    <h1>Course We Offer</h1>
    <p></p>

    <div class="row">
        <div class="course-col">
            <h3>Sage</h3>
            <p>Buat kamu yang baru terjun ke dunia valo dan FPS</p>
        </div>
        <div class="course-col">
            <h3>Sova</h3>
            <p>Buat kamu yang udah punya dasar tapi ingin memperdalam valorant</p>
        </div>
        <div class="course-col">
            <h3>Jett</h3>
            <p>Buat kamu yang udah jago dan ingin menjadi pro player</p>
        </div>
    </div>
</section>

<section class="events">
    <h1>Course Details</h1>
    <p></p>

    <div class="row">
        <div class="events-col">
            <img src="images/sage.jpg">
            <h3>Sage</h3>
            <p>Sage merupakan course beginner buat kamu yang baru main. Disini kita akan belajar
                Cara aim dasar, Cara menghindari musuh, cara membaca maps, dan masih banyak lagi.
                Course ini 2 kali seminggu
                Biaya course ini adalah 800.000/bulan

            </p>
        </div>
        <div class="events-col">
            <img src="images/sova.jpg">
            <h3>Sova</h3>
            <p>Sova merupakan course medium buat kamu yang udah main tapi ingin memperdalam Valorant. Disini kita akan belajar
                Cara aim advanced, Cara mencapai rank platinum & diamond, tips-tips advanced, tips pick agent biar counter musuh, dan masih banyak lagi. Course ini 3 kali seminggu.
                Biaya course ini adalah 1.000.000/bulan

            </p>
        </div>
        <div class="events-col">
            <img src="images/jett.jpg">
            <h3>Jett</h3>
            <p>Jett merupakan course advanced buat kamu yang udah jago tapi ingin terjun kedalam dunia competitive Valorant.
                Dalam course ini kita akan belajar cara aim pro player, cara terjun ke dunia competitive, mencapai rank radiant,
                cheatsheet dalam competitive, dan masih banyak lagi.
                Course ini 4 kali seminggu. Biaya course ini adalah 1.500.000/bulan

            </p>
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