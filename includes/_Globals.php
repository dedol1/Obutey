<?php
// $ref_points = 1;
//     $approvals = 2;
//     $boom_points = 3;
//     $no_refs = 4;
//     $base_url = "localhost/boomers";
//     $username = "ikelvin";
// $userid = 2;

// $base_url = "http://192.168.100.2/boomers";
$base_url = "http://localhost/obutey";
if($_SESSION){
$userid =  $_SESSION['userid'];
$poweruser = data::users_tb();

$refname = "ikelvin";
// $refname = data::users_tb("username","`username`='$refname'",'count');
$refname = data::users_tb("*","1","count");
$refname = $refname;

$ref_points = data::ref_points_tb("*","1","count");;
$approvals = data::requests_tb("*","1","count");;
$boom_points = data::boom_tb("*","1","count");;
$no_refs = data::referal_tb("*","1","count");;

// $base_url = "localhost/boomers";

$username = "ikelvin";

}

?>