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

    include_once("BoilerPlate/head.view.php");
    include_once("BoilerPlate/header.view.php");
    include_once("BoilerPlate/navigation.view.php");
    
    ?>

    <main>
        <article>
            <img id="aboutMeImg" src="images/profile.jpg">
            <br><br><?php echo $aboutMeText ?>
        </article>

    </main>
    <?php include_once('footer.view.php'); ?>
