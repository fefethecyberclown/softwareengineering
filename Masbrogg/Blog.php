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
<h1>Our Achivements For 2023</h1>
</section>

<section class="blog-content">

    <div class="row">
        <div class="blog-left">
            <img src="images/squad2.jpg">
            <h2>Our Achivements For 2023</h2>
            <p>Valorant telah menjadi salah satu game first-person shooter (FPS) favorit dengan jumlah pemain yang terus bertambah. Dikembangkan oleh
            Riot Games, Valorant menawarkan pengalaman bermain yang menarik dengan grafis yang memukau, mekanika permainan yang inovatif, dan fokus
            pada tim kerja yang solid. Sejak diluncurkan pada tahun 2020, game ini telah berhasil memikat hati jutaan pemain di seluruh dunia. 
            Valorant menawarkan kombinasi antara aksi tembak-menembak yang intens dan elemen strategi yang kompleks,membuatnya menjadi
            daya tarik yang tak terelakkan bagi pecinta genre FPS.
            </p>
            <br>
            <p>Tidak hanya popularitasnya yang meningkat, Valorant juga telah menjadi sorotan dalam dunia kompetitif esports. Saat ini, ada banyak 
            turnamen Valorant yang diadakan di berbagai tingkat, mulai dari turnamen amatir hingga turnamen profesional. Para pemain berbakat dari  
            seluruh dunia bersaing dalam kompetisi yang sengit untuk membuktikan keahlian mereka di panggung internasional. Keberadaan turnamen ini  
            memberikan kesempatan bagi pemain untuk berinteraksi, berkompetisi, dan mengukur kemampuan mereka dengan yang terbaik. Selain itu,  
            turnamen Valorant juga menarik perhatian para penonton yang antusias, menciptakan ekosistem esports yang semakin berkembang untuk game ini.
            </p>
            <br>
            <p>Platform Masbro.gg telah mencetak banyak pemain jago valorant yang berhasil menyumbang kejuaraan. Jebolan dari murid course kami telah 
            berhasil memenangkan 10 Valorant Championship baik di local, regional, dan dunia. Kami terus berusaha untuk menciptakan course yang 
            efektif untuk meningkatkan gameplay para pemain. Semoga dengan adanya platform ini, kami bisa semakin mengupdate tentang Valorant dan 
            merambah ke game-game lainnya, serta dapat memberikan pengalaman permainan yang tak terlupakan.
            </p>
            <br>
            <p>Enjoy the Game!! </p>


        </div>
        <div class="blog-right">
            <h3>Valorant Tournaments</h3>
            <div>
                <span>Valorant Challengers</span>
                <span>6</span>
            </div>
            <div>
                <span>Valorant Masters</span>
                <span>5</span>
            </div>
            <div>
                <span>Valorant Champions</span>
                <span>10</span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
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