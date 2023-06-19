<?php
    session_start();
    if(!@$_SESSION["loggedin"]){
        header("Location: ../index.php");
    }
    $con = mysqli_connect('ValoDB', 'root', '', 'valo', 3306);
    if ($con->error){
        echo $con->error;
    }else{
        $coursedata = [];
        $result = $con->query("SELECT * FROM course");
        while($row = $result->fetch_assoc()) array_push($coursedata, $row);

        $id = $_SESSION["id"];
        $enrolledcoursesdata = [];
        $result = $con->query("SELECT courseid FROM course a JOIN `transaction` b ON a.id = b.courseid WHERE b.userid = $id");
        while($row = $result->fetch_assoc()) array_push($enrolledcoursesdata, $row);

        $enrolledcourses = [];
        foreach($enrolledcoursesdata as $data){
            array_push($enrolledcourses,$data["courseid"]);
        }
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
    <div class="enrollbox">
        <h1>Enroll Courses</h1>
        <form action="control/enrollcoursec.php" method="POST">
            <?php
            $i = 0;
            foreach($coursedata as $cd){
                if($i%3==0){ ?><div class="enrollcourses"> <?php }
                if(!in_array($cd["id"],$enrolledcourses)){ ?>
                        <input class="checkboxx" type="radio" name ="course" id="<?=$cd["name"]?>" value="<?=$cd["id"]?>">
                <?php } ?>
                <label for="<?=$cd["name"]?>" class=<?php if(!in_array($cd["id"],$enrolledcourses)){ echo "enrollcoursebox";}else{echo "enrollcourseboxenrolled";}?>>
                    <img src="images/coursepic/<?=$cd["picture"]?>" alt="">
                    <span><?=strtoupper($cd["name"])?></span>
                    <p><?php if(!in_array($cd["id"],$enrolledcourses)){ echo "Rp.".$cd["price"];}else{echo "Enrolled";}?></p>
                </label>
            <?php if($i%3==2){ ?></div><?php }
                $i += 1;} ?>
            <div class="enrollbuttons">
                <a style="" class="profilebackbutton" href="Course.php">Back</a>
                <?php if($enrolledcourses){ ?>
                    <a class="unenrollbutton" href="control/unenrollcoursec.php">Unenroll</a>
                <?php } ?>
                <button class="profilesavebutton" type="submit">Enroll!</button>
            </div>
        </form>
    </div>
</body>