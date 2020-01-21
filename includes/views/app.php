<?php
// $ref_points = 1;
//     $approvals = 2;
//     $boom_points = 3;
//     $no_refs = 4;
//     $base_url = "localhost/boomers";
//     $username = "ikelvin";

// $user_info = data::users_tb()[0];

// require ('../includes/models/dashboard.php');
?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Recharge</h3>
				<div class="d-flex justify-content-end social_icon">
					<!--<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>-->
					<span>
						<!-- <i class="fab fa-twitter-square"></i> -->
						<img class="img img-responsive" src="../static/vendorhome/images/ecg_logo.png"/>
					</span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<!-- <h4>Enter your Meter Number </h4>
					<div class="input-group form-group">

						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Meter Number">

					</div>

					<h4>Enter your Pin Code </h4>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div> -->

					<div class="">
						<h4> Select Payment Operator </h4>
            <select class="input-group form-group form-control" data-live-search="true" required="required">
                <option disabled="" selected="" hidden="" data-tokens="Select Operator">Select Operator</option>
                <option data-tokens="Airtel">MTN Mobile Money</option>
                <option data-tokens="Aircel">Vodafone Cash</option>
                <option data-tokens="BSNL">AirtelTigo Cash</option>
            </select>
         </div>

         <h4>Enter Registerd Number</h4>
				 <div class="input-group form-group">
					  <div class="input-group-prepend">
      				<span class="input-group-text"><i class="fas fa-phone fa-flip-horizontal"></i></span>
         		</div>
      			<input type="tel" pattern="^(?:0|\024)" class="form-control" placeholder="Registered Number" maxlength="10">
    			</div>

					<h4>Enter Recharge Amount</h4>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-coins"></i></span>
						</div>
						<input type="Number" min="5" class="form-control" placeholder="Amount">
					</div>

					<!--<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>-->
					<div class="form-group">
						<input type="submit" value="RECHARGE" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
