<?php
session_start();
session_destroy();
$viewName = $_GET['url'];
echo 'hey '.$viewName;


//parts::show("head");

 ?>
