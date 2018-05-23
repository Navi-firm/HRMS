<form action="" method="post">

    <div class="login-social">
        <h3 class="text-center text-warning">Create a Free Client Account</h3>
        <p class="help-block text-center"><i class="icon-briefcase"></i> Looking for Work ?</p>
    </div>

    <div class="login-fields">

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-user"></i> </span>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
        </div><!-- /field -->

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-user"></i> </span>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
        </div>

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i> </span>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        </div> <!-- /field -->

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-user"></i> </span>
            <input type="tel" class="form-control" name="username" id="username" placeholder="Username">
        </div><!-- /field -->

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-phone"></i> </span>
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" pattern="^\d{10}$">
        </div>

        <div class="field input-group">
                <span class="input-group-addon"><i class="icon-key"></i> </span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>

        <div class="field input-group">
            <span class="input-group-addon"><i class="icon-key"></i> </span>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup="checkPasswordMatch();">
            <div class="registrationFormAlert" id="CheckPasswordMatch"></div>
        </div>

        <!-- /field -->
    </div> <!-- /login-fields -->

    <div class="login-actions">
				<span class="login-social">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Yes, I understand and agree to the <a href="Others/Terms"> OpenHRMS Terms of Service. </label>
				</span>
    </div> <!-- .actions -->
    <button class="login-action btn btn-success btn-block">Get Started</button>
</form>