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
<section class="header">
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
</section>

<div class="text-box">
    <h1>V A L O R A N T</h1>
    <p>Valorant is a free-to-play first-person hero shooter developed and published by Riot Games, for Microsoft Windows. First teased under the codename Project A in October 2019, the game began a closed beta period with limited access<br>on April 7, 2020, followed by an official release on June 2, 2020.</p>
    <?php if(!@$_SESSION["loggedin"]){ ?>
        <a href="loginregister.php" class="hero-btn">PLAY FREE</a>
    <?php }else{  ?>
        <a href="donate.php" class="hero-btn">DONATE US</a>
    <?php }  ?>
</div>

</section>



<section class="course">
    <h1>Course We Offer</h1>
    <p></p>

    <div class="row">
        <div class="course-col">
            <h3>Aim</h3>
            <p>Your aim must be precise</p>
        </div>
        <div class="course-col">
            <h3>Precise</h3>
            <p>There is no run and gun gameplay</p>
        </div>
        <div class="course-col">
            <h3>Efficiency</h3>
            <p>The shots needed for killing enemny is quite low</p>
        </div>
    </div>
</section>


<section class="maps">
    <h1>Our Maps</h1>
    <p></p>

    <div class="row">
        <div class="map-col">
            <img src="images/ascent.jpg">
            <div class="layer">
                <h3>ASCENT</h3>
            </div>
        </div>
        <div class="map-col">
            <img src="images/bind.png">
            <div class="layer">
                <h3>BIND</h3>
            </div>
        </div>
        <div class="map-col">
            <img src="images/split.png">
            <div class="layer">
                <h3>SPLIT</h3>
            </div>
        </div>
    </div>

</section>

<section class="BiggerMaps">
    <h1></h1>
    <p></p>

    <div class="row">
        <div class="biggermap-col">
            <img src="images/breeze.jpg">
            <div class="biggermaplayer">
                <h3>BREEZE</h3>
            </div>
        </div>
        <div class="biggermap-col">
            <img src="images/icebox.jpg">
            <div class="biggermaplayer">
                <h3>ICEBOX</h3>
            </div>
        </div>
        <div class="biggermap-col">
            <img src="images/haven.png">
            <div class="biggermaplayer">
                <h3>HAVEN</h3>
            </div>
        </div>
    </div>

</section>

<section class="events">
    <h1>Our Events</h1>
    <p></p>

    <div class="row">
        <div class="events-col">
            <img src="images/gbb.jpg">
            <h3>Give Back Bundle</h3>
            <p>The Run it Back Bundle returns to kick off Episode 3—but with a twist. The gun skins included in the bundle are determined by your vote. And a portion of the proceeds will go to charity!

                From June 2–7, vote for your preference in each of the four categories below to see what skins will come back at the start of Episode 3 in the Give Back Bundle. Winners announced June 16.
                
                Purchase the bundle from June 22–July 8, and 50% of the proceeds from weapon skins and 100% from accessories in the Give Back Bundle, will go towards the Riot Games Social Impact Fund, in partnership with Impact Assets.</p>
        </div>
        <div class="events-col">
            <img src="images/duality.jpeg">
            <h3>Duality</h3>
            <p>Riot Game is commemorating the launch of the Duality cinematic and VCT Reykjavík with the limited-time player card that is available for only 48 hours. The player card was announced on the final day of the Valorant Champions Tour Masters 2 event and players have just one more day to redeem the item. The code is global but it can be used only once per account. If you want to redeem the Duality card in Valorant, you will need to head to the official Valorant website and redeem the code. Here is a closer look at the Duality player card in Valorant and how you can grab it from the official website. </p>
        </div>
        <div class="events-col">
            <img src="images/origin.jpg">
            <h3>Origin</h3>
            <p>The Origin bundle’s final kill effect summons a mysterious ring to abduct the enemy player before disappearing in a flash of green light. All of the upgrades and variants can be unlocked with Radianite points after purchasing the skins. The red and gold variant has gotten the most attention on social media, with some fans dubbing it the “Iron Man variant.”</p>
        </div>
    </div>

</section>

<section class="proplayer">
    <h1>What ProPlayer Says</h1>
    <p></p>

    <div class="row">
        <div class="proplayer-col">
            <img src="images/shroud.jpg">
            <div>
                <p>In Valorant, Riot Games has pulled out all the stops to make sure their player experience is much better, such as with the implementation of the Vanguard anti-cheat system. They’re also consistently going after cheaters and those who create hacks, even placing a US$100,000 bounty on those who find a way to exploit the Vanguard system.</p>
                <h3>Michael Grzesiek</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star-half"></i>
            </div>
        </div>
        <div class="proplayer-col">
            <img src="images/tenz.jpg">
            <div>
                <p>“People are more toxic in EU than NA, especially at Immortal level,” TenZ said. The rank he mentioned goes from one to three and is just below Radiant, the ultimate rank in VALORANT.</p>
                <h3>Tyson Ngo</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
        </div>  
    </div>

</section>

<section class="ctfm">
    <h1>Enroll For Our Games Anywhere<br>From The World</h1>
    <a href="Contact.php" class="hero-btn">CONTACT US</a>

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