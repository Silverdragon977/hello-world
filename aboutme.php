<?php
    $name="Michael Howard";
    $navigationArray = array("Homepage", "Assignments", "About Me");

    $hw1_Questions = array(
        "Question1" => "
        <h3>Question 1: Why are you taking this class?</h3>
        <p>I am taking this class because I am very interested in learning<br>back-end web development Learning databases and API's sounds very<br>
        useful and a great thing to learn!<br></p><br>",

        "Question2" => "<h3>Question 2: What do you want to take away from this class?</h3>
        <p>I would like to have a solid understanding of databases, github,<br>and php. That way I can make websites that are more useful!<br></p><br>",    
    );
    $aboutMeText = 
    "<h3>Michael Howard</h3>
    <pre><p>
        I am currently working towards a Computer Science Degree from
    Bemidji State University in Minnesota. I grew up in between
    two small towns called Lester Prairie and Winsted. They are about 
    40 minutes west of Minneapolis. I decided to major in Computer
    Science as many of my family members are in the technology field.
    I have always been fasinated in how computers operate, and I want
    to learn all I can about them!
    </p></pre>"; 
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $navigationArray[2] . " | " . $name ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">

    <header id="banner-container">


        <div id="overlay-div">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $navigationArray[2] ?></h1>  <img id="profileImage" src="images/tempPhoto.png"></img>
        </div>

        <img id="banner" src="images/banner.jpg" alt="Banner Image">

    </header>

<br><br><br><br>

<!---Navigation Bar------------------------------------------------->
<hr width="100%" align="left">

<nav>
        <ul>
            <li> <a href="index.php">      <?php  echo $navigationArray[0] ?></a></li>
            <li> <a href="assignments.php"><?php  echo $navigationArray[1] ?></a></li>
            <li> <a href="aboutme.php">    <?php  echo $navigationArray[2] ?></a></li> 
        </ul>
    </nav>
    <hr><br><br>
<!------------------------------------------------------------------>
    <main>
        <article>
            <img id="aboutMeImg" src="images/profile.jpg">
            <br><br><?php echo $aboutMeText ?>
        </article>

    </main>
    <br><br><br><br><br><br><br><br>
    <footer>
        <center>
            <h6><a href="https://github.com/Silverdragon977/hello-world.git"><i> GitHub Repository Code <i></a> <h6>
        </center>
    </footer>
</div>
</body>
</html>

