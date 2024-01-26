<!-- 
This navigation view file is the template for the future webpages in AdvancedWebDevelopment class site
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

 

<!---Navigation Bar------------------------------------------------->
<hr width="100%" align="left">

    <nav>
        <ul>
        <?php foreach ($navigationArray as $nav){ ?>
            <li> <a href="<?php echo $nav["src"]?>"> <?php echo $nav["title"]  ?></a></li>
            <?php }  ?>
        </ul>

    </nav>
    <hr><br><br>
    
<!------------------------------------------------------------------>
