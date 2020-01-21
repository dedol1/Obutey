<?php 
    // echo '<script>alert("hey");</script>';
   // include 'includes/classes/function.php';
    if(isset($_GET['ref'])){
        $ffid = $_GET['ref'];
        
        if(DB::count("SELECT `username` FROM `users_tb` WHERE `username`='$ffid'") > 0){
        $reff = DB::fetch("SELECT `username` FROM `users_tb` WHERE `username`='$ffid'")[0];
        $_SESSION['ref'] = $reff['username'];
        
        }
    }

            // echo '<div class="container">
            //     <div class="row">
            //     <div class="col-lg-6 col-lg-offset-3">';
    if(isset($_POST['signup'])) {
        // echo '<script>alert("hey");</script>';
        $raw_phone =  site::fp_clear($_POST['phone']);
        $uphone	= $raw_phone;
        $fname = site::fp_clear($_POST['firstNames']);
        $lname = site::fp_clear($_POST['lastNames']);
        $uname = site::fp_clear($_POST['userNames']);
        $uemail = site::fp_clear($_POST['email']);
        $upass = site::fp_hash($_POST['password']);
        $uwhatsapp = site::fp_clear($_POST['whatsapp']);

        $upay_type = site::fp_clear($_POST['pay_type']);
        $uacc_type = site::fp_clear($_POST['acc_type']);
        $ureg_name = site::fp_clear($_POST['reg_name']);
        $ureg_num = site::fp_clear($_POST['reg_num']);
            
        $rgd = date('Y/m/d');
        $refname = site::fp_clear($_POST['ref']);
        
        
        if(isset($_SESSION['ref'])){
            $refname = $_SESSION['ref'];
        }
        else if ($refname !=""){
            $refname = $refname;
        }
        else {
            $refname = "";
            // $refname = 'ikelvin';
        }

        if($refname !=""){
            $referer = DB::fetch("SELECT `id` FROM `users_tb` WHERE `username`='$refname'")[0]['id'];
        }
        else {
            $referer = 1;
        }
        
        $error = '';
        
        // $u_id = DB::fetch("SELECT `id` FROM `users_tb` WHERE `username`='$uname'")[0]['id'];
        // print_r ($u_id);
        // echo '<script>alert("whey");</script>';
        $error .= (DB::count("SELECT `email` FROM `users_tb` WHERE `email` = '$uemail'") > 0) ? '<li> Email Already Exists!   </li>' : '' ;
        
        $error .= (DB::count("SELECT `username` FROM `users_tb` WHERE `username`='$uname'") > 0) ? '<li> UserName Already Exists!   </li>' : '' ;
        
        $error .= (DB::count("SELECT `phone` FROM `login_tb` WHERE `phone`='$uphone'") > 0) ? '<li> Phone Already Exists!   </li>' : '' ;
       // echo '<script>alert("whey '.$error.'");</script>';
        
        if(empty($fname) || empty($lname) || empty($uname) || empty($uphone) || empty($uemail) || empty($uwhatsapp)){
            $error .='<li>All Fields are Required!</li>';
        }
        if(mb_strlen($fname) > 15){
            $error .='<li>First Name Cannot be more than 15 Characters!</li>';
        }
        if(mb_strlen($uname) > 15){
            $error .='<li>UserName Cannot be more than 15 Characters!</li>';
        }
        if($_POST['password'] != $_POST['confirmPassword']){
        $error .='<li>Password do not Match!</li>';
        }
        if(mb_strlen($_POST['phone']) > 10 || mb_strlen($_POST['phone']) < 9){
            $error .='<li>Phone number Min. 8 Max. 14 Characters eg: 023456789</li>';
        }
        if(mb_strlen($_POST['whatsapp']) > 10 || mb_strlen($_POST['whatsapp']) < 9){
            $error .='<li>Phone number Min. 8 Max. 14 Characters eg: 023456789</li>';
        }
       // echo '<script>alert("ohey '.$error.'");</script>';
        if(empty($error)){
           // echo '<script>alert("ehey");</script>';
            DB::query("INSERT INTO `users_tb` (`email`,`username`,`firstname`,`surname`,`whatsapp`) VALUES('$uemail','$uname','$fname','$lname','$uwhatsapp')") or die(mysqli_error($pdo));

            $u_id = DB::fetch("SELECT `id` FROM `users_tb` WHERE `username`='$uname'")[0]['id'];

            DB::query("INSERT INTO `login_tb` (`phone`,`username`,`password`, `user_id`) VALUES('$uphone','$uname','$upass', '$u_id')") or die(mysqli_error($pdo));

            $r_state = DB::query("SELECT * FROM `referal_tb` WHERE `referee` = '$referer' AND `referal_tb`.`status` = 'settled'");
            if($r_state->rowCount()){
                $rp_state = DB::query("SELECT * FROM `ref_points_tb` WHERE `ref_points_tb`.`user_id` = '$referer' AND `ref_points_tb`.`points` > 0");
                if($rp_state->rowCount()){
                    DB::query("UPDATE `ref_points_tb` SET `points` = `points`-1 WHERE `ref_points_tb`.`user_id` = '$referer';");
    
                } else {
                    $referer = 1;
                }
            } else {
                $referer = 1;
            }


            DB::query("INSERT INTO `referal_tb` (`referer`, `referee`) VALUES ('$referer', '$u_id');");
            DB::query("INSERT INTO `user_paymethod_tb` (`method_id`, `acc_type`, `user_id`, `reg_name`, `reg_number` ) VALUES ('$upay_type', '$uacc_type', '$u_id', '$ureg_name', '$ureg_num');");
            DB::query("INSERT INTO `ref_points_tb` (`user_id`) VALUES ('$u_id');");
            DB::query("INSERT INTO `boom_ponits` (`user_id`) VALUES ('$u_id');");


            if(1){
                echo '<script>alert("Registration was Succesful, Please Proceed to Login");window.location.assign("login");</script>';
            }
        } else {
            echo '<script>alert("ERROR: '.$error.'");</script>';
        }
        
    
        // echo '</div>
        //         </div>
        //         </div>';
    }

?>