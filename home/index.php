<?php
session_start();
$viewName = $_GET['url'];
//echo 'hey '.$viewName. ';; ';

if (file_exists('../includes/views/'.$viewName.'.php'))
      {
        if ($viewName == "model404" or $viewName == "index") {
         //include('./includes/model.php');
         echo'<!DOCTYPE html>
         <html lang="en">';
         
         require_once("../includes/parts/home-head.php");
         echo '<body>';
         
         require_once("../includes/parts/home-header.php");
         require_once("../includes/views/$viewName.php");
         
         require_once("../includes/parts/footer.php");
         
         require_once("../includes/parts/home-scripts.php");
         
         echo '</body></html>';
         //parts::show("payload");
         //print_r($viewName);

        } else if ($viewName == "join" or $viewName == "register" or $viewName == "recover"  or $viewName == "setup" or $viewName == "logout"  or $viewName == "login") {
          
          echo'<!DOCTYPE html>
          <html lang="en">';
          parts::show("head");
          echo '<body>';
          // parts::show("home-header");
          require_once("./includes/views/$viewName.php");
          parts::show("footer");
          parts::show("scripts");
          
          echo '</body></html>';
          //parts::show("payload");
          //print_r($viewName);

        } else {

          echo'<!DOCTYPE html>
          <html lang="en">';
          
          // self::show("head");
          require_once("./includes/parts/head.php");
          echo '<body><div id="wrapper">
          

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          ';
          
          
          // self::show("header");
          require_once("./includes/parts/header.php");
          // self::show("sidebar");
          require_once("./includes/parts/sidebar.php");

          echo'</nav>';
          require_once("./includes/views/$viewName.php");
          //parts::show("sidewidget");
          echo' </div>
          <!-- /#wrapper -->';
          // self::show("footer");
          // self::show("scripts");
          require_once("./includes/parts/footer.php");
          require_once("./includes/parts/scripts.php");

          echo'</body></html>';
          //parts::show("payload");
        }
        

      } else {
        echo "404 Created!";
      require_once("./includes/views/model404.php");
      die();

      } 

//parts::show("head");

 ?>
