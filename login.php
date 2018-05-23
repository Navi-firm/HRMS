<?php
include 'Includes/Core/init.php';
include 'assets/includes/header.php';
?>
<br>

<div class="col-md-8 col-md-offset-2" >
	<?php
	//check to see if logged in
	if(logged_in()){
		echo "<div class='alert alert-info fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
	<strong>NOTICE!</strong> You are currently logged in. Not you try <strong><a href='Sign/Logout.php'> Signing In</a></strong></div>";
	}else{
	?>
	<div class="text-center top-margin" >
		<?php include 'processes/login.php'; ?>
		<p class="">
		</p>
	</div>
</div>

<div class="account-container stacked">

	<div class="content clearfix">
		
		<?php include 'Sign/Login.php'; ?>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<?php } ?>

<!-- Text Under Box -->
<div class="login-extra">
	Don't have an account? <a href="register.php">Sign Up</a><br/>
	Remind <a href="forgot_pass.php">Password</a>
</div> <!-- /login-extra -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/libs/jquery-1.9.1.min.js"></script>
<script src="assets/js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="assets/js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/libs/jquery-1.11.3.mini.js"></script>
<script src="assets/js/demo/signin.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#feedback').load('processes/username-check.php').show();

		$('#username').keyup(function(){
			$.post('processes/username-check.php', {username: login.username.value},
			function(result) {
				$('#feedback').html(result).show();
			});
		});
	});
</script>

</body>
</html>
