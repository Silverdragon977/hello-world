<?php
  define("URL_ROOT","http://localhost:3000");
  define("ABS_ROOT",$_SERVER['DOCUMENT_ROOT']); // This gives us the Absolute path of the current dir
  
    


    $name="Michael Howard";
    $pageName = "Homepage";
    $navigationArray = [

        [
            "title" => "Homepage",   
            "src"=> "/hello-world/index.php"
        ], 

        [
            "title" => "Assignments",
            "src"=> "/hello-world/assignments.php"
        ],

        [
            "title" => "About Me",
            "src"=> "/hello-world/aboutme.php"
        ]
    ];

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

    //echo APP_ROOT . "/src/BoilerPlate/head.view.php"; 
    include_once(ABS_ROOT . "/hello-world/src/BoilerPlate/head.view.php");
    include_once(ABS_ROOT . "/hello-world/src/BoilerPlate/header.view.php");
    include_once(ABS_ROOT . "/hello-world/src/BoilerPlate/navigation.view.php");
?>

    <main>
        <article align="left"><?php echo $hw1_Questions['Question1'] ?></article><br><br>
        <article align="left"><?php echo $hw1_Questions['Question2'] ?></article>
    </main>

    <?php include_once(ABS_ROOT . '/hello-world/src/BoilerPlate/footer.view.php'); ?>

