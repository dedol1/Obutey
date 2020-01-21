<?php
// $ref_points = 1;
//     $approvals = 2;
//     $boom_points = 3;
//     $no_refs = 4;
//     $base_url = "localhost/boomers";
//     $username = "ikelvin";

// $user_info = data::users_tb()[0];

require ('../includes/models/dashboard.php');
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Recharges</h1>
                    <?php// echo( "RSR"); print_r($poweruser); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
           
     
                    


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                  
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Account(s)
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Views(s)
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">All</a>
                                        </li>
                                        <li><a href="#">Today</a>
                                        </li>
                                        <li><a href="#">Success</a>
                                        </li>
                                        <li><a href="#">Failed</a>
                                        </li>
                                       <!--  <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                
                                    <div class="table-responsive">
                                        
                                   
                                    <center>A list of Recharges To Meters</center><br/>
                                    <!-- <br/>fqeifgigewfgwefwfdhfhhgfkfy -->
                                        <table class="table table-bordered table-hover table-striped" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>#/Action</th>
                                                    <th>MeterNo./Username</th>
                                                    <th>Date/Time</th>
                                                    <th>Value/Status</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php
                                            
                                            if($recharge_no > 0){
                                                $count = $recharge_no;
                                                $counter = 0;

while($counter < $count){ 

//$referee_id = $recharge_tb[$counter]['referee'];
// print_r($referee_id);
$recharge_id = $recharge_tb[$counter]['id'];
$recharge_status = $recharge_tb[$counter]['status'];
$recharge_date = $recharge_tb[$counter]['req_date'];
$recharge_user = $recharge_tb[$counter]['username'];
$recharge_meter = $recharge_tb[$counter]['meter_no'];




    ?>
                                                <tr>
                                                    <td><?= $counter+1 ?>/
                                                    
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i>&nbsp;&nbsp; Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="approve_data" id="<?= $boomer_id ?>" req= "<?= $recharge_id ?>"><i class="fa fa-lock"></i>&nbsp;&nbsp; Approve</a>
                                    
                                    </li>
                                       
                                        <li><a href="https://wa.me/<?= $boomer_whatsapp ?>/"><i class="fa fa-whatsapp"></i>&nbsp;&nbsp; Contact</a></li>
                                        <li><a href="" data-toggle="modal" data-target="#RequestReportModal" data-whatever="@getbootstrap"><i class="fa fa-times"></i>&nbsp;&nbsp; Report</a></li>
                                        
                                    </ul>
                                </div>

                             
                                </td>
                                                   
                                                    <td><?= $recharge_meter.' / '.$recharge_user.' <br/><a class="view_data" id="'.$recharge_id.'" paydir = "1"><i class="fa fa-fw fa-money"></i> Details</a>'; ?></td>
                                                     <td><?= $recharge_date ?></td>
                                                    <td>1 Set - <?= $recharge_status ?></td>
                                                </tr>

<?php
$counter++; }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan = "4">There No Recharges Currently Present</td>
                                                </tr>
                                                <?php
                                            }
                                            ?>

                                               
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                               
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Admins
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <div class="row">
                <div class="col-lg-12 col-md-6 table-responsive">
                    
                                        <table id="" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                   
                                                    <th>Admin</th>
                                                                       
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=1;
                                                // $reffer_id = DB::fetch("SELECT `referer` FROM `referal_tb` WHERE `referee`='$userid'")[0][0];

                                              
                                                //print_r($reffer);

                                                $admins = DB::fetch("SELECT `username`, `status` FROM `admin_info_tb` WHERE 1");
                                                $count = count($admins);
                                                $counter = 0;
                                               //echo "hey ";
                                                
                                                

                                                    if(DB::count("SELECT `username`, `status` FROM `admin_info_tb` WHERE 1")>0){

                                                        while($counter < $count){ 

                                                    // $admin_id = $admins[$counter]['id'];
// print_r($referee_id);
                                                $admin_status = $admins[$counter]['status'];

                                                
                                                $admin_uname = $admins[$counter]['username'];
                                              
                                                            ?>
                                                            <tr>
                                                                <td><?= $i ?></td>
                                                                <td>
                                                                 
                                         <span class="fa fa-fw fa-circle text-primary"></span>
                                       

                                        <?= $admin_uname ?> <a href="" class="badge bg-primary"> <i class="fa fa-fw fa-check text-primary"></i> <?= $admin_status ?> </a>

                                        
                                     </td>
                                                                
                                                                
                                                                
                                                                
                                                              
                                                            </tr><?php
                                                           
                                                            $i++;
                                                            $counter++;
                                                        }

                                                    }
                                                    else{
                                                       echo '
                                                        <tr>
                                                            <td colspan="3">There are Admins yet</td>
                                                        </tr> ';


                                                        
                                                    }
                                                ?>
                                            </table>
                        <!-- <a href="#"> -->
                            <div class="panel-footer">
                                <span class="pull-left">You are an Admin</span>
                                <span class="pull-right"><i class="fa fa-check text-primary"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        <!-- </a> -->
                    </div>
                </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->