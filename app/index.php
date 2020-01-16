<?php
session_start();
$viewName = $_GET['url'];

require ('../includes/classes/DB.php');
require ('../includes/classes/function.php');
require ('../includes/classes/data.php');
require ('../includes/classes/img.php');
require ('../includes/model.php');

$viewName = ($viewName == "index") ? "store" : $viewName ;
// echo 'hey '.$viewName;

if (file_exists('../includes/views/'.$viewName.'.php'))
      {
        site::fp_checkLogin();
          
         
          echo'<!DOCTYPE html>
          <html lang="en">';
          
          // self::show("head");
          require_once("../includes/parts/store-head.php");
          echo '<body class="animsition">
          ';
          
          require_once("../includes/parts/store-cart.php");
          // self::show("header");
          require_once("../includes/parts/store-header.php");
          // self::show("sidebar");
          require_once("../includes/parts/sidebar.php");

          echo'</nav>';
          require_once("../includes/views/$viewName.php");
          ?>
          <!-- //startup Modal was here -->
          <?php 
          //parts::show("sidewidget");
          // echo' </div>
          // <!-- /#wrapper -->';
          // self::show("footer");
          // self::show("scripts");
          require_once("../includes/parts/footer.php");

          ?>
  <div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
          <?php
          require_once("../includes/parts/store-modals.php");
          require_once("../includes/parts/store-scripts.php");

          // if ($refpage_url == "https://boomersclub.net/login" or $refpage_url =="https://beta.boomersclub.net/login" or $refpage_url == "http://localhost/boomers/login")
            
          if (preg_match('/login/',$refpage_url) == 1){
?>


<script>
          $(document).ready(function(){
            // Show the Modal on load
            $("#startupModal").modal("show");
              
            // Hide the Modal
            
          });
          </script> 

          
<?php
}
// require_once("../includes/models/dashboard-modals.php");
          echo'</body></html>';
          //parts::show("payload");
       
        

      } else {
        // echo "404 Created!";
      require_once("../includes/views/model404.php");
      die();

      } 

//parts::show("head");

 ?>
