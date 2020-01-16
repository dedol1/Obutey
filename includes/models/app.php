<?php 
$poweruser = DB::fetch("SELECT * FROM `acc_info_tb` WHERE `id`='$userid'")[0];

$requests_no = DB::count("SELECT * FROM `requests_tb` WHERE `from_id` = '$userid' AND `status` = 'issued' OR `to_id` = '$userid' AND `status` = 'confirmed'");
if ($requests_no > 0) {
$requests_tb = DB::fetch("SELECT * FROM `requests_tb` WHERE `from_id` = '$userid' AND `status` = 'issued' OR `to_id` = '$userid' AND `status` = 'confirmed'");
}

?>

<?php
//echo '<script> alert("hey '.print_r($requests_tb).'")</script>';


?>
