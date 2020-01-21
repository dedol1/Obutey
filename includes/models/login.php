<?php 

    if(isset($_SESSION['id'])){
        header("location: pages/");
    }


    if(isset($_POST['login_form_submit']) == true){


        $phone= site::fp_clean($_POST['login_id']);
        $pass= site::fp_hash($_POST['password']);
        // $username = $phone;

        $query = "SELECT * FROM `login_tb` WHERE `phone` = '$phone' and `password` = '$pass'";

        if(DB::count($query) > 0){
            $user_res = DB::fetch($query)[0];
            $_SESSION['userid'] = $user_res['user_id'];
            $_SESSION['username'] = $user_res['username'];
            $_SESSION['id'] = session_id();
            $login_type = "user";
            $_SESSION['login_type'] = $login_type;
            header("location: pages/");
        } else {
            echo '<script> alert("Decrypting account was not success, This implies your login credential is incorrrect");window.location.assign("login")</script>';
        }
    }



?>