<?php 
$poweruser = DB::fetch("SELECT * FROM `admin_info_tb` WHERE `id`='$userid'")[0];
$admins_sql="SELECT * FROM `admin_info_tb` WHERE 1";
$recharge_sql="SELECT * FROM `recharge_tb` WHERE 1";
$acc_no_sql="SELECT * FROM `acc_info_tb` WHERE 1";
$priv_level_sql="SELECT `privillage` FROM `admin_info_tb` WHERE `id`='$userid'";

$admin_no = DB::count($admins_sql);
if ($admin_no > 0) {
$admin_tb = DB::fetch($admins_sql);
}


$recharge_no = DB::count($recharge_sql);
if ($recharge_no > 0) {
$recharge_tb = DB::fetch($recharge_sql);
}

$acc_no = DB::count($acc_no_sql);
if ($acc_no > 0) {
    $acc_tb = DB::fetch($acc_no_sql);
}

$priv_level = DB::fetch($priv_level_sql)[0][0];

?>

<?php
//echo '<script> alert("hey '.print_r($requests_tb).'")</script>';


?>
