<!-- Navigation -->
<header>
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">Online Recharge</a></h1>
			</div>
		<!--//logo-->
		  <div class="w3layouts-login">
				<a data-toggle="modal" data-target="#myModal" href="#"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
			</div>    
				<div class="clearfix"></div>
    <!--Login modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            Online Recharge</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 extra-w3layouts" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                    <li><a href="#Registration" data-toggle="tab">Register</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Login">
                                        <form  class="form-horizontal" action="#" method="get">
                                        <div class="form-group">
                                            <label for="email" class=" control-label">
                                                Username / Meter No.</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="login_id" placeholder="Username / Meter No." required="required" name="login_id"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class=" control-label">
                                                PinCode</label>
                                            <div class="">
                                                <input type="password" class="form-control" id="pin" placeholder="PIN" required="required" name="pinCode"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="submit btn btn-primary btn-sm">
                                                    Login</button>
                                                <a href="javascript:;" class="agileits-forgot">Forgot your password?</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="Registration">
                                        <form  class="form-horizontal" action="#" method="get">
                                        <!-- <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">
                                                Name</label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <select class="form-control">
                                                            <option>Mr.</option>
                                                            <option>Ms.</option>
                                                            <option>Mrs.</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <input type="text" class="form-control" placeholder="Name" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="email" class=" control-label">
                                                Username</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="username" placeholder="Username" required="required" name="username"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile" class="control-label">
                                                Mobile No.</label>
                                            <div class="">
                                                <input type="tel" class="form-control" id="mobile" placeholder="Mobile" required="required" name="mobile"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label">
                                                Meter No.</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="meterNo" placeholder="Meter No." required="required" name="meterNo"/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobile" class="control-label">
                                                Pin Code</label>
                                            <div class="">
                                                <input type="password" class="form-control" id="pinCode" placeholder="Pin Code" name="pinCode" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label">
                                                Confirm Pin Code</label>
                                            <div class="">
                                                <input type="password" class="form-control" id="confirmPinCode" placeholder="Confirm Pin Code" required="required" name="confirmPinCode"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="submit btn btn-primary btn-sm">
                                                    Save & Continue</button>
                                                <button type="reset" class="submit btn btn-default btn-sm">
                                                    Cancel</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="OR" >
                                    </div>
                            </div>
                            <div class="col-md-4 extra-agileits">
                                <div class="row text-center sign-with">
                                    <div class="col-md-12">
                                        <h3 class="other-nw">
                                            Happy To Serve You</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="">
                                           <img class="img img-responsive" src="../static/vendorhome/images/ecg_logo.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--//Login modal-->
    </div>
</header>
