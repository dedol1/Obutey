<?php
// $ref_points = 1;
//     $approvals = 2;
//     $boom_points = 3;
//     $no_refs = 4;
//     $base_url = "localhost/boomers";
//     $username = "ikelvin";
// $userid = 2;

// $base_url = "http://192.168.100.2/boomers";
@$refpage_url = $_SERVER['HTTP_REFERER'];
$base_url = "http://localhost/obutey";
if($_SESSION){
$userid =  $_SESSION['userid'];
$superpass_id = $_SESSION['id'];
// echo $userid;

}

  error_reporting(E_ALL);
  
  
?>
 