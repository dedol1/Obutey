<?php  
session_start();
$userid = $_SESSION['userid'];

require ('../classes/DB.php');
require ('../classes/function.php');
require ('../classes/data.php');
require ('../classes/img.php');
require ('../model.php');

 if(isset($_POST["boomer_detail"]))  {
    // print_r($_POST);
 $boomer_id = $_POST['boomer_detail'];
 //echo $boomer_id;

   
    $BoomWallet =  DB::fetch("SELECT * FROM `user_paymethod_tb` WHERE `user_id`='$boomer_id'")[0];

    if($BoomWallet['method_id'] == 1) {
        $BoomWallet['method_id'] = "MTN Mobile Money";
    } elseif($BoomWallet['method_id'] == 2) {
        $BoomWallet['method_id'] = "Vodafone Cash";
    } elseif($BoomWallet['method_id'] == 3) {
        $BoomWallet['method_id'] = "AirtelTigo Cash";
    } else {
        $BoomWallet['method_id'] = $BoomWallet['method_id'];
    }
       $output = "  
       <tr>
       <th>Registered Name</th>
         <td>".$BoomWallet['reg_name']."</td>
       </tr>
       <tr>
       <th>Registered Number</th>
         <td>".$BoomWallet['reg_number']."</td>
       </tr>
       <tr>
       <th>Payment Method</th>
         <td>".$BoomWallet['method_id']."</td>
       </tr>
       <tr>
       <th>Account Type</th>
         <td>".$BoomWallet['acc_type']."</td>
       </tr>
                ";  

      
      echo $output;  
 }  

 
if(isset($_POST['submit_proof'])) {

  img::upload('fileToUpload');

  echo '<script>alert("heyoo")</script>';
  
// $img1 = img::upload('fileToUpload');
// db_insert($img1, $code);
}


if(isset($_POST["req_detail"]))  {
  // print_r($_POST);
$req_id = $_POST['req_detail'];
//echo $boomer_id;

 
  $BoomReq =  DB::fetch("SELECT * FROM `requests_tb` WHERE `requests_tb`.`id`='$req_id'")[0];
  $output = $BoomReq['proof_img'];
    echo $output;  
}  

// <!-- <form action="" method="post" enctype="multipart/form-data">
//     Select image to upload:
//     <input type="file" name="fileToUpload" id="fileToUpload">
//     <input type="submit" value="Upload Image" name="submit_proof">
// </form> -->

 ?>