<?php 

    if(isset($_SESSION['id']) && $_SESSION['login_type'] == "admin"){
        header("location: admin/");
    }


    if(isset($_POST['login_form_submit']) == true){


        $username= site::fp_clean($_POST['login_id']);
        $pass= site::fp_hash($_POST['password']);
        // $username = $phone;

        $query = "SELECT * FROM `admin_info_tb` WHERE `username` = '$username' and `pin_code` = '$pass'";

        if(DB::count($query) > 0){
            $admin_res = DB::fetch($query)[0];
            $_SESSION['userid'] = $user_res['id'];
            $_SESSION['username'] = $user_res['username'];
            $_SESSION['id'] = session_id();
            $login_type = "admin";
            $_SESSION['login_type'] = $login_type;
            header("location: admin/");
        } else {
            echo '<script> alert("Decrypting account was not success, This implies your login credential is incorrrect");window.location.assign("login")</script>';
        }
    }



?>