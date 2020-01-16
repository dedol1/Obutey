<?php
require ('../includes/models/admin-login.php');
?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form name="login_form" role="form" method="post" action="" autocomplete="on" >
                            
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="login_id" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" checked="true" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login_form_submit" class="btn btn-lg btn-primary btn-block" value="Login">

                            
                        </form>

                        <hr>
            <p class="text-center text-gray">Forgot Password?</p>
            <a href="recover.php" class="btn btn-default btn-block">Recover Password</a>
<br/>
            <p class="text-center text-gray">Don't have an account?</p>
            <a href="join" class="btn btn-default btn-block">Sign Up / Join</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
