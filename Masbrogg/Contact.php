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
    <h1>Contact Us</h1>
</section>

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.444705972526!2d-118.45963758478551!3d34.03246198061135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb147c58ab95%3A0xd27aa3a914d492b4!2sRiot%20Games%20Inc.!5e0!3m2!1sen!2sid!4v1625586345020!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<section class="contact-us">
    
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Riot Games Inc.</h5>
                    <p>12333 W Olympic Blvd, Los Angeles, CA 90064, United States</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>
                    <h5>+1 012324342141</h5>
                    <p>Monday to Saturday, 10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <h5>riotgamessea@webershandwick.com</h5>
                    <p>Email us your feedback</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="Enter Your Name" required>
                <input type="email" placeholder="Enter Email Address" required>
                <input type="text" placeholder="Enter Your Subject" required>
                <textarea rows="8" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
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