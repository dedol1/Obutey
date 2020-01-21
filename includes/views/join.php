<?php
require ('../includes/models/register.php');
?>
<div class="container">
    	<div class="row">
    	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default">   
		<div class="panel-body">
        	<h2 class="text-center"> Registration</h2>
            <p class="text-center">Fill all Feild Before clicking SignUp</p>
            <hr class="clean">
        	<form  method="post" class="validator-form" action="#create">
                            
                            <div class="form-group">
                            	<div class="row">
                                	<div class="col-lg-6">
                                    	<label class="control-label ">First name</label>
                         <input type="text" class="form-control" name="firstNames" placeholder="First Name" value="" required/>
						 <i class="fa  panel-icon form-control-feedback"></i>
                                    </div>
                                    <div class="col-lg-6">
                                    	<label class="control-label ">Last name</label>
                                        <input type="text" class="form-control" name="lastNames" placeholder="Last Name" value="" required/>
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email address</label>
                                <input type="email" placeholder="Email Address" class="form-control" name="email" value="" required/>
                            <i class="fa  panel-icon form-control-feedback"></i>
							</div>
                            <div class="form-group">
                                <label class="control-label">Whatsapp </label> <i class="fa fa-whatsapp"></i>
                                <input type="number" placeholder="Eg: 023456789" class="form-control" name="whatsapp" value="" required/>
                            
							</div>
				
                            

                            <div class="form-group">
                            	<div class="row">
                                	<div class="col-lg-6">
                                    <label class="control-label ">Username</label>
                                <input type="text" placeholder="UserName" class="form-control" name="userNames" value="" required/>
                                    </div>
                                    <div class="col-lg-6">
                                    	<label class="control-label">Phone No</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Eg: 02401234567" value="" required/>
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                </div>
                            </div>
    
                            
                            
                            <div class="form-group">
                            	<div class="row">
                                	<div class="col-lg-6">
                                    	<label class="control-label">Password</label>
                                		<input type="password" placeholder="Password" class="form-control" name="password" value="" />
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                    <div class="col-lg-6">
                                    	<label class="control-label">Confirm password</label>
                                        <input type="password" placeholder="Confirm Password" class="form-control" name="confirmPassword" value="" />
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                </div>
                            </div>
                           

                           

                            <!--div class="form-group">
 <label class="control-label form-grey" style="font-weight:bold;" id="captchaOperation"></label>
                                <input type="text" class="form-control" name="captcha" />
								<i class="fa fa-gear panel-icon form-control-feedback"></i>
                            </div-->
							<?php
							if(isset($_SESSION['ref'])){
							echo '<div class="form-group">
                                <label class="control-label">Referer</label>
                                <input type="text" class="form-control" name="ref" value="'.$_SESSION['ref'].'" readonly="readonly"/>
							</div>';
							} else {
                echo '<div class="form-group">
                                <label class="control-label">Referer`s ID</label>
                                <input type="text" class="form-control" name="ref" placeholder="Enter your referers username if you have any" value="" />
              </div>';

              }
							?>

                                                        
                            <br />
                            <h3>Payment Method</h3>
                            <div class="form-group">
                            	<div class="row">
                                	<div class="col-lg-6">
                                    <label class="control-label ">Payment Option</label>
                                    <select class="form-control" name="pay_type" required>
                                            <option value="1">MTN Mobile Money (For MTN Users)</option>
                                            <option value="2">Vodafone Cash (For Vodafone Users) </option>
                                            <option value="3">AIrtelTigo Cash (For AirtelTigo Users</option>
                                            
                                    </select>
                                    </div>
                                    <div class="col-lg-6">
                                    	<label class="control-label">Account Type</label>
                                        <select class="form-control" name="acc_type" required>
                                            <option value="user">User</option>
                                            <option value="merchant">Merchant</option>
                                        </select>
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                </div>
                            </div>
    
                            
                            
                            <div class="form-group">
                            	<div class="row">
                                	<div class="col-lg-6">
                                    	<label class="control-label">Registered Name</label>
                                		<input type="text" placeholder="Registered Name" class="form-control" name="reg_name" value="" />
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                    <div class="col-lg-6">
                                    	<label class="control-label">Registered Number</label>
                                        <input type="text" placeholder="Eg: 02401234567" class="form-control" name="reg_num" value="" />
                                    <i class="fa  panel-icon form-control-feedback"></i>
									</div>
                                </div>
                            </div>

                            <br/>
                            <div class="form-group">
                                     <label class="cr-styled">
                                    <input type="checkbox" required>
                                    <i class="fa"></i> 
                                </label>
                                I have read and I agree with all <a class="" data-toggle="modal" data-target="#PrivillagesModal">
                                Terms &amp; Conditions</a>
                                </div>

                               
                           
                              
                            <hr class="dotted">
                            
                            <div class="form-group">
							
								<input type="submit" class="btn btn-primary btn-block" name="signup" value="Sign up"/>
                            </div>
							<!--button type="button" class="btn btn-danger btn-block" id="resetBtn">
							<i class="fa"> </i>Clear form</button-->
                            </form>
            <hr>
            
            <p class="text-center text-gray">Already have account</p>
            <a href="login" class="btn btn-default btn-block">Sign In</a>
        </div>
        </div>
    </div>
	<br/>
	<br/>
	</div></div></div>
    <!-- </div></div></div>-->
</div>


 <div class="modal fade" id="PrivillagesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Terms And Conditions</h4>
                                        </div>
                                        <div class="modal-body">
                                            Area of high profit investments always implies having certain risks involved. 
However, ourcomunity.net has developed a uniquemulti-level insuring system where 7% of all deposited funds are transferred to few large insurance companies. This amount is deducted automatically from our profits and does not affect profits of our investors. The only type of risk that should be taken into account is force majeure that is not linked with brokers' activity, namely natural disasters (flood, fire, hurricane etc.). Users involved in harmful activity against  ourcomunity.net can get their accounts blocked with no prior notification. Invested money is to be returned to their owners with exception of charges for compensation of damage caused to ourcomunuty.net. Account blockage is a rare situation and it is a radical measure used in exceptional cases.

All money invested by clients of ourcomunity.net is insured.
                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 