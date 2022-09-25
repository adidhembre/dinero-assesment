<?php
include __DIR__.'/layout/header.php';

echo '
<link rel="stylesheet" href="/assets/css/signup.css">
<div class="signup-form">
    <form id="signupForm">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>                    
				</div>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>                    
				</div>
				<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label><b>Role</b></label><br/>
			<label class="form-check-label"><input type="radio" id="recruiter" name="role" value="0"> Recruiter</label><br/>
			<label class="form-check-label"><input type="radio" id="applicant" name="role" value="1" checked="checked"> Applicant</label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" id="signupFormSubmit">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="/login">Login here</a></div>
</div>
<script src="/assets/js/signup.js"></script>
';

include __DIR__.'/layout/footer.php';