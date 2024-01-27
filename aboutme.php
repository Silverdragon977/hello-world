<?php
//   define("URL_ROOT","http://localhost:3000");
//   define("ABS_ROOT",$_SERVER['DOCUMENT_ROOT']);  // This gives us the Absolute path of the current dir
  //include '../config.php';

  $config = parse_ini_file('config.ini', true);
  $environment = $config['ENVIRONMENT'];
  $URL_BASE = $config[$environment]['URL_BASE'];
  $APP_ROOT = $config[$environment]['APP_ROOT'];
  define("APP_ROOT", dirname(__FILE__));
  define("URL_BASE", $config[$environment]["URL_BASE"]);
  
  //url_base is the url path
  //app_root is the filepath for the server
  







  
  $name="Michael Howard";
  $pageName = "About Me";
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
  
  include_once(APP_ROOT . "/src/BoilerPlate/head.view.php");
  include_once(APP_ROOT . "/src/BoilerPlate/header.view.php");
  include_once(APP_ROOT . "/src/BoilerPlate/navigation.view.php");
  ?>

    <main>
        <article>
            <img id="aboutMeImg" src="<?php echo URL_BASE . "/images/profile.jpg"?>">
            <br><br><?php echo $aboutMeText ?>
        </article>

    </main>
    <?php  include_once(APP_ROOT . "/src/BoilerPlate/footer.view.php"); ?>  

