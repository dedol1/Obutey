<?php
session_start();
$viewName = $_GET['url'];
if(isset($_GET['ref'])){
$ref = $_GET['ref'];
}

if ($viewName == 'logout'){
session_destroy();
header('location: home/');
}


$authpath = ($viewName == "join" && isset($_GET['ref'])) ? "" : "auth-" ;

require ('../includes/classes/DB.php');
require ('../includes/classes/function.php');
require ('../includes/classes/data.php');

// echo 'hey '.$viewName;

// echo ':: hey '.$ref;

if (file_exists('../includes/views/'.$viewName.'.php'))


      {
          //include('./includes/model.php');
           
          echo'<!DOCTYPE html>
          <html lang="en">';
          require_once("../includes/parts/".$authpath."head.php");

          echo '<body>';
          // parts::show("home-header");
          require_once("../includes/views/$viewName.php");
          require_once("../includes/parts/footer.php");

          require_once("../includes/parts/".$authpath."scripts.php");
          
          echo '</body></html>';
          //parts::show("payload");
          //print_r($viewName);

        

      } else {
        // echo "404 Created!";
      require_once("../includes/views/model404.php");
      die();

      } 

//parts::show("head");

 ?>
