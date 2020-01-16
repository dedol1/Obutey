<?php
session_start();
$viewName = $_GET['url'];

require ('../includes/classes/DB.php');
require ('../includes/classes/function.php');
require ('../includes/classes/data.php');
require ('../includes/classes/img.php');
require ('../includes/model.php');

$viewName = ($viewName == "index") ? "dashboard" : $viewName ;
// echo 'hey '.$viewName;

if (file_exists('../includes/views/'.$viewName.'.php'))
      {
        site::fp_checkLogin();
          
         
          echo'<!DOCTYPE html>
          <html lang="en">';
          
          // self::show("head");
          require_once("../includes/parts/head.php");
          echo '<body><div id="wrapper">
          

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          ';
          
          
          // self::show("header");
          require_once("../includes/parts/header.php");
          // self::show("sidebar");
          require_once("../includes/parts/sidebar.php");

          echo'</nav>';
          require_once("../includes/views/$viewName.php");
          ?>
          <div class="modal fade" id="startupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Get Started</h4>
                                        </div> -->
                                        <div class="modal-body">
                                        <div class="row"><div class="col-md-12">
                                        <center>
                                        <img class="img img-fluid img-responsive" src="../static/img/welcome.jpg" /></center>
                                        </div></div>
<h3 class="text-center mt-2">Get Coupons To Shop iphones and Other Fancy Stuffs By Sharing This Opportunity Your Family and Friends. And Get Richer With Every Referal You Make Using Your Referal .</h3>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Extra large modal</button> -->

                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-check-circle text-primary"></i> Get Started</button>
                                            
                                        </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 

                             <!-- <h2 class="heading"><i class="fa fa-square"></i> Modals</h2>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#large-modal">Large modal</button>
							<br> -->
							<br>
							<div id="large-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<!-- <h4 class="modal-title" id="myModalLabel">Large Modal Title</h4> -->
										</div>
										<div class="modal-body center">
                      <div class="row">
                      <div class="col-md-2"><br/><br/><br/>
                          
                        </div>
                        <div class="col-md-6"><br/><br/><br/>
                          <h1 class="heading">Will Be Dropping Soon</h1>
                        </div>
                        <div class="col-md-4">
                          <img class="img img-responsive" src="../static/img/undraw_empty_cart_co35.svg" alt="">
                        </div>
                        
                      </div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
											<!-- <button type="button" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save changes</button> -->
										</div>
									</div>
								</div>
							</div>

          <?php 
          //parts::show("sidewidget");
          echo' </div>
          <!-- /#wrapper -->';
          // self::show("footer");
          // self::show("scripts");
          require_once("../includes/parts/footer.php");
          require_once("../includes/parts/scripts.php");

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
require_once("../includes/models/dashboard-modals.php");
          echo'</body></html>';
          //parts::show("payload");
       
        

      } else {
        // echo "404 Created!";
      require_once("../includes/views/model404.php");
      die();

      } 

//parts::show("head");

 ?>
