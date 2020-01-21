<?php
//collecting currency conversion value
    

    Class data extends DB{
        public static $userid = 2;

        public static function get_data($table, $part, $condition, $sorting = "id ASC"){
//$sorting = $sorting;
            // $condition = 1;
            //global $webcent;
            switch ($part) {
                case 'all':
                    # code...
                    $part = "*";
                    break;
                
                default:
                    # code...
                    $part = $part;
                    break;
            }

            
                if ($sorting == 'count' or $sorting == 'COUNT'){
                    # code...
                    // $part = "(".$part.")";
                    $sql ="SELECT COUNT(*) AS `cnum` FROM $table WHERE $condition";
                    $results = self::query($sql); 
                    $results = $results[0][0];
                   // echo 'he1oo';
                }  else if ($sorting == 1 or $sorting == '1'){
                    # code...
                    
                    $sql ="SELECT $part FROM $table WHERE $condition";
                    $results = self::query($sql);
                    $results = $results[0];
                   // echo 'he3oo <br/>';
                    // print_r($sql);

                } else if ($sorting == 'all' or $sorting == '0'){
                    # code...
                    
                    $sql ="SELECT $part FROM $table WHERE $condition";
                    $results = self::query($sql);
                    $results = $results;
                   // echo 'he2oo';
                    
                } else{
                    # code...
                    // $isorting = $sorting;
                    $sorting = "`id` desc";
                    $sql = "SELECT $part FROM $table WHERE $condition ORDER BY $sorting";
                    $results = self::query($sql); 
                   // echo 'he4oo';
                     
                }
            
                self::logs_tb($sql);
            //$results = self::query($sql); 
            
            return $results;
        }

        public static function users_tb($part = "all", $condition = "user", $sort = '1'){
        
            global $userid;
            $table = "users_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`id` = '$userid'";
                   // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    //echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }
        public static function login_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "login_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`user_id` = '$userid'";
                    // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    // echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }

        public static function referal_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "referal_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`referee` = '$userid'";
                    // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    // echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }

        public static function user_pay($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "user_paymethod_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`user_id` = '$userid'";
                    // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    // echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }

        public static function pay_method_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "pay_method_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`id` = '$method_id'";
                    // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    // echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 

            return $results;
        }

        public static function requests_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "requests_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`to` = '$userid'";
                    //echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    //echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }

        public static function ref_points_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "ref_points_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`user_id` = '$userid'";
                    //echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    //echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }

        public static function img_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "img_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`purpose` = 'img_code'";
                    //echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    //echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }
        
        public static function logs_tb($log = "error"){
        
            //global $webcent;
            $table = "dblogs_tb";
            $sql = "INSERT INTO `dblogs_tb` (`log`, `user_id`) VALUES ('$log', '1');";
           
            
            self::query($sql);
            return 1;
        }

        public static function boom_tb($part = "all", $condition = "user", $sort = '1'){
        
            //global $webcent;
            $table = "img_tb";
            switch ($condition) {
                case 'user':
                    # code...
                    $condition = "`user_id` = '$ser_id'";
                    // echo "<br/> $sort too <br/>";
                    break;
                
                default:
                    # code...
                    $condition = $condition;
                    // echo "</br> $sort - too <br/>";
                    break;
            }
            
            $results = self::get_data($table, $part, $condition, $sort); 
            return $results;
        }
        
}


	

       
?>