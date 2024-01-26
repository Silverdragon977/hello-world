
<!-- 
This header view file is the template for the future webpages in AdvancedWebDevelopment class site
Created on 1/22/23 by Michael Howard
-->
<?php 
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
    
?>

<body>
<div id="wrapper">

    <header id="banner-container">


        <div id="overlay-div">
        <?php  ?>
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pageName ?> </h1><img id="profileImage" src="images/tempPhoto.png"></img>

        </div>

        <img id="banner" src="images/banner.jpg" alt="Banner Image">

    </header>
    <br><br><br><br>